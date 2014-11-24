<?php
/* @var $this StandardsController */
/* @var $model Standards */

$this->breadcrumbs=array(
	'Standards'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Standards', 'url'=>array('index')),
	array('label'=>'Create Standards', 'url'=>array('create')),
	array('label'=>'Update Standards', 'url'=>array('update', 'id'=>$model->id_standard)),
	array('label'=>'Delete Standards', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_standard),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Standards', 'url'=>array('admin')),
);
?>

<h1>View Standards #<?php echo $model->id_standard; ?></h1>

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
