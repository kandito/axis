<?php
/* @var $this UserAssesmentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Assesments',
);

$this->menu=array(
	array('label'=>'Create UserAssesments', 'url'=>array('create')),
	array('label'=>'Manage UserAssesments', 'url'=>array('admin')),
);
?>

<h1>User Assesments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
