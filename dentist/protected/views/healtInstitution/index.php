<?php
/* @var $this HealtInstitutionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Healt Institutions',
);

$this->menu=array(
	array('label'=>'Create HealtInstitution', 'url'=>array('create')),
	array('label'=>'Manage HealtInstitution', 'url'=>array('admin')),
);
?>

<h1>Healt Institutions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
