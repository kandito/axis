<?php
/* @var $this StandardsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Standards',
);

$this->menu=array(
	array('label'=>'Create Standards', 'url'=>array('create')),
	array('label'=>'Manage Standards', 'url'=>array('admin')),
);
?>

<div class="header-home">
<div class="container">
<div class="row"> 
<div class="col-xs-8">     
    <h1>Standard</h1>
    <p></p>
    <?php echo CHtml::link('Tambah Standard', array('standards/create'), array('class' => 'btn btn-primary')); ?>
</div>
</div>
</div>      
</div><!--/.container-->

<div class="container">
  <div class="row content-container">
  <table class="table table-hover table-striped">
    <thead>
      <td>No</td>
      <td>Nama Standard</td>
      <td>ID Standard</td>
      <td>Action</td>
    </thead>
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		'template' => '{items}{pager}',
	)); ?>
  </table>
  </div>
</div>