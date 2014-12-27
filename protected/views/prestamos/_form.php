<?php
/* @var $this PrestamosController */
/* @var $model Prestamos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prestamos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'extension'); ?>
		<?php echo $form->textField($model,'extension'); ?>
		<?php echo $form->error($model,'extension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_devolucion'); ?>
		<?php echo $form->textField($model,'fecha_devolucion'); ?>
		<?php echo $form->error($model,'fecha_devolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lectores_idl'); ?>
		<?php echo $form->textField($model,'lectores_idl'); ?>
		<?php echo $form->error($model,'lectores_idl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'copias_id'); ?>
		<?php echo $form->textField($model,'copias_id'); ?>
		<?php echo $form->error($model,'copias_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->