<?php
namespace Src;

class Message extends Bot {

    public function getChatId()
    {
        return $this->update->message->chat->id;
    }

    public function getText()
    {
        return $this->update->message->text;
    }

    public function getMessageId()
    {
        return $this->update->message->id;
    }

}