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

if($_POST['url']) {
  $new_name = createID();
  $event = [[$new_name => $_POST['url']]];
  $filename = "files.json";
  $ev = preg_replace(array('/'.preg_quote('[').'/','/'.preg_quote(']').'/'), '', json_encode($event, true));
  print 'https://lyasin.me/?'.$new_name;
    
  $handle = @fopen($filename, 'r+');
  if ($handle === null) {
    $handle = fopen($filename, 'w+');
  }

  if ($handle) {
    fseek($handle, 0, SEEK_END);
    if (ftell($handle) > 0) {
      fseek($handle, -1, SEEK_END);
      fwrite($handle, ',', 1);
      fwrite($handle, $ev . ']');
    } else {
      fwrite($handle, json_encode($event));
    }
    fclose($handle);
  }

} else {
  $openFile = json_decode(file_get_contents('files.json'), true);
  print "<br />";
  var_dump(($openFile));
}

?>