<?php

/**
 * This is the model class for table "fs_heating".
 *
 * The followings are the available columns in table 'fs_heating':
 * @property integer $id
 * @property string $title
 * @property string $created_date
 * @property string $updated_date
 * @property string $STATUS
 *
 * The followings are the available model relations:
 * @property FsProperty[] $fsProperties
 */
class FsHeating extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fs_heating';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'length', 'max'=>255),
			array('STATUS', 'length', 'max'=>1),
			array('created_date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, created_date, updated_date, STATUS', 'safe', 'on'=>'search'),
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
			'fsProperties' => array(self::HAS_MANY, 'FsProperty', 'heating'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'created_date' => 'Created Date',
			'updated_date' => 'Updated Date',
			'STATUS' => 'Status',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('STATUS',$this->STATUS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FsHeating the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
