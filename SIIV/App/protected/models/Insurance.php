<?php

/**
 * This is the model class for table "insurance".
 *
 * The followings are the available columns in table 'insurance':
 * @property integer $idInsurance
 * @property string $name
 * @property integer $active
 * @property string $lastModifiedDate
 * @property string $country
 * @property string $city
 * @property string $street
 * @property string $number
 * @property string $zip
 * @property string $phone
 * @property string $email
 * @property string $contact
 * @property string $fax
 */
class Insurance extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'insurance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('active', 'numerical', 'integerOnly'=>true),
			array('name, country, number, zip, phone, fax', 'length', 'max'=>45),
			array('city, street, email, contact', 'length', 'max'=>100),
			array('lastModifiedDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idInsurance, name, active, lastModifiedDate, country, city, street, number, zip, phone, email, contact, fax', 'safe', 'on'=>'search'),
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
			'idInsurance' => 'Id Insurance',
			'name' => 'Name',
			'active' => 'Active',
			'lastModifiedDate' => 'Last Modified Date',
			'country' => 'Country',
			'city' => 'City',
			'street' => 'Street',
			'number' => 'Number',
			'zip' => 'Zip',
			'phone' => 'Phone',
			'email' => 'Email',
			'contact' => 'Contact',
			'fax' => 'Fax',
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

		$criteria->compare('idInsurance',$this->idInsurance);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('lastModifiedDate',$this->lastModifiedDate,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('fax',$this->fax,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Insurance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
