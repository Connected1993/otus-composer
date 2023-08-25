<?php
declare(strict_types=1);

namespace AlexanderBalabas\OtusComposer\Application;


class Debugger
{
  public function debug(array $data):void
  {
    if (isset($_GET['admin']) && $_GET['admin']==='debug')
    {
      echo '<pre>';
      print_r($data);
      echo '</pre>';
      exit();
    }
  }
}