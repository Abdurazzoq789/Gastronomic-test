<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%restaurantPhoto}}".
 *
 * @property int $id
 * @property string|null $photo
 * @property int $restaurant_id
 *
 * @property Restaurant $restaurant
 */
class RestaurantPhoto extends \yii\db\ActiveRecord
{

    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%restaurantPhoto}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file'],'file'],
            [['restaurant_id'], 'required'],
            [['restaurant_id'], 'integer'],
            [['photo'], 'string', 'max' => 45],
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
     * @return \common\models\query\RestaurantPhotoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RestaurantPhotoQuery(get_called_class());
    }
}
