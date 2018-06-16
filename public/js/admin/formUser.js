var API = 'https://api.mlab.com/api/1/databases/storephone/collections/user?apiKey=bwNYaefhPGW4uN-jmu-pBF-gzp7FiG4M';

$(document).ready(function () {
    $('#add-user').on('submit',function (e) {
        e.preventDefault();
        var fullname = $('#fullname').val();
        var phone = $('#phone').val();
        var password = $('#password').val();
        var email = $('#email').val();
        var random = Math.floor((Math.random() * 1000000) + 1);
        var date =new Date();
        $.ajax({
            url:API,
            data: JSON.stringify({
                "fullname": fullname,
                "phone" : phone,
                "password":password,
                "email": email,
                "salt": random,
                "status":1,
                "created-at" : date.toLocaleDateString(),
                "updated-at":date.toLocaleDateString(),
            }),
            type : "POST",
            contentType : "application/json",
            success: function (data) {
                window.location.href ="/formUserAdmin"
            },
            error: function (xhr, status, err) {
               console.log(err);
            }
        });

    })
});