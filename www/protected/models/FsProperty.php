<?php

/**
 * This is the model class for table "fs_property".
 *
 * The followings are the available columns in table 'fs_property':
 * @property integer $id
 * @property string $fsboni_property_id
 * @property string $prop_title
 * @property integer $seller_id
 * @property string $street_number
 * @property string $compas_point
 * @property string $prp_add
 * @property integer $city
 * @property integer $state
 * @property string $zip_code
 * @property integer $neighbourhood
 * @property integer $school
 * @property string $mls_number
 * @property string $prp_desc
 * @property integer $prp_type
 * @property string $price_range
 * @property integer $numbr_bedroom
 * @property integer $numbr_bathroom
 * @property string $prop_style
 * @property integer $att_dett_style
 * @property integer $air_conditioning
 * @property integer $heating
 * @property string $kitchen_max_dimension
 * @property string $kitchen_min_dimension
 * @property string $kitchen_menu
 * @property string $kitchen_fireplace
 * @property integer $dinning
 * @property string $dinning_max_dimension
 * @property string $dinning_min_dimenstion
 * @property string $dinning_menu
 * @property string $dinning_fireplace
 * @property integer $attic
 * @property string $attic_max_dimension
 * @property string $attic_min_dimension
 * @property integer $basement_details
 * @property string $base_max_dimenstion
 * @property string $base_min_dimension
 * @property string $bath_max_dim_1
 * @property string $bath_min_dim_1
 * @property string $bath_max_dim_2
 * @property string $bath_min_dim_2
 * @property string $bath_max_dim_3
 * @property string $bath_min_dim_3
 * @property string $bed_mast_bed_max_dim
 * @property string $bed_mast_bed_min_dim
 * @property string $bed_mast_menu
 * @property string $bed_mast_fireplace
 * @property string $bed_max_dim_1
 * @property string $bed_min_dim_1
 * @property string $bed_1_menu
 * @property string $bed_1_fireplace
 * @property string $bed_max_dim_2
 * @property string $bed_min_dim_2
 * @property string $bed_2_menu
 * @property string $bed_2_fireplace
 * @property string $bed_max_dim_3
 * @property string $bed_min_dim_3
 * @property string $bed_3_menu
 * @property string $bed_3_fireplace
 * @property string $bed_max_dim_4
 * @property string $bed_min_dim_4
 * @property string $bed_4_menu
 * @property string $bed_4_fireplace
 * @property integer $fireplace_location
 * @property string $bed_max_dim_5
 * @property string $bed_min_dim_5
 * @property string $bed_5_menu
 * @property string $bed_5_fireplace
 * @property string $garage_ownrship
 * @property string $garage_on_site
 * @property string $garage_type
 * @property string $disability_access
 * @property string $elevatory_building
 * @property string $sewer
 * @property integer $water
 * @property string $pet_friendly
 * @property string $assessment
 * @property string $created_date
 * @property string $updated_date
 * @property string $status
 * @property string $electricity
 * @property string $youtube
 * @property string $list_home_inMls
 * @property string $virtual_tour
 * @property string $real_estate_attorney
 * @property string $home_warantee
 * @property string $appraiser
 * @property string $home_inspector
 * @property double $prop_size
 * @property integer $prop_view_count
 * @property string $prop_type
 * @property string $fireplace_details
 * @property string $time_frame_for_selling
 * @property string $living_room_max
 * @property string $living_room_min
 * @property string $living_room_menu
 * @property string $living_room_fire
 * @property string $family_room_max
 * @property string $family_room_min
 * @property string $family_menu
 * @property string $family_fireplace
 * @property string $den_max
 * @property string $den_min
 * @property string $den_menu
 * @property string $den_fireplace
 * @property string $laundry_max
 * @property string $laundry_min
 * @property string $laundry_menu
 * @property string $laundry_fireplace
 * @property string $balcony_max
 * @property string $balcony_min
 * @property string $balcony_menu
 * @property string $balcony_fire
 * @property string $bonus_room_max
 * @property string $bonus_room_min
 * @property string $bonus_room_menu
 * @property string $bonus_room_fireplace
 * @property string $property_taxes
 * @property string $tax_year
 * @property string $street_suffix
 * @property string $living_room_flooring
 * @property string $dinning_room_flooring
 * @property string $family_room_flooring
 * @property string $kitchen_flooring
 * @property string $mastrBedroom_flooring
 * @property string $bedroom1_flooring
 * @property string $bedroom2_flooring
 * @property string $bedroom3_flooring
 * @property string $bedroom4_flooring
 * @property string $bedroom5_flooring
 * @property string $den_flooring
 * @property string $laundry_flooring
 * @property string $den_balcony_flooring
 * @property string $bouns_flooring
 * @property string $open_house
 * @property string $open_house_to_time
 * @property string $open_house_from_time
 * @property string $county
 * @property string $frequency
 *
 * The followings are the available model relations:
 * @property FsAdditionalRoomsRelation[] $fsAdditionalRoomsRelations
 * @property FsAmenitiesRelation[] $fsAmenitiesRelations
 * @property FsAppliancesRelation[] $fsAppliancesRelations
 * @property FsAsmtInclRelation[] $fsAsmtInclRelations
 * @property FsBathroomAmenitiesRelation[] $fsBathroomAmenitiesRelations
 * @property FsEquipmentRelation[] $fsEquipmentRelations
 * @property FsExposureRelation[] $fsExposureRelations
 * @property FsExteriorConstrRelation[] $fsExteriorConstrRelations
 * @property FsInteriorPropRelation[] $fsInteriorPropRelations
 * @property FsPropImage[] $fsPropImages
 * @property FsUser $seller
 * @property FsAirConditioning $airConditioning
 * @property FsAttic $attic0
 * @property FsBasementDetails $basementDetails
 * @property FsCity $city0
 * @property FsDining $dinning0
 * @property FsFireplaceLocation $fireplaceLocation
 * @property FsGarageType $garageType
 * @property FsHeating $heating0
 * @property FsNeighbourhood $neighbourhood0
 * @property FsSchool $school0
 * @property FsWater $water0
 */
