<?php

/**
 * This is the model class for table "mki_user_assesments".
 *
 * The followings are the available columns in table 'mki_user_assesments':
 * @property integer $id_user_assesment
 * @property integer $id_user
 * @property integer $id_assesment
 *
 * The followings are the available model relations:
 * @property StepResults[] $stepResults
 * @property Assesments $idAssesment
 * @property Users $idUser
 */
class UserAssesments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mki_user_assesments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, id_assesment', 'required'),
			array('id_user, id_assesment', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user_assesment, id_user, id_assesment', 'safe', 'on'=>'search'),
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
			'stepResults' => array(self::HAS_MANY, 'StepResults', 'id_user_assesment'),
			'idAssesment' => array(self::BELONGS_TO, 'Assesments', 'id_assesment'),
			'idUser' => array(self::BELONGS_TO, 'Users', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user_assesment' => 'Id User Assesment',
			'id_user' => 'Id User',
			'id_assesment' => 'Id Assesment',
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

		$criteria->compare('id_user_assesment',$this->id_user_assesment);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_assesment',$this->id_assesment);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserAssesments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
