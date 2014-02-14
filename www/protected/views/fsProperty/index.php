<?php
/* @var $this FsPropertyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fs Properties',
);

$this->menu=array(
	array('label'=>'Create FsProperty', 'url'=>array('create')),
	array('label'=>'Manage FsProperty', 'url'=>array('admin')),
);
?>

<h1>Fs Properties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
