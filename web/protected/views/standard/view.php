<?php
/* @var $this StandardController */
/* @var $model Standard */

$this->breadcrumbs=array(
	'Standards'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Standard', 'url'=>array('index')),
	array('label'=>'Create Standard', 'url'=>array('create')),
	array('label'=>'Update Standard', 'url'=>array('update', 'id'=>$model->id_standard)),
	array('label'=>'Delete Standard', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_standard),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Standard', 'url'=>array('admin')),
);
?>

<h1>View Standard #<?php echo $model->id_standard; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_standard',
		'name',
		'purpose',
		'scope',
		'audience',
		'description',
		'id_assesment',
	),
)); ?>
