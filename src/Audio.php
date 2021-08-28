<?php

namespace Src;

class Audio extends Update {
    public function getFileId(){
        return $this->message->audio->file_id;
    }

    public function getFileUniqueId(){
        return $this->message->audio->file_unique_id;
    }

    public function getDuration(){
        return $this->message->audio->duration;
    }

    public function getFileName(){
        return $this->message->audio->file_name;
    }
    
    public function getPerformer(){
        return $this->message->audio->performer;
    }

    public function getTitle(){
        return $this->message->audio->title;
    }

    public function getMimeType(){
        return $this->message->audio->mime_type;
    }

    public function getFileSize(){
        return $this->message->audio->file_size;
    }

    public function getThumb(){
        return $this->message->audio->thumb;
    }
}