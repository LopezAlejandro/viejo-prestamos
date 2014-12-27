<?php
/* @var $this AutorController */
/* @var $data Autor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->nacimiento); ?>
	<br />


</div>
