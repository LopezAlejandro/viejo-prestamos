<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List Autor'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Autor'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Update Autor'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Delete Autor'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage Autor'), 'url'=>array('admin')),
);
?>

<h1>View Autor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'nacionalidad',
		'nacimiento',
	),
)); ?>
