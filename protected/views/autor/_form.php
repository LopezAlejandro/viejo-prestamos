<?php
/* @var $this AutorController */
/* @var $model Autor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'autor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidad'); ?>
		<?php echo $form->textField($model,'nacionalidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacimiento'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'nacimiento',
				'value'=>$model->nacimiento,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
					'autoSize'=>true,
					'defaultDate'=>$model->nacimiento,
					'dateFormat'=>'yy-mm-dd',
					'buttonImage'=>Yii::app()->baseUrl.'/images/Calendar.png',
					'buttonImageOnly'=>true,
					'buttonText'=>'Fecha',
					'selectOtherMonths'=>true,
					'showAnim'=>'slide',
					'showButtonPanel'=>true,
					'showOn'=>'button', 
					'showOtherMonths'=>true, 
					'changeMonth' => 'true', 
					'changeYear' => 'true',
					'yearRange'=>'1000:3000',
					'minDate'=>'1000-01-01',
					'maxDate'=>'date("Y-m-d")',
				),
			)); 
		?>
		<?php echo $form->error($model,'nacimiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
