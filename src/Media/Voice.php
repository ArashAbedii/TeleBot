<?php

namespace Src\Media;

class Voice {
    public function getFileId(){
        message()->getVoice()->file_id;
    }

    public function getFileUniqueId(){
        message()->getVoice()->file_unique_id;
    }

    public function getDuration(){
        message()->getVoice()->duration;
    }

    public function getMimeType(){
        message()->getVoice()->mime_type;
    }

    public function getFileSize(){
        message()->getVoice()->file_size;
    }

}