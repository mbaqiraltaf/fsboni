<?php

/**
 * This is the model class for table "fs_exterior_constr_relation".
 *
 * The followings are the available columns in table 'fs_exterior_constr_relation':
 * @property integer $id
 * @property integer $exterior_constr_id
 * @property integer $prop_id
 * @property string $created_date
 * @property string $updated_date
 *
 * The followings are the available model relations:
 * @property FsExteriorConstruction $exteriorConstr
 * @property FsProperty $prop
 */
class FsExteriorConstrRelation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fs_exterior_constr_relation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('exterior_constr_id, prop_id', 'required'),
			array('exterior_constr_id, prop_id', 'numerical', 'integerOnly'=>true),
			array('created_date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, exterior_constr_id, prop_id, created_date, updated_date', 'safe', 'on'=>'search'),
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
			'exteriorConstr' => array(self::BELONGS_TO, 'FsExteriorConstruction', 'exterior_constr_id'),
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
			'exterior_constr_id' => 'Exterior Construction',
			'prop_id' => 'Prop',
			'created_date' => 'Created Date',
			'updated_date' => 'Updated Date',
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
		$criteria->compare('exterior_constr_id',$this->exterior_constr_id);
		$criteria->compare('prop_id',$this->prop_id);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FsExteriorConstrRelation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
