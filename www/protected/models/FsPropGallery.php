<?php

/**
 * This is the model class for table "fs_prop_gallery".
 *
 * The followings are the available columns in table 'fs_prop_gallery':
 * @property integer $id
 * @property integer $prop_id
 * @property string $title
 * @property string $image_name
 * @property string $STATUS
 * @property string $created_date
 * @property string $updated_date
 * @property string $default_img
 */
class FsPropGallery extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fs_prop_gallery';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('prop_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
                        //array('image_name', 'file', 'types'=>'jpg, gif, png'),
			array('STATUS, default_img', 'length', 'max'=>1),
			array('created_date, updated_date, image_name', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, prop_id, title, image_name, STATUS, created_date, updated_date, default_img', 'safe', 'on'=>'search'),
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
                    'prop' => array(self::BELONGS_TO, 'FsProperty', 'prop_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'prop_id' => 'Prop',
			'title' => 'Title',
			'image_name' => 'Image Name',
			'STATUS' => 'Status',
			'created_date' => 'Created Date',
			'updated_date' => 'Updated Date',
			'default_img' => 'Default Img',
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
		$criteria->compare('prop_id',$this->prop_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('image_name',$this->image_name,true);
		$criteria->compare('STATUS',$this->STATUS,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('default_img',$this->default_img,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FsPropGallery the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
