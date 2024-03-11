import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});



       // Função para formatar CPF ou CNPJ
       function formatarCpf(cpf) {
        console.log(cpf, 'cpf')
        // Remove caracteres indesejados
        cpf = cpf.replace(/\D/g, '');
        
        if (cpf.length === 11) {
            // Formatar CPF (###.###.###-##)
            cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
        } else if (cpf.length === 14) {
            // Formatar CNPJ (##.###.###/####-##)
            cpf = cpf.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/, "$1.$2.$3/$4-$5");
        }
    
        return cpf;
    }
    
    function formatarValor(valor) {
        // Remove caracteres não numéricos
        valor = valor.replace(/[^\d]/g, '');
    
        // Formatar como valor monetário
        valor = (parseFloat(valor) / 100).toFixed(2).replace('.', ',');
    
        return valor;
    }
    
    function formatarTelefone(telefone) {
        // Remove todos os caracteres não numéricos
        telefone = telefone.replace(/\D/g, '');
    
        // Verifica o tamanho do número de telefone e aplica a formatação apropriada
        if (telefone.length === 11) {
            // Formato para números de celular (##) #####-####
            telefone = telefone.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
        } else if (telefone.length === 10) {
            // Formato para números de telefone fixo (##) ####-####
            telefone = telefone.replace(/^(\d{2})(\d{4})(\d{4})$/, '($1) $2-$3');
        } else {
            // Número de telefone inválido, retorna sem formatação
            return telefone;
        }
    
        return telefone;
    }
    
    
    
    document.addEventListener('DOMContentLoaded', function() {
        var camposCpf = document.querySelectorAll('[name="cpf"]');
    
        // Iterar sobre todos os campos de CPF
        camposCpf.forEach(function(campo) {
            // Adicionar evento de escuta ao campo de entrada
            campo.addEventListener('input', function(event) {
                var valor = campo.value;
                var novoValor = formatarCpf(valor);
    
                // Atualizar valor do campo
                campo.value = novoValor;
            });
        });
    
        var camposValor = document.querySelectorAll('[name="valor"]');
    
    camposValor.forEach(function(campo) {
        campo.addEventListener('input', function(event) {
            var valor = campo.value;
            var novoValor = formatarValor(valor);
    
            campo.value = novoValor;
        });
    });
    
    var campoPhone = document.querySelectorAll('[name="phone"]');
    
        // Iterar sobre todos os campos de CPF
        campoPhone.forEach(function(campo) {
            // Adicionar evento de escuta ao campo de entrada
            campo.addEventListener('input', function(event) {
                var valor = campo.value;
                var novoValor = formatarTelefone(valor);
    
                // Atualizar valor do campo
                campo.value = novoValor;
            });
        });
    
    });