<?php
/* @var $this HealtRegimenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Healt Regimens',
);

$this->menu=array(
	array('label'=>'Create HealtRegimen', 'url'=>array('create')),
	array('label'=>'Manage HealtRegimen', 'url'=>array('admin')),
);
?>

<h1>Healt Regimens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
