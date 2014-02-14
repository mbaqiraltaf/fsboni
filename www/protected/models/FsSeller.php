<?php

/**
 * This is the model class for table "fs_seller".
 *
 * The followings are the available columns in table 'fs_seller':
 * @property integer $seller_id
 * @property integer $user_id
 * @property string $address
 * @property string $contact
 * @property string $zip_code
 * @property integer $timeframe
 * @property string $TYPE
 * @property string $created_date
 * @property string $updated_date
 * @property string $compass_poing
 * @property string $street_name
 * @property string $street_number
 * @property string $street_suffix
 * @property string $county
 */
class FsSeller extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fs_seller';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('zip_code, contact', 'required'),
			array('user_id, timeframe', 'numerical', 'integerOnly'=>true),
			array('address, contact, zip_code, street_name, street_number, street_suffix, county', 'length', 'max'=>255),
			array('TYPE, compass_poing', 'length', 'max'=>1),
			array('created_date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('seller_id, user_id, address, contact, zip_code, timeframe, TYPE, created_date, updated_date, compass_poing, street_name, street_number, street_suffix, county', 'safe', 'on'=>'search'),
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
			'seller_id' => 'Seller',
			'user_id' => 'User',
			'address' => 'Neighbourhood',
			'contact' => 'Phone Number',
			'zip_code' => 'Zip Code',
			'timeframe' => 'Timeframe',
			'TYPE' => 'Type',
			'created_date' => 'Created Date',
			'updated_date' => 'Updated Date',
			'compass_poing' => 'Compass Point',
			'street_name' => 'Street Name',
			'street_number' => 'Street Number',
			'street_suffix' => 'Street Suffix',
			'county' => 'County',
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

		$criteria->compare('seller_id',$this->seller_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('zip_code',$this->zip_code,true);
		$criteria->compare('timeframe',$this->timeframe);
		$criteria->compare('TYPE',$this->TYPE,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('compass_poing',$this->compass_poing,true);
		$criteria->compare('street_name',$this->street_name,true);
		$criteria->compare('street_number',$this->street_number,true);
		$criteria->compare('street_suffix',$this->street_suffix,true);
		$criteria->compare('county',$this->county,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FsSeller the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
