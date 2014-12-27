<?php
$this->breadcrumbs=array(
	'Copiases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List Copias', 'url'=>array('index')),
	array('label'=>'Create Copias', 'url'=>array('create')),
	array('label'=>'View Copias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Copias', 'url'=>array('admin')),
);
?>

<h1> Update Copias #<?php echo $model->id; ?> </h1>
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
