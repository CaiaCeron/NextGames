$(document).ready(function(){
    $('#cep').blur(function() {
        $.ajax({
           url: 'http://cep.republicavirtual.com.br/'+
                'web_cep.php?cep='+$('#cep').val()+
                '&formato=json',
        dataType: 'json',
        
        success: function(data) {
            $('#endereco').val(data.tipo_logradouro
                    +' '+data.logradouro);
            $('#cidade').val(data.cidade);
            $('#bairro').val(data.bairro);
            $('#uf').val(data.uf);
            $('#num').focus();
        }                        
        });        
    });    
});

$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});