<?php

/**
 * This is the model class for table "fs_county".
 *
 * The followings are the available columns in table 'fs_county':
 * @property integer $countyid
 * @property integer $id
 * @property string $NAME
 * @property string $STATUS
 * @property string $createdon
 * @property string $updateon
 */
class FsCounty extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fs_county';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'numerical', 'integerOnly'=>true),
			array('NAME', 'length', 'max'=>255),
			array('STATUS', 'length', 'max'=>10),
			array('createdon, updateon', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('countyid, id, NAME, STATUS, createdon, updateon', 'safe', 'on'=>'search'),
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
			'countyid' => 'Countyid',
			'id' => 'ID',
			'NAME' => 'Name',
			'STATUS' => 'Status',
			'createdon' => 'Createdon',
			'updateon' => 'Updateon',
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

		$criteria->compare('countyid',$this->countyid);
		$criteria->compare('id',$this->id);
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('STATUS',$this->STATUS,true);
		$criteria->compare('createdon',$this->createdon,true);
		$criteria->compare('updateon',$this->updateon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FsCounty the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
