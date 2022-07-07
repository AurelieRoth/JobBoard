$(document).ready(function(){
    $("button").click(function(){

    $('body').append('<div></div>');
    $('div:first').html($('#listItem').val())

    });
});
