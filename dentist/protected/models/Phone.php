<?php

/**
 * This is the model class for table "tbl_phone".
 *
 * The followings are the available columns in table 'tbl_phone':
 * @property integer $id_tbl_phone
 * @property integer $id_tbl_user
 * @property integer $id_tbl_anamnesis
 * @property string $type_phone
 * @property string $phone
 * @property string $phone_extension
 * @property string $description
 * @property integer $create_user_id
 * @property string $create_time
 * @property integer $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Anamnesis $idTblAnamnesis
 * @property User $idTblUser
 */
class Phone extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_phone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_user, id_tbl_anamnesis, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('type_phone, phone, phone_extension', 'length', 'max'=>64),
			array('description, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_phone, id_tbl_user, id_tbl_anamnesis, type_phone, phone, phone_extension, description, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'idTblAnamnesis' => array(self::BELONGS_TO, 'Anamnesis', 'id_tbl_anamnesis'),
			'idTblUser' => array(self::BELONGS_TO, 'User', 'id_tbl_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_phone' => 'Id Tbl Phone',
			'id_tbl_user' => 'Id Tbl User',
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'type_phone' => 'Type Phone',
			'phone' => 'Phone',
			'phone_extension' => 'Phone Extension',
			'description' => 'Description',
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

		$criteria->compare('id_tbl_phone',$this->id_tbl_phone);
		$criteria->compare('id_tbl_user',$this->id_tbl_user);
		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('type_phone',$this->type_phone,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('phone_extension',$this->phone_extension,true);
		$criteria->compare('description',$this->description,true);
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
	 * @return Phone the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
