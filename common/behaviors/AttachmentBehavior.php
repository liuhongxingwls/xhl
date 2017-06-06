<?php
/**
 * Created by PhpStorm.
 * User: iautos
 * Date: 16/7/24
 * Time: 下午1:26
 */

namespace common\behaviors;


use common\models\AlbumAttachment;
use common\models\Attachment;
use yii\base\Behavior;
use yii\db\ActiveRecord;

class AttachmentBehavior extends Behavior
{
    private $_attachments;

    public static $formName = "attachmentItems";

    public static $formLable = '图片';

    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_INSERT => 'afterSave',
            ActiveRecord::EVENT_AFTER_UPDATE => 'afterSave',
            ActiveRecord::EVENT_BEFORE_DELETE => 'beforeDelete',
        ];
    }

    public function getAttachments()
    {
        return $this->owner->hasMany(Attachment::className(), ['id' => 'tag_id'])
            ->viaTable('{{%album_attachment}}', ['article_id' => 'id']);
    }

    public function getAttachmentItems()
    {
        if($this->_attachments === null){
            $this->_attachments = [];
            foreach($this->owner->attachments as $attachment) {
                $this->_attachments[] = $attachment->url;
            }
        }
        return $this->_attachments;
    }

    public function afterSave()
    {
        $data = \Yii::$app->request->post($this->owner->formName());
        if(isset($data[static::$formName]) && !empty($data[static::$formName])) {
            if(!$this->owner->isNewRecord) {
                $this->beforeDelete();
            }
            $attachments = $data[static::$formName];
            foreach($attachments as $attachment) {
                $attachmentModel = Attachment::findOne(['url' => $attachment]);
                if (empty($attachmentModel)) {
                    $attachmentModel = new Attachment();
                    $attachmentModel->url = $attachment;
                    $attachmentModel->save();
                }
                $albumAttachment = new AlbumAttachment();
                $albumAttachment->album_id = $this->owner->id;
                $albumAttachment->attachment_id = $attachmentModel->id;
                $albumAttachment->save();
            }
        }
    }

    public function beforeDelete()
    {
        $pks = [];

        foreach($this->owner->tags as $tag){
            $pks[] = $tag->primaryKey;
        }

        if (count($pks)) {
            Tag::updateAllCounters(['article' => -1], ['in', 'id', $pks]);
        }
        Tag::deleteAll(['article' => 0]);
        ArticleTag::deleteAll(['article_id' => $this->owner->id]);
    }
}