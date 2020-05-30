<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%festival}}".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $date
 * @property string|null $description
 *
 * @property FestivalPhoto[] $festivalPhotos
 */
class Festival extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%festival}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'date' => 'Date',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[FestivalPhotos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\FestivalPhotoQuery
     */
    public function getFestivalPhotos()
    {
        return $this->hasMany(FestivalPhoto::className(), ['festival_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FestivalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FestivalQuery(get_called_class());
    }
}
