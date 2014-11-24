<?php
/* @var $this StepsController */
/* @var $model Steps */

$this->breadcrumbs=array(
	'Steps'=>array('index'),
	$model->name=>array('view','id'=>$model->id_step),
	'Update',
);

$this->menu=array(
	array('label'=>'List Steps', 'url'=>array('index')),
	array('label'=>'Create Steps', 'url'=>array('create')),
	array('label'=>'View Steps', 'url'=>array('view', 'id'=>$model->id_step)),
	array('label'=>'Manage Steps', 'url'=>array('admin')),
);
?>

<h1>Update Steps <?php echo $model->id_step; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>