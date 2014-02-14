<?php
/* @var $this FsSearchCriteriaController */
/* @var $model FsSearchCriteria */

$this->breadcrumbs=array(
	'Fs Search Criterias'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FsSearchCriteria', 'url'=>array('index')),
	array('label'=>'Create FsSearchCriteria', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fs-search-criteria-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fs Search Criterias</h1>

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
	'id'=>'fs-search-criteria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'city',
		'prop_type',
		'price_range_min',
		'price_range_max',
		'bed_room_range_min',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
