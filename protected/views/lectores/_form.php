<?php
/* @var $this LectoresController */
/* @var $model Lectores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lectores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documento'); ?>
		<?php echo $form->textField($model,'documento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clase_lector_id'); ?>
		<?php echo $form->dropDownList($model,'clase_lector_id',CHtml::listData(ClaseLector::model()->findAll(),'id','descripcion'),array('empty'=>'Seleccione lector')); ?>
		<?php echo $form->error($model,'clase_lector_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clase_documento_id'); ?>
		<?php echo $form->dropDownList($model,'clase_documento_id',CHtml::listData(ClaseDocumento::model()->findAll(),'id','descripcion_documento'),array('empty'=>'Seleccione documento')); ?>
		<?php echo $form->error($model,'clase_documento_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->