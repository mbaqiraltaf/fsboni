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
            <span id="ContentPlaceHolder1_Label2"><?php echo $property_data->fsboni_property_id; ?></span>
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
            <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvBasic">
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

                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'state'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->dropDownList($property_data, 'state', CHtml::listData(FsStateMaster::model()->findAll(array('order' => 'state_name')), 'id', 'state_name'), array('prompt' => '')); ?>
                            </div>
                        </div>
                        <div class="contact_row_new">
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'city'); ?></div>
                            <div class="right_area_new">                            
                                <?php echo $form->textField($property_data, 'city', array()); ?>
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
                            <div class="left_area_new"><?php echo $form->labelEx($property_data, 'zip_code'); ?></div>
                            <div class="right_area_new">
                                <?php echo $form->textField($property_data, 'zip_code', array()); ?>
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
                    </div>

                    <div class="clear">&nbsp;</div>
                    <div align="center">
                        <?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/save.png', array('class' => 'mlr10', 'name' => 'update_property')); ?>

                    </div>

                </div>  </div>
            <!-- Interior content goes here -->
            <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
                <?php
                $flooring = array('h' => 'Hardwood', 'c' => 'Carpet', 't' => 'Tile', 'o' => 'Other');
                $levels_data = array('' => '', 'M' => 'Main', 'L' => 'Lower Level', 'U' => 'Upper Level');
                for ($i = 1; $i <= 100; $i++) {
                    $levels_data[$i] = $i;
                }
                $level = CHtml::dropDownList('Level', '', $levels_data, array('class' => 'select_step3'));
                ?>
                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'living_room_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'living_room_min', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'living_room_max', array('class' => 'w50')); ?>
                        <span class="ml10">Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'living_room_fire'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'living_room_fire'); ?>
                        <?php echo $form->labelEx($property_data, 'living_room_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'living_room_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>


                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'dinning_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'dinning_min_dimenstion', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'dinning_max_dimension', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'dinning_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'dinning_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'dinning_room_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'dinning_room_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>


                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'family_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'family_room_min', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'family_room_max', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'family_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'family_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'family_room_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'family_room_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>


                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'kitchen_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'kitchen_min_dimension', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'kitchen_max_dimension', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'kitchen_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'kitchen_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'kitchen_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'kitchen_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'bed_mast_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'bed_mast_bed_min_dim', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'bed_mast_bed_max_dim', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'bed_mast_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'bed_mast_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'mastrBedroom_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'mastrBedroom_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'bed_1_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'bed_min_dim_1', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'bed_max_dim_1', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'bed_1_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'bed_1_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'bedroom1_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'bedroom1_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'bed_2_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'bed_min_dim_2', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'bed_max_dim_2', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'bed_2_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'bed_2_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'bedroom2_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'bedroom2_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'bed_3_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'bed_min_dim_3', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'bed_max_dim_3', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'bed_3_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'bed_3_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'bedroom3_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'bedroom3_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'bed_4_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'bed_min_dim_4', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'bed_max_dim_4', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'bed_4_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'bed_4_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'bedroom4_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'bedroom4_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'bed_5_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'bed_min_dim_5', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'bed_max_dim_5', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'bed_5_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'bed_5_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'bedroom5_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'bedroom5_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'den_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'den_min', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'den_max', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'den_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'den_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'den_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'den_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'laundry_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'laundry_min', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'laundry_max', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'laundry_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'laundry_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'laundry_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'laundry_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>


                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'balcony_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'balcony_min', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'balcony_max', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'balcony_fire'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'balcony_fire'); ?>
                        <?php echo $form->labelEx($property_data, 'den_balcony_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'den_balcony_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>


                <div class="contact_row">
                    <div class="left_area">
                        <?php echo $form->labelEx($property_data, 'bonus_room_menu'); ?>
                    </div>
                    <div class="right_area">
                        <?php echo $form->textField($property_data, 'bonus_room_min', array('class' => 'w50')); ?>
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
                        <?php echo $form->textField($property_data, 'bonus_room_max', array('class' => 'w50')); ?>
                        <span class="ml10"> Level</span>
                        <?php echo $level; ?>
                        <?php echo $form->labelEx($property_data, 'bonus_room_fireplace'); ?> &nbsp;
                        <?php echo $form->checkBox($property_data, 'bonus_room_fireplace'); ?>
                        <?php echo $form->labelEx($property_data, 'bouns_flooring'); ?>
                        <?php echo $form->dropDownList($property_data, 'bouns_flooring', $flooring, array('class' => 'w95')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($interior_feature, 'interior_prop_featur'); ?></div>
                    <div class="right_area">
                        <?php echo Helper::generateCheckboxList($interior_feature, 'interior_prop_featur', $form, CHtml::listData(FsInteriorPropertyFeatur::model()->findAll(), 'id', 'title')); ?>
                    </div>
                </div>


                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($property_data, 'air_conditioning'); ?></div>
                    <div class="right_area">
                        <?php echo $form->dropDownList($property_data, 'air_conditioning', CHtml::listData(FsAirConditioning::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($property_data, 'heating'); ?></div>
                    <div class="right_area">
                        <?php echo $form->dropDownList($property_data, 'heating', CHtml::listData(FsHeating::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($kitchen_relation, 'kitchen_id'); ?></div>
                    <div class="right_area">
                        <?php echo Helper::generateCheckboxList($kitchen_relation, 'kitchen_id', $form, CHtml::listData(FsKitchen::model()->findAll(), 'id', 'title')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($appliances_relation, 'appliances_id'); ?></div>
                    <div class="right_area">
                        <?php echo Helper::generateCheckboxList($appliances_relation, 'appliances_id', $form, CHtml::listData(FsAppliances::model()->findAll(), 'id', 'title')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($property_data, 'dinning'); ?></div>
                    <div class="right_area">
                        <?php echo $form->dropDownList($property_data, 'dinning', CHtml::listData(FsDining::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($property_data, 'attic'); ?></div>
                    <div class="right_area">
                        <?php echo $form->dropDownList($property_data, 'attic', CHtml::listData(FsAttic::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($property_data, 'basement_details'); ?></div>
                    <div class="right_area">
                        <?php echo $form->dropDownList($property_data, 'basement_details', CHtml::listData(FsBasementDetails::model()->findAll(array('order' => 'title')), 'id', 'title'), array('prompt' => '')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($bathroom_relation, 'bath_amenities_id'); ?></div>
                    <div class="right_area">
                        <?php echo Helper::generateCheckboxList($bathroom_relation, 'bath_amenities_id', $form, CHtml::listData(FsBathroomAmenities::model()->findAll(), 'id', 'title')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($additional_room_relation, 'addi_rooms_id'); ?></div>
                    <div class="right_area">
                        <?php echo Helper::generateCheckboxList($additional_room_relation, 'addi_rooms_id', $form, CHtml::listData(FsAdditionalRooms::model()->findAll(), 'id', 'title')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($property_data, 'electricity'); ?></div>
                    <div class="right_area">
                        <?php echo $form->radioButtonList($property_data, 'electricity', array('Circuit Breakers' => 'Circuit Breakers', '200+ Amp Service' => '200+ Amp Service'), array('separator' => '')); ?>
                    </div>
                </div>

                <div class="contact_row">
                    <div class="left_area"><?php echo $form->labelEx($equipment_relation, 'equipment_id'); ?></div>
                    <div class="right_area">
                        <?php echo Helper::generateCheckboxList($equipment_relation, 'equipment_id', $form, CHtml::listData(FsEquipment::model()->findAll(), 'id', 'title')); ?>
                    </div>
                </div>


                <div class="clear">&nbsp;</div>

                <div align="center">
                    <?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/exterior.png', array('class' => 'mlr10', 'name' => 'step4')); ?>

                </div>

            </div>
            <div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvExterior">
                    <div>&nbsp;</div>
                    <h3>Exterior Features</h3>
                    <div>&nbsp;</div>                          
                    <div style="display:none;" id="ContentPlaceHolder1_dvAlert_exterior">
                        <span style="color:Red;" id="ContentPlaceHolder1_Label1">You have selected Frequency as ANNUALLY, now can pick up to 7 choices at most!!</span>

                        <span style="color:Red;" id="ContentPlaceHolder1_span_exterior"></span><br>
                    </div>


                    <div class="contact_row_new">
                        <div class="left_area_new">Exterior Construction</div>          
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_chkExteriorConstr">
                                <tbody><tr>
                                        <td><input type="checkbox" value="1" checked="checked" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$0" id="ContentPlaceHolder1_chkExteriorConstr_0"><label for="ContentPlaceHolder1_chkExteriorConstr_0">Brick</label></td><td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$1" id="ContentPlaceHolder1_chkExteriorConstr_1"><label for="ContentPlaceHolder1_chkExteriorConstr_1">Block</label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$2" id="ContentPlaceHolder1_chkExteriorConstr_2"><label for="ContentPlaceHolder1_chkExteriorConstr_2">Stone</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$3" id="ContentPlaceHolder1_chkExteriorConstr_3"><label for="ContentPlaceHolder1_chkExteriorConstr_3">Frame</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$4" id="ContentPlaceHolder1_chkExteriorConstr_4"><label for="ContentPlaceHolder1_chkExteriorConstr_4">Aluminum</label></td><td><input type="checkbox" value="6" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$5" id="ContentPlaceHolder1_chkExteriorConstr_5"><label for="ContentPlaceHolder1_chkExteriorConstr_5">Vinyl</label></td><td><input type="checkbox" value="7" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$6" id="ContentPlaceHolder1_chkExteriorConstr_6"><label for="ContentPlaceHolder1_chkExteriorConstr_6">Concrete</label></td><td><input type="checkbox" value="8" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$7" id="ContentPlaceHolder1_chkExteriorConstr_7"><label for="ContentPlaceHolder1_chkExteriorConstr_7">Stucco</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="9" name="ctl00$ContentPlaceHolder1$chkExteriorConstr$8" id="ContentPlaceHolder1_chkExteriorConstr_8"><label for="ContentPlaceHolder1_chkExteriorConstr_8">Dryvit</label></td><td></td><td></td><td></td>
                                    </tr>
                                </tbody></table>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Garage Ownership</div>
                        <div class="right_area_new">

                            <select textalign="Right" repeatdirection="Horizontal" id="ContentPlaceHolder1_rdoGarageOwnrshp" name="ctl00$ContentPlaceHolder1$rdoGarageOwnrshp">
                                <option value=""></option>
                                <option value="f" selected="selected">Fee/Leases</option>
                                <option value="o">Owned/No Fee</option>
                                <option value="r">Renttal only</option>

                            </select>
                        </div></div>

                    <div class="contact_row_new">
                        <div class="left_area_new">Garage Type</div>
                        <div class="right_area_new">
                            <select id="ContentPlaceHolder1_ddlGarageType" name="ctl00$ContentPlaceHolder1$ddlGarageType">
                                <option value=""></option>
                                <option value="1">Detached</option>
                                <option value="10">Indoor Leased</option>
                                <option value="11">Out Door Owned</option>
                                <option value="12">Out Door Fee Simple</option>
                                <option value="13">Outdoor Leased</option>
                                <option value="14">1- Car Detached</option>
                                <option value="15">1-Car Attached</option>
                                <option value="16">2-Car Detached</option>
                                <option value="17">2-Car Attached</option>
                                <option value="18">3-Car Detached</option>
                                <option value="19">3- Car Attached</option>
                                <option value="2" selected="selected">Attached</option>
                                <option value="20">4-Car Detached</option>
                                <option value="21">4-Car Attached</option>
                                <option value="22">Car Port</option>
                                <option value="23">Stacked parking</option>
                                <option value="24">Fenced in parking</option>
                                <option value="25">Parking Space</option>
                                <option value="26">Assigned Parking</option>
                                <option value="27">Valet Parking</option>
                                <option value="3">Space</option>
                                <option value="4">Deeded</option>
                                <option value="5">Leased</option>
                                <option value="6">Off Alley</option>
                                <option value="7">Garage Parking</option>
                                <option value="8">Indoor Owned</option>
                                <option value="9">Indoor Fee Simple</option>

                            </select>                    
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Disability Access</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_rdoDisabilityAccess">
                                <tbody><tr>
                                        <td><input type="radio" value="y" name="ctl00$ContentPlaceHolder1$rdoDisabilityAccess" id="ContentPlaceHolder1_rdoDisabilityAccess_0"><label for="ContentPlaceHolder1_rdoDisabilityAccess_0">Yes</label></td><td><input type="radio" checked="checked" value="n" name="ctl00$ContentPlaceHolder1$rdoDisabilityAccess" id="ContentPlaceHolder1_rdoDisabilityAccess_1"><label for="ContentPlaceHolder1_rdoDisabilityAccess_1">No</label></td>
                                    </tr>
                                </tbody></table>
                        </div></div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Elevator Building</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_rdoElevatorBuilding">
                                <tbody><tr>
                                        <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoElevatorBuilding" id="ContentPlaceHolder1_rdoElevatorBuilding_0"><label for="ContentPlaceHolder1_rdoElevatorBuilding_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoElevatorBuilding" id="ContentPlaceHolder1_rdoElevatorBuilding_1"><label for="ContentPlaceHolder1_rdoElevatorBuilding_1">No</label></td>
                                    </tr>
                                </tbody></table>

                        </div></div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Sewer</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_rdoSewer">
                                <tbody><tr>
                                        <td><input type="radio" checked="checked" value="p" name="ctl00$ContentPlaceHolder1$rdoSewer" id="ContentPlaceHolder1_rdoSewer_0"><label for="ContentPlaceHolder1_rdoSewer_0">Public Sewer</label></td><td><input type="radio" value="s" name="ctl00$ContentPlaceHolder1$rdoSewer" id="ContentPlaceHolder1_rdoSewer_1"><label for="ContentPlaceHolder1_rdoSewer_1">Septic</label></td>
                                    </tr>
                                </tbody></table>
                        </div></div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Water</div>
                        <div class="right_area_new">
                            <select id="ContentPlaceHolder1_ddlWater" name="ctl00$ContentPlaceHolder1$ddlWater">
                                <option value=""></option>
                                <option value="5">City Water</option>
                                <option value="4">Community Well</option>
                                <option value="1" selected="selected">Lake Michigan</option>
                                <option value="6">Lake Water</option>
                                <option value="8">Municipal Water</option>
                                <option value="3">Private Well</option>
                                <option value="2">Public</option>
                                <option value="9">Public Works</option>
                                <option value="7">Treated Water</option>

                            </select>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Amenities</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_chkAmenities">
                                <tbody><tr>
                                        <td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$chkAmenities$0" id="ContentPlaceHolder1_chkAmenities_0"><label for="ContentPlaceHolder1_chkAmenities_0">Park/Playground</label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$chkAmenities$1" id="ContentPlaceHolder1_chkAmenities_1"><label for="ContentPlaceHolder1_chkAmenities_1">Pond/Lake</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkAmenities$2" id="ContentPlaceHolder1_chkAmenities_2"><label for="ContentPlaceHolder1_chkAmenities_2">Curbs/Gutters</label></td><td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$chkAmenities$3" id="ContentPlaceHolder1_chkAmenities_3"><label for="ContentPlaceHolder1_chkAmenities_3">Sidewalks</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="6" name="ctl00$ContentPlaceHolder1$chkAmenities$4" id="ContentPlaceHolder1_chkAmenities_4"><label for="ContentPlaceHolder1_chkAmenities_4">Steet Lights</label></td><td><input type="checkbox" value="7" name="ctl00$ContentPlaceHolder1$chkAmenities$5" id="ContentPlaceHolder1_chkAmenities_5"><label for="ContentPlaceHolder1_chkAmenities_5">Street Paved</label></td><td><input type="checkbox" value="8" name="ctl00$ContentPlaceHolder1$chkAmenities$6" id="ContentPlaceHolder1_chkAmenities_6"><label for="ContentPlaceHolder1_chkAmenities_6">Lakefront</label></td><td><input type="checkbox" value="9" name="ctl00$ContentPlaceHolder1$chkAmenities$7" id="ContentPlaceHolder1_chkAmenities_7"><label for="ContentPlaceHolder1_chkAmenities_7">Waterfront</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="10" name="ctl00$ContentPlaceHolder1$chkAmenities$8" id="ContentPlaceHolder1_chkAmenities_8"><label for="ContentPlaceHolder1_chkAmenities_8">Storage</label></td><td><input type="checkbox" value="11" name="ctl00$ContentPlaceHolder1$chkAmenities$9" id="ContentPlaceHolder1_chkAmenities_9"><label for="ContentPlaceHolder1_chkAmenities_9">Bike room</label></td><td><input type="checkbox" value="12" name="ctl00$ContentPlaceHolder1$chkAmenities$10" id="ContentPlaceHolder1_chkAmenities_10"><label for="ContentPlaceHolder1_chkAmenities_10">Walking Paths</label></td><td><input type="checkbox" value="16" name="ctl00$ContentPlaceHolder1$chkAmenities$11" id="ContentPlaceHolder1_chkAmenities_11"><label for="ContentPlaceHolder1_chkAmenities_11">Pool</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="17" name="ctl00$ContentPlaceHolder1$chkAmenities$12" id="ContentPlaceHolder1_chkAmenities_12"><label for="ContentPlaceHolder1_chkAmenities_12">Weight room</label></td><td><input type="checkbox" value="18" name="ctl00$ContentPlaceHolder1$chkAmenities$13" id="ContentPlaceHolder1_chkAmenities_13"><label for="ContentPlaceHolder1_chkAmenities_13">Dog Run</label></td><td><input type="checkbox" value="19" name="ctl00$ContentPlaceHolder1$chkAmenities$14" id="ContentPlaceHolder1_chkAmenities_14"><label for="ContentPlaceHolder1_chkAmenities_14">Party room</label></td><td><input type="checkbox" value="20" name="ctl00$ContentPlaceHolder1$chkAmenities$15" id="ContentPlaceHolder1_chkAmenities_15"><label for="ContentPlaceHolder1_chkAmenities_15">Tennis courts</label></td>
                                    </tr>
                                </tbody></table>
                        </div>
                    </div>

                    <div style="width:649px" class="contact_row">
                        <div class="left_area">ASSESSMENTS INCLUDE</div>
                        <div style="width:450px;" class="right_area">
                            <table class="chkChoice" id="ContentPlaceHolder1_CheckBoxList1">
                                <tbody><tr>
                                        <td><input type="checkbox" value="1" name="ctl00$ContentPlaceHolder1$CheckBoxList1$0" id="ContentPlaceHolder1_CheckBoxList1_0"><label for="ContentPlaceHolder1_CheckBoxList1_0">Heat</label></td><td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$CheckBoxList1$1" id="ContentPlaceHolder1_CheckBoxList1_1"><label for="ContentPlaceHolder1_CheckBoxList1_1">Air Conditioning</label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$CheckBoxList1$2" id="ContentPlaceHolder1_CheckBoxList1_2"><label for="ContentPlaceHolder1_CheckBoxList1_2">Water</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$CheckBoxList1$3" id="ContentPlaceHolder1_CheckBoxList1_3"><label for="ContentPlaceHolder1_CheckBoxList1_3">Electric</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$CheckBoxList1$4" id="ContentPlaceHolder1_CheckBoxList1_4"><label for="ContentPlaceHolder1_CheckBoxList1_4">Gas</label></td><td><input type="checkbox" value="6" name="ctl00$ContentPlaceHolder1$CheckBoxList1$5" id="ContentPlaceHolder1_CheckBoxList1_5"><label for="ContentPlaceHolder1_CheckBoxList1_5">Parking</label></td><td><input type="checkbox" value="7" name="ctl00$ContentPlaceHolder1$CheckBoxList1$6" id="ContentPlaceHolder1_CheckBoxList1_6"><label for="ContentPlaceHolder1_CheckBoxList1_6">Tax</label></td><td><input type="checkbox" value="8" name="ctl00$ContentPlaceHolder1$CheckBoxList1$7" id="ContentPlaceHolder1_CheckBoxList1_7"><label for="ContentPlaceHolder1_CheckBoxList1_7">Common Insurance</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="9" name="ctl00$ContentPlaceHolder1$CheckBoxList1$8" id="ContentPlaceHolder1_CheckBoxList1_8"><label for="ContentPlaceHolder1_CheckBoxList1_8">Security</label></td><td><input type="checkbox" value="10" name="ctl00$ContentPlaceHolder1$CheckBoxList1$9" id="ContentPlaceHolder1_CheckBoxList1_9"><label for="ContentPlaceHolder1_CheckBoxList1_9">Security System</label></td><td><input type="checkbox" value="11" name="ctl00$ContentPlaceHolder1$CheckBoxList1$10" id="ContentPlaceHolder1_CheckBoxList1_10"><label for="ContentPlaceHolder1_CheckBoxList1_10">Doorman</label></td><td><input type="checkbox" value="12" checked="checked" name="ctl00$ContentPlaceHolder1$CheckBoxList1$11" id="ContentPlaceHolder1_CheckBoxList1_11"><label for="ContentPlaceHolder1_CheckBoxList1_11">TV/Cable</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="13" name="ctl00$ContentPlaceHolder1$CheckBoxList1$12" id="ContentPlaceHolder1_CheckBoxList1_12"><label for="ContentPlaceHolder1_CheckBoxList1_12">Clubhouse</label></td><td><input type="checkbox" value="14" name="ctl00$ContentPlaceHolder1$CheckBoxList1$13" id="ContentPlaceHolder1_CheckBoxList1_13"><label for="ContentPlaceHolder1_CheckBoxList1_13">Exercise Facilities</label></td><td><input type="checkbox" value="15" name="ctl00$ContentPlaceHolder1$CheckBoxList1$14" id="ContentPlaceHolder1_CheckBoxList1_14"><label for="ContentPlaceHolder1_CheckBoxList1_14">Pool</label></td><td><input type="checkbox" value="16" checked="checked" name="ctl00$ContentPlaceHolder1$CheckBoxList1$15" id="ContentPlaceHolder1_CheckBoxList1_15"><label for="ContentPlaceHolder1_CheckBoxList1_15">Exterior Maintenance</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="17" name="ctl00$ContentPlaceHolder1$CheckBoxList1$16" id="ContentPlaceHolder1_CheckBoxList1_16"><label for="ContentPlaceHolder1_CheckBoxList1_16">Lawn Care</label></td><td><input type="checkbox" value="18" name="ctl00$ContentPlaceHolder1$CheckBoxList1$17" id="ContentPlaceHolder1_CheckBoxList1_17"><label for="ContentPlaceHolder1_CheckBoxList1_17">Scavenger</label></td><td><input type="checkbox" value="19" name="ctl00$ContentPlaceHolder1$CheckBoxList1$18" id="ContentPlaceHolder1_CheckBoxList1_18"><label for="ContentPlaceHolder1_CheckBoxList1_18">Snow Removal</label></td><td><input type="checkbox" value="20" name="ctl00$ContentPlaceHolder1$CheckBoxList1$19" id="ContentPlaceHolder1_CheckBoxList1_19"><label for="ContentPlaceHolder1_CheckBoxList1_19">Lake Rights</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="21" name="ctl00$ContentPlaceHolder1$CheckBoxList1$20" id="ContentPlaceHolder1_CheckBoxList1_20"><label for="ContentPlaceHolder1_CheckBoxList1_20">Other</label></td><td><input type="checkbox" value="22" name="ctl00$ContentPlaceHolder1$CheckBoxList1$21" id="ContentPlaceHolder1_CheckBoxList1_21"><label for="ContentPlaceHolder1_CheckBoxList1_21">Wi-Fi</label></td><td><input type="checkbox" value="23" name="ctl00$ContentPlaceHolder1$CheckBoxList1$22" id="ContentPlaceHolder1_CheckBoxList1_22"><label for="ContentPlaceHolder1_CheckBoxList1_22">Internet Access</label></td><td><input type="checkbox" value="24" name="ctl00$ContentPlaceHolder1$CheckBoxList1$23" id="ContentPlaceHolder1_CheckBoxList1_23"><label for="ContentPlaceHolder1_CheckBoxList1_23">None</label></td>
                                    </tr>
                                </tbody></table>
                        </div>
                    </div>
                    <div style="width:649px" class="contact_row">
                        <div class="left_area">Pets</div>
                        <div style="width:450px;" class="right_area">
                            <select style="width:70px;" id="ContentPlaceHolder1_rdoPetFriendly" name="ctl00$ContentPlaceHolder1$rdoPetFriendly">
                                <option value="">None</option>
                                <option value="d">Dog</option>
                                <option value="c">Cat</option>
                                <option value="b">Both</option>

                            </select>
                        </div>
                    </div>
                    <div style="display:none;" class="contact_row_new">
                        <div class="left_area_new">Pet Friendly (Attached Only)</div>
                        <div class="right_area_new">
                            <table onchange="checkpet()" id="ContentPlaceHolder1_rdoPetLIst">
                                <tbody><tr>
                                        <td><input type="radio" value="y" name="ctl00$ContentPlaceHolder1$rdoPetLIst" id="ContentPlaceHolder1_rdoPetLIst_0"><label for="ContentPlaceHolder1_rdoPetLIst_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoPetLIst" id="ContentPlaceHolder1_rdoPetLIst_1"><label for="ContentPlaceHolder1_rdoPetLIst_1">No</label></td>
                                    </tr>
                                </tbody></table>
                            <div style="display:none;" id="ContentPlaceHolder1_dvPetType">Pet Type                                

                            </div> 
                        </div></div>

                    <div style="display:none;" class="contact_row_new">

                        <div class="left_area_new">Asmt Incl (Rental Only)</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_chkAsmtIncl">
                                <tbody><tr>
                                        <td><input type="checkbox" value="1" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$0" id="ContentPlaceHolder1_chkAsmtIncl_0"><label for="ContentPlaceHolder1_chkAsmtIncl_0">NoneHeat</label></td><td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$1" id="ContentPlaceHolder1_chkAsmtIncl_1"><label for="ContentPlaceHolder1_chkAsmtIncl_1">Air-Conditioning</label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$2" id="ContentPlaceHolder1_chkAsmtIncl_2"><label for="ContentPlaceHolder1_chkAsmtIncl_2">Water</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$3" id="ContentPlaceHolder1_chkAsmtIncl_3"><label for="ContentPlaceHolder1_chkAsmtIncl_3">Gas</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="5" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$4" id="ContentPlaceHolder1_chkAsmtIncl_4"><label for="ContentPlaceHolder1_chkAsmtIncl_4">Electric</label></td><td><input type="checkbox" value="6" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$5" id="ContentPlaceHolder1_chkAsmtIncl_5"><label for="ContentPlaceHolder1_chkAsmtIncl_5">Cable</label></td><td><input type="checkbox" value="7" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$6" id="ContentPlaceHolder1_chkAsmtIncl_6"><label for="ContentPlaceHolder1_chkAsmtIncl_6">Internet</label></td><td><input type="checkbox" value="8" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$7" id="ContentPlaceHolder1_chkAsmtIncl_7"><label for="ContentPlaceHolder1_chkAsmtIncl_7">Indoor Pool</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="9" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$8" id="ContentPlaceHolder1_chkAsmtIncl_8"><label for="ContentPlaceHolder1_chkAsmtIncl_8">Outdoor Pool</label></td><td><input type="checkbox" value="10" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$9" id="ContentPlaceHolder1_chkAsmtIncl_9"><label for="ContentPlaceHolder1_chkAsmtIncl_9">Party Room</label></td><td><input type="checkbox" value="11" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$10" id="ContentPlaceHolder1_chkAsmtIncl_10"><label for="ContentPlaceHolder1_chkAsmtIncl_10">Business Center</label></td><td><input type="checkbox" value="12" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$11" id="ContentPlaceHolder1_chkAsmtIncl_11"><label for="ContentPlaceHolder1_chkAsmtIncl_11">Tenni Courts</label></td>
                                    </tr><tr>
                                        <td><input type="checkbox" value="13" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$12" id="ContentPlaceHolder1_chkAsmtIncl_12"><label for="ContentPlaceHolder1_chkAsmtIncl_12">On Site management</label></td><td><input type="checkbox" value="14" name="ctl00$ContentPlaceHolder1$chkAsmtIncl$13" id="ContentPlaceHolder1_chkAsmtIncl_13"><label for="ContentPlaceHolder1_chkAsmtIncl_13">Off site management</label></td><td></td><td></td>
                                    </tr>
                                </tbody></table>
                        </div></div>

                    <div class="contact_row_new" style="display:none;">
                        <div class="left_area_new">Exposure</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_chkExposure">
                                <tbody><tr>
                                        <td><input type="checkbox" value="1" name="ctl00$ContentPlaceHolder1$chkExposure$0" id="ContentPlaceHolder1_chkExposure_0"><label for="ContentPlaceHolder1_chkExposure_0">S(South) </label></td><td><input type="checkbox" value="2" name="ctl00$ContentPlaceHolder1$chkExposure$1" id="ContentPlaceHolder1_chkExposure_1"><label for="ContentPlaceHolder1_chkExposure_1">E (East) </label></td><td><input type="checkbox" value="3" name="ctl00$ContentPlaceHolder1$chkExposure$2" id="ContentPlaceHolder1_chkExposure_2"><label for="ContentPlaceHolder1_chkExposure_2">W (West)</label></td><td><input type="checkbox" value="4" name="ctl00$ContentPlaceHolder1$chkExposure$3" id="ContentPlaceHolder1_chkExposure_3"><label for="ContentPlaceHolder1_chkExposure_3">N (North)</label></td>
                                    </tr>
                                </tbody></table>
                        </div></div>
                    <div class="clear">&nbsp;</div>
                    <div align="center">                     
                        <input type="image" onclick="showAlert_exterior();" alt="Next" src="images/save.png" class="mlr10" id="ContentPlaceHolder1_btnNext_virtual_tour" name="ctl00$ContentPlaceHolder1$btnNext_virtual_tour">
                    </div></div>



            </div>
            <div id="tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvPhotoFile">
                    <div>&nbsp;</div>    
                    <div style="display:none;" id="ContentPlaceHolder1_dvAlert_add_photo">
                        <span><span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator1_addphoto">Upload file(.jpg/.png/.gif/.bmp)only!!</span></span><br>
                        <span><span style="display:none;" id="ContentPlaceHolder1_RegularExpressionValidator2_addphoto">Upload file(.pdf)only!!</span></span><br>

                        <span style="color:Red;" id="ContentPlaceHolder1_span2_addphoto"></span><br>
                    </div>                  
                    <div class="contact_row_new">
                        <div class="left_area_new">
                            <div id="ContentPlaceHolder1_trPhoto">
                                <img style="height:55px;width:77px;" src="uploaded_files/prop_gallery/cba7f81fec7e4a15877893f2794e1576IMG00118-20110525-1617_opt_hudson.jpg" id="ContentPlaceHolder1_hdIMAGE">  <input type="submit" id="ContentPlaceHolder1_btnDel" onclick="return ConfirmDelete();" value="Remove Image" name="ctl00$ContentPlaceHolder1$btnDel"></div></div>
                        <div class="right_area_new mt18">
                            <input type="file" id="ContentPlaceHolder1_fup_image" name="ctl00$ContentPlaceHolder1$fup_image">
                            <br>
                            Best suited image size(374*322) in pixels. 
                            <input type="hidden" value="cba7f81fec7e4a15877893f2794e1576IMG00118-20110525-1617_opt_hudson.jpg" id="ContentPlaceHolder1_hdPhoto" name="ctl00$ContentPlaceHolder1$hdPhoto">
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Upload You Tube Video</div>
                        <div class="right_area_new">http://<input type="text" class="title_area w400" id="ContentPlaceHolder1_txtYoTube" size="30" name="ctl00$ContentPlaceHolder1$txtYoTube"></div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Open House</div>
                        <div class="right_area_new">
                            <select style="width:100px;" id="ContentPlaceHolder1_drp_open_house" name="ctl00$ContentPlaceHolder1$drp_open_house">
                                <option value="">None</option>
                                <option value="today">Today</option>
                                <option value="saturday">Saturday</option>
                                <option value="sunday" selected="selected">Sunday</option>

                            </select>
                            <select style="width:70px;" id="ContentPlaceHolder1_open_house_to_time" name="ctl00$ContentPlaceHolder1$open_house_to_time">
                                <option value="6am" selected="selected">6am</option>
                                <option value="7am">7am</option>
                                <option value="8am">8am</option>
                                <option value="9am">9am</option>
                                <option value="10am">10am</option>
                                <option value="11am">11am</option>
                                <option value="12am">12pm</option>

                            </select>  to 
                            <select style="width:70px;" id="ContentPlaceHolder1_open_house_from_time" name="ctl00$ContentPlaceHolder1$open_house_from_time">
                                <option value="1pm" selected="selected">1pm</option>
                                <option value="2pm">2pm</option>
                                <option value="3pm">3pm</option>
                                <option value="4pm">4pm</option>
                                <option value="5pm">5pm</option>
                                <option value="6pm">6pm</option>
                                <option value="7pm">7pm</option>
                                <option value="8pm">8pm</option>
                                <option value="9pm">9pm</option>

                            </select> 
                        </div>
                    </div>
                    <div style="display:none;" class="contact_row_new">
                        <div class="left_area_new">Print Flyer</div>
                        <div class="right_area_new"> 
                            <input type="file" id="ContentPlaceHolder1_fup_file" name="ctl00$ContentPlaceHolder1$fup_file">
                            <input type="hidden" id="ContentPlaceHolder1_hdPrintFlyer" name="ctl00$ContentPlaceHolder1$hdPrintFlyer">
                            <br><b>Only .pdf</b>  </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">&nbsp;</div>
                        <div class="right_area_new">
                            <input type="image" onclick="showAlert_addphoto(); WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions( & quot; ctl00$ContentPlaceHolder1$btnNext_gallery & quot; , & quot; & quot; , true, & quot; photo & quot; , & quot; & quot; , false, false))" alt="Next" src="images/save.png" class="mlr10" id="ContentPlaceHolder1_btnNext_gallery" name="ctl00$ContentPlaceHolder1$btnNext_gallery"></div>
                    </div>
                </div>

                <div class="TabbedPanelsContent" style="display:none;" id="ContentPlaceHolder1_dvOptionalServc">
                    <div>&nbsp;</div>    
                    <h3>Optional Services</h3>
                    <div style="display:none;" id="ContentPlaceHolder1_dvAlert_optional">
                        <span style="color:Red;" id="ContentPlaceHolder1_span_optional"></span>
                    </div>


                    <div class="clear">&nbsp;</div>
                    <div align="center">

                        <input type="image" onclick="showAlert_optional();" alt="Save" src="images/save.png" class="mlr10" id="ContentPlaceHolder1_btnSave" name="ctl00$ContentPlaceHolder1$btnSave">
                    </div>


                </div></div>

            <div id="tabs-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                <!-- photos -->
                <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_dvPhotos">
                    <div>&nbsp;</div>
                    <div class="fr"><span id="ContentPlaceHolder1_lbl_add_photo_resize"><a target="_blank" href="http://webresizer.com/resizer/"><img alt="" src="images/add_icon.gif">Free photo resizer tool</a></span>&nbsp;&nbsp;<span id="ContentPlaceHolder1_lbl_add_gallery"><a href="Add_new_gallery.aspx?property_id=NDU%3d-xSk85Em0siY%3d" id="various_add_gallery"><img alt="" src="images/add_icon.gif">Add a new Photo</a><br>(Limit up to 10 photos)</span></div>
                    <div class="clear">&nbsp;</div>







                    <ul class="photos"><li><a href="listing.aspx?property_id=NDU%3d-xSk85Em0siY%3d"><img src="uploaded_files/prop_gallery/cba7f81fec7e4a15877893f2794e1576IMG00118-20110525-1617_opt_hudson.jpg"></a><br><a href="photo_remove.aspx?property_id=NDU%3d-xSk85Em0siY%3d&amp;gallery_id=118" id="various_remove_gallery0">Remove</a><span class="mlr5">|</span><a href="photo_edit.aspx?property_id=NDU%3d-xSk85Em0siY%3d&amp;gallery_id=118" id="various_edit_gallery0">Edit</a><br>








                        </li><li><a href="listing.aspx?property_id=NDU%3d-xSk85Em0siY%3d"><img src="uploaded_files/prop_gallery/"></a><br><a href="photo_remove.aspx?property_id=NDU%3d-xSk85Em0siY%3d&amp;gallery_id=110" id="various_remove_gallery1">Remove</a><span class="mlr5">|</span><a href="photo_edit.aspx?property_id=NDU%3d-xSk85Em0siY%3d&amp;gallery_id=110" id="various_edit_gallery1">Edit</a><br><a onclick="markByDefault(110)">Mark As Default</a>





                            <!-- pagination -->
                            <div class="pagination mt10" id="ContentPlaceHolder1_pnlPager">

                            </div>
                            <input type="hidden" value="-1" id="ContentPlaceHolder1_hdPgr" name="ctl00$ContentPlaceHolder1$hdPgr">
                            <input type="hidden" id="ContentPlaceHolder1_hdTab" name="ctl00$ContentPlaceHolder1$hdTab">
                            <input type="hidden" id="ContentPlaceHolder1_hdMarkDefalt" name="ctl00$ContentPlaceHolder1$hdMarkDefalt">
                        </li></ul></div></div>

            <div id="tabs-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                <div class="TabbedPanelsContentX" id="ContentPlaceHolder1_div_optional_services">

                    <div style="display:none;" id="ContentPlaceHolder1_dvAlert6">
                        <span style="color:Red;" id="ContentPlaceHolder1_spanAlert6"></span>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">List your home in the local Realtor's MLS for a flat fee</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_rdoMls">
                                <tbody><tr>
                                        <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoMls" id="ContentPlaceHolder1_rdoMls_0"><label for="ContentPlaceHolder1_rdoMls_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoMls" id="ContentPlaceHolder1_rdoMls_1"><label for="ContentPlaceHolder1_rdoMls_1">No</label></td>
                                    </tr>
                                </tbody></table>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Virtual tour</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_rdoVirtualTour">
                                <tbody><tr>
                                        <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoVirtualTour" id="ContentPlaceHolder1_rdoVirtualTour_0"><label for="ContentPlaceHolder1_rdoVirtualTour_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoVirtualTour" id="ContentPlaceHolder1_rdoVirtualTour_1"><label for="ContentPlaceHolder1_rdoVirtualTour_1">No</label></td>
                                    </tr>
                                </tbody></table>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Real Estate Attorney</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_rdoRealStateAttorney">
                                <tbody><tr>
                                        <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoRealStateAttorney" id="ContentPlaceHolder1_rdoRealStateAttorney_0"><label for="ContentPlaceHolder1_rdoRealStateAttorney_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoRealStateAttorney" id="ContentPlaceHolder1_rdoRealStateAttorney_1"><label for="ContentPlaceHolder1_rdoRealStateAttorney_1">No</label></td>
                                    </tr>
                                </tbody></table>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Home Warrantee</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_rdoHomeWarrantee">
                                <tbody><tr>
                                        <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoHomeWarrantee" id="ContentPlaceHolder1_rdoHomeWarrantee_0"><label for="ContentPlaceHolder1_rdoHomeWarrantee_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoHomeWarrantee" id="ContentPlaceHolder1_rdoHomeWarrantee_1"><label for="ContentPlaceHolder1_rdoHomeWarrantee_1">No</label></td>
                                    </tr>
                                </tbody></table>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Appraiser</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_rdoAppraiser">
                                <tbody><tr>
                                        <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoAppraiser" id="ContentPlaceHolder1_rdoAppraiser_0"><label for="ContentPlaceHolder1_rdoAppraiser_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoAppraiser" id="ContentPlaceHolder1_rdoAppraiser_1"><label for="ContentPlaceHolder1_rdoAppraiser_1">No</label></td>
                                    </tr>
                                </tbody></table>
                        </div>
                    </div>
                    <div class="contact_row_new">
                        <div class="left_area_new">Home Inspector</div>
                        <div class="right_area_new">
                            <table id="ContentPlaceHolder1_rdoHomeInspector">
                                <tbody><tr>
                                        <td><input type="radio" checked="checked" value="y" name="ctl00$ContentPlaceHolder1$rdoHomeInspector" id="ContentPlaceHolder1_rdoHomeInspector_0"><label for="ContentPlaceHolder1_rdoHomeInspector_0">Yes</label></td><td><input type="radio" value="n" name="ctl00$ContentPlaceHolder1$rdoHomeInspector" id="ContentPlaceHolder1_rdoHomeInspector_1"><label for="ContentPlaceHolder1_rdoHomeInspector_1">No</label></td>
                                    </tr>
                                </tbody></table>
                        </div>
                    </div>
                    <div class="clear">&nbsp;</div>
                    <div align="center">


                        <input type="image" onclick="showAlert6(); WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions( & quot; ctl00$ContentPlaceHolder1$btnSave6 & quot; , & quot; & quot; , true, & quot; st & quot; , & quot; & quot; , false, false))" alt="Next" src="images/save.png" class="mlr10" id="ContentPlaceHolder1_btnSave6" name="ctl00$ContentPlaceHolder1$btnSave6">
                    </div> 
                </div>                    
            </div>

            <?php $this->endWidget(); ?>

        </div></div></div></div>



<?php $this->renderPartial('accountpage-sidebar'); ?>


