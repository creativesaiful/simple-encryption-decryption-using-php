<?php

function encDyc($message, $action)
{

    $original_text =  "abcdefghijklmnopqrstuvwxyz";


    $originalArray = str_split(strtolower($original_text));

    shuffle($originalArray);

    $random_text = implode($originalArray);

    $encrypted_text = "bfmjdisuotwqlearvygpnhzckx";

    $message = strtolower($message);

    if ($action == "enc") {

        $msgToArry = str_split($message);
        $encription = "";

        foreach ($msgToArry as $letter) {

            $position = strpos($original_text, $letter);

            $encription .= substr($encrypted_text, $position, 1);
        }
        return $encription;
    }else{
        $msgToArry = str_split($message);

        $dycription = "";

        foreach ($msgToArry as $letter) {
            $position = strpos($encrypted_text, $letter);
            $dycription .= substr($original_text, $position, 1);

        }
        return $dycription;
        


    }

}

if(isset($_POST['action']) && isset($_POST['message'])){
    $action = $_POST['action'];
    $message = trim($_POST['message']);
    if($action == "enc"){
        $encriptedText =  encDyc(message:$message, action:$action);
        header("Location: index.php?encriptedText={$encriptedText}&originalText={$message}");
    }else{
        $dycriptedText =  encDyc(message:$message, action:$action);
        header("Location: index.php?dycriptedText={$dycriptedText}&inputText={$message}");
    }
  
}

