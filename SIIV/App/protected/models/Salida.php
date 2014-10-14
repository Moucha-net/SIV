<?php

/**
 * This is the model class for table "salida".
 *
 * The followings are the available columns in table 'salida':
 * @property integer $idsalida
 * @property integer $idIntermediario
 * @property integer $idProducto
 * @property integer $cantidadSalida
 * @property string $observaciones
 * @property integer $totalSalida
 * @property string $fechaAlta
 * @property integer $idUsuario
 */
class Salida extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'salida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idIntermediario, idProducto, cantidadSalida, totalSalida, idUsuario', 'numerical', 'integerOnly'=>true),
			array('observaciones', 'length', 'max'=>45),
			array('fechaAlta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idsalida, idIntermediario, idProducto, cantidadSalida, observaciones, totalSalida, fechaAlta, idUsuario', 'safe', 'on'=>'search'),
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
			'idsalida' => 'Idsalida',
			'idIntermediario' => 'Id Intermediario',
			'idProducto' => 'Id Producto',
			'cantidadSalida' => 'Cantidad Salida',
			'observaciones' => 'Observaciones',
			'totalSalida' => 'Total Salida',
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

		$criteria->compare('idsalida',$this->idsalida);
		$criteria->compare('idIntermediario',$this->idIntermediario);
		$criteria->compare('idProducto',$this->idProducto);
		$criteria->compare('cantidadSalida',$this->cantidadSalida);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('totalSalida',$this->totalSalida);
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
	 * @return Salida the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
