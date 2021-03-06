<?php

/**
 * This is the model class for table "fs_interior_property_featur".
 *
 * The followings are the available columns in table 'fs_interior_property_featur':
 * @property integer $id
 * @property string $title
 * @property string $created_date
 * @property string $updted_date
 * @property string $STATUS
 *
 * The followings are the available model relations:
 * @property FsInteriorPropRelation[] $fsInteriorPropRelations
 */
class FsInteriorPropertyFeatur extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fs_interior_property_featur';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('title', 'length', 'max'=>255),
			array('STATUS', 'length', 'max'=>2),
			array('created_date, updted_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, created_date, updted_date, STATUS', 'safe', 'on'=>'search'),
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
			'fsInteriorPropRelations' => array(self::HAS_MANY, 'FsInteriorPropRelation', 'interior_prop_featur'),
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
			'updted_date' => 'Updted Date',
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
		$criteria->compare('updted_date',$this->updted_date,true);
		$criteria->compare('STATUS',$this->STATUS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FsInteriorPropertyFeatur the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
