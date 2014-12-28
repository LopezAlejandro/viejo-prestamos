<?php
$this->breadcrumbs=array(
	'Prestamoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Prestamos', 'url'=>array('index')),
	array('label'=>'Create Prestamos', 'url'=>array('create')),
	array('label'=>'Update Prestamos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Prestamos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prestamos', 'url'=>array('admin')),
);
?>

<h1>View Prestamos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'extension',
		'fecha_devolucion',
		'lectoresIdl.usuario_crea_mod',
		'copias.nro_copia',
	),
)); ?>


<br /><h2> This Multas belongs to this Prestamos: </h2>
<ul><?php foreach($model->multases as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->fin_multa, array('multas/view', 'id' => $foreignobj->id)));

				} ?></ul>