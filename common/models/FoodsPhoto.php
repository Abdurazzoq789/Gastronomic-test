<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%foodsPhoto}}".
 *
 * @property int $id
 * @property string|null $photo
 * @property int $foods_id
 *
 * @property Foods $foods
 */
class FoodsPhoto extends \yii\db\ActiveRecord
{

    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%foodsPhoto}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file'],'file'],
            [['foods_id'], 'required'],
            [['foods_id'], 'integer'],
            [['photo'], 'string', 'max' => 45],
            [['foods_id'], 'exist', 'skipOnError' => true, 'targetClass' => Foods::className(), 'targetAttribute' => ['foods_id' => 'id']],
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
            'foods_id' => 'Foods ID',
        ];
    }

    /**
     * Gets query for [[Foods]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\FoodsQuery
     */
    public function getFoods()
    {
        return $this->hasOne(Foods::className(), ['id' => 'foods_id']);
    }


    /**
     * {@inheritdoc}
     * @return \common\models\query\FoodsPhotoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FoodsPhotoQuery(get_called_class());
    }
}
