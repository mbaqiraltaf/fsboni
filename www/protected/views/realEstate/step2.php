<?php
echo CHtml::scriptFile(Yii::app()->baseUrl . '/js/jquery.ui.timepicker.js');
?>

<script>
    $('#testing-time').timepicker({showLeadingZero: false });
    </script>

<!--<h3>Page 2 of 6 - Property Listing Information</h3>-->
<div class="clear">&nbsp;</div>
<div class="step2-heading" style="font-size: 16px;"><b>Free Full page Listings for all <span style="color: #FC9200">FSBONI Members</span></b></div>
<div class="step2-heading" style="font-size: 13px;"><b>Provide your basic property information <span style="color: red;">your street numbers are not displayed for your privacy</span></b></div>
<h4 class="list_head mb10 step2-heading">Enter quick search information here to help buyers find your listing faster.</h4>


<div class="form">

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

    <?php echo $form->errorSummary($model); ?>


    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'fsboni_property_id'); ?></div>
        <div class="right_area">
            <label>Will be given by FSBONI upon approval of listing</label>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'street_number'); ?></div>
        <div class="right_area">
            <div class="state_col">
                <?php echo $form->textField($model, 'street_number', array('class' => 'w100')); ?>
            </div>
            <div class="state_col">
                <?php echo $form->labelEx($model, 'compas_point'); ?>
                <?php echo $form->dropDownList($model, 'compas_point', array('N' => 'N', 'S' => 'S', 'E' => 'E', 'W' => 'W'), array('class' => 'w100')); ?>
            </div>
            <div class="state_col ml10">
                <?php echo $form->labelEx($model, 'street_name'); ?>
                <?php echo $form->textField($model, 'street_name', array('class' => 'w85')); ?>
            </div>
            <div class="state_col_last">
                <?php echo $form->labelEx($model, 'street_suffix'); ?>
                <?php
                $street_suffix = array('' => '', 'AVE' => 'AVE', 'BLVD' => 'BLVD', 'CIR' => 'CIR', 'CT' => 'CT', 'DR' => 'DR', 'HWY' => 'HWY', 'LN' => 'LN', 'PKWY' => 'PKWY', 'PL' => 'PL', 'PLZ' => 'PLZ', 'PT' => 'PT', 'RD' => 'RD', 'SQ' => 'SQ', 'ST' => 'ST', 'TER' => 'TER', 'TRL' => 'TRL', 'WAY' => 'WAY', 'NONE' => 'NONE');
                echo $form->dropDownList($model, 'street_suffix', $street_suffix, array('class' => 'w100'));
                ?>
            </div>
        </div>
    </div>


    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'city'); ?></div>
        <div class="right_area">
            <div class="state_col">
                <?php
                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'model' => $model,
                    'attribute' => 'city',
                    // additional javascript options for the autocomplete plugin
                    'options' => array(
                        'minLength' => '2',
                    ),
                    'source' => 'js: function(request, response) {
                                $.ajax({
                                    type : "POST",
                                    url: "' . $this->createUrl('realEstate/loadCities') . '",
                                    dataType: "json",
                                    data: {
                                        state_id: $("#FsProperty_state").val()
                                    },
                                    success: function (data) {
                                            response(data);
                                    }
                                })
                             }',
                    //'source'=>$this->createUrl("realEstate/loadCities"),
                    'htmlOptions' => array(
                        'class' => 'w85'
                    ),
                ));
                ?>
            </div>
            <div class="state_col2">
                <?php echo $form->labelEx($model, 'state'); ?>
                <?php echo $form->dropDownList($model, 'state', CHtml::listData(FsStateMaster::model()->findAll(array('order' => 'state_name')), 'id', 'state_name'), array('prompt' => '', 'class' => 'w70')); ?>
            </div>
            <div class="state_col2">
                <?php echo $form->labelEx($model, 'zip_code'); ?>
                <?php
                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'model' => $model,
                    'attribute' => 'zip_code',
                    // additional javascript options for the autocomplete plugin
                    'options' => array(
                        'minLength' => '1',
                    ),
                    'source' => 'js: function(request, response) {
                                $.ajax({
                                    type : "POST",
                                    url: "' . $this->createUrl('realEstate/loadZipCode') . '",
                                    dataType: "json",
                                    data: {
                                         county_name : $("#FsProperty_county").val(),
                                         city_name : $("#FsProperty_city").val()
                                    },
                                    success: function (data) {
                                            response(data);
                                    }
                                })
                             }',
                    'htmlOptions' => array(
                        'class' => 'w40'
                    ),
                ));
                ?>
            </div>
            <div class="state_col_new ml10">
                <?php echo $form->labelEx($model, 'county'); ?>
                <?php
                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'model' => $model,
                    'attribute' => 'county',
                    // additional javascript options for the autocomplete plugin
                    'options' => array(
                        'minLength' => '1',
                    ),
                    'source' => 'js: function(request, response) {
                                $.ajax({
                                    type : "POST",
                                    url: "' . $this->createUrl('realEstate/loadCounties') . '",
                                    dataType: "json",
                                    data: {
                                         city_name : $("#FsProperty_city").val()
                                    },
                                    success: function (data) {
                                            response(data);
                                    }
                                })
                             }',
                    'htmlOptions' => array(
                        'class' => 'w69'
                    ),
                ));
                ?>
            </div>
        </div>
    </div>

    <div class="contact_row">

        <div class="left_area"><?php echo $form->labelEx($model, 'neighbourhood'); ?></div>
        <div class="right_area">
            <div class="left_area1" style="width: 130px;">
                <?php echo $form->textField($model, 'neighbourhood', array('class' => 'w85')); ?></div>
            <div class="left_area1" style="margin-right: 20px;">
                <?php echo $form->labelEx($model, 'building_name'); ?>
                <?php echo $form->textField($model, 'building_name', array('class' => 'w70')); ?>
            </div>
            <div class="left_area1">
                <?php echo $form->labelEx($model, 'sub_division'); ?>
                <?php echo $form->textField($model, 'sub_division', array('class' => 'w85')); ?>
            </div>


        </div>

    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'price_range'); ?></div>
        <div class="right_area1">$ <?php echo $form->textField($model, 'price_range', array('class' => 'w85 digit-format')); ?>
        </div>
    </div>


    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'prop_type'); ?></div>
        <div class="right_area1">
            <?php echo $form->dropDownList($model, 'prop_type', CHtml::listData(FsPropType::model()->findAll(), 'title', 'title'), array('prompt' => '', 'style' => 'width: 180px;')); ?>
        </div>
        <div class="left_area1" style="width: 55px !important;"><?php echo $form->labelEx($model, 'pet_friendly'); //echo $form->labelEx($model, 'prop_style');    ?></div>
        <div class="right_area1">
            <?php echo $form->dropDownList($model, 'pet_friendly', array('None' => 'None', 'Dog' => 'Dog', 'Cat' => 'Cat', 'Both' => 'Both'), array('style' => 'width: 180px;')); //echo $form->radioButtonList($model, 'prop_style', array('Attached' => 'Attached', 'Detached' => 'Detached', 'All' => 'All'), array('separator' => '')); ?>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area1">
            <?php echo $form->labelEx($model, 'numbr_bedroom'); ?></div>
        <div class="right_area1 w100">
            <?php echo $form->dropDownList($model, 'numbr_bedroom', CHtml::listData(FsNoBedroom::model()->findAll(array('order' => 'id')), 'title', 'title'), array('class' => 'w50')); ?>
        </div>
