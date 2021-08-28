<?php
namespace Src;
use Src\Update;
class Message extends Update {

    public function getText(){
        return $this->message->text;
    }

    public function getMessageId(){
        return $this->message->message_id;
    }

    public static function text(){
        $message=new Message();
        return $message->getText();
    }

    public function getFrom(){
        return $this->message->from;
    }

    public function getSenderChat(){
        return $this->message->sender_chat;
    }

    public function getDate(){
        return $this->message->date;
    }

    public function getChat(){
        return $this->message->chat;
    }

    public function getForwardFrom(){
        return $this->message->forward_from;
    }

    public function getforwardFromChat(){
        return $this->message->forward_from_chat;
    }

    public function getForwardFromMessageId(){
        return $this->message->forward_from_message_id;
    }

    public function getForwardSignature(){
        return $this->message->forward_signature;
    }

    public function getForwardSenderName(){
        return $this->message->forward_sender_name;
    }

    public function getForwardDate(){
        return $this->message->forward_date;
    }

    public function getReplyToMessage(){
        return $this->message->reply_to_message;
    }

    public function getViaBot(){
        return $this->message->via_bot;
    }

    public function getEditDate(){
        return $this->message->edit_date;
    }

    public function getMediaGroupId(){
        return $this->message->media_group_id;
    }

    public function getAuthorSignature(){
        return $this->message->author_signature;
    }

    public function getEntities(){
        return $this->message->entities;
    }

    public function getAnimation(){
        return $this->message->animation;
    }

    public function getAudio(){
        return $this->message->audio;
    }

    public function getDocument(){
        return $this->message->document;
    }

    public function getPhoto(){
        return $this->message->photo;
    }

    public function getSticker(){
        return $this->message->sticker;
    }

    public function getVideo(){
        return $this->message->video;
    }

    public function getVideoNote(){
        return $this->message->video_note;
    }

    public function getVoice(){
        return $this->message->voice;
    }

    public function getCaption(){
        return $this->message->caption;
    }

    public function getCaptionEntities(){
        return $this->message->caption_entities;
    }

    public function getContact(){
        return $this->message->contact;
    }

    public function getDice(){
        return $this->message->dice;
    }

    public function getGame(){
        return $this->message->game;
    }

    public function getPoll(){
        return $this->message->poll;
    }

    public function getVenue(){
        return $this->message->venue;
    }

    public function getlocation(){
        return $this->message->location;
    }

    public function getnewChatMembers(){
        return $this->message->new_chat_members;
    }

    public function getLeftChatMember(){
        return $this->message->left_chat_member;
    }

    public function getNewChatTitle(){
        return $this->message->new_chat_title;
    }

    public function getNewChatPhoto(){
        return $this->message->new_chat_photo;
    }

    public function getDeleteChatPhoto(){
        return $this->message->delete_chat_photo;
    }

    public function getGroupChatCreated(){
        return $this->message->group_chat_created;
    }

    public function getSupergroupChatCreated(){
        return $this->message->supergroup_chat_created;
    }

    public function getChannelChatCreated(){
        return $this->message->channel_chat_created;
    }

    public function getMessageAutoDeleteTimerChanged(){
        return $this->message->message_auto_delete_timer_changed;
    }

    public function getMigrateToChatId(){
        return $this->message->migrate_to_chat_id;
    }

    public function getMigrateFromChatId(){
        return $this->message->migrate_from_chat_id;
    }

    public function getPinnedMessage(){
        return $this->message->pinned_message;
    }

    public function getInvoice(){
        return $this->message->invoice;
    }

    public function getSuccessfulPayment(){
        return $this->message->successful_payment;
    }

    public function getConnectedWebsite(){
        return $this->message->connected_website;
    }

    public function getPassportData(){
        return $this->message->passport_data;
    }

    public function getProximityAlertTriggered(){
        return $this->message->proximity_alert_triggered;
    }

    public function getVoiceChatScheduled(){
        return $this->message->voice_chat_scheduled;
    }

    public function getVoiceChatStarted(){
        return $this->message->voice_chat_started;
    }

    public function getVoiceChatEnded(){
        return $this->message->voice_chat_ended;
    }

    public function getVoiceChatParticipantsInvited(){
        return $this->message->voice_chat_participants_invited;
    }

    public function getReplyMarkup(){
        return $this->message->reply_markup;
    }
}