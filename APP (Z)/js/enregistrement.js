$(document).ready(init);


function init(){

    // SE Créer un compte

    $('.submitLoginForm').submit(function(){

        var email = $('#email').val();
        var usr = $('#username').val();
        var psw = $('#password').val();
        var pswC = $('#confirm-password').val();

        $.post('Creation_T.php',{email:email,usr:usr,psw:psw,pswC:pswC},function(donnees){
            $('.infoConnexion').html(donnees).slideDown();
            $('.infoConnexion').css('color','white');
        });
    return false;
    });

}