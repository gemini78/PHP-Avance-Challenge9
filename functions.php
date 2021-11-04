<?php

if (!function_exists('test_input')) {
    function test_input(string $data)
    {
        
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }
}

if (!function_exists('not_empty')) {
    function not_empty($fields = [])
    {
        if (count($fields) != 0) {
            foreach ($fields as $field) {
                if (empty($_POST[$field]) || trim($_POST[$field]) == "") {
                    return false;
                }
            }
            return true;
        }
    }
}

if (!function_exists('validateName')) {
    function validateName(string $name)
    {
        return preg_match("%^[a-zA-Z-' ]*$%",$name);
    }
}

if (!function_exists('validateEmail')) {
    function validateEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}

if (!function_exists('validatePhone')) {
    function validatePhone(string $phone)
    {
        return preg_match("%^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$%",$phone);
    }
}

if (!function_exists('validateSubject')) {
    function validateSubject(string $subject)
    {
        return $subject != 'no choice';
    }
}