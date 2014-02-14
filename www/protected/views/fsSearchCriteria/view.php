<?php
/* @var $this FsSearchCriteriaController */
/* @var $model FsSearchCriteria */

$this->breadcrumbs=array(
	'Fs Search Criterias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FsSearchCriteria', 'url'=>array('index')),
	array('label'=>'Create FsSearchCriteria', 'url'=>array('create')),
	array('label'=>'Update FsSearchCriteria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FsSearchCriteria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FsSearchCriteria', 'url'=>array('admin')),
);
?>

<h1>View FsSearchCriteria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'city',
		'prop_type',
		'price_range_min',
		'price_range_max',
		'bed_room_range_min',
		'bed_room_range_max',
		'bath_room_range_min',
		'bath_room_range_max',
		'size_min',
		'size_max',
		'listing_with_virtual',
		'listing_with_photo',
		'year_built_min',
		'year_built_max',
		'garage',
		'keyword',
		'created_date',
		'prop_id',
		'search_by',
		'user_id',
		'search_type',
		'garage_parking',
		'state',
		'cityagain',
		'zip',
		'neighbourhood',
		'compass_point',
		'street_name',
		'property_style_type',
		'property_style',
		'property_tax',
		'tax_year',
		'frequency',
		'assessment',
		'pet_friendly',
		'open_house',
		'open_house_to_time',
		'open_house_from_time',
		'county',
	),
)); ?>
