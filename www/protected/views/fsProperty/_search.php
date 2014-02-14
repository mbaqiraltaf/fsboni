<?php
/* @var $this FsPropertyController */
/* @var $model FsProperty */
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
		<?php echo $form->label($model,'fsboni_property_id'); ?>
		<?php echo $form->textField($model,'fsboni_property_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prop_title'); ?>
		<?php echo $form->textField($model,'prop_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_id'); ?>
		<?php echo $form->textField($model,'seller_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street_number'); ?>
		<?php echo $form->textField($model,'street_number',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compas_point'); ?>
		<?php echo $form->textField($model,'compas_point',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prp_add'); ?>
		<?php echo $form->textArea($model,'prp_add',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zip_code'); ?>
		<?php echo $form->textField($model,'zip_code',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'neighbourhood'); ?>
		<?php echo $form->textField($model,'neighbourhood'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school'); ?>
		<?php echo $form->textField($model,'school'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mls_number'); ?>
		<?php echo $form->textField($model,'mls_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prp_desc'); ?>
		<?php echo $form->textArea($model,'prp_desc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prp_type'); ?>
		<?php echo $form->textField($model,'prp_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_range'); ?>
		<?php echo $form->textField($model,'price_range',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numbr_bedroom'); ?>
		<?php echo $form->textField($model,'numbr_bedroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numbr_bathroom'); ?>
		<?php echo $form->textField($model,'numbr_bathroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prop_style'); ?>
		<?php echo $form->textField($model,'prop_style',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att_dett_style'); ?>
		<?php echo $form->textField($model,'att_dett_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'air_conditioning'); ?>
		<?php echo $form->textField($model,'air_conditioning'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'heating'); ?>
		<?php echo $form->textField($model,'heating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kitchen_max_dimension'); ?>
		<?php echo $form->textField($model,'kitchen_max_dimension',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kitchen_min_dimension'); ?>
		<?php echo $form->textField($model,'kitchen_min_dimension',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kitchen_menu'); ?>
		<?php echo $form->textField($model,'kitchen_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kitchen_fireplace'); ?>
		<?php echo $form->textField($model,'kitchen_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dinning'); ?>
		<?php echo $form->textField($model,'dinning'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dinning_max_dimension'); ?>
		<?php echo $form->textField($model,'dinning_max_dimension',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dinning_min_dimenstion'); ?>
		<?php echo $form->textField($model,'dinning_min_dimenstion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dinning_menu'); ?>
		<?php echo $form->textField($model,'dinning_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dinning_fireplace'); ?>
		<?php echo $form->textField($model,'dinning_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attic'); ?>
		<?php echo $form->textField($model,'attic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attic_max_dimension'); ?>
		<?php echo $form->textField($model,'attic_max_dimension',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attic_min_dimension'); ?>
		<?php echo $form->textField($model,'attic_min_dimension',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'basement_details'); ?>
		<?php echo $form->textField($model,'basement_details'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'base_max_dimenstion'); ?>
		<?php echo $form->textField($model,'base_max_dimenstion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'base_min_dimension'); ?>
		<?php echo $form->textField($model,'base_min_dimension',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bath_max_dim_1'); ?>
		<?php echo $form->textField($model,'bath_max_dim_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bath_min_dim_1'); ?>
		<?php echo $form->textField($model,'bath_min_dim_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bath_max_dim_2'); ?>
		<?php echo $form->textField($model,'bath_max_dim_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bath_min_dim_2'); ?>
		<?php echo $form->textField($model,'bath_min_dim_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bath_max_dim_3'); ?>
		<?php echo $form->textField($model,'bath_max_dim_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bath_min_dim_3'); ?>
		<?php echo $form->textField($model,'bath_min_dim_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_mast_bed_max_dim'); ?>
		<?php echo $form->textField($model,'bed_mast_bed_max_dim',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_mast_bed_min_dim'); ?>
		<?php echo $form->textField($model,'bed_mast_bed_min_dim',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_mast_menu'); ?>
		<?php echo $form->textField($model,'bed_mast_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_mast_fireplace'); ?>
		<?php echo $form->textField($model,'bed_mast_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_max_dim_1'); ?>
		<?php echo $form->textField($model,'bed_max_dim_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_min_dim_1'); ?>
		<?php echo $form->textField($model,'bed_min_dim_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_1_menu'); ?>
		<?php echo $form->textField($model,'bed_1_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_1_fireplace'); ?>
		<?php echo $form->textField($model,'bed_1_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_max_dim_2'); ?>
		<?php echo $form->textField($model,'bed_max_dim_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_min_dim_2'); ?>
		<?php echo $form->textField($model,'bed_min_dim_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_2_menu'); ?>
		<?php echo $form->textField($model,'bed_2_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_2_fireplace'); ?>
		<?php echo $form->textField($model,'bed_2_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_max_dim_3'); ?>
		<?php echo $form->textField($model,'bed_max_dim_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_min_dim_3'); ?>
		<?php echo $form->textField($model,'bed_min_dim_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_3_menu'); ?>
		<?php echo $form->textField($model,'bed_3_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_3_fireplace'); ?>
		<?php echo $form->textField($model,'bed_3_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_max_dim_4'); ?>
		<?php echo $form->textField($model,'bed_max_dim_4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_min_dim_4'); ?>
		<?php echo $form->textField($model,'bed_min_dim_4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_4_menu'); ?>
		<?php echo $form->textField($model,'bed_4_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_4_fireplace'); ?>
		<?php echo $form->textField($model,'bed_4_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fireplace_location'); ?>
		<?php echo $form->textField($model,'fireplace_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_max_dim_5'); ?>
		<?php echo $form->textField($model,'bed_max_dim_5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_min_dim_5'); ?>
		<?php echo $form->textField($model,'bed_min_dim_5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_5_menu'); ?>
		<?php echo $form->textField($model,'bed_5_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed_5_fireplace'); ?>
		<?php echo $form->textField($model,'bed_5_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garage_ownrship'); ?>
		<?php echo $form->textField($model,'garage_ownrship',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garage_on_site'); ?>
		<?php echo $form->textField($model,'garage_on_site',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garage_type'); ?>
		<?php echo $form->textField($model,'garage_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'disability_access'); ?>
		<?php echo $form->textField($model,'disability_access',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'elevatory_building'); ?>
		<?php echo $form->textField($model,'elevatory_building',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sewer'); ?>
		<?php echo $form->textField($model,'sewer',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'water'); ?>
		<?php echo $form->textField($model,'water'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pet_friendly'); ?>
		<?php echo $form->textField($model,'pet_friendly',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assessment'); ?>
		<?php echo $form->textField($model,'assessment',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_date'); ?>
		<?php echo $form->textField($model,'updated_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'electricity'); ?>
		<?php echo $form->textField($model,'electricity',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'youtube'); ?>
		<?php echo $form->textArea($model,'youtube',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'list_home_inMls'); ?>
		<?php echo $form->textField($model,'list_home_inMls',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'virtual_tour'); ?>
		<?php echo $form->textField($model,'virtual_tour',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'real_estate_attorney'); ?>
		<?php echo $form->textField($model,'real_estate_attorney',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'home_warantee'); ?>
		<?php echo $form->textField($model,'home_warantee',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'appraiser'); ?>
		<?php echo $form->textField($model,'appraiser',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'home_inspector'); ?>
		<?php echo $form->textField($model,'home_inspector',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prop_size'); ?>
		<?php echo $form->textField($model,'prop_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prop_view_count'); ?>
		<?php echo $form->textField($model,'prop_view_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prop_type'); ?>
		<?php echo $form->textField($model,'prop_type',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fireplace_details'); ?>
		<?php echo $form->textArea($model,'fireplace_details',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_frame_for_selling'); ?>
		<?php echo $form->textField($model,'time_frame_for_selling',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'living_room_max'); ?>
		<?php echo $form->textField($model,'living_room_max',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'living_room_min'); ?>
		<?php echo $form->textField($model,'living_room_min',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'living_room_menu'); ?>
		<?php echo $form->textField($model,'living_room_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'living_room_fire'); ?>
		<?php echo $form->textField($model,'living_room_fire',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'family_room_max'); ?>
		<?php echo $form->textField($model,'family_room_max',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'family_room_min'); ?>
		<?php echo $form->textField($model,'family_room_min',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'family_menu'); ?>
		<?php echo $form->textField($model,'family_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'family_fireplace'); ?>
		<?php echo $form->textField($model,'family_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'den_max'); ?>
		<?php echo $form->textField($model,'den_max',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'den_min'); ?>
		<?php echo $form->textField($model,'den_min',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'den_menu'); ?>
		<?php echo $form->textField($model,'den_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'den_fireplace'); ?>
		<?php echo $form->textField($model,'den_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laundry_max'); ?>
		<?php echo $form->textField($model,'laundry_max',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laundry_min'); ?>
		<?php echo $form->textField($model,'laundry_min',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laundry_menu'); ?>
		<?php echo $form->textField($model,'laundry_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laundry_fireplace'); ?>
		<?php echo $form->textField($model,'laundry_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'balcony_max'); ?>
		<?php echo $form->textField($model,'balcony_max',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'balcony_min'); ?>
		<?php echo $form->textField($model,'balcony_min',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'balcony_menu'); ?>
		<?php echo $form->textField($model,'balcony_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'balcony_fire'); ?>
		<?php echo $form->textField($model,'balcony_fire',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus_room_max'); ?>
		<?php echo $form->textField($model,'bonus_room_max',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus_room_min'); ?>
		<?php echo $form->textField($model,'bonus_room_min',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus_room_menu'); ?>
		<?php echo $form->textField($model,'bonus_room_menu',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus_room_fireplace'); ?>
		<?php echo $form->textField($model,'bonus_room_fireplace',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'property_taxes'); ?>
		<?php echo $form->textField($model,'property_taxes',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_year'); ?>
		<?php echo $form->textField($model,'tax_year',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street_suffix'); ?>
		<?php echo $form->textField($model,'street_suffix',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'living_room_flooring'); ?>
		<?php echo $form->textField($model,'living_room_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dinning_room_flooring'); ?>
		<?php echo $form->textField($model,'dinning_room_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'family_room_flooring'); ?>
		<?php echo $form->textField($model,'family_room_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kitchen_flooring'); ?>
		<?php echo $form->textField($model,'kitchen_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mastrBedroom_flooring'); ?>
		<?php echo $form->textField($model,'mastrBedroom_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bedroom1_flooring'); ?>
		<?php echo $form->textField($model,'bedroom1_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bedroom2_flooring'); ?>
		<?php echo $form->textField($model,'bedroom2_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bedroom3_flooring'); ?>
		<?php echo $form->textField($model,'bedroom3_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bedroom4_flooring'); ?>
		<?php echo $form->textField($model,'bedroom4_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bedroom5_flooring'); ?>
		<?php echo $form->textField($model,'bedroom5_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'den_flooring'); ?>
		<?php echo $form->textField($model,'den_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laundry_flooring'); ?>
		<?php echo $form->textField($model,'laundry_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'den_balcony_flooring'); ?>
		<?php echo $form->textField($model,'den_balcony_flooring',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bouns_flooring'); ?>
		<?php echo $form->textField($model,'bouns_flooring',array('size'=>2,'maxlength'=>2)); ?>
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

	<div class="row">
		<?php echo $form->label($model,'frequency'); ?>
		<?php echo $form->textField($model,'frequency',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->