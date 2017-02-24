<?php 
function random($length = 3) {      
  $chars = 'bcdfghjklmnprstvwxzaeiou0123456789';
    
  for ($p = 0; $p < $length; $p++) {
    $result .= ($p%2) ? $chars[mt_rand(19, 33)] : $chars[mt_rand(0, 18)];
  }
  return $result;
}

function createID() {
  $openFile = json_decode(file_get_contents('files.json'), true);
  $len = ($len<3) ? 3 : round(count($openFile)/34);

  $gen = random($len);
  for($i=0;$i<count($openFile);$i++){
    if($openFile[$i][$gen]){
      createID();
    } else {
      return $gen;
    }
  }
}

function checkExists($url) { // A function to check if the url has been previously shortened
  $openFile = json_decode(file_get_contents('files.json'), true); // Read files.json and interpret as json
  for($i=0;$i<count($openFile);$i++){
    if(($check = array_search($url, $openFile[$i]))) {
      return $check;
    }

  }
}

var_dump( checkExists("http://test.com"));

//print createID();
?>
