
$(document).ready(function () {

    $('#sendMail').on('click', function (event) {

            var name = $("#name").val().trim();
            var email = $("#email").val().trim();
            var subject = $("#subject").val().trim();
            var textmessage = $("#textmessage").val().trim();

            if (name == "") {
                $(".error-message").text("Введите имя");
                return false;
            } else if (email == "") {
                $(".error-message").text("Введите почту");
                return false;
            }
            if (subject == "") {
                $(".error-message").text("Введите тему");
                return false;
            }
            if (textmessage.length < 5) {
                $(".error-message").text("Введите сообщение не менее 5 символов");
                return false;
            }
        $(".error-message").text(" ");
        $("#saccess").text("Ваше письмо отправлено, спасибо!");

        $.ajax({
            type: "GET",
            url: "/ajax",
            data: {'name': name, 'email': email, 'subject': subject, 'message': textmessage},
            dataType: 'html',
        }).done(function (data) {
                    if(!data){
                        alert("error letter not send");
                    }
                    else $("#mailform").trigger("reset");
                }).fail(function () {
                    alert("error");
                }).always(function () {
                    alert("Письмо");
                });
            });

        // beforeSend: function () {
        //     $('#sendMail').prop("disable", true);
        // },
        // success: function (data) {
        //     alert(data);
        //     $('#sendMail').prop("disable", false);
        // }

 //   });
});





