<?php

/**
 * This is the model class for table "entrada".
 *
 * The followings are the available columns in table 'entrada':
 * @property integer $idEntrada
 * @property integer $idIntermediario
 * @property string $fecha
 * @property string $hora
 * @property string $observaciones
 * @property string $cantidadEntrada
 * @property double $totalEntrada
 * @property string $fechaAlta
 * @property string $usuarioCreacion
 * @property integer $idStock
 * @property integer $idEstatus
 *
 * The followings are the available model relations:
 * @property Intermediario $idIntermediario0
 * @property Stock $idStock0
 * @property Estatus $idEstatus0
 * @property MovContables[] $movContables
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
			array('idIntermediario, idStock, idEstatus', 'numerical', 'integerOnly'=>true),
			array('totalEntrada', 'numerical'),
			array('hora', 'length', 'max'=>5),
			array('observaciones, cantidadEntrada, usuarioCreacion', 'length', 'max'=>45),
			array('fecha, fechaAlta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEntrada, idIntermediario, fecha, hora, observaciones, cantidadEntrada, totalEntrada, fechaAlta, usuarioCreacion, idStock, idEstatus', 'safe', 'on'=>'search'),
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
			'idIntermediario0' => array(self::BELONGS_TO, 'Intermediario', 'idIntermediario'),
			'idStock0' => array(self::BELONGS_TO, 'Stock', 'idStock'),
			'idEstatus0' => array(self::BELONGS_TO, 'Estatus', 'idEstatus'),
			'movContables' => array(self::HAS_MANY, 'MovContables', 'idEntrada'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEntrada' => 'Id Entrada',
			'idIntermediario' => 'Id Intermediario',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'observaciones' => 'Observaciones',
			'cantidadEntrada' => 'Cantidad Entrada',
			'totalEntrada' => 'Total Entrada',
			'fechaAlta' => 'Fecha Alta',
			'usuarioCreacion' => 'Usuario Creacion',
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

		$criteria->compare('idEntrada',$this->idEntrada);
		$criteria->compare('idIntermediario',$this->idIntermediario);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('cantidadEntrada',$this->cantidadEntrada,true);
		$criteria->compare('totalEntrada',$this->totalEntrada);
		$criteria->compare('fechaAlta',$this->fechaAlta,true);
		$criteria->compare('usuarioCreacion',$this->usuarioCreacion,true);
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
	 * @return Entrada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
