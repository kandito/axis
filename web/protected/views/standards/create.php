<?php
/* @var $this StandardsController */
/* @var $model Standards */

$this->breadcrumbs=array(
	'Standards'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Standards', 'url'=>array('index')),
	array('label'=>'Manage Standards', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header">   
    <h1 class="page-header">Tambahkan Standard</h1>
</div>

<div class="col-lg-12">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>