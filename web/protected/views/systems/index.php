<?php
/* @var $this SystemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Systems',
);

$this->menu=array(
	array('label'=>'Create System', 'url'=>array('create')),
	array('label'=>'Manage System', 'url'=>array('admin')),
);
?>


<div class="header-home">
<div class="container">
<div class="row"> 
<div class="col-xs-8">     
    <h1>Selamat datang, <?php echo Yii::app()->user->name ?>!</h1>
    <p></p>
    <?php echo CHtml::link('Add System', array('systems/create'), array('class' => 'btn btn-primary')); ?>
</div>
</div>
</div>      
</div><!--/.container-->


<div class="container">
  <div class="row content-container">
  <table class="table table-hover table-striped">
    <thead>
      <td>No</td>
      <td>Nama Sistem</td>
      <td>ID Sistem</td>
      <td>Penanggung Jawab</td>
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