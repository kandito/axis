<?php
/* @var $this StandardsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Standards',
);

$this->menu=array(
	array('label'=>'Create Standards', 'url'=>array('create')),
	array('label'=>'Manage Standards', 'url'=>array('admin')),
);
?>

<h1>Standards</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
