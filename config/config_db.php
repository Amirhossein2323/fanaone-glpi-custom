<?php
class DB extends DBmysql {
   public $dbhost = 'localhost';
   public $dbuser = 'itsmuser';
   public $dbpassword = 'S%40D%25cure';
   public $dbdefault = 'ITSM';
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
