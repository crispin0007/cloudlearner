function addComment() {
    var stu_id = $("#stu_id").val();
    var stu_name = $("#stu_name").val();
    var stu_email = $("#stu_email").val();
    var course_id = $("#course_id").val();
    var addcomment = $("#addcomment").val();

    if (stu_id && stu_name && stu_email && course_id && addcomment) {
        
        $.ajax({
            type: "POST",
            url: "../../Admin/pages/insert_comment.php", 
            data: {
                stu_id: stu_id,
                stu_name: stu_name,
                stu_email: stu_email,
                course_id: course_id,
                addcomment: addcomment
            },
            success: function(response) {
                console.log(response); 
            }
        });
    } else {
        console.log("Please fill in all fields before adding a comment.");
    }
}
