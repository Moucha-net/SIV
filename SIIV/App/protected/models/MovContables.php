<?php

/**
 * This is the model class for table "movContables".
 *
 * The followings are the available columns in table 'movContables':
 * @property integer $idMovContables
 * @property integer $idEntrada
 * @property integer $idSalida
 * @property string $fechaAlta
 * @property string $usuarioCreacion
 *
 * The followings are the available model relations:
 * @property Entrada $idEntrada0
 * @property Salida $idSalida0
 */
class MovContables extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'movContables';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idEntrada, idSalida', 'numerical', 'integerOnly'=>true),
			array('usuarioCreacion', 'length', 'max'=>45),
			array('fechaAlta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idMovContables, idEntrada, idSalida, fechaAlta, usuarioCreacion', 'safe', 'on'=>'search'),
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
			'idEntrada0' => array(self::BELONGS_TO, 'Entrada', 'idEntrada'),
			'idSalida0' => array(self::BELONGS_TO, 'Salida', 'idSalida'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMovContables' => 'Id Mov Contables',
			'idEntrada' => 'Id Entrada',
			'idSalida' => 'Id Salida',
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

		$criteria->compare('idMovContables',$this->idMovContables);
		$criteria->compare('idEntrada',$this->idEntrada);
		$criteria->compare('idSalida',$this->idSalida);
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
	 * @return MovContables the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
