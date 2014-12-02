<?php
/* @var $this LibrosController */
/* @var $model Libros */

$this->breadcrumbs=array(
	'Libros'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>Yii::t('app','List Libros'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Libros'), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#libros-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Libros</h1>

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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'libros-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'titulo',
		'editorial',
		'ano',
		array(
		'name'=>'tipo_libro_id',
		'value'=>'$data->tipoLibro->descripcion',
		'header'=>'Tipo Libro',
		'filter'=>CHtml::activeDropDownList(
            $model,
            "tipo_libro_id",
            CHtml::listData(TipoLibro::model()->findAll(), 'id', 'descripcion'),
            array(
                'empty'=>'Elija uno',
            ))),
		
		array(
			'class'=>'CButtonColumn',
			'header'=>'Acciones',
		),
	),
)) ?>
