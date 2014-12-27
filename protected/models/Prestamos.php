<?php

/**
 * This is the model class for table "prestamos".
 *
 * The followings are the available columns in table 'prestamos':
 * @property integer $id
 * @property integer $extension
 * @property string $fecha_devolucion
 * @property integer $lectores_idl
 * @property integer $copias_id
 *
 * The followings are the available model relations:
 * @property Copias $copias
 * @property Lectores $lectoresIdl
 * @property Multas[] $multases
 */
class Prestamos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prestamos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_devolucion, lectores_idl, copias_id', 'required'),
			array('extension, lectores_idl, copias_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, extension, fecha_devolucion, lectores_idl, copias_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'copias' => array(self::BELONGS_TO, 'Copias', 'copias_id'),
			'lectoresIdl' => array(self::BELONGS_TO, 'Lectores', 'lectores_idl'),
			'multases' => array(self::MANY_MANY, 'Multas', 'prestamos_has_multas(prestamos_id, multas_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'extension' => 'Extension',
			'fecha_devolucion' => 'Fecha Devolucion',
			'lectores_idl' => 'Lectores Idl',
			'copias_id' => 'Copias',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('extension',$this->extension);
		$criteria->compare('fecha_devolucion',$this->fecha_devolucion,true);
		$criteria->compare('lectores_idl',$this->lectores_idl);
		$criteria->compare('copias_id',$this->copias_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Prestamos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
