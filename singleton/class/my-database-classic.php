<?php

require_once __DIR__ . '/../interfaces/my-interface-classic.php';

// Essa é a classe do singleton
class MyDatabaseClassic
{
  private static ?MyDatabaseClassic $instance = null;
  private array $users;

  private function __construct()
  {
  }

  public static function getInstance(): MyDatabaseClassic
  {
    if (self::$instance === null) {
      self::$instance = new MyDatabaseClassic();
    }
    return self::$instance;
  }

  public function add(UserInterface $user): void
  {
    $this->users[] = $user;
  }

  public function remove(int $index): void
  {
    unset($this->users[$index]);
  }

  public function show(): void
  {
    foreach ($this->users as $user) {
      var_export($user);
      echo PHP_EOL;
    }
  }
}
