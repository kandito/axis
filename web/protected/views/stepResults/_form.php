<?php
/* @var $this StepResultsController */
/* @var $model StepResults */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'step-results-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array("class"=>"form-horizontal col-sm-12", "role" => "form"),
)); ?>
	<?php 
		echo $form->textField($model,'id_step',array('hidden'=>'true','value'=>$model->idStep->id_step));
		echo $form->textField($model,'id_user_assesment',array('hidden'=>'true','value'=>$model->idUserAssesment->id_user_assesment));
	?>	      
	<br>

	<div class="form-group">
	    <label class="col-sm-2 control-label">Langkah</label>
	    <div class="col-sm-4">
	    	<?php echo $model->idStep->description ?>	      
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label">Panduan</label>
	    <div class="col-sm-4">
	    	<?php echo $model->idStep->guidelines ?>	      
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"></label>
	    <div class="col-sm-4">
	    	<?php 
              echo CHtml::link('Lihat Lebih detil', array('steps/view', 'id'=>$model->idStep->id_step), array('class' => 'btn btn-primary btn-listview')); 
            ?>      
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'value'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textField($model,'value',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'value',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'notes'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'notes',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'notes',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'date'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textField($model,'date',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'date',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'time'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textField($model,'time',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'time',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'comment'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'comment',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'comment',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-4">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Simpan', array('class'=>'btn btn-default')); ?>
			<?php echo CHtml::link('Kembali', array('userassesments/view','id' => $model->idUserAssesment->id_user_assesment), array('class' => 'btn btn-success')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->