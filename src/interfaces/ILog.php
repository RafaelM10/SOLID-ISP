<?php
namespace src\interfaces;

use src\components\Log;

interface ILog
{
  public function registrarLog(Log $log);
}