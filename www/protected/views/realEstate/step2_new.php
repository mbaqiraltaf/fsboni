<?php
echo CHtml::cssFile(Yii::app()->baseUrl . '/css/SpryTabbedPanels.css');
echo CHtml::cssFile(Yii::app()->baseUrl . '/css/tab.css');
echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/SpryTabbedPanels.js');
?>



<!--<h3>Page 2 of 6 - Property Listing Information</h3>-->
<div class="clear">&nbsp;</div>
<div class="step2-heading" style="font-size: 16px;"><b>Free Full page Listings for all <span style="color: #FC9200">FSBONI Members</span></b></div>
<div class="step2-heading" style="font-size: 13px;"><b>Provide your basic property information <span style="color: red;">your street numbers are not displayed for your privacy</span></b></div>
<h4 class="list_head mb10 step2-heading">Enter quick search information here to help buyers find your listing faster.</h4>


<div class="left_container">

    <?php
    $fsboni_property_id = $model->fsboni_property_id;
    ?>

    <!-- tab start here -->                        

    <div class="ui-tabs ui-widget ui-widget-content ui-corner-all" id="tabs" style="width: 870px;">

        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
            <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-1">Property</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-2">Interior</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-3">Exterior</a></li>            
            <!--            <li class="ui-state-default ui-corner-top"><a href="#tabs-5">Photos</a></li>-->
            <li class="ui-state-default ui-corner-top"><a href="#tabs-6">Optional Services</a></li>
        </ul>

        <div class="TabbedPanelsContentGroupX">

            <div class="main-edit-div">

                <div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
                    <div>&nbsp;</div>
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'fs-property-form',
                        // Please note: When you enable ajax validation, make sure the corresponding
                        // controller action is handling ajax validation correctly.
                        // There is a call to performAjaxValidation() commented in generated controller code.
                        // See class documentation of CActiveForm for details on this.
                        'enableAjaxValidation' => false,
                        'htmlOptions' => array('enctype' => 'multipart/form-data'),
                    ));
                    ?>

                    <p class="required">Fields Marked as (*) are mandatory</p>

                    <?php echo $form->errorSummary($model); ?>

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'fsboni_property_id'); ?></div>
                        <div class="right_area">
                            <label>Will be given by FSBONI upon approval of listing</label>
                        </div>
                    </div>

                    <div class="contact_row">
                        <div class="left_area"> Select one</div>
                        <div class="right_area">
                            <?php echo $form->radioButtonList($model, 'new_prop_type', array('1' => 'Personal Residence', '2' => 'Investment property'), array('separator' => '&nbsp;&nbsp;&nbsp;')); ?>

                        </div>
                    </div>

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'street_number'); ?></div>
                        <div class="right_area"><?php echo $form->textField($model, 'street_number', array()); ?></div>
                    </div>

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'compas_point'); ?></div>
                        <div class="right_area">
                            <?php echo $form->dropDownList($model, 'compas_point', array('N' => 'N', 'S' => 'S', 'E' => 'E', 'W' => 'W'), array()); ?>
                        </div>
                    </div>  

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'street_name'); ?></div>

                        <div class="right_area"><?php echo $form->textField($model, 'street_name', array()); ?></div>
                    </div>


                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'street_suffix'); ?></div>
                        <div class="right_area">
                            <?php
                            $street_suffix = array('' => '', 'AVE' => 'AVE', 'BLVD' => 'BLVD', 'CIR' => 'CIR', 'CT' => 'CT', 'DR' => 'DR', 'HWY' => 'HWY', 'LN' => 'LN', 'PKWY' => 'PKWY', 'PL' => 'PL', 'PLZ' => 'PLZ', 'PT' => 'PT', 'RD' => 'RD', 'SQ' => 'SQ', 'ST' => 'ST', 'TER' => 'TER', 'TRL' => 'TRL', 'WAY' => 'WAY', 'NONE' => 'NONE');
                            echo $form->dropDownList($model, 'street_suffix', $street_suffix, array());
                            ?></div>
                    </div>

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'city'); ?></div>
                        <div class="right_area">                            
                            <?php echo $form->textField($model, 'city', array()); ?>
                        </div>
                    </div>

                    <div class="contact_row">

                        <div class="left_area"><?php echo $form->labelEx($model, 'state'); ?></div>
                        <div class="right_area">
                            <?php echo $form->dropDownList($model, 'state', CHtml::listData(FsStateMaster::model()->findAll(array('order' => 'state_name')), 'id', 'state_name'), array('prompt' => '')); ?>
                        </div>
                    </div>
                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'zip_code'); ?></div>
                        <div class="right_area">
                            <?php echo $form->textField($model, 'zip_code', array()); ?>
                        </div>

                    </div>

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'county'); ?></div>
                        <div class="right_area">
                            <?php echo $form->textField($model, 'county', array()); ?>
                        </div>
                    </div>

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'neighbourhood'); ?></div>
                        <div class="right_area">
                            <?php echo $form->textField($model, 'neighbourhood', array()); ?>
                        </div>
                    </div>

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'building_name'); ?></div>
                        <div class="right_area">
                            <?php echo $form->textField($model, 'building_name', array()); ?>
                        </div>
                    </div>

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'sub_division'); ?></div>
                        <div class="right_area">
                            <?php echo $form->textField($model, 'sub_division', array()); ?>
                        </div>
                    </div>


                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'price_range'); ?></div>
                        <div class="right_area">$ <?php echo $form->textField($model, 'price_range', array('class' => 'w85 digit-format')); ?>
                        </div>
                    </div>

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'prop_type'); ?></div>
                        <div class="right_area">    
                            <?php echo $form->dropDownList($model, 'prop_type', CHtml::listData(FsPropType::model()->findAll(), 'title', 'title'), array('prompt' => '')); ?> </div>
                    </div>  

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'pet_friendly'); ?></div>
                        <div class="right_area">    
                            <?php echo $form->dropDownList($model, 'pet_friendly', array('None' => 'None', 'Dog' => 'Dog', 'Cat' => 'Cat', 'Both' => 'Both'), array('prompt' => '')); ?> </div>
                    </div>

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'numbr_bedroom'); ?></div>

                        <div class="right_area">
                            <?php echo $form->dropDownList($model, 'numbr_bedroom', CHtml::listData(FsNoBedroom::model()->findAll(array('order' => 'id')), 'title', 'title'), array('class' => 'w50')); ?>
                        </div>
                    </div>
                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'numbr_bathroom'); ?></div>
                        <div class="right_area">
                            <?php echo $form->dropDownList($model, 'numbr_bathroom', CHtml::listData(FsNoBathroom::model()->findAll(array('order' => 'id')), 'title', 'title'), array('class' => 'w50')); ?>
                        </div>
                    </div> 
                    <div class="contact_row">

                        <div class="left_area"><?php echo $form->labelEx($model, 'prop_size'); ?></div>
                        <div class="right_area"> 
                            <?php
                            $prop_size = array();
                            for ($i = 100; $i <= 5000; $i+=100) {
                                $prop_size[$i] = $i . ' sqft';
                            }
                            echo $form->dropDownList($model, 'prop_size', $prop_size, array('prompt' => '-Select-', 'style' => 'width: 130px;'));
                            ?>
                        </div>


                    </div>
                    <div class="contact_row">
                        <div class="left_area">  
                            <?php echo $form->labelEx($model, 'property_taxes'); ?>
                        </div>
                        <div class="right_area"> 
                            <strong>$</strong><?php echo $form->textField($model, 'property_taxes', array('class' => 'w70 digit-format')); ?>
                        </div>
                    </div>

                    <div class="contact_row">
                        <div class="left_area">  
                            <?php echo $form->labelEx($model, 'tax_year'); ?>
                        </div>
                        <div class="right_area"> 
                            <?php echo $form->textField($model, 'tax_year', array('class' => 'four_digit')); ?>
                        </div>
                    </div>

                    <div class="contact_row">
                        <div class="left_area">  
                            <?php echo $form->labelEx($model, 'assessment'); ?>
                        </div>
                        <div class="right_area"> 
                            $ <?php echo $form->textField($model, 'assessment', array()); ?>
                        </div> </div>

                    <div class="contact_row">
                        <div class="left_area">  
                            <?php echo $form->labelEx($model, 'frequency'); ?>
                        </div>
                        <div class="right_area"> 
                            <?php echo $form->dropDownList($model, 'frequency', array('' => 'None', 'Monthly' => 'Monthly', 'Annually' => 'Annually'), array()); ?>
                        </div>
                    </div>
                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'prp_desc'); ?></div>

                        <div class="right_area">

                            <?php echo $form->textArea($model, 'prp_desc', array('class' => 'big-text-area', 'onkeyup' => 'countChar(this)')); ?></div>
                        <div id="lblMsg1" class="char-count" style="text-align:right">1000 characters left</div>
                    </div>

                    <div class="contact_row">

                        <?php
                        $imagePath = '';
