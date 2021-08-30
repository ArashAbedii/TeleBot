<?php

namespace Src\Media;

class VideoNote {
    public function getMetaData(){
        return message()->getVideoNote();
    }

    public function getFileIid(){
        return message()->getVideoNote()->file_id;
    }

    public function getFileUniqueId(){
        return message()->getVideoNote()->file_unique_id;
    }

    public function getLength(){
        return message()->getVideoNote()->length;
    }

    public function getDuration(){
        return message()->getVideoNote()->duration;
    }

    public function getThumb(){
        return message()->getVideoNote()->thumb;
    }

    public function getFileSize(){
        return message()->getVideoNote()->file_size;
    }


}