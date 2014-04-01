<?php

/**
 * This is the model class for table "fs_user".
 *
 * The followings are the available columns in table 'fs_user':
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $paswd
 * @property string $status
 * @property integer $state
 * @property integer $city
 * @property string $user_type
 * @property string $created_date
 * @property string $updated_date
 * @property string $county
 *
 * The followings are the available model relations:
 * @property FsProperty[] $fsProperties
 * @property FsCity $city0
 */
class FsUser extends CActiveRecord {

    public $repeat_password;
    public $repeat_email;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fs_user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('first_name, last_name,state, city, county', 'required'),
            array('first_name, last_name', 'required'),
            //array('state, city', 'numerical', 'integerOnly' => true),
            array('first_name, last_name, county', 'length', 'max' => 255),
            array('paswd, repeat_password', 'required'),
            array('paswd, repeat_password', 'length', 'min' => 6, 'max' => 40),
            array('paswd', 'compare', 'compareAttribute' => 'repeat_password'),
            array('email, repeat_email', 'required'),
            array('email, repeat_email', 'email'),
            array('email', 'unique'),
            array('email', 'compare', 'compareAttribute' => 'repeat_email'),
            array('STATUS, user_type', 'length', 'max' => 1),
            array('created_date, updated_date', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('user_id, first_name, last_name, email, paswd, status, state, city, user_type, created_date, updated_date, county, salt', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'fsProperties' => array(self::HAS_MANY, 'FsProperty', 'seller_id'),
            'city0' => array(self::BELONGS_TO, 'FsCity', 'city'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'user_id' => 'User',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'paswd' => 'Password',
            'status' => 'Status',
            'state' => 'State',
            'city' => 'City',
            'user_type' => 'User Type',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('paswd', $this->paswd, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('state', $this->state);
        $criteria->compare('city', $this->city);
        $criteria->compare('user_type', $this->user_type, true);
        $criteria->compare('created_date', $this->created_date, true);
        $criteria->compare('updated_date', $this->updated_date, true);
        $criteria->compare('county', $this->county, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return FsUser the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
