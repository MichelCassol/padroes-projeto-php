<?php 

require_once __DIR__ . '/vehicle-interface.php';

class Car implements Vehicle 
{
  private string $name;

  /**
   * Class constructor.
   */
  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function pickUP(string $custonName)
  {
    var_export("$this->name está buscando $custonName");
    echo PHP_EOL;
  }

  public function stop()
  {
    var_export("$this->name parou");
    echo PHP_EOL;
  }
}
