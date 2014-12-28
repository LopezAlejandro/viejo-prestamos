<?php
/* @var $this CopiasController */
/* @var $model Copias */
/* @var $form CActiveForm */
?>

<div class="form">

<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>
<?php echo $form->errorSummary($model); ?>

	<div class="row">
			</div>

	<div class="row">
			</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_copia'); ?>
<?php echo $form->textField($model,'nro_copia',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'nro_copia'); ?>
	</div>


<label for="Estado">Estado</label><?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'estado',
							'fields' => 'descripcion',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							)
						); ?>
			<label for="Libros">Libros</label><?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'libros',
							'fields' => 'titulo',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							)
						); ?>
	
			
</div>