<!--        <div class="right_area1 w100">
            <?php echo $form->dropDownList($model, 'numbr_bedroom[]', CHtml::listData(FsNoBedroom::model()->findAll(array('order' => 'title')), 'title', 'title'), array('class' => 'w50')); ?>
        </div>-->
        <div style="width:80px;" class="left_area1"><?php echo $form->labelEx($model, 'numbr_bathroom'); ?></div>
        <div class="right_area1 w100">
            <?php echo $form->dropDownList($model, 'numbr_bathroom', CHtml::listData(FsNoBathroom::model()->findAll(array('order' => 'id')), 'title', 'title'), array('class' => 'w50')); ?>
        </div>
<!--        <div class="right_area1 w70">
            <?php echo $form->dropDownList($model, 'numbr_bathroom[]', CHtml::listData(FsNoBathroom::model()->findAll(array('order' => 'title')), 'title', 'title'), array('class' => 'w50')); ?>
        </div>-->
        <div class="left_area1 w70"><?php echo $form->labelEx($model, 'prop_size'); ?></div>
        <div style="width:200px;" class="right_area1">
            <div style="float:left;">
                <?php
                $prop_size = array();
                for ($i = 100; $i <= 5000; $i+=100) {
                    $prop_size[$i] = $i . ' sqft';
                }
                echo $form->dropDownList($model, 'prop_size', $prop_size, array('prompt' => '-Select-', 'style' => 'width: 130px;'));
                ?>
            </div>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'property_taxes'); ?></div>

        <div class="right_area">
            <div class="left_area1">
                $ <?php echo $form->textField($model, 'property_taxes', array('class' => 'w70 digit-format')); ?></div>
            <div class="tax_year">
                <?php echo $form->labelEx($model, 'tax_year'); ?>
                <?php echo $form->textField($model, 'tax_year', array('class' => 'four_digit')); ?>
            </div>
            <div class="left_area1">
                <?php echo $form->labelEx($model, 'assessment'); ?>
                $ <?php echo $form->textField($model, 'assessment', array('class' => 'w70')); ?>
            </div>
            <div class="riht_area1">

                <?php echo $form->labelEx($model, 'frequency'); ?>
                <?php echo $form->dropDownList($model, 'frequency', array('' => 'None', 'Monthly' => 'Monthly', 'Annually' => 'Annually'), array('class' => 'w120')); ?>
            </div>
        </div>
    </div>

    <div class="contact_row">

        <div class="left_area"><?php echo $form->labelEx($model, 'prp_desc'); ?></div>

        <div class="right_area">
            <?php echo $form->textArea($model, 'prp_desc', array('class' => 'desc-box', 'onkeyup' => 'countChar(this)')); ?></div>
        <div id="lblMsg1" class="char-count" style="text-align:right">1000 characters left</div>
    </div>
    
    <div class="contact_row">

        <div class="left_area">Upload Photo<div> 
            </div></div>
        <div class="right_area"> <?php echo $form->fileField($model, 'att_dett_style'); ?>
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
            <?php echo $form->dropDownList($model, 'open_house', array('today' => 'Today', 'saturday' => 'Saturday', 'sunday' => 'Sunday', 'monday' => 'Monday', 'tuesday' => 'Tuesday', 'wednesday' => 'Wednesday', 'thursday' => 'Thursday', 'friday' => 'Friday'), array('prompt' => 'None', 'class' => 'w100')); ?>
            
            <?php echo $form->textField($model, 'open_house_to_time', array('id' => 'testing-time')); ?>

            <?php //echo $form->dropDownList($model, 'open_house_to_time', array('6am' => '6am', '7am' => '7am', '8am' => '8am', '9am' => '9am', '10am' => '10am', '11am' => '11am', '12am' => '12am'), array('class' => 'w70')); ?>
            to
<?php echo $form->dropDownList($model, 'open_house_from_time', array('1pm' => '1pm', '2pm' => '2pm', '3pm' => '3pm', '4pm' => '4pm', '5pm' => '5pm', '6pm' => '6pm', '7pm' => '7pm', '8pm' => '8pm', '9pm' => '9pm'), array('class' => 'w70')); ?>
        </div> 
    </div>

    <div class="clear">&nbsp;</div>

    <div align="center">
        <?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/save.png', array('class' => 'mlr10', 'name' => 'submit_property')); ?>

    </div>




    <?php $this->endWidget(); ?>

</div>


