<?php

/**
 * This is the model class for table "entrada".
 *
 * The followings are the available columns in table 'entrada':
 * @property integer $identrada
 * @property integer $idIntermediario
 * @property integer $idProducto
 * @property string $fecha
 * @property string $hora
 * @property string $observaciones
 * @property string $cantidadEntrada
 * @property double $totalEntrada
 * @property string $fechaAlta
 * @property integer $idUsuario
 */
class Entrada extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'entrada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idIntermediario, idProducto, idUsuario', 'numerical', 'integerOnly'=>true),
			array('totalEntrada', 'numerical'),
			array('hora', 'length', 'max'=>5),
			array('observaciones, cantidadEntrada', 'length', 'max'=>45),
			array('fecha, fechaAlta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('identrada, idIntermediario, idProducto, fecha, hora, observaciones, cantidadEntrada, totalEntrada, fechaAlta, idUsuario', 'safe', 'on'=>'search'),
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
			'identrada' => 'Identrada',
			'idIntermediario' => 'Id Intermediario',
			'idProducto' => 'Id Producto',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'observaciones' => 'Observaciones',
			'cantidadEntrada' => 'Cantidad Entrada',
			'totalEntrada' => 'Total Entrada',
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

		$criteria->compare('identrada',$this->identrada);
		$criteria->compare('idIntermediario',$this->idIntermediario);
		$criteria->compare('idProducto',$this->idProducto);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('cantidadEntrada',$this->cantidadEntrada,true);
		$criteria->compare('totalEntrada',$this->totalEntrada);
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
	 * @return Entrada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
