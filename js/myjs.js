$(document).ready(function(){

    // form submit actoin
    $("#comment_form").submit(function(e){
        e.preventDefault();
        var form_data = $(this).serialize();

        $.ajax({
            method: "POST",
            url: "comment_save.php",
            data: form_data,
            dataType: "JSON",
            success: function(data){
                fetch_comment();
                $("#comment_form")[0].reset();
                // alert(data.return);
            }
        });
    });

    fetch_comment();
    // fetch all the comment
    function fetch_comment(){
        $.ajax({
            method: "GET",
            url: "fetch_comment.php",
            success: function(data){
                $("#show_comment").html(data);
            }
        });
    }

    // reply button click
    $(document).on('click', '.reply', function(){
        var comment_id = $(this).attr("id");
        $("#parent_id").val(comment_id);
        $("#name").focus();
    });
    
});