<?php

namespace app\models;
use yii\db\ActiveQuery;
use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property string $name
 * @property int $id_user
 *
 * @property User $user
 */
class tag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id_user'], 'required'],
            [['id_user'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    public static function dropDownList(){
        return ArrayHelper::map(User::find()->all(), 'id', 'username');

    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'id_user' => 'Id User',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }

    public function getPosts()
    {
        return $this->hasMany(post::class, ['id'=>"id_post"])
            ->viaTable('post_tag', ['id_tag'=>'id']);
    }
}
