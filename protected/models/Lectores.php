<?php

/**
 * This is the model class for table "lectores".
 *
 * The followings are the available columns in table 'lectores':
 * @property integer $id
 * @property string $nombre
 * @property string $documento
 * @property integer $clase_lector_id
 * @property integer $clase_documento_id
 *
 * The followings are the available model relations:
 * @property ClaseDocumento $claseDocumento
 * @property ClaseLector $claseLector
 * @property Multas[] $multases
 * @property Prestamos[] $prestamoses
 */
class Lectores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lectores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, documento, clase_lector_id, clase_documento_id', 'required','message'=>'Sr. Usuario el {attribute} debe ingresarlo'),
			array('documento','unique','attributeName'=>'documento','className'=>'Lectores'),
			array('clase_lector_id, clase_documento_id', 'numerical', 'integerOnly'=>true),
			array('nombre, documento', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, documento, clase_lector_id, clase_documento_id', 'safe', 'on'=>'search'),
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
			'claseDocumento' => array(self::BELONGS_TO, 'ClaseDocumento', 'clase_documento_id'),
			'claseLector' => array(self::BELONGS_TO, 'ClaseLector', 'clase_lector_id'),
			'multases' => array(self::MANY_MANY, 'Multas', 'lectores_has_multas(lectores_idl, multas_id)'),
			'prestamoses' => array(self::HAS_MANY, 'Prestamos', 'lectores_idl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'documento' => 'Documento',
			'clase_lector_id' => 'Clase Lector',
			'clase_documento_id' => 'Clase Documento',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('documento',$this->documento,true);
		$criteria->compare('clase_lector_id',$this->clase_lector_id);
		$criteria->compare('clase_documento_id',$this->clase_documento_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lectores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
