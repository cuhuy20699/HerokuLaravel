var API = 'https://api.mlab.com/api/1/databases/storephone/collections/user?apiKey=bwNYaefhPGW4uN-jmu-pBF-gzp7FiG4M';

var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/aptech-fpt/upload';
var CLOUDINARY_UPLOAD_PRESET = 'DemoImg';
var imgPreview = '';
var fileUpload = document.getElementById('avatar');

$(document).ready(function () {
    fileUpload.addEventListener('change', function (event) {
        var file = event.target.files[0];
        var formData = new FormData();
        formData.append('file',file);
        formData.append('upload_preset',CLOUDINARY_UPLOAD_PRESET);
        $.ajax({
            url: CLOUDINARY_URL,
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
                imgPreview= res.secure_url;
            },
            error: function (res, message) {
                console.log(res + message);
            }
        });
    });

    $('#add-user').on('submit',function (e) {
        e.preventDefault();
        var fullname = $('#fullname').val();
        var phone = $('#phone').val();
        var password = $('#password').val();
        var email = $('#email').val();
        var role = 2; // Thành viên là 2, Admin là 1
        var gender = $('[name="gender"]:radio:checked').val();
        var Gender = gender;
        var random = Math.floor((Math.random() * 1000000) + 1);
        var date =new Date();
        $.ajax({
            url:API,
            data: JSON.stringify({
                "fullname": fullname,
                "phone" : phone,
                "password":password,
                "email": email,
                "role": role,
                "gender": Gender,
                "salt": random,
                "status":1,
                "avatar": imgPreview,
                "created_at" : date.toLocaleDateString(),
                "updated_at":date.toLocaleDateString(),
            }),
            type : "POST",
            contentType : "application/json;charset=utf-8",
            success: function (data) {
                window.location.href = "/listUserAdmin";
            },
            error: function (xhr, status, err) {
               console.log(err + 'Lỗi');
            }
        });

    });
});