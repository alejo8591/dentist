<?php
/* @var $this Rh1Controller */
/* @var $model Rh1 */

$this->breadcrumbs=array(
	'Rh1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rh1', 'url'=>array('index')),
	array('label'=>'Manage Rh1', 'url'=>array('admin')),
);
?>

<h1>Create Rh1</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>