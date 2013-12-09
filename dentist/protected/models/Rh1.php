<?php

/**
 * This is the model class for table "tbl_rh1".
 *
 * The followings are the available columns in table 'tbl_rh1':
 * @property integer $id_tbl_rh1
 * @property string $provider_class
 * @property string $name_surname
 * @property string $id_document
 * @property string $provider_code
 * @property string $address
 * @property string $phone
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Rh1Values[] $rh1Values
 */
class Rh1 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_rh1';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('provider_class, provider_code, email', 'length', 'max'=>128),
			array('name_surname, address', 'length', 'max'=>256),
			array('id_document, phone', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_rh1, provider_class, name_surname, id_document, provider_code, address, phone, email', 'safe', 'on'=>'search'),
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
			'rh1Values' => array(self::HAS_MANY, 'Rh1Values', 'id_tbl_rh1'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_rh1' => 'Id Tbl Rh1',
			'provider_class' => 'Provider Class',
			'name_surname' => 'Name Surname',
			'id_document' => 'Id Document',
			'provider_code' => 'Provider Code',
			'address' => 'Address',
			'phone' => 'Phone',
			'email' => 'Email',
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

		$criteria->compare('id_tbl_rh1',$this->id_tbl_rh1);
		$criteria->compare('provider_class',$this->provider_class,true);
		$criteria->compare('name_surname',$this->name_surname,true);
		$criteria->compare('id_document',$this->id_document,true);
		$criteria->compare('provider_code',$this->provider_code,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rh1 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
