<?php
/* @var $this StepResultsController */
/* @var $model StepResults */

$this->breadcrumbs=array(
	'Step Results'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StepResults', 'url'=>array('index')),
	array('label'=>'Manage StepResults', 'url'=>array('admin')),
);
?>

<h1>Create StepResults</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>