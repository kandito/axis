<?php
/* @var $this StepResultsController */
/* @var $data StepResults */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_step_result')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_step_result), array('view', 'id'=>$data->id_step_result)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_step')); ?>:</b>
	<?php echo CHtml::encode($data->id_step); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user_assesment')); ?>:</b>
	<?php echo CHtml::encode($data->id_user_assesment); ?>
	<br />

	*/ ?>

</div>