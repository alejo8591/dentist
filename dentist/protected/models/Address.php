<?php

/**
 * This is the model class for table "tbl_address".
 *
 * The followings are the available columns in table 'tbl_address':
 * @property integer $id_tbl_address
 * @property integer $id_tbl_anamnesis
 * @property string $type_address
 * @property string $address
 * @property string $description
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Anamnesis $idTblAnamnesis
 */
class Address extends CActiveRecord
{
	/**
	 * Constants for type address
	 */
	const TYPE_ADDRESS    = 0;
	const TYPE_HOME       = 1;
	const TYPE_OFFICE     = 2;
	const TYPE_FAMILY     = 3;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_address';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type_address, address, description', 'required'),
			array('id_tbl_anamnesis', 'numerical', 'integerOnly'=>true),
			array('type_address, create_user_id, update_user_id', 'length', 'max'=>64),
			array('address', 'length', 'max'=>256),
			array('description, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_address, id_tbl_anamnesis, type_address, address, description, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_address' => 'Id Tbl Address',
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'type_address' => 'Tipo de Dirección',
			'address' => 'Dirección',
			'description' => 'Descripción u Observación',
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

		$criteria->compare('id_tbl_address',$this->id_tbl_address);
		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('type_address',$this->type_address,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('description',$this->description,true);
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
	 * @return Address the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function behaviors()
    {
        return array('ESaveRelatedBehavior' => array(
                'class' => 'application.components.ESaveRelatedBehavior')
        );
    }

    /**
	 * @return array of valid type of Address create for user
	 */
	public function getTypeAddress()
	{
		
		return array(
			self::TYPE_ADDRESS => 'Tipo de Dirección',
			self::TYPE_HOME => 'Hogar o Casa',
			self::TYPE_OFFICE => 'Oficina o Trabajo',
		);
	}	
}
