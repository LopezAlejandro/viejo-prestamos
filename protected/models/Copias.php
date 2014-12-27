<?php

class Copias extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'copias';
	}

	public function rules()
	{
		return array(
			array('estado_id, libros_id, nro_copia', 'required'),
			array('estado_id, libros_id', 'numerical', 'integerOnly'=>true),
			array('nro_copia', 'length', 'max'=>45),
			array('id, estado_id, libros_id, nro_copia', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'estado' => array(self::BELONGS_TO, 'Estado', 'estado_id'),
			'libros' => array(self::BELONGS_TO, 'Libros', 'libros_id'),
			'prestamoses' => array(self::HAS_MANY, 'Prestamos', 'copias_id'),
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
			'estado_id' => Yii::t('app', 'Estado'),
			'libros_id' => Yii::t('app', 'Libros'),
			'nro_copia' => Yii::t('app', 'Nro Copia'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('estado_id',$this->estado_id);

		$criteria->compare('libros_id',$this->libros_id);

		$criteria->compare('nro_copia',$this->nro_copia,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
