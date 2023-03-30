<?php

class MySQL
{
  public const HOST = '127.0.0.1';
  public const PORT = 3306;
  public const DATABASE = 'test';
  public const USERNAME = 'root';
  public const PASSWORD = '';
  public const CHARSET = 'utf8mb4';
  public const COLLATION = 'utf8mb4_unicode_ci';

  private function __construct()
  {
  }

  public static function connection()
  {
    $connection = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASE, self::PORT);
    if (!$connection) {
      die('connection error: ' . mysqli_connect_error());
    }
    return $connection;
  }
}
