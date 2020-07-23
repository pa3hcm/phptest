<?php

if (isset($_ENV["HOSTNAME"])) {
    $MachineName = $_ENV["HOSTNAME"];
} else {
  $MachineName = 'unknown';
}

print '<h1>phpinfo() for instance ';
print $MachineName;
print '</h1>';

phpinfo();
?>
