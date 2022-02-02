<?php

namespace Src\UpdateTypes;

class Message extends Update {

    public function getText(){
 
        return $this->{$this->gettype()}->text;
    }

    public function getMessageId(){
        return $this->{$this->gettype()}->message_id;
    }

    public static function text(){
        $message=new Message();
        return $message->getText();
    }

    public function getFrom(){
        return $this->{$this->gettype()}->from;
    }

    public function getSenderChat(){
        return $this->{$this->gettype()}->sender_chat;
    }

    public function getDate(){
        return $this->{$this->gettype()}->date;
    }

    public function getChat(){
        return $this->{$this->gettype()}->chat;
    }

    public function getForwardFrom(){
        return $this->{$this->gettype()}->forward_from;
    }

    public function getforwardFromChat(){
        return $this->{$this->gettype()}->forward_from_chat;
    }

    public function getForwardFromMessageId(){
        return $this->{$this->gettype()}->forward_from_message_id;
    }

    public function getForwardSignature(){
        return $this->{$this->gettype()}->forward_signature;
    }

    public function getForwardSenderName(){
        return $this->{$this->gettype()}->forward_sender_name;
    }

    public function getForwardDate(){
        return $this->{$this->gettype()}->forward_date;
    }

    public function getReplyToMessage(){
        return $this->{$this->gettype()}->reply_to_message;
    }

    public function getViaBot(){
        return $this->{$this->gettype()}->via_bot;
    }

    public function getEditDate(){
        return $this->{$this->gettype()}->edit_date;
    }

    public function getMediaGroupId(){
        return $this->{$this->gettype()}->media_group_id;
    }

    public function getAuthorSignature(){
        return $this->{$this->gettype()}->uthor_signature;
    }

    public function getEntities(){
        return $this->{$this->gettype()}->entities;
    }

    public function getAnimation(){
        return $this->{$this->gettype()}->animation;
    }

    public function getAudio(){
        return $this->{$this->gettype()}->audio;
    }

    public function getDocument(){
        return $this->{$this->gettype()}->document;
    }

    public function getPhoto(){
        return $this->{$this->gettype()}->photo;
    }

    public function getSticker(){
        return $this->{$this->gettype()}->sticker;
    }

    public function getVideo(){
        return $this->{$this->gettype()}->video;
    }

    public function getVideoNote(){
        return $this->{$this->gettype()}->video_note;
    }

    public function getVoice(){
        return $this->{$this->gettype()}->voice;
    }

    public function getCaption(){
        return $this->{$this->gettype()}->caption;
    }

    public function getCaptionEntities(){
        return $this->{$this->gettype()}->caption_entities;
    }

    public function getContact(){
        return $this->{$this->gettype()}->contact;
    }

    public function getDice(){
        return $this->{$this->gettype()}->dice;
    }

    public function getGame(){
        return $this->{$this->gettype()}->game;
    }

    public function getPoll(){
        return $this->{$this->gettype()}->poll;
    }

    public function getVenue(){
        return $this->{$this->gettype()}->venue;
    }

    public function getlocation(){
        return $this->{$this->gettype()}->location;
    }

    public function getnewChatMembers(){
        return $this->{$this->gettype()}->new_chat_members;
    }

    public function getLeftChatMember(){
        return $this->{$this->gettype()}->left_chat_member;
    }

    public function getNewChatTitle(){
        return $this->{$this->gettype()}->new_chat_title;
    }

    public function getNewChatPhoto(){
        return $this->{$this->gettype()}->new_chat_photo;
    }

    public function getDeleteChatPhoto(){
        return $this->{$this->gettype()}->delete_chat_photo;
    }

    public function getGroupChatCreated(){
        return $this->{$this->gettype()}->group_chat_created;
    }

    public function getSupergroupChatCreated(){
        return $this->{$this->gettype()}->supergroup_chat_created;
    }

    public function getChannelChatCreated(){
        return $this->{$this->gettype()}->channel_chat_created;
    }

    public function getMessageAutoDeleteTimerChanged(){
        return $this->{$this->gettype()}->message_auto_delete_timer_changed;
    }

    public function getMigrateToChatId(){
        return $this->{$this->gettype()}->migrate_to_chat_id;
    }

    public function getMigrateFromChatId(){
        return $this->{$this->gettype()}->migrate_from_chat_id;
    }

    public function getPinnedMessage(){
        return $this->{$this->gettype()}->pinned_message;
    }

    public function getInvoice(){
        return $this->{$this->gettype()}->invoice;
    }

    public function getSuccessfulPayment(){
        return $this->{$this->gettype()}->successful_payment;
    }

    public function getConnectedWebsite(){
        return $this->{$this->gettype()}->connected_website;
    }

    public function getPassportData(){
        return $this->{$this->gettype()}->passport_data;
    }

    public function getProximityAlertTriggered(){
        return $this->{$this->gettype()}->proximity_alert_triggered;
    }

    public function getVoiceChatScheduled(){
        return $this->{$this->gettype()}->voice_chat_scheduled;
    }

    public function getVoiceChatStarted(){
        return $this->{$this->gettype()}->voice_chat_started;
    }

    public function getVoiceChatEnded(){
        return $this->{$this->gettype()}->voice_chat_ended;
    }

    public function getVoiceChatParticipantsInvited(){
        return $this->{$this->gettype()}->voice_chat_participants_invited;
    }

    public function getReplyMarkup(){
        return $this->{$this->gettype()}->reply_markup;
    }
}