<h3>Register to search Properties</h3>
<div class="clear">&nbsp;</div>
<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'fs-property-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

<?php echo $form->errorSummary($user); ?>
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

    <div class="clear">&nbsp;</div>

    <div align="center">
<?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/submit_btn.gif', array('class' => 'mlr10', 'name' => 'submit', 'type' => 'submit')); ?>

    </div>

<?php $this->endWidget(); ?>

</div>


