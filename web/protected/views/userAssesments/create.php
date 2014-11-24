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

<div class="header-home">
<div class="container">
<div class="row"> 
<div class="col-xs-8">     
    <h1>Tambahkan Auditor: <?php echo $model->idAssesment->name ?></h1>
</div>
</div>
</div>      
</div><!--/.container-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>