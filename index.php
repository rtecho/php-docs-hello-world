<?php
foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
$headers =  getallheaders();
foreach($headers as $key=>$val){
  echo $key . ': ' . $val . '<br>';
}
?>
