$.validator.addMethod("valueNotEquals", function(value, element, arg){
    return arg != element.value; 
}, "This field is required");


$(function(){
    // $('#province').click(function(){
    //   alert($('#city').val());
    // });
   var form = $(".signup-form");
    $("#signUpForm").validate({
        rules: {
            fname : "required", 
            lname : "required",
            phonenumber : "required",
            city : {valueNotEquals: "Select city"},
            province : {valueNotEquals: "Select province"},
            email: { email: true, required : true },
            rpassword : {minlength: 6},  
            repassword: { required: true, equalTo: "#rpassword" },
        },
        submitHandler: function(form) {
            $('#loginBtn').html('Creating..');
            $(this).style('opacity', '.9px');
       //   

            // $("#loadthis").addClass('loader-show');
            // $(".btnL").prop("disabled", false).addClass('disabledClass');
            // $('#btnLogin').val('Loading..');
            // var email = $("#email").val();
            // var password = $("#password").val();
            
            // var dataFields = [];
            // dataFields.push({"name":"email","value": email});
            // dataFields.push({"name":"password","value":password});
            // dataFields.push({"name":"action","value":"Login"});
            // $.ajax({
            //     type:"POST",
            //     url:"controller/AccountsController.php",
            //     data: dataFields,
            //     success: function(data) {
            //       if(jQuery.trim(data) == 'true1'){
            //         window.location.href = "investor-profile";
            //       }else if(jQuery.trim(data) == 'true2'){
            //         window.location.href = "entrepreneur-profile";
            //       }else if(jQuery.trim(data) == 'inactive'){
            //         notify('info-notify','Please check inbox and verify your account');
            //       }else if(jQuery.trim(data) == 'no account'){
            //         notify('error-notify','Please create your account');
            //       }else
            //         notify('info-notify',data);

            //       $("#loadthis").removeClass('loader-show');
            //       $('#btnLogin').val('Login');
            //       $(".btnL").prop("disabled", false).addClass('disabledClass');
            //     }
            //  });
            alert('info 1 success');
        }
    });
});