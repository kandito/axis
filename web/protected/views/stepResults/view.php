<?php
/* @var $this StepResultsController */
/* @var $model StepResults */

$this->breadcrumbs=array(
	'Step Results'=>array('index'),
	$model->id_step_result,
);

$this->menu=array(
	array('label'=>'List StepResults', 'url'=>array('index')),
	array('label'=>'Create StepResults', 'url'=>array('create')),
	array('label'=>'Update StepResults', 'url'=>array('update', 'id'=>$model->id_step_result)),
	array('label'=>'Delete StepResults', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_step_result),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StepResults', 'url'=>array('admin')),
);
?>

<h1>View StepResults #<?php echo $model->id_step_result; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_step_result',
		'value',
		'notes',
		'time',
		'date',
		'comment',
		'id_step',
		'id_user_assesment',
	),
)); ?>
