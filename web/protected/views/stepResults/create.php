<?php
/* @var $this StepResultsController */
/* @var $model StepResults */

$this->breadcrumbs=array(
	'Step Results'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StepResults', 'url'=>array('index')),
	array('label'=>'Manage StepResults', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header">   
<h1 class="page-header">Isi Penilaian</h1>
</div>

<div class="col-lg-12 col-header">   
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>