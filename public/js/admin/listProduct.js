$(document).ready(function () {
    getAPIdemo();
});



function getAPIdemo() {
    var url = 'https://quiet-cliffs-41062.herokuapp.com/api/products';
    $.ajax({
        url: url,
        method: 'get',
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (data) {
        $.each(data, function (key, data) {
            console.log(data);
        });
    });
}