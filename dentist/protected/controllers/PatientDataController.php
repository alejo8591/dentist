<?php
class PatientDataController extends Controller{
/**
 * This is the model class for table "tbl_anamnesis".
 *
 * The followings are the available columns in table 'tbl_anamnesis':
 * @property integer $id_tbl_anamnesis
 * @property string $username
 * @property string $name
 * @property string $surname
 * @property string $date_birth
 * @property string $place_of_birth
 * @property integer $genre
 * @property integer $blood_group
 * @property integer $id_tbl_country
 * @property integer $id_tbl_city
 * @property integer $id_tbl_level_schooling
 * @property integer $id_tbl_profession
 * @property string $occupation
 * @property string $contact
 * @property integer $id_tbl_healt_regimen
 * @property integer $id_tbl_healt_institution
 * @property string $description_healt
 * @property string $family_history
 */
	public function filters()
	{
      return array(
         'ajaxOnly + field'
         ); 
  	}

  	/**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'loadAddressByAjax', 'loadPhoneByAjax'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

  	public function actionCreate()
   	{
   		$model = new Anamnesis;

   		if (isset($_POST['Anamnesis'])) 
	     {
	     	$model->attributes = $_POST['Anamnesis'];

	     	if (isset($_POST['Address'])) 
	     	{
	     		$model->address = $_POST['Address'];
	     		$model->saveWithRelated('address');
	     	}

	     	if (isset($_POST['Phone'])) 
	     	{
	     		$model->phone = $_POST['Phone'];
	     		$model->saveWithRelated('phone');
	     	}

	     	if ($model->save()) {
	     		$this->redirect(array('view', 'id'=>$model->id_tbl_anamnesis));
	     	}
	     }
	     $this->render('create', array(
	     	'model'=> $model,
	     ));
	}
	/**
	 * @return Object with renderPartial for one ore more address for user
	 */
	public function actionLoadAddressByAjax($index)
	{
		$model = new Address;
		$this->renderPartial('_address', array(
			'model' => $model,
			'index' => $index,
		), false, true);
	}
	/**
	 * @return Object with renderPartial for one ore more phones for user
	 */
	public function actionLoadPhoneByAjax($index)
	{
		$model = new Phone;
		$this->renderPartial('_phone', array(
			'model' => $model,
			'index' => $index,
		), false, true);
	}
}
?>