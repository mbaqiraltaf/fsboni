<h3>Interior Features</h3>
<div class="clear">&nbsp;</div>
<div style="text-align:right;"><b>Property Listing- Free Full page Listings for all FSBONI Members</b></div>
<?php
$flooring = array('h' => 'Hardwood', 'c' => 'Carpet', 't' => 'Tile', 'o' => 'Other');
$levels_data = array('' => '', 'M' => 'Main', 'L' => 'Lower Level', 'U' => 'Upper Level');
for ($i = 1; $i <= 100; $i++) {
    $levels_data[$i] = $i;
}
$level = CHtml::dropDownList('Level', '', $levels_data, array('class' => 'select_step3'));
?>

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
        <div class="left_area">
            <?php echo $form->labelEx($model, 'living_room_menu'); ?>
        </div>
        <div class="right_area">
            <?php echo $form->textField($model, 'living_room_min', array('class' => 'w50')); ?>
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'living_room_max', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'living_room_fire'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'living_room_fire'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'dinning_max_dimension', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'dinning_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'dinning_fireplace'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'family_room_max', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'family_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'family_fireplace'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'kitchen_max_dimension', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'kitchen_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'kitchen_fireplace'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'bed_mast_bed_max_dim', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'bed_mast_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'bed_mast_fireplace'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'bed_max_dim_1', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'bed_1_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'bed_1_fireplace'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'bed_max_dim_2', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'bed_2_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'bed_2_fireplace'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'bed_max_dim_3', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'bed_3_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'bed_3_fireplace'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'bed_max_dim_4', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'bed_4_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'bed_4_fireplace'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'bed_max_dim_5', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'bed_5_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'bed_5_fireplace'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'den_max', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'den_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'den_fireplace'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'laundry_max', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'laundry_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'laundry_fireplace'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'balcony_max', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'balcony_fire'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'balcony_fire'); ?>
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
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/x_icon.gif', '', array('class' => 'mlr20')); ?>
            <?php echo $form->textField($model, 'bonus_room_max', array('class' => 'w50')); ?>
            <span class="ml10"> Level</span>
            <?php echo $level; ?>
            <?php echo $form->labelEx($model, 'bonus_room_fireplace'); ?> &nbsp;
            <?php echo $form->checkBox($model, 'bonus_room_fireplace'); ?>
<?php echo $form->labelEx($model, 'bouns_flooring'); ?>
<?php echo $form->dropDownList($model, 'bouns_flooring', $flooring, array('class' => 'w95')); ?>
        </div>
    </div>

    <div class="contact_row">
        <div class="left_area"><?php echo $form->labelEx($interior_feature, 'interior_prop_featur'); ?></div>
        <div class="right_area">
<?php echo Helper::generateCheckboxList($interior_feature, 'interior_prop_featur', $form, CHtml::listData(FsInteriorPropertyFeatur::model()->findAll(), 'id', 'title')); ?>
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
        <div class="left_area"><?php echo $form->labelEx($model, 'electricity'); ?></div>
        <div class="right_area">
<?php echo $form->radioButtonList($model, 'electricity', array('Circuit Breakers' => 'Circuit Breakers', '200+ Amp Service' => '200+ Amp Service'), array('separator' => '')); ?>
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


<?php $this->endWidget(); ?>

</div>