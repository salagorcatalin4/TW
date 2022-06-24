$(function(){
    // hello world
    var $registerForm = $("#formValidation")
    
    $.validator.addMethod("nospace", function(value, element){
        return value == '' || value.trim().length != 0
    }, "Spatii goale nu sunt permise")

    $.validator.addMethod("passcheck", function(value) {
        return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value)
            && /[a-z]/.test(value)
            && /\d/.test(value)
     });
     

    if($registerForm.length){
        $registerForm.validate({
            rules:{
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    nospace: true,
                    minlength:8,
                    passcheck: true
                },
                confirmpassword: {
                    required: true,
                    equalTo: password
                }
            },
            messages:{
                email: {
                    required: "Introduceti emailul!",
                    email: "Emailul este greșit!"
                },

                password: {
                    required: "Introduceti parola!",
                    minlength: "Parola trebuie să conțină minimum 8 caractere!",
                    passcheck: "Parola trebuie să conțină numere și litere!"
                },
                confirmpassword: {
                    required: "Introduceti parola repetat!",
                    equalTo: "Ați introdus parola greșită!"
                }
            },
            submitHandler: function(form, event) {
                event.preventDefault();
                var email =$("#email").val();
                var password =$("#password").val();
                var confirmpassword =$("#confirmpassword").val();
                var response = document.getElementById("msg");
                
                $.ajax({
                    url:'http://localhost/php/submit_register.php',
                    type: 'POST',
                    cache: false,
                    data: {'email': email, 'password': password, 'confirmpassword': confirmpassword},
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                        if(!data){
                            response.style.color = "red";
                            response.innerHTML = "Error!";
                        }
                        else{
                            if(data.status == 1) {
                            response.style.color = "green";
                            response.innerHTML = data.message;
                            $("#formValidation").trigger("reset");
                        }else{
                            response.style.color = "red";
                            response.innerHTML = data.message;
                        }
                        }
                    }
         
                })
              }
        })
    }

        
})

$(function(){
    var $registerForm = $("#formReset")

    if($registerForm.length){
        $registerForm.validate({
            rules:{
                email: {
                    required: true,
                    email: true
                }
            },
            messages:{
                email: {
                    required: "Introduceti emailul!",
                    email: "Emailul este greșit!"
                },
            }
        })
    }
})




