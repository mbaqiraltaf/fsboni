<?php
echo CHtml::cssFile(Yii::app()->baseUrl . '/css/SpryTabbedPanels.css');
echo CHtml::cssFile(Yii::app()->baseUrl . '/css/tab.css');
echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/SpryTabbedPanels.js');
?>

<div class="left_container">
    <h3>Property Edit</h3>
    <div class="clear">&nbsp;</div>

    <div class="contact_row_new">
        <div class="left_area_new">FSBONI ID</div>
        <div class="right_area_new">
            <span id="ContentPlaceHolder1_Label2"><?php 
            $fsboni_property_id = $property_data->fsboni_property_id;
            echo $fsboni_property_id; ?>
            </span>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
    <!-- tab start here -->                        

    <div class="ui-tabs ui-widget ui-widget-content ui-corner-all" id="tabs">

        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
            <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-1">Property</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-2">Interior</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-3">Exterior</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-4">Virtual Tour</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-5">Photos</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-6">Optional Services</a></li>
        </ul>

        <div class="TabbedPanelsContentGroupX">

            <div>&nbsp;</div>
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'fs-property-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
                'stateful' => true,
            ));
            ?>

            <p class="required">Fields Marked as (*) are mandatory</p>

            <?php echo $form->errorSummary($property_data); ?>

            <div class="main-edit-div">

                <div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
                    <h3>Property Listing Info</h3>
                    <div>&nbsp;</div>                         


                    <div class="contact_row_new">
                        <div class="left_area_new"> Select one</div>
                        <div class="right_area_new">
                            <input type="radio" checked="checked" class="middle" id="ContentPlaceHolder1_rd_own" name="ctl00$ContentPlaceHolder1$type" value="rd_own"> <span class="middle">Personal Residence</span>
                            <input type="radio" class="middle ml20" id="ContentPlaceHolder1_rd_invest" name="ctl00$ContentPlaceHolder1$type" value="rd_invest"> <span class="middle">Investment property </span>                   
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'street_number'); ?></div>
                        <div class="right_area_new"><?php echo $form->textField($property_data, 'street_number', array()); ?></div>
                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'compas_point'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->dropDownList($property_data, 'compas_point', array('N' => 'N', 'S' => 'S', 'E' => 'E', 'W' => 'W'), array()); ?>
                        </div>
                    </div>  

                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'street_name'); ?></div>

                        <div class="right_area_new"><?php echo $form->textField($property_data, 'street_name', array()); ?></div>
                    </div>


                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'street_suffix'); ?></div>
                        <div class="right_area_new">
                            <?php
                            $street_suffix = array('' => '', 'AVE' => 'AVE', 'BLVD' => 'BLVD', 'CIR' => 'CIR', 'CT' => 'CT', 'DR' => 'DR', 'HWY' => 'HWY', 'LN' => 'LN', 'PKWY' => 'PKWY', 'PL' => 'PL', 'PLZ' => 'PLZ', 'PT' => 'PT', 'RD' => 'RD', 'SQ' => 'SQ', 'ST' => 'ST', 'TER' => 'TER', 'TRL' => 'TRL', 'WAY' => 'WAY', 'NONE' => 'NONE');
                            echo $form->dropDownList($property_data, 'street_suffix', $street_suffix, array());
                            ?></div>
                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'city'); ?></div>
                        <div class="right_area_new">                            
                            <?php echo $form->textField($property_data, 'city', array()); ?>
                        </div>
                    </div>

                    <div class="contact_row_new">

                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'state'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->dropDownList($property_data, 'state', CHtml::listData(FsStateMaster::model()->findAll(array('order' => 'state_name')), 'id', 'state_name'), array('prompt' => '')); ?>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'zip_code'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->textField($property_data, 'zip_code', array()); ?>
                        </div>

                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'county'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->textField($property_data, 'county', array()); ?>
                        </div>
                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'neighbourhood'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->textField($property_data, 'neighbourhood', array()); ?>
                        </div>
                    </div>


                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'price_range'); ?></div>
                        <div class="right_area_new">$ <?php echo $form->textField($property_data, 'price_range', array('class' => 'w85 digit-format')); ?>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'prop_type'); ?></div>
                        <div class="right_area_new">    
                            <?php echo $form->dropDownList($property_data, 'prop_type', CHtml::listData(FsPropType::model()->findAll(), 'title', 'title'), array('prompt' => '')); ?> </div>
                    </div>                    
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'numbr_bedroom'); ?></div>

                        <div class="right_area_new">
                            <?php echo $form->dropDownList($property_data, 'numbr_bedroom', CHtml::listData(FsNoBedroom::model()->findAll(array('order' => 'id')), 'title', 'title'), array('class' => 'w50')); ?>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'numbr_bathroom'); ?></div>
                        <div class="right_area_new">
                            <?php echo $form->dropDownList($property_data, 'numbr_bathroom', CHtml::listData(FsNoBathroom::model()->findAll(array('order' => 'id')), 'title', 'title'), array('class' => 'w50')); ?>
                        </div>
                    </div> 
                    <div class="contact_row_new">

                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'prop_size'); ?></div>
                        <div class="right_area_new"> 
                            <?php
                            $prop_size = array();
                            for ($i = 100; $i <= 5000; $i+=100) {
                                $prop_size[$i] = $i . ' sqft';
                            }
                            echo $form->dropDownList($property_data, 'prop_size', $prop_size, array('prompt' => '-Select-', 'style' => 'width: 130px;'));
                            ?>
                        </div>


                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">  
                            <?php echo $form->labelEx($property_data, 'property_taxes'); ?>
                        </div>
                        <div class="right_area_new"> 
                            <strong>$</strong><?php echo $form->textField($property_data, 'property_taxes', array('class' => 'w70 digit-format')); ?>
                        </div>
                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new">  
                            <?php echo $form->labelEx($property_data, 'tax_year'); ?>
                        </div>
                        <div class="right_area_new"> 
                            <?php echo $form->textField($property_data, 'tax_year', array('class' => 'four_digit')); ?>
                        </div>
                    </div>

                    <div class="contact_row_new">
                        <div class="left_area_new">  
                            <?php echo $form->labelEx($property_data, 'assessment'); ?>
                        </div>
                        <div class="right_area_new"> 
                            $ <?php echo $form->textField($property_data, 'assessment', array()); ?>
                        </div> </div>

                    <div class="contact_row_new">
                        <div class="left_area_new">  
                            <?php echo $form->labelEx($property_data, 'frequency'); ?>
                        </div>
                        <div class="right_area_new"> 
                            <?php echo $form->dropDownList($property_data, 'frequency', array('' => 'None', 'Monthly' => 'Monthly', 'Annually' => 'Annually'), array()); ?>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new"><?php echo $form->labelEx($property_data, 'prp_desc'); ?></div>

                        <div class="right_area_new">

                            <?php echo $form->textArea($property_data, 'prp_desc', array('class' => '', 'onkeyup' => 'countChar(this)')); ?></div>
                        <div id="lblMsg1" class="char-count" style="text-align:right">1000 characters left</div>
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
                        $level = CHtml::dropDownList('Level', '', $levels_data, array('class' => 'w100'));
                        ?>
                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'living_room_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'living_room_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'living_room_max', array('class' => 'w50')); ?>
                                <span class="ml10">Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'living_room_fire'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'living_room_fire'); ?>
                                <?php echo $form->labelEx($property_data, 'living_room_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'living_room_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>


                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'dinning_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'dinning_min_dimenstion', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'dinning_max_dimension', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'dinning_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'dinning_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'dinning_room_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'dinning_room_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>


                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'family_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'family_room_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'family_room_max', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'family_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'family_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'family_room_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'family_room_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>


                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'kitchen_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'kitchen_min_dimension', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'kitchen_max_dimension', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'kitchen_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'kitchen_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'kitchen_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'kitchen_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'bed_mast_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'bed_mast_bed_min_dim', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'bed_mast_bed_max_dim', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'bed_mast_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'bed_mast_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'mastrBedroom_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'mastrBedroom_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'bed_1_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'bed_min_dim_1', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'bed_max_dim_1', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'bed_1_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'bed_1_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'bedroom1_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'bedroom1_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'bed_2_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'bed_min_dim_2', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'bed_max_dim_2', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'bed_2_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'bed_2_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'bedroom2_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'bedroom2_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'bed_3_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'bed_min_dim_3', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'bed_max_dim_3', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'bed_3_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'bed_3_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'bedroom3_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'bedroom3_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'bed_4_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'bed_min_dim_4', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'bed_max_dim_4', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'bed_4_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'bed_4_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'bedroom4_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'bedroom4_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'bed_5_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'bed_min_dim_5', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'bed_max_dim_5', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'bed_5_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'bed_5_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'bedroom5_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'bedroom5_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'den_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'den_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'den_max', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'den_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'den_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'den_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'den_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'laundry_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'laundry_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'laundry_max', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'laundry_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'laundry_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'laundry_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'laundry_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>


                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'balcony_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'balcony_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'balcony_max', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'balcony_fire'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'balcony_fire'); ?>
                                <?php echo $form->labelEx($property_data, 'den_balcony_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'den_balcony_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>


                        <div class="contact_row_new">
                            <div class="left_area_new">
                                <?php echo $form->labelEx($property_data, 'bonus_room_menu'); ?>
                            </div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'bonus_room_min', array('class' => 'w50')); ?>
                                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array()); ?>
                                <?php echo $form->textField($property_data, 'bonus_room_max', array('class' => 'w50')); ?>
                                <span class="ml10"> Level</span>
                                <?php echo $level; ?>
                                <?php echo $form->labelEx($property_data, 'bonus_room_fireplace'); ?> &nbsp;
                                <?php echo $form->checkBox($property_data, 'bonus_room_fireplace'); ?>
                                <?php echo $form->labelEx($property_data, 'bouns_flooring'); ?>
                                <?php echo $form->dropDownList($property_data, 'bouns_flooring', $flooring, array('class' => 'w95')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($interior_feature, 'interior_prop_featur'); ?></div>
                            <div class="right_area_new">
                                <?php echo Helper::generateCheckboxList($interior_feature, 'interior_prop_featur', $form, CHtml::listData(FsInteriorPropertyFeatur::model()->findAll(), 'id', 'title'),$fsboni_property_id); ?>
                            </div>
                        </div>


                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'air_conditioning'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->dropDownList($property_data, 'air_conditioning', CHtml::listData(FsAirConditioning::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'heating'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->dropDownList($property_data, 'heating', CHtml::listData(FsHeating::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($kitchen_relation, 'kitchen_id'); ?></div>
                            <div class="right_area_new">
                                <?php echo Helper::generateCheckboxList($kitchen_relation, 'kitchen_id', $form, CHtml::listData(FsKitchen::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($appliances_relation, 'appliances_id'); ?></div>
                            <div class="right_area_new">
                                <?php echo Helper::generateCheckboxList($appliances_relation, 'appliances_id', $form, CHtml::listData(FsAppliances::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'dinning'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->dropDownList($property_data, 'dinning', CHtml::listData(FsDining::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'attic'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->dropDownList($property_data, 'attic', CHtml::listData(FsAttic::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'basement_details'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->dropDownList($property_data, 'basement_details', CHtml::listData(FsBasementDetails::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($bathroom_relation, 'bath_amenities_id'); ?></div>
                            <div class="right_area_new">
                                <?php echo Helper::generateCheckboxList($bathroom_relation, 'bath_amenities_id', $form, CHtml::listData(FsBathroomAmenities::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($additional_room_relation, 'addi_rooms_id'); ?></div>
                            <div class="right_area_new">
                                <?php echo Helper::generateCheckboxList($additional_room_relation, 'addi_rooms_id', $form, CHtml::listData(FsAdditionalRooms::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'electricity'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->radioButtonList($property_data, 'electricity', array('Circuit Breakers' => 'Circuit Breakers', '200+ Amp Service' => '200+ Amp Service'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($equipment_relation, 'equipment_id'); ?></div>
                            <div class="right_area_new">
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
                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($exterior_relation, 'exterior_constr_id'); ?> </div>
                            <div class="right_area_new">
                                <?php echo Helper::generateCheckboxList($exterior_relation, 'exterior_constr_id', $form, CHtml::listData(FsExteriorConstruction::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'garage_ownrship'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->dropDownList($property_data, 'garage_ownrship', array('Fee/Leases' => 'Fee/Leases', 'Owned/No Fee' => 'Owned/No Fee', 'Rental Only' => 'Rental Only')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'garage_type'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->dropDownList($property_data, 'garage_type', CHtml::listData(FsGarageType::model()->findAll(), 'id', 'title')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'disability_access'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->radioButtonList($property_data, 'disability_access', array('Yes' => 'Yes', 'No' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'elevatory_building'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->radioButtonList($property_data, 'elevatory_building', array('Yes' => 'Yes', 'No' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'sewer'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->radioButtonList($property_data, 'sewer', array('Public Sewer' => 'Public Sewer', 'Septic' => 'Septic'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'water'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->dropDownList($property_data, 'water', CHtml::listData(FsWater::model()->findAll(), 'id', 'title'), array('prompt' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($amenities_relation, 'amenities_id'); ?> </div>
                            <div class="right_area_new">
                                <?php echo Helper::generateCheckboxList($amenities_relation, 'amenities_id', $form, CHtml::listData(FsAmenities::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($assessments_include, 'assinc_id'); ?> </div>
                            <div class="right_area_new">
                                <?php echo Helper::generateCheckboxList($assessments_include, 'assinc_id', $form, CHtml::listData(FsAssessmentInclude::model()->findAll(), 'id', 'title'), $fsboni_property_id); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'pet_friendly'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->dropDownList($property_data, 'pet_friendly', array('None' => 'None', 'Dog' => 'Dog', 'Cat' => 'Cat', 'Both' => 'Both')); ?>
                            </div>
                        </div>


                        <div class="clear">&nbsp;</div>


                    </div>
                </div>

                <div id="tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                    <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvPhotoFile">
                        <div class="contact_row_new">

                            <div class="left_area_new">Upload Photo<div> 
                                </div></div>
                            <div class="right_area_new"> <?php echo $form->fileField($property_data, 'att_dett_style'); ?>
                                <br />
                                Best suited image size(374*322) in pixels.
                            </div>

                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'youtube'); ?></div>
                            <div class="right_area_new">  http:// <?php echo $form->textField($property_data, 'youtube', array()); ?></div>
                        </div> 

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'open_house'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->dropDownList($property_data, 'open_house', array('monday' => 'Monday', 'tuesday' => 'Tuesday', 'wednesday' => 'Wednesday', 'thursday' => 'Thursday', 'friday' => 'Friday', 'saturday' => 'Saturday', 'sunday' => 'Sunday', 'holiday' => 'Holiday', 'weekend' => 'Weekend'), array('prompt' => 'None', 'class' => 'w100')); ?>

                                <?php //echo $form->textField($property_data, 'open_house_to_time', array('id' => 'testing-time')); ?>

                                <?php echo $form->dropDownList($property_data, 'open_house_to_time', array('6am' => '6am', '7am' => '7am', '8am' => '8am', '9am' => '9am', '10am' => '10am', '11am' => '11am', '12am' => '12am'), array('class' => 'w70')); ?>
                                to
                                <?php echo $form->dropDownList($property_data, 'open_house_from_time', array('1pm' => '1pm', '2pm' => '2pm', '3pm' => '3pm', '4pm' => '4pm', '5pm' => '5pm', '6pm' => '6pm', '7pm' => '7pm', '8pm' => '8pm', '9pm' => '9pm'), array('class' => 'w70')); ?>
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
                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'list_home_inMls'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->radioButtonList($property_data, 'list_home_inMls', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'virtual_tour'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->radioButtonList($property_data, 'virtual_tour', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'real_estate_attorney'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->radioButtonList($property_data, 'real_estate_attorney', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'home_warantee'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->radioButtonList($property_data, 'home_warantee', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'appraiser'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->radioButtonList($property_data, 'appraiser', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'home_inspector'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->radioButtonList($property_data, 'home_inspector', array('y' => 'Yes', 'n' => 'No'), array('separator' => '')); ?>
                            </div>
                        </div>

                        <div class="clear">&nbsp;</div>


                    </div>                    
                </div>



                

            </div>
            <div align="center">
                <?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/save.png', array('class' => 'mlr10', 'name' => 'update_property')); ?>

            </div>
        <?php $this->endWidget(); ?>
        </div></div></div>

<?php $this->renderPartial('accountpage-sidebar'); ?>


