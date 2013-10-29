<?php

/**
 * This is the model class for table "tbl_anamnesis".
 *
 * The followings are the available columns in table 'tbl_anamnesis':
 * @property integer $id_tbl_anamnesis
 * @property integer $id_tbl_user
 * @property string $name
 * @property string $surname
 * @property string $date_birth
 * @property integer $place_of_birth
 * @property string $genre
 * @property string $blood_group
 * @property integer $id_tbl_country
 * @property integer $id_tbl_city
 * @property integer $id_tbl_level_schooling
 * @property integer $id_tbl_profession
 * @property string $occupation
 * @property integer $contact
 * @property integer $id_tbl_healt_regimen
 * @property integer $id_tbl_healt_institution
 * @property integer $id_tbl_during_consultation
 * @property string $description_healt
 * @property string $family_history
 * @property string $data_personal_history
 * @property integer $create_user_id
 * @property string $create_time
 * @property integer $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property TblAddress[] $tblAddresses
 * @property TblUser $idTblUser
 * @property TblCountry $idTblCountry
 * @property TblCity $idTblCity
 * @property TblLevelSchooling $idTblLevelSchooling
 * @property TblProfession $idTblProfession
 * @property TblAnamnesis $contact0
 * @property TblAnamnesis[] $tblAnamnesises
 * @property TblHealtRegimen $idTblHealtRegimen
 * @property TblHealtInstitution $idTblHealtInstitution
 * @property TblDuringConsultation $idTblDuringConsultation
 * @property TblPhone[] $tblPhones
 * @property TblPhysicalHistory[] $tblPhysicalHistories
 */
class TblAnamnesis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_anamnesis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_user', 'required'),
			array('id_tbl_user, place_of_birth, id_tbl_country, id_tbl_city, id_tbl_level_schooling, id_tbl_profession, contact, id_tbl_healt_regimen, id_tbl_healt_institution, id_tbl_during_consultation, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('name, surname, genre', 'length', 'max'=>128),
			array('blood_group', 'length', 'max'=>4),
			array('occupation', 'length', 'max'=>64),
			array('date_birth, description_healt, family_history, data_personal_history, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_anamnesis, id_tbl_user, name, surname, date_birth, place_of_birth, genre, blood_group, id_tbl_country, id_tbl_city, id_tbl_level_schooling, id_tbl_profession, occupation, contact, id_tbl_healt_regimen, id_tbl_healt_institution, id_tbl_during_consultation, description_healt, family_history, data_personal_history, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tblAddresses' => array(self::HAS_MANY, 'TblAddress', 'id_tbl_anamnesis'),
			'idTblUser' => array(self::BELONGS_TO, 'TblUser', 'id_tbl_user'),
			'idTblCountry' => array(self::BELONGS_TO, 'TblCountry', 'id_tbl_country'),
			'idTblCity' => array(self::BELONGS_TO, 'TblCity', 'id_tbl_city'),
			'idTblLevelSchooling' => array(self::BELONGS_TO, 'TblLevelSchooling', 'id_tbl_level_schooling'),
			'idTblProfession' => array(self::BELONGS_TO, 'TblProfession', 'id_tbl_profession'),
			'contact0' => array(self::BELONGS_TO, 'TblAnamnesis', 'contact'),
			'tblAnamnesises' => array(self::HAS_MANY, 'TblAnamnesis', 'contact'),
			'idTblHealtRegimen' => array(self::BELONGS_TO, 'TblHealtRegimen', 'id_tbl_healt_regimen'),
			'idTblHealtInstitution' => array(self::BELONGS_TO, 'TblHealtInstitution', 'id_tbl_healt_institution'),
			'idTblDuringConsultation' => array(self::BELONGS_TO, 'TblDuringConsultation', 'id_tbl_during_consultation'),
			'tblPhones' => array(self::HAS_MANY, 'TblPhone', 'id_tbl_anamnesis'),
			'tblPhysicalHistories' => array(self::HAS_MANY, 'TblPhysicalHistory', 'id_tbl_anamnesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'id_tbl_user' => 'Id Tbl User',
			'name' => 'Name',
			'surname' => 'Surname',
			'date_birth' => 'Date Birth',
			'place_of_birth' => 'Place Of Birth',
			'genre' => 'Genre',
			'blood_group' => 'Blood Group',
			'id_tbl_country' => 'Id Tbl Country',
			'id_tbl_city' => 'Id Tbl City',
			'id_tbl_level_schooling' => 'Id Tbl Level Schooling',
			'id_tbl_profession' => 'Id Tbl Profession',
			'occupation' => 'Occupation',
			'contact' => 'Contact',
			'id_tbl_healt_regimen' => 'Id Tbl Healt Regimen',
			'id_tbl_healt_institution' => 'Id Tbl Healt Institution',
			'id_tbl_during_consultation' => 'Id Tbl During Consultation',
			'description_healt' => 'Description Healt',
			'family_history' => 'Family History',
			'data_personal_history' => 'Data Personal History',
			'create_user_id' => 'Create User',
			'create_time' => 'Create Time',
			'update_user_id' => 'Update User',
			'update_time' => 'Update Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('id_tbl_user',$this->id_tbl_user);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('date_birth',$this->date_birth,true);
		$criteria->compare('place_of_birth',$this->place_of_birth);
		$criteria->compare('genre',$this->genre,true);
		$criteria->compare('blood_group',$this->blood_group,true);
		$criteria->compare('id_tbl_country',$this->id_tbl_country);
		$criteria->compare('id_tbl_city',$this->id_tbl_city);
		$criteria->compare('id_tbl_level_schooling',$this->id_tbl_level_schooling);
		$criteria->compare('id_tbl_profession',$this->id_tbl_profession);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('contact',$this->contact);
		$criteria->compare('id_tbl_healt_regimen',$this->id_tbl_healt_regimen);
		$criteria->compare('id_tbl_healt_institution',$this->id_tbl_healt_institution);
		$criteria->compare('id_tbl_during_consultation',$this->id_tbl_during_consultation);
		$criteria->compare('description_healt',$this->description_healt,true);
		$criteria->compare('family_history',$this->family_history,true);
		$criteria->compare('data_personal_history',$this->data_personal_history,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblAnamnesis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
