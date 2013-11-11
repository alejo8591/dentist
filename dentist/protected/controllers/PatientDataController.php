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

  	public function actionCreate()
   	{
	      $anamnesis = new Anamnesis;
	      $addresses = new Address;
	      $phones = new Phone;
	      $validAddresses = true;
	      $validPhones = true;
	      $validAnamnesis = true;

	      if (isset($_POST['Anamnesis'], $_POST['Address'], $_POST['Phone'])) 
	      {
	      	$anamnesis->attributes = $_POST['Anamnesis'];
	      	$addresses->attributes = $_POST['Address'];
	      	$phones->attributes = $_POST['Phone'];

	      	foreach($addresses as $key => $value) {
	      		$value->attributes = $_POST['Address'][$key];
	      		$validAddresses = $value->validate() && $validAddresses;
	      	}

	      	foreach($phones as $i => $phone) {
	      		$phone->attributes = $_POST['Phone'][$i];
	      		$validPhones = $phone->validate() && $validPhones; 
	      	}

	      	$validAnamnesis = $anamnesis->validate() && $validAnamnesis;

	      	if($validAnamnesis && $validPhones && $validAddresses){
	      		$anamnesis->save(false);
	      		$addresses->save(false);
	      		$phones->save(false);
	      	}
	      }

	      $this->render('create', array(
	      	'anamnesis'=> $anamnesis,
	      	'addresses' => $addresses,
	      	'phones' => $phones,
	      ));
	}
}
?>