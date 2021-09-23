<?php

namespace Src\UpdateTypes;

class InlineQuery extends Update {
    public function getId(){
        return $this->inline_query->id;
    }

    public function getFrom(){
        return $this->inline_query->from;
    }

    public function getQuery(){
        return $this->inline_query->query;
    }

    public function getOffset(){
        return $this->inline_query->offset;
    }

    public function getChatType(){
        return $this->inline_query->chat_type;
    }

    public function createAnswerResultSimply($type,$id,$title,array $input_message_content,array $options=[],&$results){
        $options['type']=$type;
        $options['id']=$id;
        $options['title']=$title;
        $options['input_message_content']=$input_message_content;
        $results[]=$options;
    }

}