<?php
if (!empty($message)) {
    echo $message;
} else {
    ?>


    <h3>Forgot Password</h3>
    <div class="clear">&nbsp;</div>

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

    <?php echo $form->errorSummary(array($model)); ?>

    <div class="contact_row" id="div_password" runat="server">
        <p>Please enter your Email address forgot password sent to your mail address.</p><br />
        <div class="left_area"><?php echo $form->labelEx($model, 'email'); ?></div>
        <div class="right_area"><?php echo $form->textField($model, 'email'); ?></div>
    </div>
    <div class="contact_row">
        <div class="left_area">&nbsp;</div>
        <div class="right_area"><?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/submit_btn.gif', array('class' => 'mlr10', 'name' => 'submit')); ?></div>
    </div>


    <?php $this->endWidget(); ?>

<?php } ?>
