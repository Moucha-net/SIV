<?php

/**
 * This is the model class for table "almacen".
 *
 * The followings are the available columns in table 'almacen':
 * @property integer $idAlmacen
 * @property string $nombre
 * @property string $encargado
 * @property string $telefono
 * @property string $direccion
 * @property string $descripcion
 * @property integer $tiempoEntrega
 * @property string $fechaAlta
 * @property string $usuarioCreacion
 *
 * The followings are the available model relations:
 * @property Stock[] $stocks
 */
class Almacen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'almacen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tiempoEntrega', 'numerical', 'integerOnly'=>true),
			array('nombre, encargado, telefono, direccion, descripcion, usuarioCreacion', 'length', 'max'=>45),
			array('fechaAlta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAlmacen, nombre, encargado, telefono, direccion, descripcion, tiempoEntrega, fechaAlta, usuarioCreacion', 'safe', 'on'=>'search'),
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
			'stocks' => array(self::HAS_MANY, 'Stock', 'idAlmacen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAlmacen' => 'Id Almacen',
			'nombre' => 'Nombre',
			'encargado' => 'Encargado',
			'telefono' => 'Telefono',
			'direccion' => 'Direccion',
			'descripcion' => 'Descripcion',
			'tiempoEntrega' => 'Tiempo Entrega',
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

		$criteria->compare('idAlmacen',$this->idAlmacen);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('encargado',$this->encargado,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tiempoEntrega',$this->tiempoEntrega);
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
	 * @return Almacen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
