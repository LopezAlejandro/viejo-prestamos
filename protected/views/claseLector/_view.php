<?php
/* @var $this ClaseLectorController */
/* @var $data ClaseLector */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_prestamo')); ?>:</b>
	<?php echo CHtml::encode($data->dias_prestamo); ?>
	<br />


</div>