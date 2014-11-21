<?php
/* @var $this ClaseDocumentoController */
/* @var $data ClaseDocumento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_documento')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_documento); ?>
	<br />


</div>