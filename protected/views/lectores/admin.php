<?php
/* @var $this LectoresController */
/* @var $model Lectores */

$this->breadcrumbs=array(
	'Lectores'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Lectores', 'url'=>array('index')),
	array('label'=>'Crear Lectores', 'url'=>array('create')),
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

<h1>Administrar Lectores</h1>

<p>Opcionalmente, puede introducir un operador de comparaci&oacute;n (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, 
<b>&gt;=</b>, <b>&lt;&gt;</b> o <b>=</b> ) al principio de cada uno de los valores de b&uacute;squeda para 
especificar c&oacute;mo se debe hacer la comparaci&oacute;n .
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lectores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
		'name'=>'nombre',
		'value'=>'$data->nombre',
		'header'=>'Nombre y Apellido',
		),
		array(
		'name'=>'clase_documento_id',
		'value'=>'$data->claseDocumento->descripcion_documento',
		'header'=>'Tipo Documento',
		'filter'=>CHtml::activeDropDownList(
            $model,
            "clase_documento_id",
            CHtml::listData(ClaseDocumento::model()->findAll(), 'id', 'descripcion_documento'),
            array(
                'empty'=>'Elija uno',
            )),
		
		),
		'documento',
		array(
		'name'=>'clase_lector_id',
		'value'=>'$data->claseLector->descripcion',
		'header'=>'Tipo Lector',
		'filter'=>CHtml::activeDropDownList(
            $model,
            "clase_lector_id",
            CHtml::listData(ClaseLector::model()->findAll(), 'id', 'descripcion'),
            array(
                'empty'=>'Elija uno',
            )),
		
		),
		array(
			'class'=>'CButtonColumn',
			'header'=>'Acciones',
		),
	),
));
?>
