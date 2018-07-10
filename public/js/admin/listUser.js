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
        //url: 'http://127.0.0.1:8000/api/user',
        //url: 'http://heroku-laravel-1900.herokuapp.com/api/user',
        //url: 'http://quiet-cliffs-41062.herokuapp.com/api/user',
        url: 'https://quiet-cliffs-41062.herokuapp.com/api/products',
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (data) {
        var output = '';
        $.each(data, function (key, data) {
            console.log(data);
                // output += '<tr>';
                // output += '<td></td>';
                // output += '<th class="col-md-2">'+
                //         '<div class="card" style="background-image: url('+data.avatar+'); background-size: cover; width: 60px; height: 60px;">'+
                //         '</div>' + '</th>' ;
                // output += '<td>'+data.fullname +'</td>';
                // output += '<td>'+data.phone +'</td>';
                // output += '<td>'+data.password +'</td>';
                // output += '<td>'+data.email +'</td>';
                // output += '<td>'+data.gender +'</td>';
                // output += '</tr>';
        });
        // in vào List User
        $('#demo-get').html(output);
    });
}

function getAPI2(){
    var ajaxhttp = new XMLHttpRequest();
    ajaxhttp.open("GET", API, true);
    ajaxhttp.setRequestHeader("content-type", "application/json");
    ajaxhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200){
            var text = JSON.parse(ajaxhttp.responseText);
            console.log(text);
        }else
        {
            console.log('err');
        }
    };
    ajaxhttp.send();
}
