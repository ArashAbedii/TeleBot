<?php

namespace Src\Media;

class Animation {
    public function getMetaData(){
        return message()->getAnimation();
    }

    public function getFileId(){
        return message()->getAnimation()->file_id;
    }

    public function getFileUniqueId(){
        return message()->getAnimation()->file_unique_id;
    }

    public function getWidth(){
        return message()->getAnimation()->width;
    }

    public function getHeight(){
        return message()->getAnimation()->height;
    }

    public function getDuration(){
        return message()->getAnimation()->duration;
    }

    public function getThumb(){
        return message()->getAnimation()->thumb;
    }

    public function getFileName(){
        return message()->getAnimation()->file_name;
    }

    public function getMimeType(){
        return message()->getAnimation()->mime_type;
    }

    public function getFileSize(){
        return message()->getAnimation()->file_size;
    }
}