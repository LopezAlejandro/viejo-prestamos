<?php
/* @var $this LectoresController */
/* @var $data Lectores */
?>

<div class="view">
<!---
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
--->
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documento')); ?>:</b>
	<?php echo CHtml::encode($data->documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clase_lector_id')); ?>:</b>
	<?php echo CHtml::encode($data->claseLector->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clase_documento_id')); ?>:</b>
	<?php echo CHtml::encode($data->claseDocumento->descripcion_documento); ?>
	<br />


</div>