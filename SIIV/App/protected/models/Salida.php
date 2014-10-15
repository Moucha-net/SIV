<?php

/**
 * This is the model class for table "salida".
 *
 * The followings are the available columns in table 'salida':
 * @property integer $idSalida
 * @property integer $idIntermediario
 * @property integer $cantidadSalida
 * @property string $observaciones
 * @property integer $totalSalida
 * @property string $fechaAlta
 * @property string $usuarioCreacion
 * @property integer $idDescuento
 * @property integer $idComprobante
 * @property integer $idStock
 * @property integer $idEstatus
 *
 * The followings are the available model relations:
 * @property MovContables[] $movContables
 * @property Intermediario $idIntermediario0
 * @property Stock $idStock0
 * @property Descuento $idDescuento0
 * @property Comprobante $idComprobante0
 * @property Estatus $idEstatus0
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
			array('idSalida', 'required'),
			array('idSalida, idIntermediario, cantidadSalida, totalSalida, idDescuento, idComprobante, idStock, idEstatus', 'numerical', 'integerOnly'=>true),
			array('observaciones, usuarioCreacion', 'length', 'max'=>45),
			array('fechaAlta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSalida, idIntermediario, cantidadSalida, observaciones, totalSalida, fechaAlta, usuarioCreacion, idDescuento, idComprobante, idStock, idEstatus', 'safe', 'on'=>'search'),
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
			'movContables' => array(self::HAS_MANY, 'MovContables', 'idSalida'),
			'idIntermediario0' => array(self::BELONGS_TO, 'Intermediario', 'idIntermediario'),
			'idStock0' => array(self::BELONGS_TO, 'Stock', 'idStock'),
			'idDescuento0' => array(self::BELONGS_TO, 'Descuento', 'idDescuento'),
			'idComprobante0' => array(self::BELONGS_TO, 'Comprobante', 'idComprobante'),
			'idEstatus0' => array(self::BELONGS_TO, 'Estatus', 'idEstatus'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSalida' => 'Id Salida',
			'idIntermediario' => 'Id Intermediario',
			'cantidadSalida' => 'Cantidad Salida',
			'observaciones' => 'Observaciones',
			'totalSalida' => 'Total Salida',
			'fechaAlta' => 'Fecha Alta',
			'usuarioCreacion' => 'Usuario Creacion',
			'idDescuento' => 'Id Descuento',
			'idComprobante' => 'Id Comprobante',
			'idStock' => 'Id Stock',
			'idEstatus' => 'Id Estatus',
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

		$criteria->compare('idSalida',$this->idSalida);
		$criteria->compare('idIntermediario',$this->idIntermediario);
		$criteria->compare('cantidadSalida',$this->cantidadSalida);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('totalSalida',$this->totalSalida);
		$criteria->compare('fechaAlta',$this->fechaAlta,true);
		$criteria->compare('usuarioCreacion',$this->usuarioCreacion,true);
		$criteria->compare('idDescuento',$this->idDescuento);
		$criteria->compare('idComprobante',$this->idComprobante);
		$criteria->compare('idStock',$this->idStock);
		$criteria->compare('idEstatus',$this->idEstatus);

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