//                                
                        if (!is_null($model->fsPropGallery) && count($model->fsPropGallery)) {
                            $galleryObject = $model->fsPropGallery[count($model->fsPropGallery) - 1];
                            $imagePath = $model->id . '/' . $model->fsPropGallery[count($model->fsPropGallery) - 1]->image_name;
                        } else {
                            $galleryObject = new FsPropGallery;
                        }
                        ?>

                        <?php if ($imagePath): ?>

                            <div class="left_area">
                                <div id="ContentPlaceHolder1_trPhoto">

                                    <img style="height:55px;width:77px;" src="<?php echo Yii::app()->baseUrl . '/images/propertyimages/' . $imagePath; ?>" id="ContentPlaceHolder1_hdIMAGE">  <input type="button" id="ContentPlaceHolder1_btnDel" onclick="return ConfirmDelete();" value="Remove Image" name="ctl00$ContentPlaceHolder1$btnDel">
                                </div>
                            </div>

                        <?php else: ?>

                            <div class="left_area">Upload Photo
                                <div></div>                                    
                            </div>

                        <?php endif; ?>

                        <div class="right_area"> <?php echo $form->fileField($galleryObject, 'image_name'); ?>
                            <br />
                            Best suited image size(374*322) in pixels.
                        </div>

                    </div>

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'youtube'); ?></div>
                        <div class="right_area">  http:// <?php echo $form->textField($model, 'youtube', array()); ?></div>
                    </div> 

                    <div class="contact_row">
                        <div class="left_area"><?php echo $form->labelEx($model, 'open_house'); ?></div>
                        <div class="right_area">
                            <?php echo $form->dropDownList($model, 'open_house', array('monday' => 'Monday', 'tuesday' => 'Tuesday', 'wednesday' => 'Wednesday', 'thursday' => 'Thursday', 'friday' => 'Friday', 'saturday' => 'Saturday', 'sunday' => 'Sunday', 'holiday' => 'Holiday', 'weekend' => 'Weekend'), array('prompt' => 'None', 'class' => 'w100')); ?>

                            <?php echo $form->dropDownList($model, 'open_house_to_time', array('6am' => '6am', '7am' => '7am', '8am' => '8am', '9am' => '9am', '10am' => '10am', '11am' => '11am', '12am' => '12am'), array('class' => 'w70')); ?>
                            to
                            <?php echo $form->dropDownList($model, 'open_house_from_time', array('1pm' => '1pm', '2pm' => '2pm', '3pm' => '3pm', '4pm' => '4pm', '5pm' => '5pm', '6pm' => '6pm', '7pm' => '7pm', '8pm' => '8pm', '9pm' => '9pm'), array('class' => 'w70')); ?>
                        </div> 
                    </div>

                    <div class="clear">&nbsp;</div>

                </div>

                <!-- Interior content goes here -->
                <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                    <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvInterior">
                        <div>&nbsp;</div>
                        <h3>Interior Features</h3>
                        <div>&nbsp;</div>

                        <?php
                        $flooring = array('h' => 'Hardwood', 'c' => 'Carpet', 't' => 'Tile', 'o' => 'Other');
                        $levels_data = array('' => '', 'M' => 'Main', 'L' => 'Lower Level', 'U' => 'Upper Level');
                        for ($i = 1; $i <= 100; $i++) {
                            $levels_data[$i] = $i;
                        }
                        $level = CHtml::dropDownList('Level', '', $levels_data, array('class' => 'w100 margLeft20'));
                        ?>
                        <div class="contact_row">
                            <div class="left_area">
                                <span class="room_headings">Room</span>
                            </div>
                            <div class="right_area">
                                <span class="room_headings" style="margin-left: 25px; margin-right: 98px;">Dimension</span>
                                <span class="room_headings" style="margin-right: 46px;">Level</span>
                                <span class="room_headings" style="margin-right: 30px;">FirePlace</span>
                                <span class="room_headings">Flooring</span>
                            </div>
                        </div>
                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'living_room_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'living_room_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'living_room_max', array('class' => 'w50')); ?>
                               
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'living_room_fire'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'living_room_fire', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'living_room_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'living_room_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>


                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'dinning_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'dinning_min_dimenstion', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'dinning_max_dimension', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'dinning_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'dinning_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'dinning_room_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'dinning_room_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>


                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'family_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'family_room_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'family_room_max', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'family_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'family_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'family_room_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'family_room_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>


                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'kitchen_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'kitchen_min_dimension', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'kitchen_max_dimension', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'kitchen_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'kitchen_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'kitchen_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'kitchen_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'bed_mast_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'bed_mast_bed_min_dim', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'bed_mast_bed_max_dim', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'bed_mast_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'bed_mast_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'mastrBedroom_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'mastrBedroom_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'bed_1_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'bed_min_dim_1', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'bed_max_dim_1', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'bed_1_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'bed_1_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'bedroom1_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'bedroom1_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'bed_2_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'bed_min_dim_2', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'bed_max_dim_2', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'bed_2_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'bed_2_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'bedroom2_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'bedroom2_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'bed_3_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'bed_min_dim_3', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'bed_max_dim_3', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'bed_3_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'bed_3_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'bedroom3_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'bedroom3_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'bed_4_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'bed_min_dim_4', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'bed_max_dim_4', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'bed_4_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'bed_4_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'bedroom4_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'bedroom4_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'bed_5_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'bed_min_dim_5', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'bed_max_dim_5', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'bed_5_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'bed_5_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'bedroom5_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'bedroom5_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'den_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'den_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'den_max', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'den_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'den_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'den_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'den_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'laundry_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'laundry_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'laundry_max', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'laundry_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'laundry_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'laundry_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'laundry_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>


                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'balcony_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'balcony_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'balcony_max', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'balcony_fire'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'balcony_fire', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'den_balcony_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'den_balcony_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>


                        <div class="contact_row">
                            <div class="left_area">
                                <?php echo $form->labelEx($model, 'bonus_room_menu'); ?>
                            </div>
                            <div class="right_area">
                                <?php echo $form->textField($model, 'bonus_room_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($model, 'bonus_room_max', array('class' => 'w50')); ?>
                                
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($model, 'bonus_room_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($model, 'bonus_room_fireplace', array('class' => 'checkBoxMarg')); ?>
                                <?php echo $form->labelEx($model, 'bouns_flooring'); ?>
                                <?php echo $form->dropDownList($model, 'bouns_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($interior_feature, 'interior_prop_featur'); ?></div>
                            <div class="right_area">
                                <?php echo Helper::generateCheckboxList($interior_feature, 'interior_prop_featur', $form, CHtml::listData(FsInteriorPropertyFeatur::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>


                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'air_conditioning'); ?></div>
                            <div class="right_area">
                                <?php echo $form->dropDownList($model, 'air_conditioning', CHtml::listData(FsAirConditioning::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'heating'); ?></div>
                            <div class="right_area">
                                <?php echo $form->dropDownList($model, 'heating', CHtml::listData(FsHeating::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($kitchen_relation, 'kitchen_id'); ?></div>
                            <div class="right_area">
                                <?php echo Helper::generateCheckboxList($kitchen_relation, 'kitchen_id', $form, CHtml::listData(FsKitchen::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($appliances_relation, 'appliances_id'); ?></div>
                            <div class="right_area">
                                <?php echo Helper::generateCheckboxList($appliances_relation, 'appliances_id', $form, CHtml::listData(FsAppliances::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'dinning'); ?></div>
                            <div class="right_area">
                                <?php echo $form->dropDownList($model, 'dinning', CHtml::listData(FsDining::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'attic'); ?></div>
                            <div class="right_area">
                                <?php echo $form->dropDownList($model, 'attic', CHtml::listData(FsAttic::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'basement_details'); ?></div>
                            <div class="right_area">
                                <?php echo $form->dropDownList($model, 'basement_details', CHtml::listData(FsBasementDetails::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($bathroom_relation, 'bath_amenities_id'); ?></div>
                            <div class="right_area">
                                <?php echo Helper::generateCheckboxList($bathroom_relation, 'bath_amenities_id', $form, CHtml::listData(FsBathroomAmenities::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($additional_room_relation, 'addi_rooms_id'); ?></div>
                            <div class="right_area">
                                <?php echo Helper::generateCheckboxList($additional_room_relation, 'addi_rooms_id', $form, CHtml::listData(FsAdditionalRooms::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'electricity'); ?></div>
                            <div class="right_area">
                                <?php echo $form->radioButtonList($model, 'electricity', array('Circuit Breakers' => 'Circuit Breakers', '200+ Amp Service' => '200+ Amp Service'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($equipment_relation, 'equipment_id'); ?></div>
                            <div class="right_area">
                                <?php echo Helper::generateCheckboxList($equipment_relation, 'equipment_id', $form, CHtml::listData(FsEquipment::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>


                        <div class="clear">&nbsp;</div>

                    </div>
                </div>
                <div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                    <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvExterior">
                        <div>&nbsp;</div>
                        <h3>Exterior Features</h3>
                        <div>&nbsp;</div>             
                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($exterior_relation, 'exterior_constr_id'); ?> </div>
                            <div class="right_area">
                                <?php echo Helper::generateCheckboxList($exterior_relation, 'exterior_constr_id', $form, CHtml::listData(FsExteriorConstruction::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'garage_ownrship'); ?></div>
                            <div class="right_area">
                                <?php echo $form->dropDownList($model, 'garage_ownrship', array('Fee/Leases' => 'Fee/Leases', 'Owned/No Fee' => 'Owned/No Fee', 'Rental Only' => 'Rental Only')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'garage_type'); ?></div>
                            <div class="right_area">
                                <?php echo $form->dropDownList($model, 'garage_type', CHtml::listData(FsGarageType::model()->findAll(), 'id', 'title')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'disability_access'); ?></div>
                            <div class="right_area">
                                <?php echo $form->radioButtonList($model, 'disability_access', array('Yes' => 'Yes', 'No' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'elevatory_building'); ?></div>
                            <div class="right_area">
                                <?php echo $form->radioButtonList($model, 'elevatory_building', array('Yes' => 'Yes', 'No' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'sewer'); ?></div>
                            <div class="right_area">
                                <?php echo $form->radioButtonList($model, 'sewer', array('Public Sewer' => 'Public Sewer', 'Septic' => 'Septic'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'water'); ?></div>
                            <div class="right_area">
                                <?php echo $form->dropDownList($model, 'water', CHtml::listData(FsWater::model()->findAll(), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($amenities_relation, 'amenities_id'); ?> </div>
                            <div class="right_area">
                                <?php echo Helper::generateCheckboxList($amenities_relation, 'amenities_id', $form, CHtml::listData(FsAmenities::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($assessments_include, 'assinc_id'); ?> </div>
                            <div class="right_area">
                                <?php echo Helper::generateCheckboxList($assessments_include, 'assinc_id', $form, CHtml::listData(FsAssessmentInclude::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'pet_friendly'); ?></div>
                            <div class="right_area">
                                <?php echo $form->dropDownList($model, 'pet_friendly', array('None' => 'None', 'Dog' => 'Dog', 'Cat' => 'Cat', 'Both' => 'Both')); ?>
                            </div>
                        </div>


                        <div class="clear">&nbsp;</div>


                    </div>
                </div>

                <div id="tabs-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                    <!-- photos -->
                    <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvPhotos">
                        <div>&nbsp;</div>
                        <div class="fr"><span id="ContentPlaceHolder1_lbl_add_photo_resize"><a target="_blank" href="http://webresizer.com/resizer/"><img alt="" src="images/add_icon.gif">Free photo resizer tool</a></span>&nbsp;&nbsp;</div>
                        <div class="clear">&nbsp;</div>
                    </div></div>

                <div id="tabs-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                    <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_div_optional_services">
                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'list_home_inMls'); ?></div>
                            <div class="right_area">
                                <?php echo $form->radioButtonList($model, 'list_home_inMls', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'virtual_tour'); ?></div>
                            <div class="right_area">
                                <?php echo $form->radioButtonList($model, 'virtual_tour', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'real_estate_attorney'); ?></div>
                            <div class="right_area">
                                <?php echo $form->radioButtonList($model, 'real_estate_attorney', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'home_warantee'); ?></div>
                            <div class="right_area">
                                <?php echo $form->radioButtonList($model, 'home_warantee', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'appraiser'); ?></div>
                            <div class="right_area">
                                <?php echo $form->radioButtonList($model, 'appraiser', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row">
                            <div class="left_area"><?php echo $form->labelEx($model, 'home_inspector'); ?></div>
                            <div class="right_area">
                                <?php echo $form->radioButtonList($model, 'home_inspector', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="clear">&nbsp;</div>


                    </div>                    
                </div>





            </div>
            <div align="center">
                <?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/save.png', array('class' => 'mlr10', 'name' => 'submit_property')); ?>

            </div>
            <?php $this->endWidget(); ?>
        </div></div></div>



