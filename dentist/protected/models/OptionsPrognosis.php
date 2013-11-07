<?php

/**
 * This is the model class for table "tbl_options_prognosis".
 *
 * The followings are the available columns in table 'tbl_options_prognosis':
 * @property integer $id_tbl_option_prognosis
 * @property string $username
 * @property integer $id_tbl_anamnesis
 * @property integer $id_tbl_prognosis
 * @property string $name_option_prognosis
 * @property integer $type_option_prognosis
 * @property string $observation_option_prognosis
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Prognosis $idTblPrognosis
 * @property Prognosis $username0
 * @property Prognosis $idTblAnamnesis
 */
class OptionsPrognosis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_options_prognosis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_option_prognosis, username, id_tbl_anamnesis, id_tbl_prognosis', 'required'),
			array('id_tbl_option_prognosis, id_tbl_anamnesis, id_tbl_prognosis, type_option_prognosis', 'numerical', 'integerOnly'=>true),
			array('username, create_user_id, update_user_id', 'length', 'max'=>64),
			array('name_option_prognosis', 'length', 'max'=>128),
			array('observation_option_prognosis', 'length', 'max'=>45),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_option_prognosis, username, id_tbl_anamnesis, id_tbl_prognosis, name_option_prognosis, type_option_prognosis, observation_option_prognosis, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'idTblPrognosis' => array(self::BELONGS_TO, 'Prognosis', 'id_tbl_prognosis'),
			'username0' => array(self::BELONGS_TO, 'Prognosis', 'username'),
			'idTblAnamnesis' => array(self::BELONGS_TO, 'Prognosis', 'id_tbl_anamnesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_option_prognosis' => 'Id Tbl Option Prognosis',
			'username' => 'Username',
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'id_tbl_prognosis' => 'Id Tbl Prognosis',
			'name_option_prognosis' => 'Name Option Prognosis',
			'type_option_prognosis' => 'Type Option Prognosis',
			'observation_option_prognosis' => 'Observation Option Prognosis',
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

		$criteria->compare('id_tbl_option_prognosis',$this->id_tbl_option_prognosis);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('id_tbl_prognosis',$this->id_tbl_prognosis);
		$criteria->compare('name_option_prognosis',$this->name_option_prognosis,true);
		$criteria->compare('type_option_prognosis',$this->type_option_prognosis);
		$criteria->compare('observation_option_prognosis',$this->observation_option_prognosis,true);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OptionsPrognosis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
