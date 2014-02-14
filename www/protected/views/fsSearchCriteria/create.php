<?php
/* @var $this FsSearchCriteriaController */
/* @var $model FsSearchCriteria */

$this->breadcrumbs=array(
	'Fs Search Criterias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FsSearchCriteria', 'url'=>array('index')),
	array('label'=>'Manage FsSearchCriteria', 'url'=>array('admin')),
);
?>

<h1>Create FsSearchCriteria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>