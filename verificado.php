<script type="text/javascript">

$(document).ready(function () {
   let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $("#enviar").click(function (){
     //   $(".error").remove();
        
        if( $("#email").val() == "" || !emailreg.test($("#email").val()) ){
            swal ("¡Debe de Ingrese un Email Valido! " , "" , "warning");
            return false;
       
        }
    });
});
</script>