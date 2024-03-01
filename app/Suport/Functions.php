<?php

use App\Models\User;
use Illuminate\Support\Carbon;

function user(): ?User
{
    if (auth()->check()) {
        return auth()->user();
    }

    return null;
}

function formatValue($value): string
{
    return number_format($value, 2, ',', '.');
}

function formatDateString($date): string
{
    $carbonDate = Carbon::parse($date);
    $carbonDate->locale('pt_BR');

    return $carbonDate->translatedFormat('d \d\e F \d\e Y');
}

function formatCpfCnpj($number): string
{
    // Remove caracteres não numéricos
    $number = preg_replace('/\D/', '', $number);

    // Verifica se é CPF (11 dígitos)
    if (strlen($number) === 11) {
        return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $number);
    }
    // Verifica se é CNPJ (14 dígitos)
    elseif (strlen($number) === 14) {
        return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $number);
    }
    // Caso contrário, retorna o número original
    else {
        return $number;
    }
}

function formatPhone($phone): string
{
    // Remover caracteres não numéricos
    $phone = preg_replace('/\D/', '', $phone);

    // Formatar o número de telefone
    return '('.substr($phone, 0, 2).') '.substr($phone, 2, 4).'-'.substr($phone, 6, 4);
}

function formatDate($date): string
{
    $carbonDate = Carbon::parse($date);
    $carbonDate->locale('pt_BR');

    return $carbonDate->translatedFormat('d/m/Y');
}

function formatExtension($valor = 0)
{
    $singular = ['centavo', 'real', 'mil', 'milhão', 'bilhão', 'trilhão', 'quatrilhão'];
    $plural = ['centavos', 'reais', 'mil', 'milhões', 'bilhões', 'trilhões', 'quatrilhões'];
    $c = ['', 'cem', 'duzentos', 'trezentos', 'quatrocentos', 'quinhentos', 'seiscentos', 'setecentos', 'oitocentos', 'novecentos'];
    $d = ['', 'dez', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'oitenta', 'noventa'];
    $d10 = ['dez', 'onze', 'doze', 'treze', 'quatorze', 'quinze', 'dezesseis', 'dezessete', 'dezoito', 'dezenove'];
    $u = ['', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove'];

    $z = 0;
    $valor = number_format($valor, 2, '.', '.');
    $inteiro = explode('.', $valor);
    $count = count($inteiro);
    $rt = '';

    for ($i = 0; $i < $count; $i++) {
        for ($ii = strlen($inteiro[$i]); $ii < 3; $ii++) {
            $inteiro[$i] = '0'.$inteiro[$i];
        }
    }

    $fim = count($inteiro) - ($inteiro[count($inteiro) - 1] > 0 ? 1 : 2);

    for ($i = 0; $i < count($inteiro); $i++) {
        $valor = $inteiro[$i];

        $rc = (($valor > 100) && ($valor < 200)) ? 'cento' : $c[$valor[0]];

        $rd = ($valor[1] < 2) ? '' : $d[$valor[1]];

        $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : '';

        $r = $rc.(($rc && ($rd || $ru)) ? ' e ' : '').$rd.(($rd && $ru) ? ' e ' : '').$ru;

        $t = count($inteiro) - 1 - $i;

        $r .= $r ? ' '.($valor > 1 ? $plural[$t] : $singular[$t]) : '';

        if ($valor == '000') {
            $z++;
        } elseif ($z > 0) {
            $z--;
        }

        if (($t == 1) && ($z > 0) && ($inteiro[0] > 0)) {
            $r .= (($z > 1) ? ' de ' : ' ').$plural[$t];
        }

        if ($r) {
            $rt = $rt.((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? (($i < $fim) ? ', ' : ' e ') : '').$r;
        }
    }

    return $rt ? $rt : 'zero';
}
