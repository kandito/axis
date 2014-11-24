<?php
/* @var $this AssesmentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Assesments',
);

$this->menu=array(
	array('label'=>'Create Assesments', 'url'=>array('create')),
	array('label'=>'Manage Assesments', 'url'=>array('admin')),
);
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
