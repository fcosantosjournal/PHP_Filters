<?php

/**
 * Filters 
 *
 * PHP version 8.1.0
 * Author: Francisco Santos
 * Email: contato@fcosantos.pt
 * 
 */

namespace App\Controllers;      

class Filters
{       
    protected $email;
    protected $string;
    protected $int;
    protected $float;
    protected $url;
    protected $ip;
    protected $boolean;
    protected $mac;
    protected $americanDate;
    protected $brazilianDate;
    protected $americanDatetime;
    protected $brazilianDatetime;
    
    public function __construct(){ }

    public function FilterEmail(string $email)
    {   
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return $this->email;
        }
        return true;
    }   
    
    public function FilterString(string $string) :mixed  
    {   
        $this->string = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/i", '', $string);
        $this->string = trim($this->string);
        $this->string = strip_tags($this->string);
        $this->string = addslashes($this->string);

        if (is_string($this->string)) {
            return $this->string;
        } 
        return false;
    }

    public function FilterInt(int $int)
    {   
        $this->int = $int;
        if (!filter_var($this->int, FILTER_SANITIZE_NUMBER_INT)) {
            return false;
        }
        return $this->int;
    }

    public function FilterFloat(float $float)
    {   
        $this->float = $float;
        if (!filter_var($this->float, FILTER_SANITIZE_NUMBER_FLOAT)) {
            return false;
        }
        return $this->float;
    }

    public function FilterUrl(string $url)
    {   
        $this->url = $url;
        if (!filter_var($this->url, FILTER_SANITIZE_URL)) {
            return false;
        }
        return $this->url;
    }

    public function FilterIp(string $ip)
    {   
        $this->ip = $ip;
        if (!filter_var($this->ip, FILTER_VALIDATE_IP)) {
            return false;
        }
        return $this->ip;
    }

    public function FilterBoolean(bool $boolean)
    {   
        $this->boolean = $boolean;
        if (!filter_var($this->boolean, FILTER_VALIDATE_BOOLEAN)) {
            return false;
        }
        return $this->boolean;
    }

    public function FilterMac($mac)
    {   
        $this->mac = $mac;
        $regexMac = "/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/";
        if (!filter_var($this->mac, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $regexMac)))) {
            return false;
        } 
        return $this->mac;
    }

    public function FilterAmericanDate($americanDate)
    {   
        $this->americanDate = $americanDate;
        $regexDate = "/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/";
        if (!filter_var($this->americanDate, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $regexDate)))) {
            return false;
        } 
        return $americanDate;
    }

    public function FilterBrazilianDate($brazilianDate)
    {   
        $this->brazilianDate = $brazilianDate;
        $regexDate = "/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/";
        if (!filter_var($this->brazilianDate, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $regexDate)))) {
            return false;
        } 
        return $brazilianDate;
    }

    public function FilterAmericanDateTime($americanDatetime)
    {   
        $this->americanDatetime = $americanDatetime;
        $regexDateTime = "/^([0-9]{4})-([0-9]{2})-([0-9]{2}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/";
        if (!filter_var($this->americanDatetime, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $regexDateTime)))) {
            return false;
        } 
        return $this->americanDatetime;
    }

    public function FilterBrazilianDateTime($brazilianDatetime)
    {   
        $this->brazilianDatetime = $brazilianDatetime; 
        $regexDateTime = "/^([0-9]{2})\/([0-9]{2})\/([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/";
        if (!filter_var($this->brazilianDatetime, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $regexDateTime)))) {
            return false;
        } 
        return $this->brazilianDatetime;
    }
}
