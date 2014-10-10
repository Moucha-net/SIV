<?php

/**
 * This is the model class for table "institution".
 *
 * The followings are the available columns in table 'institution':
 * @property integer $idInstitution
 * @property string $name
 * @property string $coordinates
 * @property string $street
 * @property string $number
 * @property string $zip
 * @property string $contactPhone
 * @property string $contactEmail
 * @property string $contactName
 * @property string $fax
 * @property integer $active
 * @property string $city
 * @property string $rate
 *
 * The followings are the available model relations:
 * @property Appointment[] $appointments
 */
class Institution extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institution';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('active', 'numerical', 'integerOnly'=>true),
			array('name, street, number, zip, contactPhone, contactEmail, contactName, fax, city', 'length', 'max'=>45),
			array('coordinates', 'length', 'max'=>100),
			array('rate', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idInstitution, name, coordinates, street, number, zip, contactPhone, contactEmail, contactName, fax, active, city, rate', 'safe', 'on'=>'search'),
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
			'appointments' => array(self::HAS_MANY, 'Appointment', 'idInstitution'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idInstitution' => 'Id Institution',
			'name' => 'Name',
			'coordinates' => 'Coordinates',
			'street' => 'Street',
			'number' => 'Number',
			'zip' => 'Zip',
			'contactPhone' => 'Contact Phone',
			'contactEmail' => 'Contact Email',
			'contactName' => 'Contact Name',
			'fax' => 'Fax',
			'active' => 'Active',
			'city' => 'City',
			'rate' => 'Rate',
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

		$criteria->compare('idInstitution',$this->idInstitution);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('coordinates',$this->coordinates,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('contactPhone',$this->contactPhone,true);
		$criteria->compare('contactEmail',$this->contactEmail,true);
		$criteria->compare('contactName',$this->contactName,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('rate',$this->rate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Institution the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
