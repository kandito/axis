<?php
/* @var $this AssesmentsController */
/* @var $model Assesments */

$this->breadcrumbs=array(
	'Assesments'=>array('index'),
	$model->name=>array('view','id'=>$model->id_assesment),
	'Update',
);

$this->menu=array(
	array('label'=>'List Assesments', 'url'=>array('index')),
	array('label'=>'Create Assesments', 'url'=>array('create')),
	array('label'=>'View Assesments', 'url'=>array('view', 'id'=>$model->id_assesment)),
	array('label'=>'Manage Assesments', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header">
	<h1 class="page-header">Update Assesments <?php echo $model->id_assesment; ?></h1>
</div>

<div class="col-lg-12">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>