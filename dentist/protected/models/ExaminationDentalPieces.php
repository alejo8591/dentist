<?php

/**
 * This is the model class for table "tbl_examination_dental_pieces".
 *
 * The followings are the available columns in table 'tbl_examination_dental_pieces':
 * @property integer $id_tbl_examination_dental_pieces
 * @property integer $id_tbl_dental_piece
 * @property string $name_examination_dental_pieces
 * @property integer $type_examination_dental_pieces
 * @property string $observation_examination_dental_pieces
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_time
 * @property string $update_user_id
 *
 * The followings are the available model relations:
 * @property DentalPieces $idTblDentalPiece
 */
class ExaminationDentalPieces extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_examination_dental_pieces';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_dental_piece', 'required'),
			array('id_tbl_dental_piece, type_examination_dental_pieces', 'numerical', 'integerOnly'=>true),
			array('name_examination_dental_pieces, create_user_id, update_user_id', 'length', 'max'=>64),
			array('observation_examination_dental_pieces, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_examination_dental_pieces, id_tbl_dental_piece, name_examination_dental_pieces, type_examination_dental_pieces, observation_examination_dental_pieces, create_user_id, create_time, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'idTblDentalPiece' => array(self::BELONGS_TO, 'DentalPieces', 'id_tbl_dental_piece'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_examination_dental_pieces' => 'Id Tbl Examination Dental Pieces',
			'id_tbl_dental_piece' => 'Id Tbl Dental Piece',
			'name_examination_dental_pieces' => 'Name Examination Dental Pieces',
			'type_examination_dental_pieces' => 'Type Examination Dental Pieces',
			'observation_examination_dental_pieces' => 'Observation Examination Dental Pieces',
			'create_user_id' => 'Create User',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
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

		$criteria->compare('id_tbl_examination_dental_pieces',$this->id_tbl_examination_dental_pieces);
		$criteria->compare('id_tbl_dental_piece',$this->id_tbl_dental_piece);
		$criteria->compare('name_examination_dental_pieces',$this->name_examination_dental_pieces,true);
		$criteria->compare('type_examination_dental_pieces',$this->type_examination_dental_pieces);
		$criteria->compare('observation_examination_dental_pieces',$this->observation_examination_dental_pieces,true);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ExaminationDentalPieces the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
