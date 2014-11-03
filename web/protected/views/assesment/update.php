<?php
/* @var $this AssesmentController */
/* @var $model Assesment */

$this->breadcrumbs=array(
	'Assesments'=>array('index'),
	$model->name=>array('view','id'=>$model->id_assesment),
	'Update',
);

$this->menu=array(
	array('label'=>'List Assesment', 'url'=>array('index')),
	array('label'=>'Create Assesment', 'url'=>array('create')),
	array('label'=>'View Assesment', 'url'=>array('view', 'id'=>$model->id_assesment)),
	array('label'=>'Manage Assesment', 'url'=>array('admin')),
);
?>

<h1>Update Assesment <?php echo $model->id_assesment; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>