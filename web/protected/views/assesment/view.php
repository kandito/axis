<?php
/* @var $this AssesmentController */
/* @var $model Assesment */

$this->breadcrumbs=array(
	'Assesments'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Assesment', 'url'=>array('index')),
	array('label'=>'Create Assesment', 'url'=>array('create')),
	array('label'=>'Update Assesment', 'url'=>array('update', 'id'=>$model->id_assesment)),
	array('label'=>'Delete Assesment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_assesment),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Assesment', 'url'=>array('admin')),
);
?>

<h1>View Assesment #<?php echo $model->id_assesment; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_assesment',
		'name',
		'description',
		'date',
		'time',
		'objectives',
		'location',
		'requirements',
		'id_system',
	),
)); ?>
