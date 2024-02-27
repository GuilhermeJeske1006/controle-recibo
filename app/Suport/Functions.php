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
