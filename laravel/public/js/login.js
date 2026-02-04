function registaUser(){

    let dados = new FormData();
    dados.append("op", 1);
    dados.append("username", $('#username').val());
    dados.append("password", $('#password').val());
    dados.append("tpUser", $('#tpUser').val());

    $.ajax({
    url: "/register",
    method: "POST",
    data: dados,
    dataType: "html",
    cache: false,
    contentType: false,
    processData: false
    })
    
    .done(function( msg ) {

        let obj = JSON.parse(msg);
        if(obj.flag){
            alerta("Utilizador",obj.msg,"success");
        }else{
            alerta("Utilizador",obj.msg,"error");    
        }
        
    })
    
    .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
    });
}



function alerta(titulo,msg,icon){
    Swal.fire({
        position: 'center',
        icon: icon,
        title: titulo,
        text: msg,
        showConfirmButton: true,

      })
}
