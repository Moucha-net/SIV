<?php

/**
 * This is the model class for table "stock".
 *
 * The followings are the available columns in table 'stock':
 * @property integer $idStock
 * @property integer $idProducto
 * @property integer $idAlmacen
 * @property integer $cantidadProducto
 * @property integer $productoMin
 * @property string $fechaAlta
 * @property string $usuarioCreacion
 *
 * The followings are the available model relations:
 * @property Entrada[] $entradas
 * @property Salida[] $salidas
 * @property Producto $idProducto0
 * @property Almacen $idAlmacen0
 */
class Stock extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idProducto, idAlmacen, cantidadProducto, productoMin', 'numerical', 'integerOnly'=>true),
			array('usuarioCreacion', 'length', 'max'=>45),
			array('fechaAlta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idStock, idProducto, idAlmacen, cantidadProducto, productoMin, fechaAlta, usuarioCreacion', 'safe', 'on'=>'search'),
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
			'entradas' => array(self::HAS_MANY, 'Entrada', 'idStock'),
			'salidas' => array(self::HAS_MANY, 'Salida', 'idStock'),
			'idProducto0' => array(self::BELONGS_TO, 'Producto', 'idProducto'),
			'idAlmacen0' => array(self::BELONGS_TO, 'Almacen', 'idAlmacen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idStock' => 'Id Stock',
			'idProducto' => 'Id Producto',
			'idAlmacen' => 'Id Almacen',
			'cantidadProducto' => 'Cantidad Producto',
			'productoMin' => 'Producto Min',
			'fechaAlta' => 'Fecha Alta',
			'usuarioCreacion' => 'Usuario Creacion',
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

		$criteria->compare('idStock',$this->idStock);
		$criteria->compare('idProducto',$this->idProducto);
		$criteria->compare('idAlmacen',$this->idAlmacen);
		$criteria->compare('cantidadProducto',$this->cantidadProducto);
		$criteria->compare('productoMin',$this->productoMin);
		$criteria->compare('fechaAlta',$this->fechaAlta,true);
		$criteria->compare('usuarioCreacion',$this->usuarioCreacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stock the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
