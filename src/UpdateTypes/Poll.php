<?php

namespace Src\UpdateTypes;

class Poll extends Update {

    public function get(){
        return $this->poll;
    }

    public function getId(){
        return $this->poll->id;
    }

    public function getQuestion(){
        return $this->poll->question;
    }

    public function getOptions(){
        return $this->poll->options;
    }

    public function getTotalVoterCount(){
        return $this->poll->total_voter_count;
    }

    public function getIsClosed(){
        return $this->poll->is_closed;
    }

    public function getIsAnonymous(){
        return $this->poll->is_anonymous;
    }

    public function getType(){
        return $this->poll->type;
    }

    public function getAllowsMultipleAnswers(){
        return $this->poll->allows_multiple_answers;
    }

    public function getCorrectOptionId(){
        return $this->poll->correct_option_id;
    }

    public function getExplantion(){
        return $this->poll->explanation;
    }

    public function getExplanationEntities(){
        return $this->poll->explanation_entities;
    }

    public function getOpenPeriod(){
        return $this->poll->open_period;
    }

    public function getCloseDate(){
        return $this->poll->close_date;
    }
}