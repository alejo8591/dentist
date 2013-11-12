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

    /**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

  	public function actionCreate()
   	{
   		$model = new Anamnesis;

   		$this->performAjaxValidation($model);

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
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Anamnesis']))
		{
			$model->attributes=$_POST['Anamnesis'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tbl_anamnesis));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Anamnesis');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Anamnesis the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Anamnesis::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Anamnesis $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='patientData-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
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