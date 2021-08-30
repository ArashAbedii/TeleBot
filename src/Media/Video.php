<?php

namespace Src\Media;

class Video {

    public function getMetaData(){
        return message()->getVideo();
    }

    public function getFileId(){
        return message()->getVideo()->file_id;
    }

    public function getFileUniqueId(){
        return message()->getVideo()->file_unique_id;
    }

    public function getWidth(){
        return message()->getVideo()->width;
    }

    public function getHeight(){
        return message()->getVideo()->height;
    }

    public function getDuration(){
        return message()->getVideo()->duration;
    }

    public function getThumb(){
        return message()->getVideo()->thumb;
    }

    public function getFileName(){
        return message()->getVideo()->file_name;
    }

    public function getMimeType(){
        return message()->getVideo()->mime_type;
    }


    public function getFileSize(){
        return message()->getVideo()->file_size;
    }
}