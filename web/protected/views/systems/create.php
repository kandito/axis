<?php
/* @var $this SystemController */
/* @var $model System */

$this->breadcrumbs=array(
	'Systems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List System', 'url'=>array('index')),
	array('label'=>'Manage System', 'url'=>array('admin')),
);
?>

<div class="header-home">
<div class="container">
<div class="row"> 
<div class="col-xs-8">     
    <h1>Tambahkan Sistem</h1>
</div>
</div>
</div>      
</div><!--/.container-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>