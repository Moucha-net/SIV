<?php

/**
 * This is the model class for table "media".
 *
 * The followings are the available columns in table 'media':
 * @property integer $idMedia
 * @property string $name
 * @property string $serialNumber
 * @property string $account
 * @property string $description
 * @property integer $active
 * @property string $lastModifiedDate
 * @property integer $idInstitution
 * @property integer $idMediaType
 *
 * The followings are the available model relations:
 * @property Appointment[] $appointments
 * @property MediaType $idMediaType0
 */
class Media extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'media';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('active, idInstitution, idMediaType', 'numerical', 'integerOnly'=>true),
			array('name, serialNumber, account', 'length', 'max'=>45),
			array('description', 'length', 'max'=>250),
			array('lastModifiedDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idMedia, name, serialNumber, account, description, active, lastModifiedDate, idInstitution, idMediaType', 'safe', 'on'=>'search'),
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
			'appointments' => array(self::HAS_MANY, 'Appointment', 'idMedia'),
			'idMediaType0' => array(self::BELONGS_TO, 'MediaType', 'idMediaType'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMedia' => 'Id Media',
			'name' => 'Name',
			'serialNumber' => 'Serial Number',
			'account' => 'Account',
			'description' => 'Description',
			'active' => 'Active',
			'lastModifiedDate' => 'Last Modified Date',
			'idInstitution' => 'Id Institution',
			'idMediaType' => 'Id Media Type',
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

		$criteria->compare('idMedia',$this->idMedia);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('serialNumber',$this->serialNumber,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('lastModifiedDate',$this->lastModifiedDate,true);
		$criteria->compare('idInstitution',$this->idInstitution);
		$criteria->compare('idMediaType',$this->idMediaType);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Media the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
