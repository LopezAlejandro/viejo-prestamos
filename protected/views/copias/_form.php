<p class="note">Fields with <span class="required">*</span> are required.</p>

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


<label for="Estado">Belonging Estado</label><?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'estado',
							'fields' => 'descripcion',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							)
						); ?>
			<label for="Libros">Belonging Libros</label><?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'libros',
							'fields' => 'titulo',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							)
						); ?>
			