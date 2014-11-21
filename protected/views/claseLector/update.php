<?php
/* @var $this ClaseLectorController */
/* @var $model ClaseLector */

$this->breadcrumbs=array(
	'Clase Lectors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClaseLector', 'url'=>array('index')),
	array('label'=>'Create ClaseLector', 'url'=>array('create')),
	array('label'=>'View ClaseLector', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ClaseLector', 'url'=>array('admin')),
);
?>

<h1>Update ClaseLector <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>