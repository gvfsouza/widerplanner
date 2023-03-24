function _calculateAge(birthday) { // birthday is a date
  var ageDifMs = Date.now() - birthday.getTime();
  var ageDate = new Date(ageDifMs); // miliseconds from epoch
  return Math.abs(ageDate.getUTCFullYear() - 1970);
}

function getAge(dateString) {
  var today = new Date();
  var birthDate = new Date(dateString);
  var age = today.getFullYear() - birthDate.getFullYear();
  var m = today.getMonth() - birthDate.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
    age--;
  }
  return age;
}

function verificaIdadeIdoso(dateString) {
  var today = new Date('2021-03-27');
  var birthDate = new Date(dateString);
  var age = today.getFullYear() - birthDate.getFullYear();
  var m = today.getMonth() - birthDate.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
    age--;
  }
  return age;
}

function reverteData(data) {
  var dia = data.split("/")[0];
  var mes = data.split("/")[1];
  var ano = data.split("/")[2];

  return ano + '-' + ("0" + mes).slice(-2) + '-' + ("0" + dia).slice(-2);
  // Utilizo o .slice(-2) para garantir o formato com 2 digitos.
}

function formataData(data) {
  var ano = data.split("-")[0];
  var mes = data.split("-")[1];
  var dia = data.split("-")[2];

  return ("0" + dia).slice(-2) + '/' + ("0" + mes).slice(-2) + '/' + ano;
  // Utilizo o .slice(-2) para garantir o formato com 2 digitos.
}

function alerta(texto, titulo, tipo = "") {
  if (tipo == "") {
    var text = 'text-danger';
  } else if (tipo == 'erro') {
    var text = 'text-danger';
  } else if (tipo == 'sucesso') {
    var text = 'text-success';
  } else if (tipo == 'aviso') {
    var text = 'text-warning';
  } else {
    var text = 'text-dark';
  }
  var html = '<div class="modal fade" id="modalGeralAlerta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">\
  <div class="modal-dialog" role="document">\
    <div class="modal-content">\
      <div class="modal-header">\
        <h5 class="modal-title '+ text + '"><i class="fas fa-exclamation-triangle"></i> ' + titulo + '</h5>\
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">\
          <span aria-hidden="true">&times;</span>\
        </button>\
      </div>\
      <div class="modal-body" style="word-break: break-all;">\
        <p>'+ texto + '</p>\
      </div>\
      <div class="modal-footer">\
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>\
      </div>\
    </div>\
  </div>\
</div>';
  $("body").append(html);
  $('#modalGeralAlerta').modal('show');
  $('#modalGeralAlerta').on('hidden.bs.modal', function () {
    $('#modalGeralAlerta').remove();
  });
}

function ValidaData(data) {
  reg = /[^\d\/\.]/gi;                  // Mascara = dd/mm/aaaa | dd.mm.aaaa
  var valida = data.replace(reg, '');    // aplica mascara e valida s?numeros
  if (valida && valida.length == 10) {  // ?v?ida, ent? ;)
    var ano = data.substr(6),
      mes = data.substr(3, 2),
      dia = data.substr(0, 2),
      M30 = ['04', '06', '09', '11'],
      v_mes = /(0[1-9])|(1[0-2])/.test(mes),
      v_ano = /(19[1-9]\d)|(20\d\d)|2100/.test(ano),
      rexpr = new RegExp(mes),
      fev29 = ano % 4 ? 28 : 29;

    if (v_mes && v_ano) {
      if (mes == '02') return (dia >= 1 && dia <= fev29);
      else if (rexpr.test(M30)) return /((0[1-9])|([1-2]\d)|30)/.test(dia);
      else return /((0[1-9])|([1-2]\d)|3[0-1])/.test(dia);
    }
  }
  return false                           // se inv?ida :(
}

function abrirModalInterno(nomeModal) {
  $('body').append($('#' + nomeModal));
  $('#' + nomeModal).addClass('modal-provisorio');
  $('#' + nomeModal).modal('show');
  $('#' + nomeModal).on('hidden.bs.modal', function () {
    $('#' + nomeModal).hide();
  });
}

function validarCPF(cpf) {
  var numeros, digitos, soma, i, resultado, digitos_iguais;
  digitos_iguais = 1;
  if (cpf.length < 11)
    return false;
  for (i = 0; i < cpf.length - 1; i++)
    if (cpf.charAt(i) != cpf.charAt(i + 1)) {
      digitos_iguais = 0;
      break;
    }
  if (!digitos_iguais) {
    numeros = cpf.substring(0, 9);
    digitos = cpf.substring(9);
    soma = 0;
    for (i = 10; i > 1; i--)
      soma += numeros.charAt(10 - i) * i;
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
      return false;
    numeros = cpf.substring(0, 10);
    soma = 0;
    for (i = 11; i > 1; i--)
      soma += numeros.charAt(11 - i) * i;
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
      return false;
    return true;
  }
  else
    return false;
}

function validarCNPJ(cnpj) {

  cnpj = cnpj.replace(/[^\d]+/g, '');

  if (cnpj == '') return false;

  if (cnpj.length != 14)
    return false;

  // Elimina CNPJs invalidos conhecidos
  if (cnpj == "00000000000000" ||
    cnpj == "11111111111111" ||
    cnpj == "22222222222222" ||
    cnpj == "33333333333333" ||
    cnpj == "44444444444444" ||
    cnpj == "55555555555555" ||
    cnpj == "66666666666666" ||
    cnpj == "77777777777777" ||
    cnpj == "88888888888888" ||
    cnpj == "99999999999999")
    return false;

  // Valida DVs
  tamanho = cnpj.length - 2
  numeros = cnpj.substring(0, tamanho);
  digitos = cnpj.substring(tamanho);
  soma = 0;
  pos = tamanho - 7;
  for (i = tamanho; i >= 1; i--) {
    soma += numeros.charAt(tamanho - i) * pos--;
    if (pos < 2)
      pos = 9;
  }
  resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
  if (resultado != digitos.charAt(0))
    return false;

  tamanho = tamanho + 1;
  numeros = cnpj.substring(0, tamanho);
  soma = 0;
  pos = tamanho - 7;
  for (i = tamanho; i >= 1; i--) {
    soma += numeros.charAt(tamanho - i) * pos--;
    if (pos < 2)
      pos = 9;
  }
  resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
  if (resultado != digitos.charAt(1))
    return false;

  return true;

}

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let user = getCookie("username");
  if (user != "") {
    alert("Welcome again " + user);
  } else {
    user = prompt("Please enter your name:", "");
    if (user != "" && user != null) {
      setCookie("username", user, 365);
    }
  }
}