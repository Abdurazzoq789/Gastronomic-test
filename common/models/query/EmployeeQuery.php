<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Employee]].
 *
 * @see \common\models\Employee
 */
class EmployeeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Employee[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Employee|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
