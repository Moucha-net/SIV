<?php

/**
 * This is the model class for table "patient".
 *
 * The followings are the available columns in table 'patient':
 * @property integer $idPatient
 * @property string $firstName
 * @property string $lastName
 * @property string $middleInitial
 * @property string $dateOfBirth
 * @property string $patientPhone
 * @property string $street
 * @property string $number
 * @property string $zip
 * @property string $emailPatient
 * @property string $SSN
 * @property string $contactPhone
 * @property string $contactName
 * @property integer $idInsurance
 * @property integer $idLanguage
 * @property string $lastModifiedDate
 * @property string $middleName
 * @property integer $idPatientCase
 *
 * The followings are the available model relations:
 * @property Appointment[] $appointments
 * @property Insurance $idInsurance0
 * @property Language $idLanguage0
 */
class Patient extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'patient';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idInsurance, idLanguage, idPatientCase', 'numerical', 'integerOnly'=>true),
			array('firstName, lastName, middleInitial, patientPhone, street, number, zip, emailPatient, SSN, contactPhone, contactName, lastModifiedDate, middleName', 'length', 'max'=>45),
			array('dateOfBirth', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPatient, firstName, lastName, middleInitial, dateOfBirth, patientPhone, street, number, zip, emailPatient, SSN, contactPhone, contactName, idInsurance, idLanguage, lastModifiedDate, middleName, idPatientCase', 'safe', 'on'=>'search'),
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
			'appointments' => array(self::HAS_MANY, 'Appointment', 'idPatient'),
			'idInsurance0' => array(self::BELONGS_TO, 'Insurance', 'idInsurance'),
			'idLanguage0' => array(self::BELONGS_TO, 'Language', 'idLanguage'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPatient' => 'Id Patient',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'middleInitial' => 'Middle Initial',
			'dateOfBirth' => 'Date Of Birth',
			'patientPhone' => 'Patient Phone',
			'street' => 'Street',
			'number' => 'Number',
			'zip' => 'Zip',
			'emailPatient' => 'Email Patient',
			'SSN' => 'Ssn',
			'contactPhone' => 'Contact Phone',
			'contactName' => 'Contact Name',
			'idInsurance' => 'Id Insurance',
			'idLanguage' => 'Id Language',
			'lastModifiedDate' => 'Last Modified Date',
			'middleName' => 'Middle Name',
			'idPatientCase' => 'Id Patient Case',
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

		$criteria->compare('idPatient',$this->idPatient);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('middleInitial',$this->middleInitial,true);
		$criteria->compare('dateOfBirth',$this->dateOfBirth,true);
		$criteria->compare('patientPhone',$this->patientPhone,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('emailPatient',$this->emailPatient,true);
		$criteria->compare('SSN',$this->SSN,true);
		$criteria->compare('contactPhone',$this->contactPhone,true);
		$criteria->compare('contactName',$this->contactName,true);
		$criteria->compare('idInsurance',$this->idInsurance);
		$criteria->compare('idLanguage',$this->idLanguage);
		$criteria->compare('lastModifiedDate',$this->lastModifiedDate,true);
		$criteria->compare('middleName',$this->middleName,true);
		$criteria->compare('idPatientCase',$this->idPatientCase);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Patient the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
