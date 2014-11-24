<?php
/* @var $this AssesmentsController */
/* @var $data Assesments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_assesment')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_assesment), array('view', 'id'=>$data->id_assesment)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objectives')); ?>:</b>
	<?php echo CHtml::encode($data->objectives); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('requirements')); ?>:</b>
	<?php echo CHtml::encode($data->requirements); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_system')); ?>:</b>
	<?php echo CHtml::encode($data->id_system); ?>
	<br />

	*/ ?>

</div>