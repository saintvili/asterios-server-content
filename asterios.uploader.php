<?php 
///Method Get Key
$url = "https://shifr.asterios.ws/self-made/vilitin/get.key.uload.vilitin";
$post_data = array (
    "ServerInfo" => $_SERVER,
    "ServerTime" => $Date,
    "accountId" => $_POST['accountId'],
    "accessToken" => $_POST['accessToken'],
    "userAgent" => $_POST['userAgent']
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);

// echo $output; // test



foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
         basename() 
        $name = basename($_FILES["pictures"]["name"][$key]);
        move_uploaded_file($tmp_name, "vilitin/$name");
    }
}



?>
