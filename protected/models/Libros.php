<?php

/**
 * This is the model class for table "libros".
 *
 * The followings are the available columns in table 'libros':
 * @property integer $id
 * @property string $titulo
 * @property string $editorial
 * @property integer $ano
 * @property integer $tipo_libro_id
 *
 * The followings are the available model relations:
 * @property Copias[] $copiases
 * @property TipoLibro $tipoLibro
 * @property Autor[] $autors
 */
class Libros extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'libros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ano,titulo,tipo_libro_id', 'required'),
			array('tipo_libro_id', 'numerical', 'integerOnly'=>true),
			array('ano','numerical',
					'integerOnly'=>true,
					'min'=>1600,
					'max'=>2200,
					'tooSmall'=>'El año es muy pequeño',
					'tooBig'=>'El año es demasiado grande'),
			array('titulo, editorial', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, titulo, editorial, ano, tipo_libro_id', 'safe', 'on'=>'search'),
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
			'copiases' => array(self::HAS_MANY, 'Copias', 'libros_id'),
			'tipoLibro' => array(self::BELONGS_TO, 'TipoLibro', 'tipo_libro_id'),
			'autors' => array(self::MANY_MANY, 'Autor', 'libros_has_autor(libros_id, autor_id)'),
		);
	}

	public function behaviors()
	{
	    return array(
		    'CSaveRelationsBehavior' => array(
			    'class' => 'CSaveRelationsBehavior',
			    'relations' => array(
				'autors'=>array("message"=>"Please, check the autores")
			    )
		    )
	    );
	}



	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'titulo' => 'Titulo',
			'editorial' => 'Editorial',
			'ano' => 'Año',
			'tipo_libro_id' => 'Tipo Libro',
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
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('editorial',$this->editorial,true);
		$criteria->compare('ano',$this->ano);
		$criteria->compare('tipo_libro_id',$this->tipo_libro_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


    public function addBook() 
		{
    	    $this->addRelatedRecord('Autor',new libros,true);
    	}




	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Libros the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