class FsProperty extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fs_property';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('state, city, county, zip_code, price_range, prop_type, numbr_bedroom,numbr_bathroom, prop_size, prp_desc,  street_number, street_name', 'required'),
            //array('state, city, county, zip_code, price_range, prop_type, prop_style, numbr_bedroom,numbr_bathroom, prop_size, prp_desc, street_number', 'required', 'on' => 'step2'),
            //array('prp_desc', 'required'),
            array('seller_id', 'numerical', 'integerOnly' => true),
            array('prop_size', 'numerical'),
            array('fsboni_property_id, street_name, prop_title, zip_code, mls_number, kitchen_max_dimension, kitchen_min_dimension, dinning_max_dimension, dinning_min_dimenstion, attic_max_dimension, attic_min_dimension, base_max_dimenstion, base_min_dimension, bath_max_dim_1, bath_min_dim_1, bath_max_dim_2, bath_min_dim_2, bath_max_dim_3, bath_min_dim_3, bed_mast_bed_max_dim, bed_mast_bed_min_dim, bed_max_dim_1, bed_min_dim_1, bed_max_dim_2, bed_min_dim_2, bed_max_dim_3, bed_min_dim_3, bed_max_dim_4, bed_min_dim_4, bed_max_dim_5, bed_min_dim_5, assessment, time_frame_for_selling, living_room_max, living_room_min, family_room_max, family_room_min, den_max, den_min, laundry_max, laundry_min, balcony_max, balcony_min, bonus_room_max, bonus_room_min, county, frequency, state, compas_point', 'length', 'max' => 255),
            array('street_number', 'length', 'max' => 100),
            //array('compas_point, status', 'length', 'max'=>1),
            array('price_range', 'length', 'max' => 20),
            array('kitchen_menu, kitchen_fireplace, dinning_menu, dinning_fireplace, bed_mast_menu, bed_mast_fireplace, bed_1_menu, bed_1_fireplace, bed_2_menu, bed_2_fireplace, bed_3_menu, bed_3_fireplace, bed_4_menu, bed_4_fireplace, bed_5_menu, bed_5_fireplace, garage_ownrship, garage_on_site, disability_access, elevatory_building, sewer, pet_friendly, electricity, list_home_inMls, virtual_tour, real_estate_attorney, home_warantee, appraiser, home_inspector, prop_type, living_room_menu, living_room_fire, family_menu, family_fireplace, den_menu, den_fireplace, laundry_menu, laundry_fireplace, balcony_menu, balcony_fire, bonus_room_menu, bonus_room_fireplace, living_room_flooring, dinning_room_flooring, family_room_flooring, kitchen_flooring, mastrBedroom_flooring, bedroom1_flooring, bedroom2_flooring, bedroom3_flooring, bedroom4_flooring, bedroom5_flooring, den_flooring, laundry_flooring, den_balcony_flooring, bouns_flooring', 'length', 'max' => 255),
            array('property_taxes, tax_year, open_house, open_house_to_time, open_house_from_time', 'length', 'max' => 50),
            array('street_suffix', 'length', 'max' => 10),
            array('prp_add, created_date, updated_date, youtube, fireplace_details', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, fsboni_property_id, prop_title, seller_id, street_number, compas_point, prp_add, city, state, zip_code, neighbourhood, school, mls_number, prp_desc, prp_type, price_range, numbr_bedroom, numbr_bathroom, prop_style, att_dett_style, air_conditioning, heating, kitchen_max_dimension, kitchen_min_dimension, kitchen_menu, kitchen_fireplace, dinning, dinning_max_dimension, dinning_min_dimenstion, dinning_menu, dinning_fireplace, attic, attic_max_dimension, attic_min_dimension, basement_details, base_max_dimenstion, base_min_dimension, bath_max_dim_1, bath_min_dim_1, bath_max_dim_2, bath_min_dim_2, bath_max_dim_3, bath_min_dim_3, bed_mast_bed_max_dim, bed_mast_bed_min_dim, bed_mast_menu, bed_mast_fireplace, bed_max_dim_1, bed_min_dim_1, bed_1_menu, bed_1_fireplace, bed_max_dim_2, bed_min_dim_2, bed_2_menu, bed_2_fireplace, bed_max_dim_3, bed_min_dim_3, bed_3_menu, bed_3_fireplace, bed_max_dim_4, bed_min_dim_4, bed_4_menu, bed_4_fireplace, fireplace_location, bed_max_dim_5, bed_min_dim_5, bed_5_menu, bed_5_fireplace, garage_ownrship, garage_on_site, garage_type, disability_access, elevatory_building, sewer, water, pet_friendly, assessment, created_date, updated_date, status, electricity, youtube, list_home_inMls, virtual_tour, real_estate_attorney, home_warantee, appraiser, home_inspector, prop_size, prop_view_count, prop_type, fireplace_details, time_frame_for_selling, living_room_max, living_room_min, living_room_menu, living_room_fire, family_room_max, family_room_min, family_menu, family_fireplace, den_max, den_min, den_menu, den_fireplace, laundry_max, laundry_min, laundry_menu, laundry_fireplace, balcony_max, balcony_min, balcony_menu, balcony_fire, bonus_room_max, bonus_room_min, bonus_room_menu, bonus_room_fireplace, property_taxes, tax_year, street_suffix, living_room_flooring, dinning_room_flooring, family_room_flooring, kitchen_flooring, mastrBedroom_flooring, bedroom1_flooring, bedroom2_flooring, bedroom3_flooring, bedroom4_flooring, bedroom5_flooring, den_flooring, laundry_flooring, den_balcony_flooring, bouns_flooring, open_house, open_house_to_time, open_house_from_time, county, frequency, street_name, building_name,sub_division', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'fsAdditionalRoomsRelations' => array(self::HAS_MANY, 'FsAdditionalRoomsRelation', 'prop_id'),
            'fsAmenitiesRelations' => array(self::HAS_MANY, 'FsAmenitiesRelation', 'prop_id'),
            'fsAssessnicRelations' => array(self::HAS_MANY, 'FsAssessincRelation', 'prop_id'),
            'fsKitchenRelations' => array(self::HAS_MANY, 'FsKitchenRelation', 'prop_id'),
            'fsAppliancesRelations' => array(self::HAS_MANY, 'FsAppliancesRelation', 'prop_id'),
            'fsAsmtInclRelations' => array(self::HAS_MANY, 'FsAsmtInclRelation', 'prop_id'),
            'fsBathroomAmenitiesRelations' => array(self::HAS_MANY, 'FsBathroomAmenitiesRelation', 'prop_id'),
            'fsEquipmentRelations' => array(self::HAS_MANY, 'FsEquipmentRelation', 'prop_id'),
            'fsExposureRelations' => array(self::HAS_MANY, 'FsExposureRelation', 'prop_id'),
            'fsExteriorConstrRelations' => array(self::HAS_MANY, 'FsExteriorConstrRelation', 'prop_id'),
            'fsInteriorPropRelations' => array(self::HAS_MANY, 'FsInteriorPropRelation', 'prop_id'),
            'fsPropImages' => array(self::HAS_MANY, 'FsPropImage', 'prop_id'),
            'seller' => array(self::BELONGS_TO, 'FsUser', 'seller_id'),
            'airConditioning' => array(self::BELONGS_TO, 'FsAirConditioning', 'air_conditioning'),
            'attic0' => array(self::BELONGS_TO, 'FsAttic', 'attic'),
            'basementDetails' => array(self::BELONGS_TO, 'FsBasementDetails', 'basement_details'),
            'city0' => array(self::BELONGS_TO, 'FsCity', 'city'),
            'state0' => array(self::BELONGS_TO, 'FsStateMaster', 'state'),
            'dinning0' => array(self::BELONGS_TO, 'FsDining', 'dinning'),
            'fireplaceLocation' => array(self::BELONGS_TO, 'FsFireplaceLocation', 'fireplace_location'),
            'garageType' => array(self::BELONGS_TO, 'FsGarageType', 'garage_type'),
            'heating0' => array(self::BELONGS_TO, 'FsHeating', 'heating'),
            'neighbourhood0' => array(self::BELONGS_TO, 'FsNeighbourhood', 'neighbourhood'),
            'school0' => array(self::BELONGS_TO, 'FsSchool', 'school'),
            'water0' => array(self::BELONGS_TO, 'FsWater', 'water'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'fsboni_property_id' => 'FSBONI ID',
            'prop_title' => 'Prop Title',
            'seller_id' => 'Seller',
            'street_number' => 'Street Number',
            'compas_point' => 'Compas Point',
            'prp_add' => 'Prp Add',
            'city' => 'City',
            'state' => 'State',
            'zip_code' => 'Zip Code',
            'neighbourhood' => 'Neighborhood',
            'school' => 'School',
            'mls_number' => 'Mls Number',
            'prp_desc' => 'Property Description',
            'prp_type' => 'Prp Type',
            'price_range' => 'Sales Price',
            'numbr_bedroom' => 'Bedrooms',
            'numbr_bathroom' => 'Bathrooms',
            'prop_style' => 'Property Style',
            'att_dett_style' => 'Att Dett Style',
            'air_conditioning' => 'Air Conditioning',
            'heating' => 'Heating',
            'kitchen_max_dimension' => 'Kitchen Max Dimension',
            'kitchen_min_dimension' => 'Kitchen Min Dimension',
            'kitchen_menu' => 'Kitchen Dimensions',
            'kitchen_fireplace' => 'Fire Place',
            'dinning' => 'Dinning',
            'dinning_max_dimension' => 'Dinning Max Dimension',
            'dinning_min_dimenstion' => 'Dinning Min Dimenstion',
            'dinning_menu' => 'Dinning Room Dimensions',
            'dinning_fireplace' => 'Fire Place',
            'attic' => 'Attic (Detached Only)',
            'attic_max_dimension' => 'Attic Max Dimension',
            'attic_min_dimension' => 'Attic Min Dimension',
            'basement_details' => 'Basement Details',
            'base_max_dimenstion' => 'Base Max Dimenstion',
            'base_min_dimension' => 'Base Min Dimension',
            'bath_max_dim_1' => 'Bath Max Dim 1',
            'bath_min_dim_1' => 'Bath Min Dim 1',
            'bath_max_dim_2' => 'Bath Max Dim 2',
            'bath_min_dim_2' => 'Bath Min Dim 2',
            'bath_max_dim_3' => 'Bath Max Dim 3',
            'bath_min_dim_3' => 'Bath Min Dim 3',
            'bed_mast_bed_max_dim' => 'Bed Mast Bed Max Dim',
            'bed_mast_bed_min_dim' => 'Bed Mast Bed Min Dim',
            'bed_mast_menu' => 'Master Bedroom',
            'bed_mast_fireplace' => 'Fire Place',
            'bed_max_dim_1' => 'Bed Max Dim 1',
            'bed_min_dim_1' => 'Bed Min Dim 1',
            'bed_1_menu' => 'Bedroom1',
            'bed_1_fireplace' => 'Fire Place',
            'bed_max_dim_2' => 'Bed Max Dim 2',
            'bed_min_dim_2' => 'Bed Min Dim 2',
            'bed_2_menu' => 'Bedroom2',
            'bed_2_fireplace' => 'Fire Place',
            'bed_max_dim_3' => 'Bed Max Dim 3',
            'bed_min_dim_3' => 'Bed Min Dim 3',
            'bed_3_menu' => 'Bedroom3',
            'bed_3_fireplace' => 'Fire Place',
            'bed_max_dim_4' => 'Bed Max Dim 4',
            'bed_min_dim_4' => 'Bed Min Dim 4',
            'bed_4_menu' => 'Bedroom4',
            'bed_4_fireplace' => 'Fire Place',
            'fireplace_location' => 'Fireplace Location',
            'bed_max_dim_5' => 'Bed Max Dim 5',
            'bed_min_dim_5' => 'Bed Min Dim 5',
            'bed_5_menu' => 'Bedroom5',
            'bed_5_fireplace' => 'Fire Place',
            'garage_ownrship' => 'Garage Ownrship',
            'garage_on_site' => 'Garage On Site',
            'garage_type' => 'Garage Type',
            'disability_access' => 'Disability Access',
            'elevatory_building' => 'Elevatory Building',
            'sewer' => 'Sewer',
            'water' => 'Water',
            'pet_friendly' => 'Pets',
            'assessment' => 'Assessment',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'status' => 'Status',
            'electricity' => 'Electricity',
            'youtube' => 'Upload Youtube Video',
            'list_home_inMls' => 'List your Home In Mls for a flat fee',
            'virtual_tour' => 'Virtual Tour',
            'real_estate_attorney' => 'Real Estate Attorney',
            'home_warantee' => 'Home Warrantee',
            'appraiser' => 'Appraiser',
            'home_inspector' => 'Home Inspector',
            'prop_size' => 'Square Footage',
            'prop_view_count' => 'Prop View Count',
            'prop_type' => 'Property Type',
            'fireplace_details' => 'Fireplace Details',
            'time_frame_for_selling' => 'Time Frame For Selling',
            'living_room_max' => 'Living Room Max',
            'living_room_min' => 'Living Room Min',
            'living_room_menu' => 'Living Room',
            'living_room_fire' => 'Fire Place',
            'family_room_max' => 'Family Room Max',
            'family_room_min' => 'Family Room Min',
            'family_menu' => 'Family Room',
            'family_fireplace' => 'Fire Place',
            'den_max' => 'Den Max',
            'den_min' => 'Den Min',
            'den_menu' => 'Den/Loft/Office',
            'den_fireplace' => 'Fire Place',
            'laundry_max' => 'Laundry Max',
            'laundry_min' => 'Laundry Min',
            'laundry_menu' => 'Laundry Room',
            'laundry_fireplace' => 'Fire Place',
            'balcony_max' => 'Balcony Max',
            'balcony_min' => 'Balcony Min',
            'balcony_menu' => 'Deck/Balcony',
            'balcony_fire' => 'Fire Place',
            'bonus_room_max' => 'Bonus Room Max',
            'bonus_room_min' => 'Bonus Room Min',
            'bonus_room_menu' => 'Bonus Room',
            'bonus_room_fireplace' => 'Fire Place',
            'property_taxes' => 'Property Taxes',
            'tax_year' => 'Tax Year',
            'street_suffix' => 'Street Suffix',
            'living_room_flooring' => 'Flooring',
            'dinning_room_flooring' => 'Flooring',
            'family_room_flooring' => 'Flooring',
            'kitchen_flooring' => 'Flooring',
            'mastrBedroom_flooring' => 'Flooring',
            'bedroom1_flooring' => 'Flooring',
            'bedroom2_flooring' => 'Flooring',
            'bedroom3_flooring' => 'Flooring',
            'bedroom4_flooring' => 'Flooring',
            'bedroom5_flooring' => 'Flooring',
            'den_flooring' => 'Flooring',
            'laundry_flooring' => 'Flooring',
            'den_balcony_flooring' => 'Flooring',
            'bouns_flooring' => 'Flooring',
            'open_house' => 'Open House',
            'open_house_to_time' => 'Open House To Time',
            'open_house_from_time' => 'Open House From Time',
            'county' => 'County',
            'frequency' => 'Frequency',
            'street_name' => 'Street Name',
            'building_name' => 'Building Name',
            'sub_division' => 'Sub-Division'
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

        $criteria->compare('id', $this->id);
        $criteria->compare('fsboni_property_id', $this->fsboni_property_id, true);
        $criteria->compare('prop_title', $this->prop_title, true);
        $criteria->compare('seller_id', $this->seller_id);
        $criteria->compare('street_number', $this->street_number, true);
        $criteria->compare('compas_point', $this->compas_point, true);
        $criteria->compare('prp_add', $this->prp_add, true);
        $criteria->compare('city', $this->city);
        $criteria->compare('state', $this->state);
        $criteria->compare('zip_code', $this->zip_code, true);
        $criteria->compare('neighbourhood', $this->neighbourhood);
        $criteria->compare('school', $this->school);
        $criteria->compare('mls_number', $this->mls_number, true);
        $criteria->compare('prp_desc', $this->prp_desc, true);
        $criteria->compare('prp_type', $this->prp_type);
        $criteria->compare('price_range', $this->price_range, true);
        $criteria->compare('numbr_bedroom', $this->numbr_bedroom);
        $criteria->compare('numbr_bathroom', $this->numbr_bathroom);
        $criteria->compare('prop_style', $this->prop_style, true);
        $criteria->compare('att_dett_style', $this->att_dett_style);
        $criteria->compare('air_conditioning', $this->air_conditioning);
        $criteria->compare('heating', $this->heating);
        $criteria->compare('kitchen_max_dimension', $this->kitchen_max_dimension, true);
        $criteria->compare('kitchen_min_dimension', $this->kitchen_min_dimension, true);
        $criteria->compare('kitchen_menu', $this->kitchen_menu, true);
        $criteria->compare('kitchen_fireplace', $this->kitchen_fireplace, true);
        $criteria->compare('dinning', $this->dinning);
        $criteria->compare('dinning_max_dimension', $this->dinning_max_dimension, true);
        $criteria->compare('dinning_min_dimenstion', $this->dinning_min_dimenstion, true);
        $criteria->compare('dinning_menu', $this->dinning_menu, true);
        $criteria->compare('dinning_fireplace', $this->dinning_fireplace, true);
        $criteria->compare('attic', $this->attic);
        $criteria->compare('attic_max_dimension', $this->attic_max_dimension, true);
        $criteria->compare('attic_min_dimension', $this->attic_min_dimension, true);
        $criteria->compare('basement_details', $this->basement_details);
        $criteria->compare('base_max_dimenstion', $this->base_max_dimenstion, true);
        $criteria->compare('base_min_dimension', $this->base_min_dimension, true);
        $criteria->compare('bath_max_dim_1', $this->bath_max_dim_1, true);
        $criteria->compare('bath_min_dim_1', $this->bath_min_dim_1, true);
        $criteria->compare('bath_max_dim_2', $this->bath_max_dim_2, true);
        $criteria->compare('bath_min_dim_2', $this->bath_min_dim_2, true);
        $criteria->compare('bath_max_dim_3', $this->bath_max_dim_3, true);
        $criteria->compare('bath_min_dim_3', $this->bath_min_dim_3, true);
        $criteria->compare('bed_mast_bed_max_dim', $this->bed_mast_bed_max_dim, true);
        $criteria->compare('bed_mast_bed_min_dim', $this->bed_mast_bed_min_dim, true);
        $criteria->compare('bed_mast_menu', $this->bed_mast_menu, true);
        $criteria->compare('bed_mast_fireplace', $this->bed_mast_fireplace, true);
        $criteria->compare('bed_max_dim_1', $this->bed_max_dim_1, true);
        $criteria->compare('bed_min_dim_1', $this->bed_min_dim_1, true);
        $criteria->compare('bed_1_menu', $this->bed_1_menu, true);
        $criteria->compare('bed_1_fireplace', $this->bed_1_fireplace, true);
        $criteria->compare('bed_max_dim_2', $this->bed_max_dim_2, true);
        $criteria->compare('bed_min_dim_2', $this->bed_min_dim_2, true);
        $criteria->compare('bed_2_menu', $this->bed_2_menu, true);
        $criteria->compare('bed_2_fireplace', $this->bed_2_fireplace, true);
        $criteria->compare('bed_max_dim_3', $this->bed_max_dim_3, true);
        $criteria->compare('bed_min_dim_3', $this->bed_min_dim_3, true);
        $criteria->compare('bed_3_menu', $this->bed_3_menu, true);
        $criteria->compare('bed_3_fireplace', $this->bed_3_fireplace, true);
        $criteria->compare('bed_max_dim_4', $this->bed_max_dim_4, true);
        $criteria->compare('bed_min_dim_4', $this->bed_min_dim_4, true);
        $criteria->compare('bed_4_menu', $this->bed_4_menu, true);
        $criteria->compare('bed_4_fireplace', $this->bed_4_fireplace, true);
        $criteria->compare('fireplace_location', $this->fireplace_location);
        $criteria->compare('bed_max_dim_5', $this->bed_max_dim_5, true);
        $criteria->compare('bed_min_dim_5', $this->bed_min_dim_5, true);
        $criteria->compare('bed_5_menu', $this->bed_5_menu, true);
        $criteria->compare('bed_5_fireplace', $this->bed_5_fireplace, true);
        $criteria->compare('garage_ownrship', $this->garage_ownrship, true);
        $criteria->compare('garage_on_site', $this->garage_on_site, true);
        $criteria->compare('garage_type', $this->garage_type, true);
        $criteria->compare('disability_access', $this->disability_access, true);
        $criteria->compare('elevatory_building', $this->elevatory_building, true);
        $criteria->compare('sewer', $this->sewer, true);
        $criteria->compare('water', $this->water);
        $criteria->compare('pet_friendly', $this->pet_friendly, true);
        $criteria->compare('assessment', $this->assessment, true);
        $criteria->compare('created_date', $this->created_date, true);
        $criteria->compare('updated_date', $this->updated_date, true);
        //$criteria->compare('status', $this->status, true);
        $criteria->compare('electricity', $this->electricity, true);
        $criteria->compare('youtube', $this->youtube, true);
        $criteria->compare('list_home_inMls', $this->list_home_inMls, true);
        $criteria->compare('virtual_tour', $this->virtual_tour, true);
        $criteria->compare('real_estate_attorney', $this->real_estate_attorney, true);
        $criteria->compare('home_warantee', $this->home_warantee, true);
        $criteria->compare('appraiser', $this->appraiser, true);
        $criteria->compare('home_inspector', $this->home_inspector, true);
        $criteria->compare('prop_size', $this->prop_size);
        $criteria->compare('prop_view_count', $this->prop_view_count);
        $criteria->compare('prop_type', $this->prop_type, true);
        $criteria->compare('fireplace_details', $this->fireplace_details, true);
        $criteria->compare('time_frame_for_selling', $this->time_frame_for_selling, true);
        $criteria->compare('living_room_max', $this->living_room_max, true);
        $criteria->compare('living_room_min', $this->living_room_min, true);
        $criteria->compare('living_room_menu', $this->living_room_menu, true);
        $criteria->compare('living_room_fire', $this->living_room_fire, true);
        $criteria->compare('family_room_max', $this->family_room_max, true);
        $criteria->compare('family_room_min', $this->family_room_min, true);
        $criteria->compare('family_menu', $this->family_menu, true);
        $criteria->compare('family_fireplace', $this->family_fireplace, true);
        $criteria->compare('den_max', $this->den_max, true);
        $criteria->compare('den_min', $this->den_min, true);
        $criteria->compare('den_menu', $this->den_menu, true);
        $criteria->compare('den_fireplace', $this->den_fireplace, true);
        $criteria->compare('laundry_max', $this->laundry_max, true);
        $criteria->compare('laundry_min', $this->laundry_min, true);
        $criteria->compare('laundry_menu', $this->laundry_menu, true);
        $criteria->compare('laundry_fireplace', $this->laundry_fireplace, true);
        $criteria->compare('balcony_max', $this->balcony_max, true);
        $criteria->compare('balcony_min', $this->balcony_min, true);
        $criteria->compare('balcony_menu', $this->balcony_menu, true);
        $criteria->compare('balcony_fire', $this->balcony_fire, true);
        $criteria->compare('bonus_room_max', $this->bonus_room_max, true);
        $criteria->compare('bonus_room_min', $this->bonus_room_min, true);
        $criteria->compare('bonus_room_menu', $this->bonus_room_menu, true);
        $criteria->compare('bonus_room_fireplace', $this->bonus_room_fireplace, true);
        $criteria->compare('property_taxes', $this->property_taxes, true);
        $criteria->compare('tax_year', $this->tax_year, true);
        $criteria->compare('street_suffix', $this->street_suffix, true);
        $criteria->compare('living_room_flooring', $this->living_room_flooring, true);
        $criteria->compare('dinning_room_flooring', $this->dinning_room_flooring, true);
        $criteria->compare('family_room_flooring', $this->family_room_flooring, true);
        $criteria->compare('kitchen_flooring', $this->kitchen_flooring, true);
        $criteria->compare('mastrBedroom_flooring', $this->mastrBedroom_flooring, true);
        $criteria->compare('bedroom1_flooring', $this->bedroom1_flooring, true);
        $criteria->compare('bedroom2_flooring', $this->bedroom2_flooring, true);
        $criteria->compare('bedroom3_flooring', $this->bedroom3_flooring, true);
        $criteria->compare('bedroom4_flooring', $this->bedroom4_flooring, true);
        $criteria->compare('bedroom5_flooring', $this->bedroom5_flooring, true);
        $criteria->compare('den_flooring', $this->den_flooring, true);
        $criteria->compare('laundry_flooring', $this->laundry_flooring, true);
        $criteria->compare('den_balcony_flooring', $this->den_balcony_flooring, true);
        $criteria->compare('bouns_flooring', $this->bouns_flooring, true);
        $criteria->compare('open_house', $this->open_house, true);
        $criteria->compare('open_house_to_time', $this->open_house_to_time, true);
        $criteria->compare('open_house_from_time', $this->open_house_from_time, true);
        $criteria->compare('county', $this->county, true);
        $criteria->compare('frequency', $this->frequency, true);
        $criteria->compare('street_name', $this->street_name, true);
        $criteria->order = 'id ASC';
        $criteria->limit = 13;

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return FsProperty the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
