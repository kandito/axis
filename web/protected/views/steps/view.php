<?php
/* @var $this StepsController */
/* @var $model Steps */

$this->breadcrumbs=array(
	'Steps'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Steps', 'url'=>array('index')),
	array('label'=>'Create Steps', 'url'=>array('create')),
	array('label'=>'Update Steps', 'url'=>array('update', 'id'=>$model->id_step)),
	array('label'=>'Delete Steps', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_step),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Steps', 'url'=>array('admin')),
);
?>

<h1>View Steps #<?php echo $model->id_step; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_step',
		'name',
		'description',
		'order',
		'notes',
		'guidelines',
		'tools',
		'id_standard',
	),
)); ?>
