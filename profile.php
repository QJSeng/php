<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2013/1/10
 * Time: 8:50
 */
header('Access-Control-Allow-Origin: http://10.30.29.91:63341');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Headers:Content-Type');
$user=Array("userName"=>123);
echo json_encode($user);
//echo '{"userName":"123"}';
?>