<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header"> 
<h1 class="page-header">Create Users</h1>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>