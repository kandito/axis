<?php
/* @var $this StepsController */
/* @var $model Steps */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'steps-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array("class"=>"form-horizontal col-sm-12", "role" => "form"),
)); ?>
	<br>

	<?php echo $form->textField($model,'id_standard',array('hidden'=>'true','value'=>$model->idStandard->id_standard)); ?>
	
	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'name'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'name',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'description'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'description',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'description',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'order'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textField($model,'order',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'order',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'notes'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'notes',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'notes',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'guidelines'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'guidelines',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'guidelines',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'tools'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'tools',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'tools',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-4">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Buat' : 'Simpan', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->