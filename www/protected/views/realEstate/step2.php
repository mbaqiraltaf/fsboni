<script>

    function countChar(val) {
        var len = val.value.length;
        if (len >= 1000) {
            val.value = val.value.substring(0, 500);
        } else {
            $('.char-count').text(1000 - len + ' characters left');
        }
    }
    ;
</script>

<h3>Page 2 of 6 - Property Listing Information</h3>
<div class="clear">&nbsp;</div>
<div style="text-align:right;"><b>Property Listing- Free Full page Listings for all FSBONI Members</b></div>
<h4 class="list_head mb10">Enter quick search information here to help buyers find your listing faster.</h4>


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
<?php echo $form->labelEx($model, 'street_number'); ?>
                <?php echo $form->textField($model, 'street_number', array('class' => 'w85')); ?>
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
        <div class="left_area"><?php echo $form->labelEx($model, 'state'); ?></div>
        <div class="right_area">
            <div class="state_col">
                <?php echo $form->dropDownList($model, 'state', CHtml::listData(FsStateMaster::model()->findAll(array('order' => 'state_name')), 'id', 'state_name'), array('prompt' => '', 'class' => 'w100')); ?>
            </div>
            <div class="state_col2">
                <?php echo $form->labelEx($model, 'city'); ?>
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
                        'class' => 'w70'
                    ),
                ));
                ?>
            </div>
            <div class="state_col_new">
                <?php echo $form->labelEx($model, 'neighbourhood'); ?>
                <?php echo $form->listBox($model, 'neighbourhood', array(), array('class' => 'w80')); ?>
            </div>
            <div class="state_col_new ml10">
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
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'price_range'); ?></div>
        <div class="right_area1">$ <?php echo $form->textField($model, 'price_range', array('class' => 'w85')); ?>
        </div>
    </div>


    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'prop_type'); ?></div>
        <div class="right_area1">
            $ <?php echo $form->dropDownList($model, 'prop_type', CHtml::listData(FsPropType::model()->findAll(), 'title', 'title'), array('prompt' => '', 'style' => 'width: 180px;')); ?>
        </div>
        <div class="left_area1"><?php echo $form->labelEx($model, 'prop_style'); ?><br/>
<?php echo $form->radioButtonList($model, 'prop_style', array('a' => 'Attached', 'd' => 'Detached', 'l' => 'All'), array('separator' => '')); ?>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area1">
            <?php echo $form->labelEx($model, 'numbr_bedroom'); ?></div>
        <div class="right_area1 w100">
<?php echo $form->dropDownList($model, 'numbr_bedroom', CHtml::listData(FsNoBedroom::model()->findAll(), 'title', 'title'), array('prompt' => '', 'class' => 'w50')); ?>
        </div>
        <div style="width:80px;" class="left_area1"><?php echo $form->labelEx($model, 'numbr_bathroom'); ?></div>
        <div style="width:80px;" class="right_area1">
<?php echo $form->dropDownList($model, 'numbr_bathroom', CHtml::listData(FsNoBathroom::model()->findAll(), 'title', 'title'), array('prompt' => '', 'class' => 'w50')); ?>
        </div>
        <div style="width:50px;" class="left_area1"><?php echo $form->labelEx($model, 'prop_size'); ?></div>
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
                $ <?php echo $form->textField($model, 'property_taxes', array('class' => 'w70')); ?></div>
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
<?php echo $form->dropDownList($model, 'frequency', array('' => '', 'Monthly' => 'Monthly', 'Annually' => 'Annually'), array('class' => 'w120')); ?>
            </div>
        </div>
    </div>

    <div class="contact_row">

        <div class="left_area"><?php echo $form->labelEx($model, 'prp_desc'); ?></div>

        <div class="right_area">
<?php echo $form->textArea($model, 'prp_desc', array('class' => 'desc-box', 'onkeyup' => 'countChar(this)')); ?></div>
        <div id="lblMsg1" class="char-count" style="text-align:right">1000 characters left</div>
    </div>

    <div class="clear">&nbsp;</div>

    <div align="center">
<?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/interior.png', array('class' => 'mlr10', 'name' => 'step3')); ?>

    </div>




<?php $this->endWidget(); ?>

</div>


