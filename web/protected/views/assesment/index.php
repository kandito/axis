<?php
/* @var $this AssesmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Assesments',
);

$this->menu=array(
	array('label'=>'Create Assesment', 'url'=>array('create')),
	array('label'=>'Manage Assesment', 'url'=>array('admin')),
);
?>

<h1>Assesments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
