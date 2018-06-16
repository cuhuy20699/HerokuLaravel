var API = "https://api.mlab.com/api/1/databases/storephone/collections/user?apiKey=bwNYaefhPGW4uN-jmu-pBF-gzp7FiG4M";

$(document).ready(function () {
    getApi();
})
function getApi() {
    $.ajax({
        url: API
    }).done(function (data) {
        var output = '';
        $.each(data, function (key, data) {
                output += '<tr>';
                output += '<td></td>';
                output += '<td>'+data.fullname +'</td>';
                output += '<td>'+data.phone +'</td>';
                output += '<td>'+data.password +'</td>';
                output += '<td>'+data.email +'</td>';
                output += '<td>'+data.created_at +'</td>';
                output += '<td>'+data.updated_at +'</td>';
                output += '<td>' +
                    '<a href="#" class="fa fa-edit"> Edit</a> <p> </p> <a href="#" class="fa fa-trash"> Delete</a>'+'</td>';
                output += '</tr>';
        });
        // in vào List User
        $('#demo-get').html(output);

    });
}
