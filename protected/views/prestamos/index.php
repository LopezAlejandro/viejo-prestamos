<?php
/* @var $this PrestamosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prestamoses',
);

$this->menu=array(
	array('label'=>'Create Prestamos', 'url'=>array('create')),
	array('label'=>'Manage Prestamos', 'url'=>array('admin')),
);
?>

<h1>Prestamoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
