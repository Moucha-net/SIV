<?php

/**
 * This is the model class for table "stock".
 *
 * The followings are the available columns in table 'stock':
 * @property integer $idstock
 * @property integer $idProducto
 * @property integer $idAlmacen
 * @property integer $idEntrada
 * @property integer $cantidadProducto
 * @property integer $productomin
 * @property string $fechaAlta
 * @property integer $idUsuario
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
			array('idProducto, idAlmacen, idEntrada, cantidadProducto, productomin, idUsuario', 'numerical', 'integerOnly'=>true),
			array('fechaAlta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idstock, idProducto, idAlmacen, idEntrada, cantidadProducto, productomin, fechaAlta, idUsuario', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idstock' => 'Idstock',
			'idProducto' => 'Id Producto',
			'idAlmacen' => 'Id Almacen',
			'idEntrada' => 'Id Entrada',
			'cantidadProducto' => 'Cantidad Producto',
			'productomin' => 'Productomin',
			'fechaAlta' => 'Fecha Alta',
			'idUsuario' => 'Id Usuario',
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

		$criteria->compare('idstock',$this->idstock);
		$criteria->compare('idProducto',$this->idProducto);
		$criteria->compare('idAlmacen',$this->idAlmacen);
		$criteria->compare('idEntrada',$this->idEntrada);
		$criteria->compare('cantidadProducto',$this->cantidadProducto);
		$criteria->compare('productomin',$this->productomin);
		$criteria->compare('fechaAlta',$this->fechaAlta,true);
		$criteria->compare('idUsuario',$this->idUsuario);

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
