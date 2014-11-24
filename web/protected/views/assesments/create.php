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

<div class="header-home">
<div class="container">
<div class="row"> 
<div class="col-xs-8">     
    <h1>Tambahkan Assesment: <?php echo $model->idSystem->name ?></h1>
</div>
</div>
</div>      
</div><!--/.container-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>