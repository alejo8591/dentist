<?php
/* @var $this CountryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Countries',
);

$this->menu=array(
	array('label'=>'Crear País', 'url'=>array('create')),
	array('label'=>'Administrar Paises', 'url'=>array('admin')),
);
?>

<h1>Paises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
