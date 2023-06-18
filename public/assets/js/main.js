const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');
});



    $("#limparTextarea").click(function(){
        $("#textareaInteresses").val('');
        $("#collapseInterests").removeClass( "show" );
    });

    $("#cleanFormEducation").click(function(){
        $("[data-name='cleanAddEducation']").val('');
        $("#collapseAddEducation").removeClass( "show" );
    });

    $("#cleanFormExperience").click(function(){
        $("[data-name='cleanAddExperience']").val('');
        $("#collapseAddExperience").removeClass( "show" );
    });

    $("#cleanFormAddProfile").click(function(){
        $("[data-name='cleanAddProfile']").val('');
        $("#collapseAddProfile").removeClass( "show" );
    });

    $("#cleanFormAddUser").click(function(){
        $("[data-name='cleanAddProject']").val('');
        $("#collapseAddProject").removeClass( "show" );
    });
    $("#cleanFormCresteUserAdmin").click(function(){
        $("[data-name='cresteUserAdmin']").val('');
    });
    $("#cleanFormUpdatePasswordAdmin").click(function(){
        $("[data-name='updatePasswordAdmin']").val('');
    });

    //button-top
    jQuery(document).ready(function() {
        // Exibe ou oculta o botão
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 200) {
                jQuery('.button-top').fadeIn(200);
            } else {
                jQuery('.button-top').fadeOut(200);
            }
        });

        // Faz animação para subir
        jQuery('.button-top').click(function(event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, 300);
        })
    });




    //Enviando mensagem via ajax
    $(function(){
        $('form[name="send_message"]').submit(function (event){
            event.preventDefault();

            $.ajax({
                url: "/message",
                type: "post",
                data: $(this).serialize(),
                dataType: 'json',

                beforeSend: function () {
                    $("#loading").html('<img src="../assets/img/loading.gif" alt="" class="mt-5">');

                },

                success: function(response){
                    $('#success_message').modal('show');
                    $("[data-name='input-messager']").val('');
                },

                error: function(xhr){
                    $('#error_message').modal('show');

                },

                complete: function(){
                    //retirando o loading
                    $("#loading").empty();
                }

            })
        })
    })
