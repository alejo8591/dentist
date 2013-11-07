<?php

/**
 * This is the model class for table "tbl_healt_institution".
 *
 * The followings are the available columns in table 'tbl_healt_institution':
 * @property integer $id_tbl_healt_institution
 * @property integer $id_tbl_healt_regimen
 * @property string $name_healt_institution
 * @property string $id_healt_institution
 * @property string $description
 * @property string $create_user_id
 * @property string $update_time
 * @property string $create_time
 * @property string $update_user_id
 *
 * The followings are the available model relations:
 * @property Anamnesis[] $anamnesises
 * @property HealtRegimen $idTblHealtRegimen
 */
class HealtInstitution extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_healt_institution';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_healt_regimen', 'required'),
			array('id_tbl_healt_regimen', 'numerical', 'integerOnly'=>true),
			array('name_healt_institution', 'length', 'max'=>128),
			array('id_healt_institution', 'length', 'max'=>45),
			array('create_user_id, update_user_id', 'length', 'max'=>64),
			array('description, update_time, create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_healt_institution, id_tbl_healt_regimen, name_healt_institution, id_healt_institution, description, create_user_id, update_time, create_time, update_user_id', 'safe', 'on'=>'search'),
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
			'anamnesises' => array(self::HAS_MANY, 'Anamnesis', 'id_tbl_healt_institution'),
			'idTblHealtRegimen' => array(self::BELONGS_TO, 'HealtRegimen', 'id_tbl_healt_regimen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_healt_institution' => 'Id Tbl Healt Institution',
			'id_tbl_healt_regimen' => 'Id Tbl Healt Regimen',
			'name_healt_institution' => 'Name Healt Institution',
			'id_healt_institution' => 'Id Healt Institution',
			'description' => 'Description',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'create_time' => 'Create Time',
			'update_user_id' => 'Update User',
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

		$criteria->compare('id_tbl_healt_institution',$this->id_tbl_healt_institution);
		$criteria->compare('id_tbl_healt_regimen',$this->id_tbl_healt_regimen);
		$criteria->compare('name_healt_institution',$this->name_healt_institution,true);
		$criteria->compare('id_healt_institution',$this->id_healt_institution,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HealtInstitution the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
