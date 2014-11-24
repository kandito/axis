<?php
/* @var $this StepResultsController */
/* @var $model StepResults */

$this->breadcrumbs=array(
	'Step Results'=>array('index'),
	$model->id_step_result=>array('view','id'=>$model->id_step_result),
	'Update',
);

$this->menu=array(
	array('label'=>'List StepResults', 'url'=>array('index')),
	array('label'=>'Create StepResults', 'url'=>array('create')),
	array('label'=>'View StepResults', 'url'=>array('view', 'id'=>$model->id_step_result)),
	array('label'=>'Manage StepResults', 'url'=>array('admin')),
);
?>

<h1>Update StepResults <?php echo $model->id_step_result; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>