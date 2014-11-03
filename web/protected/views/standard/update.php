<?php
/* @var $this StandardController */
/* @var $model Standard */

$this->breadcrumbs=array(
	'Standards'=>array('index'),
	$model->name=>array('view','id'=>$model->id_standard),
	'Update',
);

$this->menu=array(
	array('label'=>'List Standard', 'url'=>array('index')),
	array('label'=>'Create Standard', 'url'=>array('create')),
	array('label'=>'View Standard', 'url'=>array('view', 'id'=>$model->id_standard)),
	array('label'=>'Manage Standard', 'url'=>array('admin')),
);
?>

<h1>Update Standard <?php echo $model->id_standard; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>