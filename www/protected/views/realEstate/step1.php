<h3>Register to List your Home for FREE!</h3>
<div class="clear">&nbsp;</div>
<!--<div style="text-align:right;"><b>Free Membership - List your home for free on FSBONI</b></div>-->


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

<?php echo $form->errorSummary(array($user)); ?>
    <br/>

    <p class="required">Fields Marked as (*) are mandatory</p>




    <div class="contact_row">
        <div class="left_area1"><?php echo $form->labelEx($user, 'first_name'); ?></div>
        <div
            class="right_area1"><?php echo $form->textField($user, 'first_name', array('size' => 60, 'maxlength' => 255)); ?></div>
        <div style="float:left; width:20px;">&nbsp;</div>
        <div class="left_area1"><?php echo $form->labelEx($user, 'last_name'); ?></div>
        <div
            class="right_area1"><?php echo $form->textField($user, 'last_name', array('size' => 60, 'maxlength' => 255)); ?></div>
    </div>

    <div class="contact_row">
        <div class="left_area1"><?php echo $form->labelEx($user, 'email'); ?></div>
        <div
            class="right_area1"><?php echo $form->textField($user, 'email', array('size' => 60, 'maxlength' => 255)); ?></div>
        <div style="float:left; width:20px;">&nbsp;</div>
        <div class="left_area1"><?php echo $form->labelEx($user, 'repeat_email'); ?></div>
        <div
            class="right_area1"><?php echo $form->textField($user, 'repeat_email', array('size' => 60, 'maxlength' => 255)); ?></div>
    </div>


    <div class="contact_row">
        <div class="left_area1"><?php echo $form->labelEx($user, 'paswd'); ?></div>
        <div
            class="right_area1"><?php echo $form->passwordField($user, 'paswd', array('size' => 60, 'maxlength' => 255)); ?></div>
        <div style="float:left; width:20px;">&nbsp;</div>
        <div class="left_area1"><?php echo $form->labelEx($user, 'repeat_password'); ?></div>
        <div
            class="right_area1"><?php echo $form->passwordField($user, 'repeat_password', array('size' => 60, 'maxlength' => 255)); ?></div>
    </div>


    <!--<div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($seller, 'street_number'); ?></div>
        <div class="right_area">
            <div class="state_col">
    <?php echo $form->textField($seller, 'street_number', array('class' => 'w100')); ?>
            </div>
            <div class="state_col">
<?php echo $form->labelEx($seller, 'compass_poing'); ?>
    <?php echo $form->dropDownList($seller, 'compass_poing', array('' => '', 'N' => 'N', 'S' => 'S', 'E' => 'E', 'W' => 'W'), array('class' => 'w100')); ?>
            </div>
            <div class="state_col ml10">
<?php echo $form->labelEx($seller, 'street_name'); ?>
    <?php echo $form->textField($seller, 'street_name', array('class' => 'w100')); ?>
            </div>
            <div class="state_col_last">
    <?php echo $form->labelEx($seller, 'street_suffix'); ?>
    <?php
    $street_suffix = array('' => '', 'AVE' => 'AVE', 'BLVD' => 'BLVD', 'CIR' => 'CIR', 'CT' => 'CT', 'DR' => 'DR', 'HWY' => 'HWY', 'LN' => 'LN', 'PKWY' => 'PKWY', 'PL' => 'PL', 'PLZ' => 'PLZ', 'PT' => 'PT', 'RD' => 'RD', 'SQ' => 'SQ', 'ST' => 'ST', 'TER' => 'TER', 'TRL' => 'TRL', 'WAY' => 'WAY', 'NONE' => 'NONE');
    echo $form->dropDownList($seller, 'street_suffix', $street_suffix, array('class' => 'w100'));
    ?>
            </div>
        </div>
    </div>
<?php echo $form->hiddenField($user, 'STATUS', array('value' => 'a')); ?>
<?php echo $form->hiddenField($user, 'user_type', array('value' => 's')); ?>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($user, 'state'); ?></div>
        <div class="right_area">
            <div class="state_col">
    <?php echo $form->dropDownList($user, 'state', CHtml::listData(FsStateMaster::model()->findAll(array('order' => 'state_name')), 'id', 'state_name'), array('prompt' => '', 'class' => 'w100')); ?>
            </div>
            <div class="state_col2">
    <?php echo $form->labelEx($user, 'city'); ?>
    <?php
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model' => $user,
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
                                        state_id: $("#FsUser_state").val()
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
    <?php echo $form->labelEx($user, 'county'); ?>
    <?php
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model' => $user,
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
                                         city_name : $("#FsUser_city").val()
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
    <?php echo $form->labelEx($seller, 'address'); ?>
    <?php echo $form->listBox($seller, 'address', array(), array('class' => 'w80')); ?>
            </div>
            <div class="state_col_new ml10">
    <?php echo $form->labelEx($seller, 'zip_code'); ?>
    <?php
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model' => $seller,
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
                                         county_name : $("#FsUser_county").val(),
                                         city_name : $("#FsUser_city").val()
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
        <div class="left_area"><?php echo $form->labelEx($seller, 'contact'); ?></div>
        <div class="right_area">
<?php echo $form->textField($seller, 'contact'); ?>
        </div>
    </div>-->

    <div class="clear">&nbsp;</div>

    <div align="center">
<?php
//echo CHtml::submitButton("",array('name'=>'step2', 'class' => 'step2 mlr10'));
echo CHtml::imageButton(Yii::app()->baseUrl . '/images/submit_btn.gif', array('class' => 'mlr10', 'name' => 'submit', 'type' => 'submit'));
?>

    </div>
    <br/>
    <div style="font-size: 14px;">Already a registered member? <a style="text-decoration:underline;" href="<?php echo $this->createUrl('realEstate/login'); ?>">Sign-in</a></div>




<?php $this->endWidget(); ?>

</div>


