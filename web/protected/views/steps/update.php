<?php
/* @var $this StepsController */
/* @var $model Steps */

$this->breadcrumbs=array(
	'Steps'=>array('index'),
	$model->name=>array('view','id'=>$model->id_step),
	'Update',
);

$this->menu=array(
	array('label'=>'List Steps', 'url'=>array('index')),
	array('label'=>'Create Steps', 'url'=>array('create')),
	array('label'=>'View Steps', 'url'=>array('view', 'id'=>$model->id_step)),
	array('label'=>'Manage Steps', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header">
	<h1 class="page-header">Update Steps <?php echo $model->id_step; ?></h1>
</div>
<div class="col-lg-12 col-header">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>