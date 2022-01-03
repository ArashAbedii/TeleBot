<?php

namespace Src\UpdateTypes;

class PreCheckoutQuery extends Update {

    public function get(){
        return $this->pre_checkout_query;
    }

    public function getId(){
        return $this->pre_checkout_query->id;
    }

    public function getFrom(){
        return $this->pre_checkout_query->from;
    }

    public function getCurrency(){
        return $this->pre_checkout_query->currency;
    }

    public function getTotalAmount(){
        return $this->pre_checkout_query->total_amount;
    }

    public function getInvoicePayload(){
        return $this->pre_checkout_query->invoice_payload;
    }

    public function getShippingOptionId(){
        return $this->pre_checkout_query->shipping_option_id;
    }

    public function getOrderInfo(){
        return $this->pre_checkout_query->order_info;
    }


}