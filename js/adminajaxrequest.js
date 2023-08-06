// Verifying Admin Login Credentials 
function checkAdminLogin() {
    // console.log("clicked");
    var adminLogEmail = $("#adminLogEmail").val();
    var adminLogPass = $("#adminLogPass").val();

    $.ajax({
        url: "Admin/admin.php",
        method: "POST",
        data: {
            adminLogEmail: adminLogEmail,
            adminLogPass: adminLogPass,
        },
        success: function(data) {
            console.log(data);
            if(data == 0){
                $('#adminstatusLogMsg').html(
                    '<small class="alert alert-danger">Invalid Email ID or Password</small>'
                );
            }else if (data == 1){
                $("#adminstatusLogMsg").html(
                '<div class="spinner-border text-success" role="status"></div>');
                setTimeout(()=>{
                    window.location.href = "Admin/pages/dashboard.php";
                },1000);
            }
        },
    });
}
 