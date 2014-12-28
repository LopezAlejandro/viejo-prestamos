<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'extension'); ?>
<?php echo $form->checkBox($model,'extension'); ?>
<?php echo $form->error($model,'extension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_devolucion'); ?>
<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
						 array(
								 'model'=>'$model',
								 'name'=>'Prestamos[fecha_devolucion]',
								 //'language'=>'de',
								 'value'=>$model->fecha_devolucion,
								 'htmlOptions'=>array('size'=>10, 'style'=>'width:80px !important'),
									 'options'=>array(
									 'showButtonPanel'=>true,
									 'changeYear'=>true,                                      
									 'changeYear'=>true,
									 ),
								 )
							 );
					; ?>
<?php echo $form->error($model,'fecha_devolucion'); ?>
	</div>

	<div class="row">
			</div>

	<div class="row">
			</div>


<label for="Copias">Belonging Copias</label><?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'copias',
							'fields' => 'nro_copia',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							)
						); ?>
			<label for="Lectores">Belonging Lectores</label><?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'lectoresIdl',
							'fields' => 'usuario_crea_mod',
							'allowEmpty' => true,
							'style' => 'dropdownlist',
							)
						); ?>
			<label for="Multas">Belonging Multas</label><?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'multases',
							'fields' => 'fin_multa',
							'allowEmpty' => false,
							'style' => 'checkbox',
							)
						); ?>
			