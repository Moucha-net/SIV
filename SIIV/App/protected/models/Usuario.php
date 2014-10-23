<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idUsuario
 * @property string $nombre
 * @property string $aPaterno
 * @property string $aMaterno
 * @property string $correo
 * @property string $telefono
 * @property string $userName
 * @property string $password
 * @property integer $idRol
 * @property string $fechaAlta
 * @property string $usuarioCreacion
 *
 * The followings are the available model relations:
 * @property Rol $idRol0
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idRol', 'numerical', 'integerOnly'=>true),
			array('nombre, aPaterno, aMaterno, correo, telefono, userName, password, usuarioCreacion', 'length', 'max'=>45),
			array('fechaAlta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUsuario, nombre, aPaterno, aMaterno, correo, telefono, userName, password, idRol, fechaAlta, usuarioCreacion', 'safe', 'on'=>'search'),
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
			'idRol0' => array(self::BELONGS_TO, 'Rol', 'idRol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'nombre' => 'Nombre',
			'aPaterno' => 'A Paterno',
			'aMaterno' => 'A Materno',
			'correo' => 'Correo',
			'telefono' => 'Telefono',
			'userName' => 'User Name',
			'password' => 'Password',
			'idRol' => 'Id Rol',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('aPaterno',$this->aPaterno,true);
		$criteria->compare('aMaterno',$this->aMaterno,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('userName',$this->userName,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('idRol',$this->idRol);
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
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
