<?php
/* @var $this LectoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lectores',
);

$this->menu=array(
	array('label'=>'Create Lectores', 'url'=>array('create')),
	array('label'=>'Manage Lectores', 'url'=>array('admin')),
);
?>

<h1>Lectores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
