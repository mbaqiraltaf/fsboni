<?php
/* @var $this FsSearchCriteriaController */
/* @var $model FsSearchCriteria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prop_type'); ?>
		<?php echo $form->textField($model,'prop_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_range_min'); ?>
		<?php echo $form->textField($model,'price_range_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_range_max'); ?>
		<?php echo $form->textField($model,'price_range_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_room_range_min'); ?>
		<?php echo $form->textField($model,'bed_room_range_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_room_range_max'); ?>
		<?php echo $form->textField($model,'bed_room_range_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bath_room_range_min'); ?>
		<?php echo $form->textField($model,'bath_room_range_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bath_room_range_max'); ?>
		<?php echo $form->textField($model,'bath_room_range_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'size_min'); ?>
		<?php echo $form->textField($model,'size_min',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'size_max'); ?>
		<?php echo $form->textField($model,'size_max',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listing_with_virtual'); ?>
		<?php echo $form->textField($model,'listing_with_virtual',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listing_with_photo'); ?>
		<?php echo $form->textField($model,'listing_with_photo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year_built_min'); ?>
		<?php echo $form->textField($model,'year_built_min',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year_built_max'); ?>
		<?php echo $form->textField($model,'year_built_max',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garage'); ?>
		<?php echo $form->textField($model,'garage',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyword'); ?>
		<?php echo $form->textField($model,'keyword',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prop_id'); ?>
		<?php echo $form->textField($model,'prop_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'search_by'); ?>
		<?php echo $form->textField($model,'search_by',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'search_type'); ?>
		<?php echo $form->textField($model,'search_type',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garage_parking'); ?>
		<?php echo $form->textField($model,'garage_parking',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityagain'); ?>
		<?php echo $form->textField($model,'cityagain',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zip'); ?>
		<?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'neighbourhood'); ?>
		<?php echo $form->textField($model,'neighbourhood',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compass_point'); ?>
		<?php echo $form->textField($model,'compass_point',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street_name'); ?>
		<?php echo $form->textField($model,'street_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'property_style_type'); ?>
		<?php echo $form->textField($model,'property_style_type',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'property_style'); ?>
		<?php echo $form->textField($model,'property_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'property_tax'); ?>
		<?php echo $form->textField($model,'property_tax',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_year'); ?>
		<?php echo $form->textField($model,'tax_year',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frequency'); ?>
		<?php echo $form->textField($model,'frequency',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assessment'); ?>
		<?php echo $form->textField($model,'assessment',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pet_friendly'); ?>
		<?php echo $form->textField($model,'pet_friendly',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'open_house'); ?>
		<?php echo $form->textField($model,'open_house',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'open_house_to_time'); ?>
		<?php echo $form->textField($model,'open_house_to_time',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'open_house_from_time'); ?>
		<?php echo $form->textField($model,'open_house_from_time',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'county'); ?>
		<?php echo $form->textField($model,'county',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->