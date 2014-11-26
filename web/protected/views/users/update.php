<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->id_user)),
	// array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header"> 
<h1 class="page-header">Update Users <?php echo $model->id_user; ?></h1>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>