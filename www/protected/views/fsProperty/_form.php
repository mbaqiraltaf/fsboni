<?php
/* @var $this FsPropertyController */
/* @var $model FsProperty */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fs-property-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fsboni_property_id'); ?>
		<?php echo $form->textField($model,'fsboni_property_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fsboni_property_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_title'); ?>
		<?php echo $form->textField($model,'prop_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'prop_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_id'); ?>
		<?php echo $form->textField($model,'seller_id'); ?>
		<?php echo $form->error($model,'seller_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street_number'); ?>
		<?php echo $form->textField($model,'street_number',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'street_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compas_point'); ?>
		<?php echo $form->textField($model,'compas_point',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'compas_point'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prp_add'); ?>
		<?php echo $form->textArea($model,'prp_add',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'prp_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city'); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip_code'); ?>
		<?php echo $form->textField($model,'zip_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zip_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'neighbourhood'); ?>
		<?php echo $form->textField($model,'neighbourhood'); ?>
		<?php echo $form->error($model,'neighbourhood'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school'); ?>
		<?php echo $form->textField($model,'school'); ?>
		<?php echo $form->error($model,'school'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mls_number'); ?>
		<?php echo $form->textField($model,'mls_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mls_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prp_desc'); ?>
		<?php echo $form->textArea($model,'prp_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'prp_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prp_type'); ?>
		<?php echo $form->textField($model,'prp_type'); ?>
		<?php echo $form->error($model,'prp_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_range'); ?>
		<?php echo $form->textField($model,'price_range',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'price_range'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numbr_bedroom'); ?>
		<?php echo $form->textField($model,'numbr_bedroom'); ?>
		<?php echo $form->error($model,'numbr_bedroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numbr_bathroom'); ?>
		<?php echo $form->textField($model,'numbr_bathroom'); ?>
		<?php echo $form->error($model,'numbr_bathroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_style'); ?>
		<?php echo $form->textField($model,'prop_style',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'prop_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'att_dett_style'); ?>
		<?php echo $form->textField($model,'att_dett_style'); ?>
		<?php echo $form->error($model,'att_dett_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'air_conditioning'); ?>
		<?php echo $form->textField($model,'air_conditioning'); ?>
		<?php echo $form->error($model,'air_conditioning'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'heating'); ?>
		<?php echo $form->textField($model,'heating'); ?>
		<?php echo $form->error($model,'heating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kitchen_max_dimension'); ?>
		<?php echo $form->textField($model,'kitchen_max_dimension',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kitchen_max_dimension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kitchen_min_dimension'); ?>
		<?php echo $form->textField($model,'kitchen_min_dimension',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kitchen_min_dimension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kitchen_menu'); ?>
		<?php echo $form->textField($model,'kitchen_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'kitchen_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kitchen_fireplace'); ?>
		<?php echo $form->textField($model,'kitchen_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'kitchen_fireplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dinning'); ?>
		<?php echo $form->textField($model,'dinning'); ?>
		<?php echo $form->error($model,'dinning'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dinning_max_dimension'); ?>
		<?php echo $form->textField($model,'dinning_max_dimension',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dinning_max_dimension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dinning_min_dimenstion'); ?>
		<?php echo $form->textField($model,'dinning_min_dimenstion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dinning_min_dimenstion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dinning_menu'); ?>
		<?php echo $form->textField($model,'dinning_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'dinning_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dinning_fireplace'); ?>
		<?php echo $form->textField($model,'dinning_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'dinning_fireplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attic'); ?>
		<?php echo $form->textField($model,'attic'); ?>
		<?php echo $form->error($model,'attic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attic_max_dimension'); ?>
		<?php echo $form->textField($model,'attic_max_dimension',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'attic_max_dimension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attic_min_dimension'); ?>
		<?php echo $form->textField($model,'attic_min_dimension',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'attic_min_dimension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'basement_details'); ?>
		<?php echo $form->textField($model,'basement_details'); ?>
		<?php echo $form->error($model,'basement_details'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'base_max_dimenstion'); ?>
		<?php echo $form->textField($model,'base_max_dimenstion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'base_max_dimenstion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'base_min_dimension'); ?>
		<?php echo $form->textField($model,'base_min_dimension',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'base_min_dimension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bath_max_dim_1'); ?>
		<?php echo $form->textField($model,'bath_max_dim_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bath_max_dim_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bath_min_dim_1'); ?>
		<?php echo $form->textField($model,'bath_min_dim_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bath_min_dim_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bath_max_dim_2'); ?>
		<?php echo $form->textField($model,'bath_max_dim_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bath_max_dim_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bath_min_dim_2'); ?>
		<?php echo $form->textField($model,'bath_min_dim_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bath_min_dim_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bath_max_dim_3'); ?>
		<?php echo $form->textField($model,'bath_max_dim_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bath_max_dim_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bath_min_dim_3'); ?>
		<?php echo $form->textField($model,'bath_min_dim_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bath_min_dim_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_mast_bed_max_dim'); ?>
		<?php echo $form->textField($model,'bed_mast_bed_max_dim',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_mast_bed_max_dim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_mast_bed_min_dim'); ?>
		<?php echo $form->textField($model,'bed_mast_bed_min_dim',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_mast_bed_min_dim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_mast_menu'); ?>
		<?php echo $form->textField($model,'bed_mast_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_mast_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_mast_fireplace'); ?>
		<?php echo $form->textField($model,'bed_mast_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_mast_fireplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_max_dim_1'); ?>
		<?php echo $form->textField($model,'bed_max_dim_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_max_dim_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_min_dim_1'); ?>
		<?php echo $form->textField($model,'bed_min_dim_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_min_dim_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_1_menu'); ?>
		<?php echo $form->textField($model,'bed_1_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_1_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_1_fireplace'); ?>
		<?php echo $form->textField($model,'bed_1_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_1_fireplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_max_dim_2'); ?>
		<?php echo $form->textField($model,'bed_max_dim_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_max_dim_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_min_dim_2'); ?>
		<?php echo $form->textField($model,'bed_min_dim_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_min_dim_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_2_menu'); ?>
		<?php echo $form->textField($model,'bed_2_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_2_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_2_fireplace'); ?>
		<?php echo $form->textField($model,'bed_2_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_2_fireplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_max_dim_3'); ?>
		<?php echo $form->textField($model,'bed_max_dim_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_max_dim_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_min_dim_3'); ?>
		<?php echo $form->textField($model,'bed_min_dim_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_min_dim_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_3_menu'); ?>
		<?php echo $form->textField($model,'bed_3_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_3_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_3_fireplace'); ?>
		<?php echo $form->textField($model,'bed_3_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_3_fireplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_max_dim_4'); ?>
		<?php echo $form->textField($model,'bed_max_dim_4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_max_dim_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_min_dim_4'); ?>
		<?php echo $form->textField($model,'bed_min_dim_4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_min_dim_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_4_menu'); ?>
		<?php echo $form->textField($model,'bed_4_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_4_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_4_fireplace'); ?>
		<?php echo $form->textField($model,'bed_4_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_4_fireplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fireplace_location'); ?>
		<?php echo $form->textField($model,'fireplace_location'); ?>
		<?php echo $form->error($model,'fireplace_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_max_dim_5'); ?>
		<?php echo $form->textField($model,'bed_max_dim_5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_max_dim_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_min_dim_5'); ?>
		<?php echo $form->textField($model,'bed_min_dim_5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bed_min_dim_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_5_menu'); ?>
		<?php echo $form->textField($model,'bed_5_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_5_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed_5_fireplace'); ?>
		<?php echo $form->textField($model,'bed_5_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bed_5_fireplace'); ?>
	</div>

	<div class="row">

		<?php echo $form->error($model,'garage_ownrship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garage_on_site'); ?>
		<?php echo $form->textField($model,'garage_on_site',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'garage_on_site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garage_type'); ?>
		<?php echo $form->textField($model,'garage_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'garage_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disability_access'); ?>
		<?php echo $form->textField($model,'disability_access',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'disability_access'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'elevatory_building'); ?>
		<?php echo $form->textField($model,'elevatory_building',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'elevatory_building'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sewer'); ?>
		<?php echo $form->textField($model,'sewer',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'sewer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'water'); ?>
		<?php echo $form->textField($model,'water'); ?>
		<?php echo $form->error($model,'water'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pet_friendly'); ?>
		<?php echo $form->textField($model,'pet_friendly',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'pet_friendly'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assessment'); ?>
		<?php echo $form->textField($model,'assessment',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'assessment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_date'); ?>
		<?php echo $form->textField($model,'updated_date'); ?>
		<?php echo $form->error($model,'updated_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'electricity'); ?>
		<?php echo $form->textField($model,'electricity',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'electricity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'youtube'); ?>
		<?php echo $form->textArea($model,'youtube',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'youtube'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_home_inMls'); ?>
		<?php echo $form->textField($model,'list_home_inMls',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'list_home_inMls'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'virtual_tour'); ?>
		<?php echo $form->textField($model,'virtual_tour',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'virtual_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'real_estate_attorney'); ?>
		<?php echo $form->textField($model,'real_estate_attorney',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'real_estate_attorney'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_warantee'); ?>
		<?php echo $form->textField($model,'home_warantee',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'home_warantee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'appraiser'); ?>
		<?php echo $form->textField($model,'appraiser',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'appraiser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_inspector'); ?>
		<?php echo $form->textField($model,'home_inspector',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'home_inspector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_size'); ?>
		<?php echo $form->textField($model,'prop_size'); ?>
		<?php echo $form->error($model,'prop_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_view_count'); ?>
		<?php echo $form->textField($model,'prop_view_count'); ?>
		<?php echo $form->error($model,'prop_view_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_type'); ?>
		<?php echo $form->textField($model,'prop_type',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'prop_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fireplace_details'); ?>
		<?php echo $form->textArea($model,'fireplace_details',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fireplace_details'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_frame_for_selling'); ?>
		<?php echo $form->textField($model,'time_frame_for_selling',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'time_frame_for_selling'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'living_room_max'); ?>
		<?php echo $form->textField($model,'living_room_max',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'living_room_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'living_room_min'); ?>
		<?php echo $form->textField($model,'living_room_min',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'living_room_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'living_room_menu'); ?>
		<?php echo $form->textField($model,'living_room_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'living_room_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'living_room_fire'); ?>
		<?php echo $form->textField($model,'living_room_fire',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'living_room_fire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'family_room_max'); ?>
		<?php echo $form->textField($model,'family_room_max',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'family_room_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'family_room_min'); ?>
		<?php echo $form->textField($model,'family_room_min',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'family_room_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'family_menu'); ?>
		<?php echo $form->textField($model,'family_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'family_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'family_fireplace'); ?>
		<?php echo $form->textField($model,'family_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'family_fireplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'den_max'); ?>
		<?php echo $form->textField($model,'den_max',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'den_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'den_min'); ?>
		<?php echo $form->textField($model,'den_min',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'den_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'den_menu'); ?>
		<?php echo $form->textField($model,'den_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'den_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'den_fireplace'); ?>
		<?php echo $form->textField($model,'den_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'den_fireplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'laundry_max'); ?>
		<?php echo $form->textField($model,'laundry_max',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'laundry_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'laundry_min'); ?>
		<?php echo $form->textField($model,'laundry_min',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'laundry_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'laundry_menu'); ?>
		<?php echo $form->textField($model,'laundry_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'laundry_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'laundry_fireplace'); ?>
		<?php echo $form->textField($model,'laundry_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'laundry_fireplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'balcony_max'); ?>
		<?php echo $form->textField($model,'balcony_max',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'balcony_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'balcony_min'); ?>
		<?php echo $form->textField($model,'balcony_min',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'balcony_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'balcony_menu'); ?>
		<?php echo $form->textField($model,'balcony_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'balcony_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'balcony_fire'); ?>
		<?php echo $form->textField($model,'balcony_fire',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'balcony_fire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonus_room_max'); ?>
		<?php echo $form->textField($model,'bonus_room_max',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bonus_room_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonus_room_min'); ?>
		<?php echo $form->textField($model,'bonus_room_min',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bonus_room_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonus_room_menu'); ?>
		<?php echo $form->textField($model,'bonus_room_menu',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bonus_room_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonus_room_fireplace'); ?>
		<?php echo $form->textField($model,'bonus_room_fireplace',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bonus_room_fireplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_taxes'); ?>
		<?php echo $form->textField($model,'property_taxes',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'property_taxes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_year'); ?>
		<?php echo $form->textField($model,'tax_year',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tax_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street_suffix'); ?>
		<?php echo $form->textField($model,'street_suffix',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'street_suffix'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'living_room_flooring'); ?>
		<?php echo $form->textField($model,'living_room_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'living_room_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dinning_room_flooring'); ?>
		<?php echo $form->textField($model,'dinning_room_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'dinning_room_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'family_room_flooring'); ?>
		<?php echo $form->textField($model,'family_room_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'family_room_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kitchen_flooring'); ?>
		<?php echo $form->textField($model,'kitchen_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'kitchen_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mastrBedroom_flooring'); ?>
		<?php echo $form->textField($model,'mastrBedroom_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'mastrBedroom_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bedroom1_flooring'); ?>
		<?php echo $form->textField($model,'bedroom1_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bedroom1_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bedroom2_flooring'); ?>
		<?php echo $form->textField($model,'bedroom2_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bedroom2_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bedroom3_flooring'); ?>
		<?php echo $form->textField($model,'bedroom3_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bedroom3_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bedroom4_flooring'); ?>
		<?php echo $form->textField($model,'bedroom4_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bedroom4_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bedroom5_flooring'); ?>
		<?php echo $form->textField($model,'bedroom5_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bedroom5_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'den_flooring'); ?>
		<?php echo $form->textField($model,'den_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'den_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'laundry_flooring'); ?>
		<?php echo $form->textField($model,'laundry_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'laundry_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'den_balcony_flooring'); ?>
		<?php echo $form->textField($model,'den_balcony_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'den_balcony_flooring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bouns_flooring'); ?>
		<?php echo $form->textField($model,'bouns_flooring',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'bouns_flooring'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'frequency'); ?>
		<?php echo $form->textField($model,'frequency',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'frequency'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->