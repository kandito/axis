<?php
/* @var $this SystemController */
/* @var $model System */

$this->breadcrumbs=array(
	'Systems'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List System', 'url'=>array('index')),
	array('label'=>'Create System', 'url'=>array('create')),
	array('label'=>'Update System', 'url'=>array('update', 'id'=>$model->id_system)),
	array('label'=>'Delete System', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_system),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage System', 'url'=>array('admin')),
);
?>
<div class="col-lg-12 col-header">    
  <h1 class="page-header">Detail <?php echo $model->name; ?></h1>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="col-sm-3 control-label">Nama : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->name; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Deskripsi : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->description; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Jumlah Pengguna : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->number_of_user; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Penanggung Jawab : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->person_in_charge; ?></label>  
      </div>
    </div>  

    
  </form>     
</div><!--/.header-home-->

<div class="col-lg-12 col-header">
  <h3>Daftar Riwayat Assessment</h3>
  <?php echo CHtml::link('Tambahkan Assessment', Yii::app()->createUrl("assesments/create",array("id"=>$model->id_system)), array('class' => 'btn btn-primary')); ?>
  <br>
  <br>
<table class="table table-hover table-striped">
  <thead>
    <td>No</td>
    <td>Nama</td>
    <td>ID</td>
    <td>Tanggal</td>
    <td>Action</td>
  </thead>

  <?php
  	$i = 1; 
  	foreach ($model->assesments as $assesment) { 
  ?>
  	<tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $assesment->name ?></td>
        <td><?php echo $assesment->id_assesment ?></td>
        <td><?php echo $assesment->date ?> : <?php echo $assesment->time ?></td>
        <td>
          <?php 
            echo CHtml::link('View', array('assesments/view', 'id'=>$assesment->id_assesment), array('class' => 'btn btn-primary btn-listview'));
            echo CHtml::link('Update', array('assesments/update', 'id'=>$assesment->id_assesment), array('class' => 'btn btn-success btn-listview')); 
            echo CHtml::link("Delete", '#', array(
            'submit'=>array(
              'assesments/delete', 
              'id' => $assesment->id_assesment),
            'params'=> array('returnUrl'=> Yii::app()->createUrl('systems/view',array('id' => $model->id_system))),
            'confirm' => 'Are you sure you want to delete?',
            'class' => 'btn btn-danger btn-listview'));
          ?>
          
        </td>
      </tr>
 	<?php } ?>
</table>
</div>

