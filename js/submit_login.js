$(function(){
    var $registerForm = $("#formValidation")

    if($registerForm.length){
        $registerForm.validate({
            rules:{
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                }
            },
            messages:{
                email: {
                    required: "Introduceti emailul!",
                    email: "Emailul este greșit!"
                },

                password: {
                    required: "Introduceti parola!",
                }
            },
            submitHandler: function(form, event) {
                event.preventDefault();
                var email =$("#email").val();
                var password =$("#password").val();
                var response = document.getElementById("msg");    
                
                $.ajax({
                    url:'http://localhost/php/submit_login.php',
                    type: 'POST',
                    cache: false,
                    data: {'email': email, 'password':password},
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
