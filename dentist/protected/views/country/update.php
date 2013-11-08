<?php
/* @var $this CountryController */
/* @var $model Country */

$this->breadcrumbs=array(
	'Countries'=>array('index'),
	$model->id_tbl_country=>array('view','id'=>$model->id_tbl_country),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Paises', 'url'=>array('index')),
	array('label'=>'Crear País', 'url'=>array('create')),
	array('label'=>'Ver País', 'url'=>array('view', 'id'=>$model->id_tbl_country)),
	array('label'=>'Administrar Paises', 'url'=>array('admin')),
);
?>

<h1>Actualizar País <?php echo $model->id_tbl_country; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>