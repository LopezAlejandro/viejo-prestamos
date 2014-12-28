<?php
$this->breadcrumbs=array(
	'Prestamoses'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Prestamos', 'url'=>array('index')),
	array('label'=>'Manage Prestamos', 'url'=>array('admin')),
);
?>

<h1> Crear Prestamos </h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prestamos-form',
	'enableAjaxValidation'=>true,
)); 
echo $this->renderPartial('_form', array(
	'model'=>$model,
	'form' =>$form
	)); ?>

<div class="row buttons">
	<?php echo CHtml::submitButton(Yii::t('app', 'Create')); ?>
</div>

<?php $this->endWidget(); ?>

</div>
