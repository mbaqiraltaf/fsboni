<?php

class RealEstateController extends Controller {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('myAccount'),
                'roles' => array('user'),
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
            $this->render('search', array('model' => $model));
        }
    }

    public function actionFullPageListing() {
        if (Yii::app()->user->getId() !== null) {
            $model = new FsSearchCriteria;
            $this->render('full-page-listing', array('model' => $model));
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
        if (isset($_POST['step3_x'])) {
            $this->setPageState('step2', CHttpRequest::getParam('FsProperty'));
            $model = new FsProperty('step2');
            $model->attributes = CHttpRequest::getParam('FsProperty');
            if ($model->validate()) {
                $interior_relation = new FsInteriorPropRelation;
                $appliances_relation = new FsAppliancesRelation;
                $kitchen_relation = new FsKitchenRelation;
                $bathroom_amenities_relation = new FsBathroomAmenitiesRelation;
                $addition_rooms_relation = new FsAdditionalRoomsRelation;
                $equipment_relation = new FsEquipmentRelation;
                $this->render('step3', array('model' => $model, 'interior_feature' => $interior_relation, 'appliances_relation' => $appliances_relation, 'kitchen_relation' => $kitchen_relation, 'bathroom_relation' => $bathroom_amenities_relation, 'additional_room_relation' => $addition_rooms_relation, 'equipment_relation' => $equipment_relation));
            } else {
                $this->render('step2', array('model' => $model));
            }
        } else if (isset($_POST['step4_x'])) {
            $this->setPageState('step3', CHttpRequest::getParam('FsProperty'));
            $model = new FsProperty('step3');
            $model->attributes = CHttpRequest::getParam('FsProperty');
            $exterior_relation = new FsExteriorConstrRelation;
            $amenities_relation = new FsAmenitiesRelation;
            $assessments_include = new FsAssessincRelation;
            $this->render('step4', array('model' => $model, 'exterior_relation' => $exterior_relation, 'amenities_relation' => $amenities_relation, 'assessments_include' => $assessments_include));
        } else if (isset($_POST['step5_x'])) {
            $this->setPageState('step4', CHttpRequest::getParam('FsProperty'));
            $model = new FsProperty('step4');
            $model->attributes = CHttpRequest::getParam('FsProperty');
            $this->render('step5', array('model' => $model));
        } else if (isset($_POST['step6_x'])) {
            $this->setPageState('step5', CHttpRequest::getParam('FsProperty'));
            $model = new FsProperty('step5');
            $model->attributes = CHttpRequest::getParam('FsProperty');
            $this->render('step6', array('model' => $model));
        } else if (isset($_POST['save_x'])) {
            $model = new FsProperty();
            $user = $this->getPageState('step1', array());
            $model->attributes = $this->getPageState('step1', array());
            $model->attributes = $this->getPageState('step2', array());
            $model->attributes = $this->getPageState('step3', array());
            $model->attributes = $this->getPageState('step4', array());
            $model->attributes = $this->getPageState('step5', array());
            $model->attributes = CHttpRequest::getParam('FsProperty');

            $fsboni_id = FsProperty::model()->findAll(array('order' => 'id DESC', 'limit' => '1'));
            $fsboni_property_id = $fsboni_id[0]->fsboni_property_id;
            $fsboni_property_id++;
            $model->fsboni_property_id = $fsboni_property_id;

            if ($model->save()) {
                $this->actionGenerateUrl($user['seller_id']);
                $this->redirect(array('success'));
            } else {
                $this->render('step6', array('model' => $model));
            }
        } else {
            $user_id = CHttpRequest::getParam('u');
            $this->setPageState('step1', array('seller_id' => $user_id));
            $model = new FsProperty('new');
            $this->render('step2', array('model' => $model));
        }
    }

    public function actionListing() {
        $model = new FsProperty;
        $this->render('listing', array('model' => $model));
    }

    public function actionSellerRegistration() {
        $seller = new FsSeller;
        $user = new FsUser;

        if (isset($_POST['step2_x'])) {
            $user->attributes = CHttpRequest::getParam('FsUser');
            $seller->attributes = CHttpRequest::getParam('FsSeller');
            $valid = $user->validate();
            //$valid = $seller->validate() && $valid;
            if ($valid) {
                /* $city = FsCity::model()->findAll("city = '" . $user->city . "'");
                  $county = FsCounty::model()->findAll("NAME = '" . $user->county . "'");
                  $user->city = $city[0]->id;
                  $user->county = $county[0]->id; */
                $user->save();
                $seller->user_id = $user->user_id;
                $seller->save();
                $this->redirect(array('sellHome', 'u' => $user->user_id));
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
        //$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
        if (empty($user_id)) {
            $user_id = Yii::app()->session['user_id'];
        }
        $final = '';
        for ($i = 0; $i <= 9; $i++) {
            $final .= rand(0, 9);
            if ($i == 4) {
                $final .= $user_id;
            }
        }
        ///$encrypted = Yii::app()->getSecurityManager()->encrypt($user_id, $key);
        $url = $this->createAbsoluteUrl('login', array('z' => 'c', 'user_id' => $final));
        //$url = $this->createUrl('login', array('z' => 'c', 'user_id' => $final));

        $userInfo = FsUser::model()->findAll('user_id = ' . $user_id);
        $email = new EmailHelper();
        $email->sendActivationEmail($userInfo[0]->email, $url, $userInfo[0]->first_name . ' ' . $userInfo[0]->last_name, $userInfo[0]->paswd);
    }

    public function actionLogin() {
        if (isset($_GET['z']) && isset($_GET['user_id']) || isset(Yii::app()->session['user_id'])) {
            $decrypted = '';

            if (isset(Yii::app()->session['user_id'])) {
                $decrypted = Yii::app()->session['user_id'];
            } else {
                $z = CHttpRequest::getParam('z');
                //$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
                $user_id = CHttpRequest::getParam('user_id');
                Yii::app()->user->setState('Role', 'admin');

                $decrypted = substr($user_id, 5, count($user_id) - 5 - 1);
                Yii::app()->session['user_id'] = $decrypted;
                Yii::app()->user->setId($decrypted);
                // $decrypted = Yii::app()->getSecurityManager()->decrypt($user_id, $key);
            }


            $user = FsUser::model()->findAll('user_id = ' . $decrypted);
            if (count($user) > 0) {
                $seller_properties = FsProperty::model()->findAll('seller_id = ' . $decrypted);
                $this->render('my-account', array('properties' => $seller_properties));
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
                    Yii::app()->session['user_id'] = $user->user_id;
                    Yii::app()->user->setId($user->user_id);
                    Yii::app()->user->setState('Role', 'user');
                    $seller_properties = FsProperty::model()->findAll('seller_id = ' . $user->user_id);
                    $this->render('my-account', array('properties' => $seller_properties));
                } else {
                    $this->render('login-form', array('model' => $model));
                }
            } else {
                $this->render('login-form', array('model' => $model));
            }
        }
    }

    public function actionMyAccount() {
        $seller_properties = FsProperty::model()->findAll('seller_id = ' . Yii::app()->session['user_id']);
        $this->render('my-account', array('properties' => $seller_properties));
    }

    public function actionMembershipPage() {
        $this->redirect(array('myAccount'));
    }

    public function actionChangePassword() {
        $this->render('change-password');
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
