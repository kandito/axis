<?php
/* @var $this AssesmentController */
/* @var $model Assesment */

$this->breadcrumbs=array(
	'Assesments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Assesment', 'url'=>array('index')),
	array('label'=>'Manage Assesment', 'url'=>array('admin')),
);
?>

<h1>Create Assesment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>