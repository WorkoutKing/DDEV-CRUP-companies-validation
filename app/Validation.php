<?php

namespace ToDo;


class Validation{
    public static $validationErrors = [];
    public static function validate($company){
        if(!preg_match('/^[A-Za-z0-9]{3,45}$/', $company['pavadinimas'])){
            self::$validationErrors[]="Too few or too many characters at company name";
        }
        if(!preg_match('/^[0-9]*$/',$company['kodas'])){
            self::$validationErrors[]="Too few or wrong company code";
        }
        if(!preg_match('/^[A-Za-z0-9]{3,15}$/',$company['pvm_kodas'])){
            self::$validationErrors[]="Too few or too many characters at pvm code";
        }
        if(!preg_match('/^[a-zA-Z\s]+$/', $company['adresas'])){
            self::$validationErrors[]="Too few or too many characters in adress";
        }
        if(!preg_match('/^[0-9]*$/',$company['telefonas'])){
            self::$validationErrors[]="Wrong phone number format or there is no number";
        }
        if(empty($company['pastas'])){
            self::$validationErrors[]="Empy email";
        }
        if(!preg_match('/^[A-Za-z0-9]{3,255}$/', $company['veikla'])){
            self::$validationErrors[]="Too few or too many characters at activity";
        }
        if(!preg_match('/^[a-zA-Z\s]{6,45}+$/', $company['vadovas'])){
            self::$validationErrors[]="CEO must contain only letters";
        }
        return self::$validationErrors;
    }


}