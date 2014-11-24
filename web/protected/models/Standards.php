<?php

/**
 * This is the model class for table "mki_standards".
 *
 * The followings are the available columns in table 'mki_standards':
 * @property integer $id_standard
 * @property string $name
 * @property string $purpose
 * @property string $scope
 * @property string $audience
 * @property string $description
 * @property integer $id_assesment
 *
 * The followings are the available model relations:
 * @property Assesments $idAssesment
 * @property Steps[] $steps
 */
class Standards extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mki_standards';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('id_assesment', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('purpose, scope, audience, description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_standard, name, purpose, scope, audience, description, id_assesment', 'safe', 'on'=>'search'),
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
			'idAssesment' => array(self::BELONGS_TO, 'Assesments', 'id_assesment'),
			'steps' => array(self::HAS_MANY, 'Steps', 'id_standard'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_standard' => 'Id Standard',
			'name' => 'Name',
			'purpose' => 'Purpose',
			'scope' => 'Scope',
			'audience' => 'Audience',
			'description' => 'Description',
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

		$criteria->compare('id_standard',$this->id_standard);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('purpose',$this->purpose,true);
		$criteria->compare('scope',$this->scope,true);
		$criteria->compare('audience',$this->audience,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('id_assesment',$this->id_assesment);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Standards the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
