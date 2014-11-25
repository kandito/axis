<?php
/* @var $this StepsController */
/* @var $model Steps */

$this->breadcrumbs=array(
	'Steps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Steps', 'url'=>array('index')),
	array('label'=>'Manage Steps', 'url'=>array('admin')),
);
?>

<div class="header-home">
<div class="container">
<div class="row"> 
<div class="col-xs-8">     
    <h1>Tambahkan Step</h1>
</div>
</div>
</div>      
</div><!--/.container-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>