<?php

/**
 * This is the model class for table "appointment".
 *
 * The followings are the available columns in table 'appointment':
 * @property integer $idAppointment
 * @property string $appointmentDate
 * @property string $appointmentHour
 * @property string $observationsReschedule
 * @property integer $idReasonOfRejection
 * @property integer $idUserCreator
 * @property integer $idAssignInterpret
 * @property integer $idMedia
 * @property integer $idReceptorEmployee
 * @property integer $idAppointmentType
 * @property integer $idLanguage
 * @property integer $idPatient
 * @property string $endDateAppointment
 * @property string $dateConfirmation
 * @property string $hourConfirmation
 * @property double $milage
 * @property integer $followUp
 * @property integer $rating
 * @property string $observationRefection
 * @property string $dateHourRejection
 * @property string $lastModifiedDate
 * @property string $idPatientCase
 * @property integer $idInstitution
 * @property string $timeZone
 * @property string $hourEnd
 * @property string $observations
 * @property string $millage
 * @property integer $idLanguageEmployee
 * @property string $idStatus
 *
 * The followings are the available model relations:
 * @property ReasonOfRejection $idReasonOfRejection0
 * @property Media $idMedia0
 * @property AppointmentType $idAppointmentType0
 * @property Patient $idPatient0
 * @property Institution $idInstitution0
 */
class Appointment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'appointment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idReasonOfRejection, idUserCreator, idAssignInterpret, idMedia, idReceptorEmployee, idAppointmentType, idLanguage, idPatient, followUp, rating, idInstitution, idLanguageEmployee', 'numerical', 'integerOnly'=>true),
			array('milage', 'numerical'),
			array('appointmentHour, hourConfirmation, hourEnd', 'length', 'max'=>10),
			array('observationsReschedule, observationRefection, observations', 'length', 'max'=>250),
			array('idPatientCase, idStatus', 'length', 'max'=>45),
			array('timeZone', 'length', 'max'=>30),
			array('millage', 'length', 'max'=>15),
			array('appointmentDate, endDateAppointment, dateConfirmation, dateHourRejection, lastModifiedDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAppointment, appointmentDate, appointmentHour, observationsReschedule, idReasonOfRejection, idUserCreator, idAssignInterpret, idMedia, idReceptorEmployee, idAppointmentType, idLanguage, idPatient, endDateAppointment, dateConfirmation, hourConfirmation, milage, followUp, rating, observationRefection, dateHourRejection, lastModifiedDate, idPatientCase, idInstitution, timeZone, hourEnd, observations, millage, idLanguageEmployee, idStatus', 'safe', 'on'=>'search'),
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
			'idReasonOfRejection0' => array(self::BELONGS_TO, 'ReasonOfRejection', 'idReasonOfRejection'),
			'idMedia0' => array(self::BELONGS_TO, 'Media', 'idMedia'),
			'idAppointmentType0' => array(self::BELONGS_TO, 'AppointmentType', 'idAppointmentType'),
			'idPatient0' => array(self::BELONGS_TO, 'Patient', 'idPatient'),
			'idInstitution0' => array(self::BELONGS_TO, 'Institution', 'idInstitution'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAppointment' => 'Id Appointment',
			'appointmentDate' => 'Appointment Date',
			'appointmentHour' => 'Appointment Hour',
			'observationsReschedule' => 'Observations Reschedule',
			'idReasonOfRejection' => 'Id Reason Of Rejection',
			'idUserCreator' => 'Id User Creator',
			'idAssignInterpret' => 'Id Assign Interpret',
			'idMedia' => 'Id Media',
			'idReceptorEmployee' => 'Id Receptor Employee',
			'idAppointmentType' => 'Id Appointment Type',
			'idLanguage' => 'Id Language',
			'idPatient' => 'Id Patient',
			'endDateAppointment' => 'End Date Appointment',
			'dateConfirmation' => 'Date Confirmation',
			'hourConfirmation' => 'Hour Confirmation',
			'milage' => 'Milage',
			'followUp' => 'Follow Up',
			'rating' => 'Rating',
			'observationRefection' => 'Observation Refection',
			'dateHourRejection' => 'Date Hour Rejection',
			'lastModifiedDate' => 'Last Modified Date',
			'idPatientCase' => 'Id Patient Case',
			'idInstitution' => 'Id Institution',
			'timeZone' => 'Time Zone',
			'hourEnd' => 'Hour End',
			'observations' => 'Observations',
			'millage' => 'Millage',
			'idLanguageEmployee' => 'Id Language Employee',
			'idStatus' => 'Id Status',
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

		$criteria->compare('idAppointment',$this->idAppointment);
		$criteria->compare('appointmentDate',$this->appointmentDate,true);
		$criteria->compare('appointmentHour',$this->appointmentHour,true);
		$criteria->compare('observationsReschedule',$this->observationsReschedule,true);
		$criteria->compare('idReasonOfRejection',$this->idReasonOfRejection);
		$criteria->compare('idUserCreator',$this->idUserCreator);
		$criteria->compare('idAssignInterpret',$this->idAssignInterpret);
		$criteria->compare('idMedia',$this->idMedia);
		$criteria->compare('idReceptorEmployee',$this->idReceptorEmployee);
		$criteria->compare('idAppointmentType',$this->idAppointmentType);
		$criteria->compare('idLanguage',$this->idLanguage);
		$criteria->compare('idPatient',$this->idPatient);
		$criteria->compare('endDateAppointment',$this->endDateAppointment,true);
		$criteria->compare('dateConfirmation',$this->dateConfirmation,true);
		$criteria->compare('hourConfirmation',$this->hourConfirmation,true);
		$criteria->compare('milage',$this->milage);
		$criteria->compare('followUp',$this->followUp);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('observationRefection',$this->observationRefection,true);
		$criteria->compare('dateHourRejection',$this->dateHourRejection,true);
		$criteria->compare('lastModifiedDate',$this->lastModifiedDate,true);
		$criteria->compare('idPatientCase',$this->idPatientCase,true);
		$criteria->compare('idInstitution',$this->idInstitution);
		$criteria->compare('timeZone',$this->timeZone,true);
		$criteria->compare('hourEnd',$this->hourEnd,true);
		$criteria->compare('observations',$this->observations,true);
		$criteria->compare('millage',$this->millage,true);
		$criteria->compare('idLanguageEmployee',$this->idLanguageEmployee);
		$criteria->compare('idStatus',$this->idStatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Appointment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
