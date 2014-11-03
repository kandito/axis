<?php
/* @var $this StandardController */
/* @var $model Standard */

$this->breadcrumbs=array(
	'Standards'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Standard', 'url'=>array('index')),
	array('label'=>'Manage Standard', 'url'=>array('admin')),
);
?>

<h1>Create Standard</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>