<?php
/* @var $this FsSearchCriteriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fs Search Criterias',
);

$this->menu=array(
	array('label'=>'Create FsSearchCriteria', 'url'=>array('create')),
	array('label'=>'Manage FsSearchCriteria', 'url'=>array('admin')),
);
?>

<h1>Fs Search Criterias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
