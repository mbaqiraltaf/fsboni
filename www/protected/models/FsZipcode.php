<?php

/**
 * This is the model class for table "fs_zipcode".
 *
 * The followings are the available columns in table 'fs_zipcode':
 * @property integer $zipcodeid
 * @property integer $countyid
 * @property string $NAME
 * @property string $STATUS
 * @property string $createdon
 * @property string $updateon
 * @property string $persons_house_per_hold
 * @property string $average_house_value
 * @property string $income_per_house_hold
 */
class FsZipcode extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fs_zipcode';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('countyid', 'numerical', 'integerOnly'=>true),
			array('NAME, persons_house_per_hold, average_house_value, income_per_house_hold', 'length', 'max'=>255),
			array('STATUS', 'length', 'max'=>10),
			array('createdon, updateon', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('zipcodeid, countyid, NAME, STATUS, createdon, updateon, persons_house_per_hold, average_house_value, income_per_house_hold', 'safe', 'on'=>'search'),
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
			'zipcodeid' => 'Zipcodeid',
			'countyid' => 'Countyid',
			'NAME' => 'Name',
			'STATUS' => 'Status',
			'createdon' => 'Createdon',
			'updateon' => 'Updateon',
			'persons_house_per_hold' => 'Persons House Per Hold',
			'average_house_value' => 'Average House Value',
			'income_per_house_hold' => 'Income Per House Hold',
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

		$criteria->compare('zipcodeid',$this->zipcodeid);
		$criteria->compare('countyid',$this->countyid);
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('STATUS',$this->STATUS,true);
		$criteria->compare('createdon',$this->createdon,true);
		$criteria->compare('updateon',$this->updateon,true);
		$criteria->compare('persons_house_per_hold',$this->persons_house_per_hold,true);
		$criteria->compare('average_house_value',$this->average_house_value,true);
		$criteria->compare('income_per_house_hold',$this->income_per_house_hold,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FsZipcode the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
