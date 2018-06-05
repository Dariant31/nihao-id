<?php
    $mailsent = false;
    $errors = [];
    $missing = [];

    if (isset($_POST['send'])) {
        $expected = ['name', 'email', 'comments'];
        $required = ['name', 'comments', 'email'];
        $to = 'Dariant Virgi <denz_igi@yahoo.com>, Regina Priscylia <regina.priscylia@gmail.com>';
        $subject = 'Feedback from online form';
        $headers = [];
        $headers[] = 'From: info@nihao-id.com';
        $headers[] = 'Content-type: text/plain; charset=utf-8';
        $authorized = null;


        $suspect = false;
        $pattern = '/Content-type:|Bcc:|Cc:/i';

        function isSuspect($value, $pattern, &$suspect) {
            if (is_array($value)) {
                foreach ($value as $item) {
                    isSuspect($item, $pattern, $suspect);
                }
            }else{
                if (preg_match($pattern, $value)) {
                    $suspect = true;
                }
            }
        }

        isSuspect($_POST, $pattern, $suspect);

        if (!$suspect) :
            foreach ($_POST as $key => $value) {
                $value = is_array($value) ? $value : trim($value);
                if (empty($value) && in_array($key, $required) ) {
                    $missing[] = $key;
                    $$key = '';
                }elseif (in_array($key, $expected) ){
                    $$key = $value;
                }
            }

            //Validate User email Adress
            if (!$missing && !empty($email)) {
                $validemail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                if ($validemail) {
                    $headers[] = "Reply-to: $validemail";
                }else {
                    $errors['email'] = true;
                }
            }

            //If No error, create headers and message body
            if (!$errors && !$missing) {
                $headers = implode("\r\n", $headers);

                //init message
                $message ='';
                foreach ($expected as $field) {
                    if (isset($$field) && !empty($$field)) {
                        $val = $$field;
                    }else{
                        $val = 'Not Selected';
                    }

                    //if its an array
                    if (is_array($val)) {
                        $val=implode(',', $val);
                    }

                    //replace underscores in the field names with spaces
                    $field = str_replace('_', ' ', $field);

                    $message .= ucfirst($field) . ": $val\r\n\r\n";
                    
                }

                $message = wordwrap($message, 70);
                $mailsent = true;
                $mailsent = mail($to, $subject, $message, $headers, $authorized);
                if (!$mailsent) {
                    $errors['mailfail'] = true;
                }
            }
        endif; 
    }
?>