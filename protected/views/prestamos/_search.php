<?php
/* @var $this PrestamosController */
/* @var $model Prestamos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extension'); ?>
		<?php echo $form->textField($model,'extension'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_devolucion'); ?>
		<?php echo $form->textField($model,'fecha_devolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lectores_idl'); ?>
		<?php echo $form->textField($model,'lectores_idl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'copias_id'); ?>
		<?php echo $form->textField($model,'copias_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->