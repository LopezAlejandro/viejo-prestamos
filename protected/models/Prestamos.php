<?php

class Prestamos extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'prestamos';
	}

	public function rules()
	{
		return array(
			array('fecha_devolucion, lectores_idl, copias_id', 'required'),
			array('extension, lectores_idl, copias_id', 'numerical', 'integerOnly'=>true),
			array('id, extension, fecha_devolucion, lectores_idl, copias_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'copias' => array(self::BELONGS_TO, 'Copias', 'copias_id'),
			'lectoresIdl' => array(self::BELONGS_TO, 'Lectores', 'lectores_idl'),
			'multases' => array(self::MANY_MANY, 'Multas', 'prestamos_has_multas(prestamos_id, multas_id)'),
		);
	}

	public function behaviors()
	{
		return array('CAdvancedArBehavior',
				array('class' => 'ext.CAdvancedArBehavior')
				);
	}

	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('app', 'ID'),
			'extension' => Yii::t('app', 'Extension'),
			'fecha_devolucion' => Yii::t('app', 'Fecha Devolucion'),
			'lectores_idl' => Yii::t('app', 'Lectores Idl'),
			'copias_id' => Yii::t('app', 'Copias'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('extension',$this->extension);

		$criteria->compare('fecha_devolucion',$this->fecha_devolucion,true);

		$criteria->compare('lectores_idl',$this->lectores_idl);

		$criteria->compare('copias_id',$this->copias_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
