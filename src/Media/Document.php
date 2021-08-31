<?php

namespace Src\Media;

class Document {
    public function getMetaData(){
        return message()->getDocument();
    }

    public function getFileId(){
        return message()->getDocument()->file_id;
    }

    public function getFileUniqueId(){
        return message()->getDocument()->file_unique_id;
    }

    public function getThumb(){
        return message()->getDocument()->thumb;
    }

    public function getFileName(){
        return message()->getDocument()->file_name;
    }

    public function getMimeType(){
        return message()->getDocument()->mime_type;
    }

    public function getFileSize(){
        return message()->getDocument()->file_size;
    }
}