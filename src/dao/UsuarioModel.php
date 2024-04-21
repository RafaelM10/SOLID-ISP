<?php
namespace src\dao;

use src\BD;

use src\interfaces\ICadastro;
use src\interfaces\INotificacao;
use src\interfaces\ILog;

use src\components\Log;
use src\components\Notificacao;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao
{
  public function salvar()
  {
  }

  public function registrarLog(Log $log)
  {
  }
  public function enviarNotificacao(Notificacao $notificacao)
  {
  }

}