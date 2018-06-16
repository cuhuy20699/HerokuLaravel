var API = "https://api.mlab.com/api/1/databases/storephone/collections/user?apiKey=bwNYaefhPGW4uN-jmu-pBF-gzp7FiG4M";

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
        url: API
    }).done(function (data) {
        var output = '';
        $.each(data, function (key, data) {
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
                output += '<td>'+data.created_at +'</td>';
                output += '<td>'+data.updated_at +'</td>';
                output += '<td>' +
                    '<a href="#" class="fa fa-edit"> Edit</a> <p> </p> ' +
                    '<a href="#" id="deleteUser" data-id="'+data._id.$oid+'" class="fa fa-trash"> Delete</a>'+'' +
                    '</td>';
                output += '</tr>';
        });
        // in vào List User
        $('#demo-get').html(output);

    });
}
