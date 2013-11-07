<?php
/* @var $this HealtInstitutionController */
/* @var $model HealtInstitution */

$this->breadcrumbs=array(
	'Healt Institutions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HealtInstitution', 'url'=>array('index')),
	array('label'=>'Manage HealtInstitution', 'url'=>array('admin')),
);
?>

<h1>Create HealtInstitution</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>