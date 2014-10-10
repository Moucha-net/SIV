<?php

/**
 * This is the model class for table "patientCase".
 *
 * The followings are the available columns in table 'patientCase':
 * @property integer $idPatientCase
 * @property string $numberCase
 * @property string $description
 * @property string $caseWorker
 * @property string $dateOfInjury
 * @property string $lastModifiedDate
 * @property string $idPatient
 */
class PatientCase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'patientCase';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numberCase, caseWorker, idPatient', 'length', 'max'=>45),
			array('description', 'length', 'max'=>250),
			array('dateOfInjury, lastModifiedDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPatientCase, numberCase, description, caseWorker, dateOfInjury, lastModifiedDate, idPatient', 'safe', 'on'=>'search'),
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
			'idPatientCase' => 'Id Patient Case',
			'numberCase' => 'Number Case',
			'description' => 'Description',
			'caseWorker' => 'Case Worker',
			'dateOfInjury' => 'Date Of Injury',
			'lastModifiedDate' => 'Last Modified Date',
			'idPatient' => 'Id Patient',
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

		$criteria->compare('idPatientCase',$this->idPatientCase);
		$criteria->compare('numberCase',$this->numberCase,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('caseWorker',$this->caseWorker,true);
		$criteria->compare('dateOfInjury',$this->dateOfInjury,true);
		$criteria->compare('lastModifiedDate',$this->lastModifiedDate,true);
		$criteria->compare('idPatient',$this->idPatient,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PatientCase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
