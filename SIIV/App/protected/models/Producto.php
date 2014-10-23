<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $idProducto
 * @property string $nombre
 * @property string $descripcion
 * @property string $tipo
 * @property string $modelo
 * @property string $marca
 * @property string $año
 * @property integer $activo
 * @property string $fechaAlta
 * @property string $idUsuario
 * @property integer $idFamilia
 *
 * The followings are the available model relations:
 * @property Familia $idFamilia0
 * @property Stock[] $stocks
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('activo, idFamilia', 'numerical', 'integerOnly'=>true),
			array('nombre, descripcion, tipo, modelo, marca, año, idUsuario', 'length', 'max'=>45),
			array('fechaAlta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProducto, nombre, descripcion, tipo, modelo, marca, año, activo, fechaAlta, idUsuario, idFamilia', 'safe', 'on'=>'search'),
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
			'idFamilia0' => array(self::BELONGS_TO, 'Familia', 'idFamilia'),
			'stocks' => array(self::HAS_MANY, 'Stock', 'idProducto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProducto' => 'Id Producto',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'tipo' => 'Tipo',
			'modelo' => 'Modelo',
			'marca' => 'Marca',
			'año' => 'Año',
			'activo' => 'Activo',
			'fechaAlta' => 'Fecha Alta',
			'idUsuario' => 'Id Usuario',
			'idFamilia' => 'Id Familia',
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

		$criteria->compare('idProducto',$this->idProducto);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('año',$this->año,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('fechaAlta',$this->fechaAlta,true);
		$criteria->compare('idUsuario',$this->idUsuario,true);
		$criteria->compare('idFamilia',$this->idFamilia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
