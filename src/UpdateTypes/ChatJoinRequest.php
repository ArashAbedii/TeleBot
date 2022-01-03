<?php

namespace Src\UpdateTypes;

class ChatJoinRequest extends Update {

    public function get(){
        return $this->chat_join_request;
    }

    public function getId(){
        return $this->chat_join_request->id;
    }

    public function getChat(){
        return $this->chat_join_request->chat;
    }

    public function getFrom(){
        return $this->chat_join_request->from;
    }

    public function getDate(){
        return $this->chat_join_request->date;
    }

    public function getBio(){
        return $this->chat_join_request->bio;
    }

    public function getInviteLink(){
        return $this->chat_join_request->invite_link;
    }

}