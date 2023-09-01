<?php
//PHP string
    echo strtoupper("Str To Upper<br>");
    echo strtolower("STR TO LOWER<br>");
    echo ucwords("uc words<br>");
    // echo strrev("str rev<br>");
        //write a program using:strpose
            $email = "hamimmiagemd@gmail.com";
            //echo wirh turnary operator
                echo strpos($email,'@')=== false?"Wrong email address<br>":"Valid email address<br>";
    //Sub str
            $sub = "Sub str.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi laborum voluptatum soluta";
            echo substr($sub,0,7)."<br>";
    //Str Reples
        $badReview = [
            'kharap',
            'bad',
            'los'
        ];
        $goodReview = [
            'good',
            'great',
            'awesome'
        ];
        $review = "this product is very bad and it's a los project.";
        echo str_replace($badReview,$goodReview,$review).'<br>';
    //password bcrypt
        $password = "Hamim";
            //Bcrypt password
            $bcrypt ="Hash Password :- ". password_hash($password,PASSWORD_BCRYPT);
            echo $bcrypt."<br>";
            //verify password
            var_dump("Password is = ".password_verify("Hamim",password_hash($password,PASSWORD_BCRYPT))."<br>");    
    //Strlen
        $user_name = "Hamim";
            echo strlen($user_name)>5?"Sucess User name":"User Name to long";

    
