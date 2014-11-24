<?php
/* @var $this StandardsController */
/* @var $model Standards */

$this->breadcrumbs=array(
	'Standards'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Standards', 'url'=>array('index')),
	array('label'=>'Manage Standards', 'url'=>array('admin')),
);
?>

<h1>Create Standards</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>