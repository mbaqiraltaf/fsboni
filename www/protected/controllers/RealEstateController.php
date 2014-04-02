<?php

class RealEstateController extends Controller {

    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('myAccount'),
                'roles' => array('member'),
            ),
        );
    }

    public function actionIndex() {
        $this->render('index');
    }

    public function actionAboutUs() {
        $this->render('about-us');
    }

    public function actionMortgages() {
        $this->render('mortgages');
    }

    public function actionLinks() {
        $this->render('links');
    }

    public function actionFlatFee() {
        $this->render('flat-fee');
    }

    public function actionAgent() {
        $this->render('agent');
    }

    public function actionTermsConditions() {
        $this->render('terms-conditions');
    }

    public function actionCommunities() {
        $this->render('communities');
    }

    public function actionPrivacyPolicy() {
        $this->render('privacy-policy');
    }

    public function actionMortgageNewsletter() {
        $this->render('mortgage-newsletter');
    }

    public function actionContactUs() {
        $this->render('contact-us');
    }

    public function actionTestinomials() {
        $this->render('testinomials');
    }

    public function actionForgotPassword() {
        $model = new ResetForm;
        $message = '';
        if (isset($_POST['submit_x'])) {
            $model->attributes = $_POST['ResetForm'];
            if ($model->validate()) {
                $email = new EmailHelper();
                $userInfo = FsUser::model()->findAll("email = '" . $model->email . "'");
                $email->sendPassword($model->email, $userInfo[0]->first_name . ' ' . $userInfo[0]->last_name, $userInfo[0]->paswd);
                $message = 'An email containing your password will be sent to your email address shortly';
            }
        }
        $this->render('forgot-password', array('model' => $model, 'message' => $message));
    }

    public function actionSearch() {
        $model = new FsSearchCriteria;
        if (CHttpRequest::getParam('prop_id') != null) {
            $result = FsProperty::model()->findAll('fsboni_property_id = "' . CHttpRequest::getParam('prop_id') . '"');
            $image = FsPropGallery::model()->findAll('prop_id = ' . $result[0]->id);
            $this->render('search', array('model' => $model, 'property_details' => $result[0], 'image' => $image[0]));
        } else {
            if (isset($_POST['search_submit'])) {
                $criteria = new CDbCriteria();
                $criteria->order = 'id ASC';
                $criteria->limit = 13;
                $result = FsProperty::model()->findAll($criteria);
                $images = array();
                foreach ($result as $record) {
                    $image = FsPropGallery::model()->findAll('prop_id = ' . $record->id);
                    if (count($image) > 0)
                        $images[$record->id] = $image[0]->image_name;
                    else
                        $images[$record->id] = 'home.jpg';
                }
                $this->render('search', array('model' => $model, 'search_results' => $result, 'images' => $images));
            }
            else {
                $this->render('search', array('model' => $model));
            }
        }
    }

    public function actionFullPageListing() {
        if (Yii::app()->user->getId() !== null) {
            if (CHttpRequest::getParam('prop_id') != null) {
                $result = FsProperty::model()->with(array(
                            'city0' => array('select' => 'city'),
                            'state0' => array('select' => 'state_name'),
                            'dinning0' => array('select' => 'title'),
                            'airConditioning' => array('select' => 'title'),
                            'heating0' => array('select' => 'title'),
                            'attic0' => array('select' => 'title'),
                            'basementDetails' => array('select' => 'title'),
                            'garageType' => array('select' => 'title'),
                            'water0' => array('select' => 'title'),
                            'fsInteriorPropRelations',
                            'fsAppliancesRelations',
                            'fsBathroomAmenitiesRelations',
                            'fsAdditionalRoomsRelations',
                            'fsEquipmentRelations',
                            'fsExteriorConstrRelations',
                            //'fsAmenitiesRelations',
                            'fsKitchenRelations',
                                //'fsAssessnicRelations'
                        ))->findAll('fsboni_property_id = "' . CHttpRequest::getParam('prop_id') . '"');
//                $images = array();
//                foreach ($result as $record) {
//                    $image = FsPropGallery::model()->findAll('prop_id = ' . $record->id);
//                    if (count($image) > 0)
//                        $images[$record->id] = $image[0]->image_name;
//                    else
//                        $images[$record->id] = 'home.jpg';
//                }
                $image = FsPropGallery::model()->findAll('prop_id = ' . $result[0]->id);
                $this->render('full-page-listing', array('property_details' => $result[0], 'image' => $image));
            }
        } else {
            $user = new FsUser;

            if (isset($_POST['submit_x'])) {
                $user->attributes = CHttpRequest::getParam('FsUser');

                if ($user->validate()) {
                    $user->save();
                    $this->actionGenerateUrl($user->user_id);
                    $this->redirect(array('success'));
                }
            }
            $this->render('buyer-register', array('user' => $user));
        }
    }

    public function actionSellHome() {
        if (isset($_POST['submit_property_x'])) {
            $model = new FsProperty();
            $user = $this->getPageState('step1', array());
            $model->attributes = $user;
            $property = CHttpRequest::getParam('FsProperty');
            $number_bedroom = '';
            $number_bathroom = '';
            foreach ($property['numbr_bedroom'] as $bedroom) {
                $number_bedroom .= $bedroom;
            }
            foreach ($property['numbr_bathroom'] as $bathroom) {
                $number_bathroom .= $bathroom;
            }
            $property['numbr_bedroom'] = $number_bedroom;
            $property['numbr_bathroom'] = $number_bathroom;
            $model->attributes = $property;
            $fsboni_id = FsProperty::model()->findAll(array('order' => 'id DESC', 'limit' => '1'));
            $fsboni_property_id = $fsboni_id[0]->fsboni_property_id;
            $fsboni_property_id++;
            $model->fsboni_property_id = $fsboni_property_id;
            if ($model->save()) {
                $this->redirect(array('myAccount'));
            } else {
                $this->render('step2', array('model' => $model));
            }
        } else {
            $user_id = CHttpRequest::getParam('uid');
            $this->setPageState('step1', array('seller_id' => $user_id));
            $model = new FsProperty('new');
            $this->render('step2', array('model' => $model));
        }

//        if (isset($_POST['step3_x'])) {
//
//            $model = new FsProperty('step2');
//            $property = CHttpRequest::getParam('FsProperty');
//            $number_bedroom = '';
//            $number_bathroom = '';
//            foreach ($property['numbr_bedroom'] as $bedroom) {
//                $number_bedroom .= $bedroom;
//            }
//
//            foreach ($property['numbr_bathroom'] as $bathroom) {
//                $number_bathroom .= $bathroom;
//            }
//
//            $property['numbr_bedroom'] = $number_bedroom;
//            $property['numbr_bathroom'] = $number_bathroom;
//            $this->setPageState('step2', $property);
//            $model->attributes = $property;
//            if ($model->validate()) {
//                $interior_relation = new FsInteriorPropRelation;
//                $appliances_relation = new FsAppliancesRelation;
//                $kitchen_relation = new FsKitchenRelation;
//                $bathroom_amenities_relation = new FsBathroomAmenitiesRelation;
//                $addition_rooms_relation = new FsAdditionalRoomsRelation;
//                $equipment_relation = new FsEquipmentRelation;
//                $this->render('step3', array('model' => $model, 'interior_feature' => $interior_relation, 'appliances_relation' => $appliances_relation, 'kitchen_relation' => $kitchen_relation, 'bathroom_relation' => $bathroom_amenities_relation, 'additional_room_relation' => $addition_rooms_relation, 'equipment_relation' => $equipment_relation));
//            } else {
//                $this->render('step2', array('model' => $model));
//            }
//        } else if (isset($_POST['step4_x'])) {
//            $this->setPageState('step3', CHttpRequest::getParam('FsProperty'));
//            $this->setPageState('interior_relation', CHttpRequest::getParam('FsInteriorPropRelation'));
//            $this->setPageState('appliances_relation', CHttpRequest::getParam('FsAppliancesRelation'));
//            $this->setPageState('kitchen_relation', CHttpRequest::getParam('FsKitchenRelation'));
//            $this->setPageState('bathroom_amenities_relation', CHttpRequest::getParam('FsBathroomAmenitiesRelation'));
//            $this->setPageState('addition_rooms_relation', CHttpRequest::getParam('FsAdditionalRoomsRelation'));
//            $this->setPageState('equipment_relation', CHttpRequest::getParam('FsEquipmentRelation'));
//            $model = new FsProperty('step3');
//            $model->attributes = CHttpRequest::getParam('FsProperty');
//            $exterior_relation = new FsExteriorConstrRelation;
//            $amenities_relation = new FsAmenitiesRelation;
//            $assessments_include = new FsAssessincRelation;
//            $this->render('step4', array('model' => $model, 'exterior_relation' => $exterior_relation, 'amenities_relation' => $amenities_relation, 'assessments_include' => $assessments_include));
//        } else if (isset($_POST['step5_x'])) {
//            $this->setPageState('step4', CHttpRequest::getParam('FsProperty'));
//            $this->setPageState('exterior_relation', CHttpRequest::getParam('FsExteriorConstrRelation'));
//            $this->setPageState('amenities_relation', CHttpRequest::getParam('FsAmenitiesRelation'));
//            $this->setPageState('assessments_include', CHttpRequest::getParam('FsAssessincRelation'));
//            $model = new FsProperty('step4');
//            $model->attributes = CHttpRequest::getParam('FsProperty');
//            $this->render('step5', array('model' => $model));
//        } else if (isset($_POST['step6_x'])) {
//            $this->setPageState('step5', CHttpRequest::getParam('FsProperty'));
//            $model = new FsProperty('step5');
//            $model->attributes = CHttpRequest::getParam('FsProperty');
//            $this->render('step6', array('model' => $model));
//        } else if (isset($_POST['save_x'])) {
//            $model = new FsProperty();
//            $user = $this->getPageState('step1', array());
//            $model->attributes = $user;
//            $model->attributes = $this->getPageState('step2', array());
//            $model->attributes = $this->getPageState('step3', array());
//            $model->attributes = $this->getPageState('step4', array());
//            $model->attributes = $this->getPageState('step5', array());
//            $model->attributes = CHttpRequest::getParam('FsProperty');
//
//            $fsboni_id = FsProperty::model()->findAll(array('order' => 'id DESC', 'limit' => '1'));
//            $fsboni_property_id = $fsboni_id[0]->fsboni_property_id;
//            $fsboni_property_id++;
//            $model->fsboni_property_id = $fsboni_property_id;
//
//            if ($model->save()) {
//                $id = $model->id;
//                $this->saveRelationalTables($id, $this->getPageState('interior_relation', array()), 'FsInteriorPropRelation');
//                $this->saveRelationalTables($id, $this->getPageState('appliances_relation', array()), 'FsAppliancesRelation');
//                $this->saveRelationalTables($id, $this->getPageState('kitchen_relation', array()), 'FsKitchenRelation');
//                $this->saveRelationalTables($id, $this->getPageState('bathroom_amenities_relation', array()), 'FsBathroomAmenitiesRelation');
//                $this->saveRelationalTables($id, $this->getPageState('equipment_relation', array()), 'FsEquipmentRelation');
//                $this->saveRelationalTables($id, $this->getPageState('exterior_relation', array()), 'FsExteriorConstrRelation');
//                $this->saveRelationalTables($id, $this->getPageState('amenities_relation', array()), 'FsAmenitiesRelation');
//                $this->saveRelationalTables($id, $this->getPageState('assessments_include', array()), 'FsAssessincRelation');
//                //$this->actionGenerateUrl($user['seller_id']);
//                $this->redirect(array('myAccount'));
//            } else {
//                $this->render('step6', array('model' => $model));
//            }
//        } else {
//            $user_id = CHttpRequest::getParam('uid');
//            $this->setPageState('step1', array('seller_id' => $user_id));
//            $model = new FsProperty('new');
//            $this->render('step2', array('model' => $model));
//        }
    }

    public function saveRelationalTables($prop_id, $relationalData, $modelName) {
        foreach ($relationalData as $key => &$value) {
            $value = array_filter($value);
        }

        foreach ($relationalData as $key => $values) {
            if (is_array($values)) {
                foreach ($values as $value) {
                    $model = new $modelName();
                    $model->prop_id = $prop_id;
                    $model->$key = $value;
                    $model->save();
                }
            }
        }
    }

    public function actionListing() {
        $seller_properties = FsProperty::model()->findAll('seller_id = ' . Yii::app()->user->getId());
        $this->render('listing', array('properties' => $seller_properties));
    }

    public function actionInquiryMadeByBuyers() {
        $this->render('inquiries-buyers');
    }

    public function actionInquiriesMadeToSellers() {
        $this->render('inquiries-sellers');
    }

    public function actionSavedSearches() {
        $this->render('saved-searches');
    }

    public function actionSellerRegistration() {
        $seller = new FsSeller;
        $user = new FsUser;

        if (isset($_POST['submit_x'])) {
            $userArray = CHttpRequest::getParam('FsUser');
            $salt = sha1(md5($userArray['paswd']));
            $user->attributes = $userArray;
            $user->salt = $salt;
            $seller->attributes = CHttpRequest::getParam('FsSeller');
            $valid = $user->validate();
            if ($valid) {
                $user->paswd = md5($userArray['paswd'] . $salt);
                $user->repeat_password = md5($userArray['paswd'] . $salt);
                $user->save();
                $seller->user_id = $user->user_id;

                $seller->save();
                //$this->redirect(array('sellHome', 'uid' => $user->user_id));
                $this->actionGenerateUrl($user->user_id);
                $this->redirect(array('success'));
            }
        }
        $this->render('step1', array('seller' => $seller, 'user' => $user));
    }

    public function actionSuccess() {
        $this->render('registration-success');
    }

    public function actionLoadCities() {
        $data = array();
        $state_id = CHttpRequest::getParam('state_id');
        if (!empty($state_id)) {
            $model = FsCity::model()->findAll('state_id = ' . $state_id);
            foreach ($model as $get) {
                $data[] = $get->city;
            }
        }
        echo json_encode($data);
    }

    public function actionLoadCounties() {
        $data = array();
        $city_name = CHttpRequest::getParam('city_name');
        if (!empty($city_name)) {
            $city = FsCity::model()->findAll("city = '" . $city_name . "'");
            $model = FsCounty::model()->findAll('id = ' . $city[0]->id);
            foreach ($model as $get) {
                $data[] = $get->NAME;
            }
        }
        echo json_encode($data);
    }

    public function actionLoadZipCode() {
        $data = array();
        $county_name = CHttpRequest::getParam('county_name');
        $city_name = CHttpRequest::getParam('city_name');
        if (!empty($county_name) && !empty($city_name)) {
            $city = FsCity::model()->findAll("city = '" . $city_name . "'");
            $county = FsCounty::model()->findAll("NAME = '" . $county_name . "' and id = " . $city[0]->id);
            $model = FsZipcode::model()->findAll('countyid = ' . $county[0]->countyid);
            foreach ($model as $get) {
                $data[] = $get->NAME;
            }
        }
        echo json_encode($data);
    }

    public function actionGenerateUrl($user_id) {
        if (empty($user_id)) {
            $user_id = Yii::app()->user->getId();
        }
        $final = '';
        for ($i = 0; $i <= 9; $i++) {
            $final .= rand(0, 9);
            if ($i == 4) {
                $final .= $user_id;
            }
        }
        $url = $this->createAbsoluteUrl('login', array('z' => 'c', 'user_id' => $final));

        $userInfo = FsUser::model()->findAll('user_id = ' . $user_id);
        $email = new EmailHelper();
        $email->sendActivationEmail($userInfo[0]->email, $url, $userInfo[0]->first_name . ' ' . $userInfo[0]->last_name, $userInfo[0]->paswd);
    }

    public function actionLogin() {
        if (isset($_GET['z']) && isset($_GET['user_id']) || Yii::app()->user->getId() !== null) {
            $decrypted = '';

            if (Yii::app()->user->getId() !== null) {
                $decrypted = Yii::app()->user->getId();
            } else {
                $z = CHttpRequest::getParam('z');
                $user_id = CHttpRequest::getParam('user_id');
                Yii::app()->user->setState('Role', 'member');
                $decrypted = substr($user_id, 5, count($user_id) - 5 - 1);
                Yii::app()->user->setId($decrypted);
            }

            $user = FsUser::model()->findAll('user_id = ' . $decrypted);
            if (count($user) > 0) {
                $this->redirect(array('myAccount'));
            } else {
                $model = new LoginForm;
                $this->render('login-form', array('model' => $model));
            }
        } else {
            $model = new LoginForm;
            if (isset($_POST['login_x'])) {
                $model->attributes = $_POST['LoginForm'];
                if ($model->validate()) {
                    $user = FsUser::model()->find("email = '" . $model->username . "'");
                    Yii::app()->user->setId($user->user_id);
                    Yii::app()->user->setState('Role', 'member');
                    $this->redirect(array('myAccount'));
                } else {
                    $this->render('login-form', array('model' => $model));
                }
            } else {
                $this->render('login-form', array('model' => $model));
            }
        }
    }

    public function actionMyAccount() {
        $seller_properties = FsProperty::model()->findAll('seller_id = ' . Yii::app()->user->getId());
        $this->render('my-account', array('properties' => $seller_properties));
    }

    public function actionMembershipPage() {
        $this->redirect(array('myAccount'));
    }

    public function actionChangePassword() {
        $this->render('change-password');
    }

    public function actionEditProperty() {
        if (CHttpRequest::getParam('prop_id') != null) {
            $result = FsProperty::model()->findAll('fsboni_property_id = "' . CHttpRequest::getParam('prop_id') . '"');
            $interior_relation = new FsInteriorPropRelation;
            $appliances_relation = new FsAppliancesRelation;
            $kitchen_relation = new FsKitchenRelation;
            $bathroom_amenities_relation = new FsBathroomAmenitiesRelation;
            $addition_rooms_relation = new FsAdditionalRoomsRelation;
            $equipment_relation = new FsEquipmentRelation;
//                $this->render('step3', array('model' => $model, 'interior_feature' => $interior_relation, 'appliances_relation' => $appliances_relation, 'kitchen_relation' => $kitchen_relation, 'bathroom_relation' => $bathroom_amenities_relation, 'additional_room_relation' => $addition_rooms_relation, 'equipment_relation' => $equipment_relation));
            $this->render('edit-property', array('property_data' => $result[0], 'interior_feature' => $interior_relation, 'appliances_relation' => $appliances_relation, 'kitchen_relation' => $kitchen_relation, 'bathroom_relation' => $bathroom_amenities_relation, 'additional_room_relation' => $addition_rooms_relation, 'equipment_relation' => $equipment_relation));
        }
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
