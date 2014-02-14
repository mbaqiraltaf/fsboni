<?php

/**
 * This is the model class for table "fs_city".
 *
 * The followings are the available columns in table 'fs_city':
 * @property integer $id
 * @property integer $state_id
 * @property string $city
 * @property string $created_Date
 * @property string $updated_date
 * @property string $STATUS
 * @property string $map
 *
 * The followings are the available model relations:
 * @property FsUser[] $fsUsers
 */
class FsCity extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fs_city';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('state_id, city', 'required'),
			array('state_id', 'numerical', 'integerOnly'=>true),
			array('city, map', 'length', 'max'=>255),
			array('STATUS', 'length', 'max'=>1),
			array('created_Date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, state_id, city, created_Date, updated_date, STATUS, map', 'safe', 'on'=>'search'),
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
			'fsUsers' => array(self::HAS_MANY, 'FsUser', 'city'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'state_id' => 'State',
			'city' => 'City',
			'created_Date' => 'Created Date',
			'updated_date' => 'Updated Date',
			'STATUS' => 'Status',
			'map' => 'Map',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('created_Date',$this->created_Date,true);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('STATUS',$this->STATUS,true);
		$criteria->compare('map',$this->map,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FsCity the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
