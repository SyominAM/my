<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rules".
 *
 * @property int $id
 * @property int $country_id
 * @property int $browser_id
 * @property string $url
 *
 * @property Browsers $browser
 * @property Countries $country
 */
class Rules extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rules';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_id', 'browser_id', 'url'], 'required'],
            [['country_id', 'browser_id'], 'integer'],
            [['url'], 'string', 'max' => 255],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::class, 'targetAttribute' => ['country_id' => 'id']],
            [['browser_id'], 'exist', 'skipOnError' => true, 'targetClass' => Browsers::class, 'targetAttribute' => ['browser_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_id' => 'Country ID',
            'browser_id' => 'Browser ID',
            'url' => 'Url',
        ];
    }

    /**
     * Gets query for [[Browser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrowser()
    {
        return $this->hasOne(Browsers::class, ['id' => 'browser_id']);
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Countries::class, ['id' => 'country_id']);
    }
}
