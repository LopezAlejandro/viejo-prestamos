<?php
$this->breadcrumbs=array(
	'Copias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Copias', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Copias', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Copias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Copias', 'url'=>array('admin')),
);
?>

<h1> Actualizar Copias #<?php echo $model->id; ?> </h1>
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
	<?php echo CHtml::submitButton(Yii::t('app', 'Update')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
