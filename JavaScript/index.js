
    $(document).ready(function(){
        $(".chat_head").click(function(){
            $(".chat_body").hide(16000);
        });
    });

    $(".chat_body").click(function(){
        $(".chat_body").stop();
    });

    $('.chat_head').click(function(){
        $('.chat_body').slideToggle('fast');
    });
    $('.msg_head').click(function(){
        $('.msg_wrap').slideToggle('fast');
    });


    $('.chet_body').click(function(){
        $('.id').show('fast');
    });


    $('.msg_box').ready(function(){
        $('.msg_box').hide('fast');
    });


    $('.msg_box').ready(function(){
        $('.msg_wrap').hide('fast');
    });


    $('.close').click(function(){
        $('.msg_box').hide();
    });

    $('.user').click(function(){
        $('.msg_box').hide('fast');
        $('.msg_wrap').hide('fast');
        var id = $(this).attr('id');
        $('#msg_wrap'+id).show();
        $('#msg_box'+id).show();
    });

    $('textarea').keypress(
        function(e){
            if (e.keyCode == 13) {
                e.preventDefault();
                var msg = $(this).val();
                $(this).val('');
                if(msg!=''){
                    var txtAreaId = $(this).attr('id');
                    $('<div class="msg_b">'+msg+'</div>').insertBefore('.msg_push'+txtAreaId);

                    $.ajax({
                        method: "POST",
                        url: "chat/SendMessage.php",
                        data: { msg: msg, recieverId: txtAreaId }
                    })
                    .done(function( msg ) {
                        alert( "Data Saved: " + msg );
                    });
                }

                $('.msg_body').scrollTop($('.msg_body')[0].scrollHeight);
            }
        });

