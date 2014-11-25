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

<div class="header-home">
<div class="container">
<div class="row"> 
<div class="col-xs-8">     
    <h1>Tambahkan Standard</h1>
</div>
</div>
</div>      
</div><!--/.container-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>