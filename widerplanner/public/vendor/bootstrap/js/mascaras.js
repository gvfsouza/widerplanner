// Mascaras
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}

function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}

function numeros(v) {
	v=v.replace(/\D/g,"")
	return v
	}

function cpf(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{3})(\d)/,"$1.$2")
    v=v.replace(/(\d{3})(\d)/,"$1.$2")
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return v
}

function rg(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{2})(\d)/,"$1.$2")
    v=v.replace(/(\d{3})(\d)/,"$1.$2")
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return v
}

function cnpj(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/^(\d{2})(\d)/,"$1.$2")
    v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
    v=v.replace(/\.(\d{3})(\d)/,".$1/$2")
    v=v.replace(/(\d{4})(\d)/,"$1-$2")
    return v
}

function cpf_cnpj(v){
    v=v.replace(/\D/g,"");
    if(v.length>11){
        v=v.replace(/^(\d{2})(\d)/,"$1.$2")
        v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
        v=v.replace(/\.(\d{3})(\d)/,".$1/$2")
        v=v.replace(/(\d{4})(\d)/,"$1-$2") 
    } else {
        v=v.replace(/(\d{3})(\d)/,"$1.$2")
        v=v.replace(/(\d{3})(\d)/,"$1.$2")
        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")  
    }
    
    return v
}

function codimovel(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{4})(\d)/,"$1.$2")
    v=v.replace(/(\d{4})(\d)/,"$1.$2")
    v=v.replace(/(\d{4})\.(\d{4})\.(\d{1})(\d{1})$/,"$1.$2.$3-$4")
    return v
}

function ccm(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{3})(\d)/,"$1.$2")
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return v
}

function cep(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{5})(\d)/,"$1-$2")
    return v
}

function data(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{2})(\d)/,"$1/$2")
    v=v.replace(/(\d{2})(\d)/,"$1/$2")
    return v
}

function telefone(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/^(\d\d)(\d)/g,"($1)$2")
    v=v.replace(/(\d{4})(\d)/,"$1-$2")
	return v
}

function celular_(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/^(\d\d)(\d)/g,"($1)$2")
    v=v.replace(/(\d{5})(\d)/,"$1-$2")
	return v
}

function sac(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{4})(\d{3})(\d{4})$/,"$1-$2-$3")
    return v
}

function site(v){
    v=v.replace(/^http:\/\/?/,"")
    dominio=v
    caminho=""
    if(v.indexOf("/")>-1)
        dominio=v.split("/")[0]
        caminho=v.replace(/[^\/]*/,"")
    dominio=dominio.replace(/[^\w\.\+-:@]/g,"")
    caminho=caminho.replace(/[^\w\d\+-@:\?&=%\(\)\.]/g,"")
    caminho=caminho.replace(/([\?&])=/,"$1")
    if(caminho!="")dominio=dominio.replace(/\.+$/,"")
    v="http://"+dominio+caminho
    return v
}

function hora(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{2})(\d)/,"$1:$2")
    return v
}

function chave(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{4})(\d)/,"$1.$2")
    v=v.replace(/(\d{4})(\d)/,"$1.$2")
    v=v.replace(/(\d{4})\.(\d{4})\.(\d{4})(\d{4})$/,"$1.$2.$3.$4")
    return v
}



// Mascara Moeda
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if(whichCode == 13 || whichCode == 8 || whichCode == 0) return true;
    key = String.fromCharCode(whichCode); // Valor para o c�digo da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inv�lida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}

// Telefone - Fixo e Celular
function mascaraTelefone( campo ) {

	function trata( valor,  isOnBlur ) {
		
		valor = valor.replace(/\D/g,"");             			
		valor = valor.replace(/^(\d{2})(\d)/g,"($1)$2"); 		
		
		if( isOnBlur ) {
			
			valor = valor.replace(/(\d)(\d{4})$/,"$1-$2");   
		} else {

			valor = valor.replace(/(\d)(\d{3})$/,"$1-$2"); 
		}
		return valor;
	}
	
	campo.onkeypress = function (evt) {
		 
		var code = (window.event)? window.event.keyCode : evt.which;	
		var valor = this.value
		
		if(code > 57 || (code < 48 && code != 8 ))  {
			return false;
		} else {
			this.value = trata(valor, false);
		}
	}
	
	campo.onblur = function() {
		
		var valor = this.value;
		if( valor.length < 13 ) {
			this.value = ""
		}else {		
			this.value = trata( this.value, true );
		}
	}
	
	campo.maxLength = 14;
}