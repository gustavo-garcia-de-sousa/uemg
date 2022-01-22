let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
}

document.querySelectorAll('.sobre .video-container .controls .control-btn').forEach(btn => {
    btn.onclick = () => {
        let src = btn.getAttribute('data-src');
        document.querySelector('.sobre .video-container .video').src = src;
    }
})

/*Função para Inteiros*/
function somenteNumeros(e) {
    var charCode = e.charCode ? e.charCode : e.keyCode;
    if (charCode != 8 && charCode != 9) {/* charCode 8 = backspace e charCode 9 = tab*/
        if (charCode < 48 || charCode > 57) {/*charCode 48 equivale a 0 e charCode 57 equivale a 9*/
            return false;
        }
    }
}

/*Função para mostrar senha*/
function show() {
    var senha = document.getElementById("password");
    if (senha.type === "password") {
        senha.type = "text";
    } else {
        senha.type = "password";
    }
}
/*Função para Senhas*/
var password = document.getElementById("password"),
    confirm_password = document.getElementById("confirm_password");

function validate_Password() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("As senhas devem ser iguais");
    } else {
        confirm_password.setCustomValidity('');
    }
}
password.onchange = validate_Password;
confirm_password.onkeyup = validate_Password;

/*Função para CPF*/
function is_cpf(c) {

    if ((c = c.replace(/[^\d]/g, "")).length != 11)
        return false

    if (c == "00000000000")
        return false;

    var r;
    var s = 0;

    for (i = 1; i <= 9; i++)
        s = s + parseInt(c[i - 1]) * (11 - i);

    r = (s * 10) % 11;

    if ((r == 10) || (r == 11))
        r = 0;

    if (r != parseInt(c[9]))
        return false;

    s = 0;

    for (i = 1; i <= 10; i++)
        s = s + parseInt(c[i - 1]) * (12 - i);

    r = (s * 10) % 11;

    if ((r == 10) || (r == 11))
        r = 0;

    if (r != parseInt(c[10]))
        return false;

    return true;
}


function fMasc(objeto, mascara) {
    obj = objeto
    masc = mascara
    setTimeout("fMascEx()", 1)
}

function fMascEx() {
    obj.value = masc(obj.value)
}

function mCPF(cpf) {
    cpf = cpf.replace(/\D/g, "")
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
    return cpf
}

cpfCheck = function (el) {
    document.getElementById('cpfResponse').innerHTML = is_cpf(el.value) ? '' : '<span style="color:red">CPF inválido</span>';
    if (el.value == '') document.getElementById('cpfResponse').innerHTML = '';
}

/*API via CEP https://viacep.com.br/exemplo/javascript/*/

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value = (conteudo.logradouro);
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
    }
}

function pesquisacep(valor) {
    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');
    //Verifica se campo cep possui valor informado.
    if (cep != "") {
        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;
        //Valida o formato do CEP.
        if (validacep.test(cep)) {
            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value = "...";
            document.getElementById('bairro').value = "...";
            document.getElementById('cidade').value = "...";
            //Cria um elemento javascript.
            var script = document.createElement('script');
            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';
            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};

/*!
*	Gerador e Validador de CPF v1.0.0
*	https://github.com/tiagoporto/gerador-validador-cpf
*	Copyright (c) 2014-2015 Tiago Porto (http://www.tiagoporto.com)
*	Released under the MIT license
*/
function cpf(cpf) {
    cpf = cpf.replace(/\D/g, '');
    if (cpf.toString().length != 11 || /^(\d)\1{10}$/.test(cpf)) return false;
    var result = true;
    [9, 10].forEach(function (j) {
        var soma = 0, r;
        cpf.split(/(?=)/).splice(0, j).forEach(function (e, i) {
            soma += parseInt(e) * ((j + 2) - (i + 1));
        });
        r = soma % 11;
        r = (r < 2) ? 0 : 11 - r;
        if (r != cpf.substring(j, j + 1)) result = false;
    });
    return result;
}
