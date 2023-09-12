$(document).ready(function(){
$('#check-res').click(function(){
    $.ajax({
        type: "POST",
        url: "result.php",
        data: {
            mark: $('#mark').val(),
        },
        success:function(data){
            $('#grade').html(data);
        }
    });
});

$('#userName').click(function(){
    $.ajax({
        type: "POST",
        url: "comment.php",
        data:{
            ckeditor: $('#ckeditor').val(),
        },
        success:function(data){
            $('#comment-show').html(data);
        }
    });
});


});

document.addEventListener('DOMContentLoaded', function() {
    const congratulationsElement = document.querySelector('.congratulations');

    setTimeout(() => {
        congratulationsElement.style.opacity = '1';
        congratulationsElement.style.transform = 'translateY(0)';
    }, 500);
});
