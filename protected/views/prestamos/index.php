<?php
$this->breadcrumbs = array(
	'Prestamoses',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' Prestamos', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Prestamos', 'url'=>array('admin')),
);
?>

<h1>Prestamoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
