<?php
/* @var $this LibrosController */
/* @var $model Libros */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'libros-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'autor'); ?>	
		<div class="portlet-content">
		
		<?php
			$this->widget(
				'ext.emultiselect.EMultiSelect',
				array('sortable'=>false, 'searchable'=>true)
      
			);
		
			$data=CHtml::listData(Autor::model()->findAll(),'id','nombre');	
			echo $form->dropDownList(
					$model,
					'autors',
					$data,
					array('multiple'=>'multiple','key'=>'id', 'class'=>'multiselect')
			);
		?>
		</div>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'editorial'); ?>
		<?php echo $form->textField($model,'editorial',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'editorial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_libro_id'); ?>
		<?php echo $form->dropDownList($model,'tipo_libro_id',CHtml::listData(TipoLibro::model()->findAll(),'id','descripcion'),array('empty'=>'Seleccione un item')); ?>
		<?php echo $form->error($model,'tipo_libro_id'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->
