<?php
/* @var $this StepResultsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Step Results',
);

$this->menu=array(
	array('label'=>'Create StepResults', 'url'=>array('create')),
	array('label'=>'Manage StepResults', 'url'=>array('admin')),
);
?>

<h1>Step Results</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
