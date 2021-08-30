<?php

namespace Src\Media;

class Audio {

    public function getMetaData(){
        return message()->getAudio();
    }
    
    public function getFileId(){
        return message()->getAudio()->file_id;
    }

    public function getFileUniqueId(){
        return message()->getAudio()->file_unique_id;
    }

    public function getDuration(){
        return message()->getAudio()->duration;
    }

    public function getFileName(){
        return message()->getAudio()->file_name;
    }
    
    public function getPerformer(){
        return message()->getAudio()->performer;
    }

    public function getTitle(){
        return message()->getAudio()->title;
    }

    public function getMimeType(){
        return message()->getAudio()->mime_type;
    }

    public function getFileSize(){
        return message()->getAudio()->file_size;
    }

    public function getThumb(){
        return message()->getAudio()->thumb;
    }
}