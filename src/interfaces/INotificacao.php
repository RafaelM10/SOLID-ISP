<?php
namespace src\interfaces;

use src\components\Notificacao;

interface INotificacao
{
  public function enviarNotificacao(Notificacao $notificacao);
}