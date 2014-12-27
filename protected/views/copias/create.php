<?php
$this->breadcrumbs=array(
	'Copias'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List Copias'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage Copias'), 'url'=>array('admin')),
);
?>

<h1> Crear Copias </h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'copias-form',
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
