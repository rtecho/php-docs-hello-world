<?php

echo "Hello World!";
foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
?>
