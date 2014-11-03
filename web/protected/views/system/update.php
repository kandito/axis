<?php
/* @var $this SystemController */
/* @var $model System */

$this->breadcrumbs=array(
	'Systems'=>array('index'),
	$model->name=>array('view','id'=>$model->id_system),
	'Update',
);

$this->menu=array(
	array('label'=>'List System', 'url'=>array('index')),
	array('label'=>'Create System', 'url'=>array('create')),
	array('label'=>'View System', 'url'=>array('view', 'id'=>$model->id_system)),
	array('label'=>'Manage System', 'url'=>array('admin')),
);
?>

<h1>Update System <?php echo $model->id_system; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>