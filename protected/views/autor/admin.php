<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>Yii::t('app','List Autor'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Autor'), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#autor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Autors</h1>

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
	'id'=>'autor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		'nacionalidad',
		'nacimiento',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
