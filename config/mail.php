<?php
return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "7985d6bff6816b",
  "password" => "9fb4341cc7024e",
  "sendmail" => "/usr/sbin/sendmail -bs"
];
