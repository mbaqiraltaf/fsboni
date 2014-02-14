<?php

/**
 * This is the model class for table "fs_search_criteria".
 *
 * The followings are the available columns in table 'fs_search_criteria':
 * @property integer $id
 * @property string $city
 * @property integer $prop_type
 * @property integer $price_range_min
 * @property integer $price_range_max
 * @property integer $bed_room_range_min
 * @property integer $bed_room_range_max
 * @property integer $bath_room_range_min
 * @property integer $bath_room_range_max
 * @property string $size_min
 * @property string $size_max
 * @property string $listing_with_virtual
 * @property string $listing_with_photo
 * @property string $year_built_min
 * @property string $year_built_max
 * @property string $garage
 * @property string $keyword
 * @property string $created_date
 * @property string $prop_id
 * @property string $search_by
 * @property integer $user_id
 * @property string $search_type
 * @property string $garage_parking
 * @property integer $state
 * @property string $cityagain
 * @property string $zip
 * @property string $neighbourhood
 * @property string $compass_point
 * @property string $street_name
 * @property string $property_style_type
 * @property integer $property_style
 * @property string $property_tax
 * @property string $tax_year
 * @property string $frequency
 * @property string $assessment
 * @property string $pet_friendly
 * @property string $open_house
 * @property string $open_house_to_time
 * @property string $open_house_from_time
 * @property string $county
 *
 * The followings are the available model relations:
 * @property FsNoBedroom $bedRoomRangeMin
 * @property FsPriceRange $priceRangeMin
 * @property FsPropType $propType
 * @property FsSearchPropStyleRelation[] $fsSearchPropStyleRelations
 */
class FsSearchCriteria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fs_search_criteria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prop_type, price_range_min, price_range_max, bed_room_range_min, bed_room_range_max, bath_room_range_min, bath_room_range_max, user_id, state, property_style', 'numerical', 'integerOnly'=>true),
			array('city, size_min, size_max, year_built_min, year_built_max, garage, keyword, prop_id, search_by, cityagain, zip, neighbourhood, county', 'length', 'max'=>255),
			array('listing_with_virtual, listing_with_photo, search_type, garage_parking, compass_point, property_style_type, pet_friendly', 'length', 'max'=>1),
			array('street_name, tax_year, open_house, open_house_to_time, open_house_from_time', 'length', 'max'=>50),
			array('property_tax', 'length', 'max'=>100),
			array('frequency, assessment', 'length', 'max'=>250),
			array('created_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, city, prop_type, price_range_min, price_range_max, bed_room_range_min, bed_room_range_max, bath_room_range_min, bath_room_range_max, size_min, size_max, listing_with_virtual, listing_with_photo, year_built_min, year_built_max, garage, keyword, created_date, prop_id, search_by, user_id, search_type, garage_parking, state, cityagain, zip, neighbourhood, compass_point, street_name, property_style_type, property_style, property_tax, tax_year, frequency, assessment, pet_friendly, open_house, open_house_to_time, open_house_from_time, county', 'safe', 'on'=>'search'),
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
			'bedRoomRangeMin' => array(self::BELONGS_TO, 'FsNoBedroom', 'bed_room_range_min'),
			'priceRangeMin' => array(self::BELONGS_TO, 'FsPriceRange', 'price_range_min'),
			'propType' => array(self::BELONGS_TO, 'FsPropType', 'prop_type'),
			'fsSearchPropStyleRelations' => array(self::HAS_MANY, 'FsSearchPropStyleRelation', 'search_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'city' => 'City',
			'prop_type' => 'Property Type',
			'price_range_min' => 'Price Minimum',
			'price_range_max' => 'Price Maximum',
			'bed_room_range_min' => 'BedRooms',
			'bed_room_range_max' => 'Bed Room Range Max',
			'bath_room_range_min' => 'BathRooms',
			'bath_room_range_max' => 'Bath Room Range Max',
			'size_min' => 'Square Feet',
			'size_max' => 'Size Max',
			'listing_with_virtual' => 'Virtual Tour',
			'listing_with_photo' => 'Photos',
			'year_built_min' => 'Year Built Min',
			'year_built_max' => 'Year Built Max',
			'garage' => 'Garage',
			'keyword' => 'Keyword',
			'created_date' => 'Created Date',
			'prop_id' => 'FSBONI ID',
			'search_by' => 'Search By',
			'user_id' => 'User',
			'search_type' => 'Search Type',
			'garage_parking' => 'Garage Parking',
			'state' => 'State',
			'cityagain' => 'Cityagain',
			'zip' => 'Zip Code',
			'neighbourhood' => 'Neighbourhoods',
			'compass_point' => 'Compass Point',
			'street_name' => 'Street Name',
			'property_style_type' => 'Property Style Type',
			'property_style' => 'Property Style',
			'property_tax' => 'Property Tax',
			'tax_year' => 'Tax Year',
			'frequency' => 'Frequency',
			'assessment' => 'Assessment',
			'pet_friendly' => 'Pets',
			'open_house' => 'Open House',
			'open_house_to_time' => 'Open House To Time',
			'open_house_from_time' => 'Open House From Time',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('prop_type',$this->prop_type);
		$criteria->compare('price_range_min',$this->price_range_min);
		$criteria->compare('price_range_max',$this->price_range_max);
		$criteria->compare('bed_room_range_min',$this->bed_room_range_min);
		$criteria->compare('bed_room_range_max',$this->bed_room_range_max);
		$criteria->compare('bath_room_range_min',$this->bath_room_range_min);
		$criteria->compare('bath_room_range_max',$this->bath_room_range_max);
		$criteria->compare('size_min',$this->size_min,true);
		$criteria->compare('size_max',$this->size_max,true);
		$criteria->compare('listing_with_virtual',$this->listing_with_virtual,true);
		$criteria->compare('listing_with_photo',$this->listing_with_photo,true);
		$criteria->compare('year_built_min',$this->year_built_min,true);
		$criteria->compare('year_built_max',$this->year_built_max,true);
		$criteria->compare('garage',$this->garage,true);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('prop_id',$this->prop_id,true);
		$criteria->compare('search_by',$this->search_by,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('search_type',$this->search_type,true);
		$criteria->compare('garage_parking',$this->garage_parking,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('cityagain',$this->cityagain,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('neighbourhood',$this->neighbourhood,true);
		$criteria->compare('compass_point',$this->compass_point,true);
		$criteria->compare('street_name',$this->street_name,true);
		$criteria->compare('property_style_type',$this->property_style_type,true);
		$criteria->compare('property_style',$this->property_style);
		$criteria->compare('property_tax',$this->property_tax,true);
		$criteria->compare('tax_year',$this->tax_year,true);
		$criteria->compare('frequency',$this->frequency,true);
		$criteria->compare('assessment',$this->assessment,true);
		$criteria->compare('pet_friendly',$this->pet_friendly,true);
		$criteria->compare('open_house',$this->open_house,true);
		$criteria->compare('open_house_to_time',$this->open_house_to_time,true);
		$criteria->compare('open_house_from_time',$this->open_house_from_time,true);
		$criteria->compare('county',$this->county,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FsSearchCriteria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
