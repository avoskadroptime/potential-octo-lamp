<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "color_pallet".
 *
 * @property int $id
 * @property string $a
 * @property string $b
 * @property string $c
 * @property string $d
 * @property string $e
 * @property string $f
 *
 * @property CurrPallet[] $currPallets
 */
class color_pallet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'color_pallet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['a', 'b', 'c', 'd', 'e', 'f'], 'required'],
            [['a', 'b', 'c', 'd', 'e', 'f'], 'string', 'max' => 7],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'a' => 'Меню, кнопки',
            'b' => 'Запись, иконки кнопок, название страницы',
            'c' => 'Акцентный цвет, иконки, дата записи, лого и меню',
            'd' => 'Текст записей',
            'e' => 'Название записи',
            'f' => 'Фон',
        ];
    }

    /**
     * Gets query for [[CurrPallets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrPallets()
    {
        return $this->hasMany(CurrPallet::class, ['id_pallet' => 'id']);
    }
}
