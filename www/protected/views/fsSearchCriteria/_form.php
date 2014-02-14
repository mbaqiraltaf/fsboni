<?php
/* @var $this FsSearchCriteriaController */
/* @var $model FsSearchCriteria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fs-search-criteria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_type'); ?>
		<?php echo $form->textField($model,'prop_type'); ?>
		<?php echo $form->error($model,'prop_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_range_min'); ?>
		<?php echo $form->textField($model,'price_range_min'); ?>
		<?php echo $form->error($model,'price_range_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_range_max'); ?>
		<?php echo $form->textField($model,'price_range_max'); ?>
		<?php echo $form->error($model,'price_range_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_room_range_min'); ?>
		<?php echo $form->textField($model,'bed_room_range_min'); ?>
		<?php echo $form->error($model,'bed_room_range_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_room_range_max'); ?>
		<?php echo $form->textField($model,'bed_room_range_max'); ?>
		<?php echo $form->error($model,'bed_room_range_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bath_room_range_min'); ?>
		<?php echo $form->textField($model,'bath_room_range_min'); ?>
		<?php echo $form->error($model,'bath_room_range_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bath_room_range_max'); ?>
		<?php echo $form->textField($model,'bath_room_range_max'); ?>
		<?php echo $form->error($model,'bath_room_range_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size_min'); ?>
		<?php echo $form->textField($model,'size_min',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'size_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size_max'); ?>
		<?php echo $form->textField($model,'size_max',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'size_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listing_with_virtual'); ?>
		<?php echo $form->textField($model,'listing_with_virtual',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'listing_with_virtual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listing_with_photo'); ?>
		<?php echo $form->textField($model,'listing_with_photo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'listing_with_photo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year_built_min'); ?>
		<?php echo $form->textField($model,'year_built_min',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'year_built_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year_built_max'); ?>
		<?php echo $form->textField($model,'year_built_max',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'year_built_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garage'); ?>
		<?php echo $form->textField($model,'garage',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'garage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword'); ?>
		<?php echo $form->textField($model,'keyword',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keyword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_id'); ?>
		<?php echo $form->textField($model,'prop_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'prop_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'search_by'); ?>
		<?php echo $form->textField($model,'search_by',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'search_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'search_type'); ?>
		<?php echo $form->textField($model,'search_type',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'search_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garage_parking'); ?>
		<?php echo $form->textField($model,'garage_parking',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'garage_parking'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityagain'); ?>
		<?php echo $form->textField($model,'cityagain',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityagain'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip'); ?>
		<?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'neighbourhood'); ?>
		<?php echo $form->textField($model,'neighbourhood',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'neighbourhood'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compass_point'); ?>
		<?php echo $form->textField($model,'compass_point',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'compass_point'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street_name'); ?>
		<?php echo $form->textField($model,'street_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'street_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_style_type'); ?>
		<?php echo $form->textField($model,'property_style_type',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'property_style_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_style'); ?>
		<?php echo $form->textField($model,'property_style'); ?>
		<?php echo $form->error($model,'property_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_tax'); ?>
		<?php echo $form->textField($model,'property_tax',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'property_tax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_year'); ?>
		<?php echo $form->textField($model,'tax_year',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tax_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frequency'); ?>
		<?php echo $form->textField($model,'frequency',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'frequency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assessment'); ?>
		<?php echo $form->textField($model,'assessment',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'assessment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pet_friendly'); ?>
		<?php echo $form->textField($model,'pet_friendly',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'pet_friendly'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'open_house'); ?>
		<?php echo $form->textField($model,'open_house',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'open_house'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'open_house_to_time'); ?>
		<?php echo $form->textField($model,'open_house_to_time',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'open_house_to_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'open_house_from_time'); ?>
		<?php echo $form->textField($model,'open_house_from_time',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'open_house_from_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'county'); ?>
		<?php echo $form->textField($model,'county',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'county'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->