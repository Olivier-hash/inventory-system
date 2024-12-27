$(document).ready(function(){
   $("#register_form").on("submit",function() {
     var status = false;
     var name = $("#username");
     var email = $("#email");
     var pass1 = $("#password1");
     var pass2 = $("#password2");
     var type = $("#usertype");
     
     // email example iuiu@gmail.com   OR rizwan@gmaiil.com
     var e_patt = new RegExp(/^[a-z0-9_-z ]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
     if (name.val() =="" || name.val().length < 6 ){
         name.addClass("border-danger");
         $("#u_error").html("<span class='text-danger'>Please Enter Name and name should be 6 character</span>");
         status = false;
     }else{
         name.removeClass("border-danger");
         $("#u_error").html("");
         status = true;
     }
     if (!e_patt.test(email.val())){
        email.addClass("border-danger");
        $("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address</span>");
        status = false;
    }else{
        email.removeClass("border-danger");
        $("#e_error").html("");
        status = true;
    }
    if (pass1.val()== "" || pass1.val().length < 9){
        pass1.addClass("border-danger");
        $("#p1_error").html("<span class='text-danger'>Please Enter more than 9 digit password");
        status = false;
    }else{
        email.removeClass("border-danger");
        $("#p1_error").html("");
        status = true;
    }
    if (pass2.val()== "" || pass2.val().length < 9){
        pass2.addClass("border-danger");
        $("#p2_error").html("<span class='text-danger'>Please Enter more than 9 digit password");
        status = false;
    }else{
        pass2.removeClass("border-danger");
        $("#p2_error").html("");
        status = true;
    }
    if (type.val()== ""){
        type.addClass("border-danger");
        $("#t_error").html("<span class='text-danger'>Please Enter more than 9 digit password");
        status = false;
    }else{
        pass2.removeClass("border-danger");
        $("#t_error").html("");
        status = true;
    }
   }) 
})