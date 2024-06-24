<?php

/**
 * 
 * Função contar tempo, contar o tempo decorrido de uma data
 * 
 * @param string $data
 * @return string
 */

function contarTempo(string $data):string
{
  $agora = strtotime(date('Y-m-d H:i:s'));
  $tempo = strtotime($data);
  $diferenca = $agora - $tempo;


  $segundos = $diferenca;
  $minutos = round($diferenca / 60);
  $horas = round($diferenca / 3600);
  $dias = round($diferenca / 86400);
  $semanas = round($diferenca / 604800);
  $meses = round($diferenca / 2419200);
  $anos = round($diferenca / 29030400);

  if ($segundos <= 60) {
    return 'Agora';
  } elseif ($minutos <= 60) {
    return $minutos == 1 ? 'Há um minuto' : 'Há ' . $minutos . ' minutos';
  } elseif ($horas <= 24) {
    return $horas == 1 ? 'Há 1 hora' : 'Há ' . $horas . ' horas';
  } elseif ($dias <= 7) {
    return $dias == 1 ? 'ontem' : 'Há ' . $dias . ' dias';
  } elseif ($semanas <= 4) {
    return $semanas == 1 ? 'Há 1 semana' : 'Há ' . $semanas . ' semanas';
  } elseif ($meses <= 12) {
    return $meses == 1 ? 'Há um minuto' : 'Há ' . $meses . ' meses';
  } else {
    return $anos == 1 ? 'Há 1 ano' : 'Há ' . $anos . ' anos';
  }

  // echo 'vai contando 😒';
}

function formatarValor(float $valor = null): string
{
  return number_format(($valor ? $valor : 0), 2, ',', '.');
}

function formatarNumero(string $numero = null): string
{
  return number_format($numero ? $numero : 0, 0, ',', '.');
}

function saudacao(): string
{

  $hora = date('H');

  if ($hora >= 0 && $hora <= 5) {
    $saudacao = 'Boa madrugada';
  } elseif ($hora >= 6 && $hora <= 12) {
    $saudacao = 'Bom dia';
  } elseif ($hora >= 13 && $hora <= 18) {
    $saudacao = 'Boa tarde';
  } else {
    $saudacao = 'Boa noite';
  }
  return $saudacao;
}

/**
 * 
 * Resume um texto, 
 * 
 * @param string $texto para resumir
 * @param int $limite, quantidade de caracteres que irá resumir.
 * @param string $continue, parametro opcional par mostrar o que deve ser inserido no final da frase
 * @return string texto resumido
 * 
 */

function resumirText(string $texto, int $limite, string $continue = '...'): string
{
  $textoLimpo = trim(strip_tags($texto));
  //se a quantidade de caracteres for menor que o limite retorne o limite
  if (mb_strlen($textoLimpo) <= $limite) {
    return $textoLimpo;
  }

  $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));
  return $resumirTexto . $continue;
}
