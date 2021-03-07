$('document').ready(function(){
        $('.php-phone-form').on('submit',function(e){
            e.preventDefault(); //prevent default form submition
            var FormData = $('.php-phone-form').serialize();


         var inptext = document.forms["emailNumber"]["number_phone"].value;
            if (inptext == "" || inptext == null) {
              alert("Debe escribir un número telefónico de al menos 10 digitos");
               return false;
            } else {
              alert("Debe escribir un número telefónico de al menos 10 digitos");
                $.ajax({
                    type : 'post',
                    url : 'forms/contact_phone.php',
                    data : FormData,
                    dataTYpe : 'json',
                    encode : true,
                    beforeSend : function(){
                        $('$send-mail').html('<span class="glyphicon glyphicon-repeat fast-right-spinner"></span> Sending');
                    },
                    success : function(response){
                        response = JSON.parse(response);
                        if(response== "ok"){
                            $('output_message').text('Enviado');
                        } else {
                            $('output_message').text('Error al enviar');
                        }
                    }
                    });
            }
        });
    });