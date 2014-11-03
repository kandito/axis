<?php
/* @var $this SystemController */
/* @var $data System */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_system')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_system), array('view', 'id'=>$data->id_system)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_user')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_in_charge')); ?>:</b>
	<?php echo CHtml::encode($data->person_in_charge); ?>
	<br />


</div>