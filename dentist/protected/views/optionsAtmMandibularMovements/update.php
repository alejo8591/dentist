<?php
/* @var $this OptionsAtmMandibularMovementsController */
/* @var $model OptionsAtmMandibularMovements */

$this->breadcrumbs=array(
	'Options Atm Mandibular Movements'=>array('index'),
	$model->id_tbl_option_atm_mandibular_movements=>array('view','id'=>$model->id_tbl_option_atm_mandibular_movements),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsAtmMandibularMovements', 'url'=>array('index')),
	array('label'=>'Create OptionsAtmMandibularMovements', 'url'=>array('create')),
	array('label'=>'View OptionsAtmMandibularMovements', 'url'=>array('view', 'id'=>$model->id_tbl_option_atm_mandibular_movements)),
	array('label'=>'Manage OptionsAtmMandibularMovements', 'url'=>array('admin')),
);
?>

<h1>Update OptionsAtmMandibularMovements <?php echo $model->id_tbl_option_atm_mandibular_movements; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>