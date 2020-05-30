<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%festivalPhoto}}".
 *
 * @property int $id
 * @property string|null $photo
 * @property int $festival_id
 *
 * @property Festival $festival
 */
class FestivalPhoto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%festivalPhoto}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['festival_id'], 'required'],
            [['festival_id'], 'integer'],
            [['photo'], 'string', 'max' => 45],
            [['festival_id'], 'exist', 'skipOnError' => true, 'targetClass' => Festival::className(), 'targetAttribute' => ['festival_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'festival_id' => 'Festival ID',
        ];
    }

    /**
     * Gets query for [[Festival]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\FestivalQuery
     */
    public function getFestival()
    {
        return $this->hasOne(Festival::className(), ['id' => 'festival_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FestivalPhotoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FestivalPhotoQuery(get_called_class());
    }
}
