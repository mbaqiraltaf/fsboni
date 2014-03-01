<h3>Page 4 of 6 - Exterior Features</h3>
<div class="clear">&nbsp;</div>
<div style="text-align:right;"><b>Property Listing- Free Full page Listings for all FSBONI Members</b></div>

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

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($exterior_relation, 'exterior_constr_id'); ?> </div>
        <div class="right_area">
<?php echo Helper::generateCheckboxList($exterior_relation, 'exterior_constr_id', $form, CHtml::listData(FsExteriorConstruction::model()->findAll(), 'id', 'title')); ?>
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
<?php echo $form->dropDownList($model, 'garage_type', CHtml::listData(FsGarageType::model()->findAll(), 'id', 'title'), array('prompt' => '')); ?>
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
<?php echo Helper::generateCheckboxList($amenities_relation, 'amenities_id', $form, CHtml::listData(FsAmenities::model()->findAll(), 'id', 'title')); ?>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($assessments_include, 'assinc_id'); ?> </div>
        <div class="right_area">
<?php echo Helper::generateCheckboxList($assessments_include, 'assinc_id', $form, CHtml::listData(FsAssessmentInclude::model()->findAll(), 'id', 'title')); ?>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($model, 'pet_friendly'); ?></div>
        <div class="right_area">
<?php echo $form->dropDownList($model, 'pet_friendly', array('None' => 'None', 'Dog' => 'Dog', 'Cat' => 'Cat', 'Both' => 'Both')); ?>
        </div>
    </div>


    <div class="clear">&nbsp;</div>

    <div align="center">
<?php echo CHtml::imageButton(Yii::app()->baseUrl . '/images/add_photo.png', array('class' => 'mlr10', 'name' => 'step5')); ?>

    </div>


<?php $this->endWidget(); ?>

</div>









