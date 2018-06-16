var API = 'https://api.mlab.com/api/1/databases/storephone/collections/user?apiKey=bwNYaefhPGW4uN-jmu-pBF-gzp7FiG4M';

$(document).ready(function () {

    $('#add-user').on('submit',function (e) {
        e.preventDefault();
        var fullname = $('#fullname').val();
        var phone = $('#phone').val();
        var password = $('#password').val();
        var email = $('#email').val();
        var role = 2; // Thành viên là 2, Admin là 1
        var gender = $('#gender').val();
        var random = Math.floor((Math.random() * 1000000) + 1);
        var date =new Date();
        var img = $('#avatar').val();
        $.ajax({
            url:API,
            data: JSON.stringify({
                "fullname": fullname,
                "phone" : phone,
                "password":password,
                "email": email,
                "role": role,
                "gender": gender,
                "salt": random,
                "status":1,
                "avatar": img,
                "created_at" : date.toLocaleDateString(),
                "updated_at":date.toLocaleDateString(),
            }),
            type : "POST",
            contentType : "application/json;charset=utf-8",
            success: function (data) {
                window.location.href ="/listUserAdmin"
            },
            error: function (xhr, status, err) {
               console.log(err);
            }
        });

    })
});