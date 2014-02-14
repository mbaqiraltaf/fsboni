<?php
/* @var $this FsSearchCriteriaController */
/* @var $model FsSearchCriteria */

$this->breadcrumbs=array(
	'Fs Search Criterias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FsSearchCriteria', 'url'=>array('index')),
	array('label'=>'Create FsSearchCriteria', 'url'=>array('create')),
	array('label'=>'View FsSearchCriteria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FsSearchCriteria', 'url'=>array('admin')),
);
?>

<h1>Update FsSearchCriteria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>