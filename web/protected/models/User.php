<?php

/**
 * This is the model class for table "mki_users".
 *
 * The followings are the available columns in table 'mki_users':
 * @property integer $id_user
 * @property string $username
 * @property string $password
 * @property string $name
 * @property integer $role
 *
 * The followings are the available model relations:
 * @property UserAssesments[] $userAssesments
 */
class User extends CActiveRecord
{
	protected $old_password;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mki_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password', 'required', 'on' => 'create'),
			array('username, role', 'required'),
			array('role', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>16),
			array('password', 'length', 'max'=>32),
			array('name', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, username, password, name, role', 'safe', 'on'=>'search'),
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
			'userAssesments' => array(self::HAS_MANY, 'UserAssesments', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'username' => 'Username',
			'password' => 'Password',
			'name' => 'Name',
			'role' => 'Role',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('role',$this->role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	protected function afterFind() 
	{
		$this->old_password = $this->password;
	}
	
	protected function beforeSave()
	{
		if(parent::beforeSave()) {
			if($this->password == '') {
				$this->password = $this->old_password;
			} else {
				$this->password = md5($this->password);
			}
			return true;
		} else {
			return false;
		}
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
}
