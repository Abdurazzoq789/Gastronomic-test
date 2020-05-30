<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Festival]].
 *
 * @see \common\models\Festival
 */
class FestivalQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Festival[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Festival|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
