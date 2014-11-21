<?php
/* @var $this LectoresController */
/* @var $model Lectores */

$this->breadcrumbs=array(
	'Lectores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Lectores', 'url'=>array('index')),
	array('label'=>'Create Lectores', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lectores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Lectores</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$mensaje="Hola jej jee";
$this->widget ('ext.alert.GAlert',array('mensaje'=>$mensaje));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lectores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'documento',
		array(
		'name'=>'mi_campo',
		'value'=>'$data->nombre." ".$data->documento',
		'type'=>'raw'
		),
		array(
		'name'=>'clase_lector_id',
		'header'=>'Tipo Lector',
		'filter'=>CHtml::listdata(ClaseLector::model()->findAll(),'id','descripcion'),
		),
		array(
		'name'=>'clase_documento_id',
		'header'=>'Tipo documento',
		'filter'=>CHtml::listdata(ClaseDocumento::model()->findAll(),'id','descripcion_documento'),
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
