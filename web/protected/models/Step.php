<?php

/**
 * This is the model class for table "mki_steps".
 *
 * The followings are the available columns in table 'mki_steps':
 * @property integer $id_step
 * @property string $name
 * @property string $description
 * @property integer $order
 * @property string $notes
 * @property string $guidelines
 * @property string $tools
 * @property integer $id_standard
 *
 * The followings are the available model relations:
 * @property StepResults[] $stepResults
 * @property Standards $idStandard
 */
class Step extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mki_steps';
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
			array('order, id_standard', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('description, notes, guidelines, tools', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_step, name, description, order, notes, guidelines, tools, id_standard', 'safe', 'on'=>'search'),
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
			'stepResults' => array(self::HAS_MANY, 'StepResults', 'id_step'),
			'idStandard' => array(self::BELONGS_TO, 'Standards', 'id_standard'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_step' => 'Id Step',
			'name' => 'Name',
			'description' => 'Description',
			'order' => 'Order',
			'notes' => 'Notes',
			'guidelines' => 'Guidelines',
			'tools' => 'Tools',
			'id_standard' => 'Id Standard',
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

		$criteria->compare('id_step',$this->id_step);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('guidelines',$this->guidelines,true);
		$criteria->compare('tools',$this->tools,true);
		$criteria->compare('id_standard',$this->id_standard);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Step the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
