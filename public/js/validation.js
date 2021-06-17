
// const form= document.getElementById('form')
// form.addEventListener('submit' , (e) =>  {
//     e.preventDefault();

//     const email= document.getElementById('email')
//     const password= document.getElementById('password')
//     const emailError = document.getElementById('email-error')
//     const passwordError = document.getElementById('password-error')

//     if(email.value == ''|| email.value == null){
//         emailError.textContent = "Email field is empty!";
//         emailError.classList.add('alert','alert-danger')
//     }

//     if(password.value.length <= 4){
//         passwordError.textContent = "Password have to be more than 4 characters!";
//         passwordError.classList.add('alert','alert-danger')
//     }

// })

$(function() {
   
    $(".email").on("blur", function() {
        if ($(this).val().length < 1) {
            $(this).css("border", "1px solid #F00");
            // $(this).parent().find(".custom-alert").fadeIn(200);
            $$(this).parent().find(".custom-alert").fadeIn(200);
        } else {
            $(this).css("border", "1px solid #080");
            $(this).parent().find(".custom-alert").fadeOut(200);
        }
    });

    $(".password").on("blur", function() {
        if ($(this).val().length < 5) {
            $(this).css("border", "1px solid #F00");
            $(this).parent().find(".custom-alert").fadeIn(200);
        } else {
            $(this).css("border", "1px solid #080");
            $(this).parent().find(".custom-alert").fadeOut(200);
        }
    });


});