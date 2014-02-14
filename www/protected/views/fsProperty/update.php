<?php
/* @var $this FsPropertyController */
/* @var $model FsProperty */

$this->breadcrumbs=array(
	'Fs Properties'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FsProperty', 'url'=>array('index')),
	array('label'=>'Create FsProperty', 'url'=>array('create')),
	array('label'=>'View FsProperty', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FsProperty', 'url'=>array('admin')),
);
?>

<h1>Update FsProperty <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>