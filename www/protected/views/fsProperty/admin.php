<?php
/* @var $this FsPropertyController */
/* @var $model FsProperty */

$this->breadcrumbs=array(
	'Fs Properties'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FsProperty', 'url'=>array('index')),
	array('label'=>'Create FsProperty', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fs-property-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fs Properties</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fs-property-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fsboni_property_id',
		'prop_title',
		'seller_id',
		'street_number',
		'compas_point',
		/*
		'prp_add',
		'city',
		'state',
		'zip_code',
		'neighbourhood',
		'school',
		'mls_number',
		'prp_desc',
		'prp_type',
		'price_range',
		'numbr_bedroom',
		'numbr_bathroom',
		'prop_style',
		'att_dett_style',
		'air_conditioning',
		'heating',
		'kitchen_max_dimension',
		'kitchen_min_dimension',
		'kitchen_menu',
		'kitchen_fireplace',
		'dinning',
		'dinning_max_dimension',
		'dinning_min_dimenstion',
		'dinning_menu',
		'dinning_fireplace',
		'attic',
		'attic_max_dimension',
		'attic_min_dimension',
		'basement_details',
		'base_max_dimenstion',
		'base_min_dimension',
		'bath_max_dim_1',
		'bath_min_dim_1',
		'bath_max_dim_2',
		'bath_min_dim_2',
		'bath_max_dim_3',
		'bath_min_dim_3',
		'bed_mast_bed_max_dim',
		'bed_mast_bed_min_dim',
		'bed_mast_menu',
		'bed_mast_fireplace',
		'bed_max_dim_1',
		'bed_min_dim_1',
		'bed_1_menu',
		'bed_1_fireplace',
		'bed_max_dim_2',
		'bed_min_dim_2',
		'bed_2_menu',
		'bed_2_fireplace',
		'bed_max_dim_3',
		'bed_min_dim_3',
		'bed_3_menu',
		'bed_3_fireplace',
		'bed_max_dim_4',
		'bed_min_dim_4',
		'bed_4_menu',
		'bed_4_fireplace',
		'fireplace_location',
		'bed_max_dim_5',
		'bed_min_dim_5',
		'bed_5_menu',
		'bed_5_fireplace',
		'garage_ownrship',
		'garage_on_site',
		'garage_type',
		'disability_access',
		'elevatory_building',
		'sewer',
		'water',
		'pet_friendly',
		'assessment',
		'created_date',
		'updated_date',
		'status',
		'electricity',
		'youtube',
		'list_home_inMls',
		'virtual_tour',
		'real_estate_attorney',
		'home_warantee',
		'appraiser',
		'home_inspector',
		'prop_size',
		'prop_view_count',
		'prop_type',
		'fireplace_details',
		'time_frame_for_selling',
		'living_room_max',
		'living_room_min',
		'living_room_menu',
		'living_room_fire',
		'family_room_max',
		'family_room_min',
		'family_menu',
		'family_fireplace',
		'den_max',
		'den_min',
		'den_menu',
		'den_fireplace',
		'laundry_max',
		'laundry_min',
		'laundry_menu',
		'laundry_fireplace',
		'balcony_max',
		'balcony_min',
		'balcony_menu',
		'balcony_fire',
		'bonus_room_max',
		'bonus_room_min',
		'bonus_room_menu',
		'bonus_room_fireplace',
		'property_taxes',
		'tax_year',
		'street_suffix',
		'living_room_flooring',
		'dinning_room_flooring',
		'family_room_flooring',
		'kitchen_flooring',
		'mastrBedroom_flooring',
		'bedroom1_flooring',
		'bedroom2_flooring',
		'bedroom3_flooring',
		'bedroom4_flooring',
		'bedroom5_flooring',
		'den_flooring',
		'laundry_flooring',
		'den_balcony_flooring',
		'bouns_flooring',
		'open_house',
		'open_house_to_time',
		'open_house_from_time',
		'county',
		'frequency',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
