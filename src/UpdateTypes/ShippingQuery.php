<?php

namespace Src\UpdateTypes;

class ShippingQuery extends Update {

    public function get(){
        return $this->shipping_query;
    }

    public function getId(){
        return $this->shipping_query->id;
    }

    public function getFrom(){
        return $this->shipping_query->from;
    }

    public function getInvoicePayload(){
        return $this->shipping_query->invoice_payload;
    }

    public function getShippingAddress(){
        return $this->shipping_query->shipping_address;
    }

}