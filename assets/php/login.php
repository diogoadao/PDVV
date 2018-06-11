<?php

require 'db.php';

header('Content-Type: application/json');
ini_set('default_charset', 'utf-8');
date_default_timezone_set('Europe/Lisbon');
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = stripslashes($_POST['email']);
    $pass = stripslashes($_POST['password']);
    $password = stripslashes($pass);
    $query = "SELECT tt_client as rank 
				,tt_user.tt_id as id 
				,tt_first_name as first_name
				,tt_last_name as last_name
				,tt_uuid as uuid
				,tt_email as email
				,tt_password as pass
			FROM tt_user where tt_email = '" . $email . "'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    $result = $row;
    if ($row == null) {
        echo json_encode(null);
        die();
    }

    $hash = $result['pass'];

    $state = password_verify($password, $hash);
    if ($state == 1) {
        $flag = 0;
        $rank = $result['rank'];
        $firstname = $result['first_name'];
        $lastname=$result['last_name'];
        $uuid = $result['uuid'];
        $secret = $rank."".$lastname."".$uuid."".date('dmY')."".$firstname;
        $result['access_key'] = hash_hmac('ripemd160', $hash, $secret);
        while ($flag <= 1) {
            $index = array_search($hash, $result);
            unset($result[$index]);
            $flag++;
        }


        echo json_encode($result);

        die();
    } else {
        echo json_encode(null);
        die();
    }
}
