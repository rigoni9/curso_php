<?php
/**
 * Criar um algoritimo que simula o funcionamento de um calendário.
 * Variáveis: $data = '01/01/2025'
 * Validar a data.
 * Validar se o ano é bissexto.
 * Dica: If else, 
 */
// 31 / 01 / 2025
// 01 2 34 5 6789

 $data = "31/01/2025";

 $dia = substr($data, 0, 2); //primeiro número é a casa, segundo número é a quantidade de casas.
 $mes = substr($data, 3, 2);
 $ano = substr($data, 6, 4);
