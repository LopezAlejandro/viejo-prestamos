<?php

class Multas extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'multas';
	}

	public function rules()
	{
		return array(
			array('fin_multa', 'required'),
			array('activa', 'numerical', 'integerOnly'=>true),
			array('id, fin_multa, activa', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'lectores' => array(self::MANY_MANY, 'Lectores', 'lectores_has_multas(multas_id, lectores_idl)'),
			'prestamoses' => array(self::MANY_MANY, 'Prestamos', 'prestamos_has_multas(multas_id, prestamos_id)'),
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
			'fin_multa' => Yii::t('app', 'Fin Multa'),
			'activa' => Yii::t('app', 'Activa'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('fin_multa',$this->fin_multa,true);

		$criteria->compare('activa',$this->activa);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
