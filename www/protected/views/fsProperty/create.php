<?php
/* @var $this FsPropertyController */
/* @var $model FsProperty */

$this->breadcrumbs=array(
	'Fs Properties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FsProperty', 'url'=>array('index')),
	array('label'=>'Manage FsProperty', 'url'=>array('admin')),
);
?>

<h1>Create FsProperty</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>