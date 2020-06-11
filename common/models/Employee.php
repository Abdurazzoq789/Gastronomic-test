<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%employee}}".
 *
 * @property int $id
 * @property int $restaurant_id
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string $role
 * @property string|null $photo
 * @property string|null $phoneNumber
 *
 * @property Restaurant $restaurant
 */
class Employee extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%employee}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['restaurant_id', 'role'], 'required'],
            [['file'],'file'],
            [['restaurant_id'], 'integer'],
            [['firstName', 'lastName', 'role', 'photo', 'phoneNumber'], 'string', 'max' => 50],
            [['restaurant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Restaurant::className(), 'targetAttribute' => ['restaurant_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'Photo',
            'restaurant_id' => 'Restaurant ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'role' => 'Role',
            'photo' => 'Photo',
            'phoneNumber' => 'Phone Number',
        ];
    }

    /**
     * Gets query for [[Restaurant]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RestaurantQuery
     */
    public function getRestaurant()
    {
        return $this->hasOne(Restaurant::className(), ['id' => 'restaurant_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EmployeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EmployeeQuery(get_called_class());
    }
}
