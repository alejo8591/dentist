<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property string $username
 * @property string $type_document
 * @property integer $user_status
 * @property integer $type_user
 * @property integer $id_document
 * @property string $email
 * @property string $password
 * @property string $last_login_time
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Anamnesis[] $anamnesises
 */
class User extends CActiveRecord
{
	/**
	 * Constants for types of documents
	 */
	const TYPE_DOCUMENT     = 0;
	const TYPE_ID = 1;
	const TYPE_ID_FOREIGNER = 2;
	const TYPE_PASSPORT     = 3;
	const TYPE_REGISTER     = 4;
	const TYPE_ID_MINOR     = 5;

	/**
	 * Constants for types users
	 */
	const TYPE_USER  = 0;
	const TYPE_USER_ADMINISTRATOR = 1;
	const TYPE_USER_PATIENT       = 2;
	const TYPE_USER_DENTIST       = 3;
	const TYPE_USER_AUXILIAR      = 4;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username', 'required'),
			array('id_document username email', 'unique'),
			array('user_status, type_user, id_document', 'numerical', 'integerOnly'=>true),
			array('username, create_user_id, update_user_id', 'length', 'max'=>64),
			array('type_document, email, password', 'length', 'max'=>128),
			array('last_login_time, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('username, type_document, user_status, type_user, id_document, email, password, last_login_time, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'anamnesises' => array(self::HAS_MANY, 'Anamnesis', 'username'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'username' => 'Código Usuario',
			'type_document' => 'Tipo Documento',
			'user_status' => 'User Status',
			'type_user' => 'Tipo de Usuario',
			'id_document' => 'Número Documento Identidad',
			'email' => 'Email',
			'password' => 'Password',
			'last_login_time' => 'Last Login Time',
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

		$criteria->compare('username',$this->username,true);
		$criteria->compare('type_document',$this->type_document,true);
		$criteria->compare('user_status',$this->user_status);
		$criteria->compare('type_user',$this->type_user);
		$criteria->compare('id_document',$this->id_document);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('last_login_time',$this->last_login_time,true);
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
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	/**
	 * Returns array for options documents type for users
	 * @return array $typeDocuments
	 */
	public function getTypeDocuments()
	{
		return array(
				self::TYPE_DOCUMENT => 'Selecccione tipo de Documento',
				self::TYPE_ID => 'Cédula de Ciudadania',
				self::TYPE_ID_FOREIGNER => 'Cédula Extranjeria',
				self::TYPE_PASSPORT => 'Pasaporte',
				self::TYPE_REGISTER => 'Registro Civil',
				self::TYPE_ID_MINOR => 'Tarjeta de Identidad',
			);
	}
	/**
	 * Returns array for options type for users
	 * @return array $typeUsers
	 */
	public function getTypeUsers()
	{
		return array(
				self::TYPE_USER => 'Selecccione tipo de Usuario',
				self::TYPE_USER_ADMINISTRATOR => 'Administrador',
				self::TYPE_USER_AUXILIAR => 'Auxiliar',
				self::TYPE_USER_DENTIST => 'Odontologo',
				self::TYPE_USER_PATIENT => 'Paciente',
			);
	}

}
