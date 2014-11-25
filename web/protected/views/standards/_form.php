<?php
/* @var $this StandardsController */
/* @var $model Standards */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'standards-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array("class"=>"form-horizontal col-sm-12", "role" => "form"),
)); ?>

	<br>
	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'name'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'name',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'purpose'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'purpose',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'purpose',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'scope'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'scope',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'scope',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'audience'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'audience',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'audience',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'description'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'description',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'description',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-4">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->