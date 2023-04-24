<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "browsers".
 *
 * @property int $id
 * @property string $name
 *
 * @property Rules[] $rules
 */
class Browsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'browsers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Rules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRules()
    {
        return $this->hasMany(Rules::class, ['browser_id' => 'id']);
    }
}
