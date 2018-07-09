var API = "https://api.mlab.com/api/1/databases/storephone/collections/user?apiKey=bwNYaefhPGW4uN-jmu-pBF-gzp7FiG4M";
var API2 = "http://heroku-laravel-1900.herokuapp.com/api/user";

$(document).ready(function () {
    getApi();
    $('body').on('click', '#deleteUser', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var API2 = 'https://api.mlab.com/api/1/databases/storephone/collections/user/'+ id +'?apiKey=bwNYaefhPGW4uN-jmu-pBF-gzp7FiG4M';

        $.ajax({
            url:API2,
            type : "DELETE",
            async: true,
            timeout: 30000,
            success: function (data) {
                window.location.href = "/listUserAdmin";
            },
            error: function (xhr, status, err) {
                console.log(err + 'Lỗi');
            }
        });
    });
});

function getApi() {
    $.ajax({
        method: 'get',
        url: 'http://127.0.0.1:8000/api/user',
        //url: 'http://heroku-laravel-1900.herokuapp.com/api/user',
        // url: 'http://quiet-cliffs-41062.herokuapp.com/api/user',
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (data) {
        var output = '';
        $.each(data, function (key, data) {
            console.log(data);
                output += '<tr>';
                output += '<td></td>';
                output += '<th class="col-md-2">'+
                    '<img src="'+data.avatar+'" style=" with:60px; height: 60px" class="img-thumbnail">'+
                    '</th>';
                output += '<td>'+data.fullname +'</td>';
                output += '<td>'+data.phone +'</td>';
                output += '<td>'+data.password +'</td>';
                output += '<td>'+data.email +'</td>';
                output += '<td>'+data.gender +'</td>';
                // output += '<td>'+data.created_at +'</td>';
                // output += '<td>'+data.updated_at +'</td>';
                 //output += '<td>' +
                //     '<a href="/formUserAdmin" id="putUser" data-id="'+data._id.$oid+'" data-updated_at="'+data.updated_at+'" data-avatar="'+data.avatar+'" data-fullname="'+data.fullname+'" data-phone="'+data.phone+'" data.password="'+data.password+'" data-email="'+data.email+'" data-gender="'+data.gender+'" class="fa fa-edit"> Edit</a> <p> </p> ' +
                //     '<a href="#" id="deleteUser" data-id="'+data._id.$oid+'" class="fa fa-trash"> Delete</a>'+'' +
                //     '</td>';
                output += '</tr>';
        });
        // in vào List User
        $('#demo-get').html(output);
    });
}

function getAPI2(){
    var ajaxhttp = new XMLHttpRequest();
    ajaxhttp.open("GET", API2, true);
    ajaxhttp.setRequestHeader("content-type", "application/json");
    ajaxhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200){
            var text = JSON.parse(ajaxhttp.responseText);
            console.log("ok");
        }else
        {
            console.log('err');
        }
    };
    ajaxhttp.send();
}
