<?php
    // inputs should not be empty and not null
    function isEmpty($str = null){
        if($str){
            $cleanStr = trim($str);
            return (strlen($cleanStr)<= 0)? true : false;
        }
    }
    // contact number should only be a number and not a string
    function isContactNumber($str = null){
        if($str){
            return (is_numeric($str))? false : true;
        }
    }

    //contact number should follow the following pattern
    function isValidContact($str = null){
        if($str){
            return (substr($str, 0, 3) == '+63' && strlen($str)==13 && preg_match('/[\+]{0,1}(\d{10,13}|[\(][\+]{0,1}\d{2,}[\13)]*\d{5,13}|\d{2,6}[\-]{1}\d{2,13}[\-]*\d{3,13})/',$str))? false : true;
        }
    }
    // first name and last name should not be less 2 length of a string
    function isNameLenght($str = null){
        if($str){
            return(strlen($str)>2)? false : true;
        }
    }

    // inputs should not start special character
    function isStartWithSpecialChar($str = null){
        if($str){
            $firstchar = substr($str, 0, 1);
            return (preg_match('/[^a-zA-Z\d]/', $firstchar))? true : false;
        }
    }

    // inputs should not start with a number
    function isStartWithNumber($str = null){
        $firstchar = substr($str, 0, 1);
        return (is_numeric($firstchar))? true : false;
    }

    // should not contain any html tags
    function isContainHtmlTags($str = null){
        if($str){
            return (preg_match('/>(?:(?<t>[^<]*))/', $str))? true : false;
        }
    }

    // email should be correct format
    function isEmailValid($str = null){
        if($str){
           return (preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $str))? false : true;
        }
    }
?>