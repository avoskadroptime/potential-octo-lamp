<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $id_user
 * @property string $title
 * @property int|null $picture
 * @property int|null $audio
 * @property string $text
 * @property string|null $created_at
 *
 * @property User $user
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'title', 'text'], 'required'],
            [['id_user', 'picture', 'audio'], 'integer'],
            [['text'], 'string'],
            [['created_at'], 'date', 'format'=>'php:Y-m-d'],
            [['created_at'], 'default', 'value' => date('YYYY-mm-dd')],
            [['title'], 'string', 'max' => 35],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'title' => 'Title',
            'picture' => 'Picture',
            'audio' => 'Audio',
            'text' => 'Text',
            'created_at' => 'Created At',
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

    public function getTags()
    {
        return $this->hasMany(tag::class, ['id'=>"id_tag"])
            ->viaTable('post_tag', ['id_post'=>'id']);
    }

    public function getSelectedTags()
    {
         $selectedIds = $this->getTags()->select('id')->asArray()->all();
        //var_dump($selectedTags); die;
        return ArrayHelper::getColumn($selectedIds, 'id');
    }

    public function saveTags($tags){
        if (is_array($tags)){
            PostTag::deleteAll(['post'=>$this->id]);
            foreach ($tags as $id_tag){
                $tag = tag::findOne($id_tag);
                $this->link('tags', $tag);
            }
        }
    }
}
