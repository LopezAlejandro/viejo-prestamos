<?php
$this->breadcrumbs=array(
	'Copias'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
		array('label'=>Yii::t('app','List').' Copias', 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create').' Copias',
				'url'=>array('create')),
			);

		Yii::app()->clientScript->registerScript('search', "
			$('.search-button').click(function(){
				$('.search-form').toggle();
				return false;
				});
			$('.search-form form').submit(function(){
				$.fn.yiiGridView.update('copias-grid', {
data: $(this).serialize()
});
				return false;
				});
			");
		?>

<h1> Administrar&nbsp;Copias</h1>

<p>Opcionalmente, puede introducir un operador de comparaci&oacute;n (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, 
<b>&gt;=</b>, <b>&lt;&gt;</b> o <b>=</b> ) al principio de cada uno de los valores de b&uacute;squeda para 
especificar c&oacute;mo se debe hacer la comparaci&oacute;n .
</p>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'copias-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nro_copia',
		array(
		'name'=>'estado_id',
		'value'=>'$data->estado->descripcion',
		'header'=>'Estado',
		'filter'=>CHtml::activeDropDownList(
            $model,
            'estado_id',
            CHtml::listData(Estado::model()->findAll(), 'id', 'descripcion'),
            array(
                'empty'=>'Elija uno',
            ))),
		
		array(
		'name'=>'libros_id',
		'value'=>'$data->libros->titulo',
		'header'=>'Libro',
		'filter'=>CHtml::activeDropDownList(
            $model,
            'libros_id',
            CHtml::listData(Libros::model()->findAll(), 'id', 'titulo'),
            array(
                'empty'=>'Elija uno',
            ))),
            
		
		array(
			'class'=>'CButtonColumn',
			'header'=>'Acciones',
		),
	),
)); ?>
