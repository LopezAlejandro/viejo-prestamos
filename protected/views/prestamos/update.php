<?php
/* @var $this PrestamosController */
/* @var $model Prestamos */

$this->breadcrumbs=array(
	'Prestamoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prestamos', 'url'=>array('index')),
	array('label'=>'Create Prestamos', 'url'=>array('create')),
	array('label'=>'View Prestamos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Prestamos', 'url'=>array('admin')),
);
?>

<h1>Update Prestamos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>