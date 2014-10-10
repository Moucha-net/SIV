<?php

/**
 * This is the model class for table "rejectionType".
 *
 * The followings are the available columns in table 'rejectionType':
 * @property integer $idRejectionType
 * @property string $name
 * @property integer $active
 * @property string $lastModifiedDate
 *
 * The followings are the available model relations:
 * @property ReasonOfRejection[] $reasonOfRejections
 */
class RejectionType extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rejectionType';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idRejectionType', 'required'),
			array('idRejectionType, active', 'numerical', 'integerOnly'=>true),
			array('name, lastModifiedDate', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idRejectionType, name, active, lastModifiedDate', 'safe', 'on'=>'search'),
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
			'reasonOfRejections' => array(self::HAS_MANY, 'ReasonOfRejection', 'idRejectionType'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idRejectionType' => 'Id Rejection Type',
			'name' => 'Name',
			'active' => 'Active',
			'lastModifiedDate' => 'Last Modified Date',
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

		$criteria->compare('idRejectionType',$this->idRejectionType);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('lastModifiedDate',$this->lastModifiedDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RejectionType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
