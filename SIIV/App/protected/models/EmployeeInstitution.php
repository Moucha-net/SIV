<?php

/**
 * This is the model class for table "employeeInstitution".
 *
 * The followings are the available columns in table 'employeeInstitution':
 * @property integer $idEmployeeInstitution
 * @property string $name
 * @property string $middleName
 * @property string $lastName
 * @property integer $active
 * @property string $lastModifiedName
 * @property integer $idInstitution
 * @property integer $idSpecialty
 * @property integer $idJob
 * @property string $maidenname
 */
class EmployeeInstitution extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employeeInstitution';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('active, idInstitution, idSpecialty, idJob', 'numerical', 'integerOnly'=>true),
			array('name, middleName, lastName', 'length', 'max'=>45),
			array('maidenname', 'length', 'max'=>100),
			array('lastModifiedName', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEmployeeInstitution, name, middleName, lastName, active, lastModifiedName, idInstitution, idSpecialty, idJob, maidenname', 'safe', 'on'=>'search'),
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
			'idEmployeeInstitution' => 'Id Employee Institution',
			'name' => 'Name',
			'middleName' => 'Middle Name',
			'lastName' => 'Last Name',
			'active' => 'Active',
			'lastModifiedName' => 'Last Modified Name',
			'idInstitution' => 'Id Institution',
			'idSpecialty' => 'Id Specialty',
			'idJob' => 'Id Job',
			'maidenname' => 'Maidenname',
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

		$criteria->compare('idEmployeeInstitution',$this->idEmployeeInstitution);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('middleName',$this->middleName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('lastModifiedName',$this->lastModifiedName,true);
		$criteria->compare('idInstitution',$this->idInstitution);
		$criteria->compare('idSpecialty',$this->idSpecialty);
		$criteria->compare('idJob',$this->idJob);
		$criteria->compare('maidenname',$this->maidenname,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmployeeInstitution the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
