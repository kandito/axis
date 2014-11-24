<?php
/* @var $this StepsController */
/* @var $model Steps */

$this->breadcrumbs=array(
	'Steps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Steps', 'url'=>array('index')),
	array('label'=>'Manage Steps', 'url'=>array('admin')),
);
?>

<h1>Create Steps</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>