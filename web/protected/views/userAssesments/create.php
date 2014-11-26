<?php
/* @var $this UserAssesmentsController */
/* @var $model UserAssesments */

$this->breadcrumbs=array(
	'User Assesments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserAssesments', 'url'=>array('index')),
	array('label'=>'Manage UserAssesments', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header">  
    <h1 class="page-header">Tambahkan Auditor: <?php echo $model->idAssesment->name ?></h1>
</div>	

<?php $this->renderPartial('_form', array('model'=>$model)); ?>