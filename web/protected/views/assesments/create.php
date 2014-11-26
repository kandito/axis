<?php
/* @var $this AssesmentsController */
/* @var $model Assesments */

$this->breadcrumbs=array(
	'Assesments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Assesments', 'url'=>array('index')),
	array('label'=>'Manage Assesments', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header">   
   <h1 class="page-header">Tambahkan Assesment: <?php echo $model->idSystem->name ?></h1>
</div>

<div class="col-lg-12">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>