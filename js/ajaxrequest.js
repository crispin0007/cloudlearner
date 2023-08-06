// Checking Duplicate email Existenance
$(document).ready(function(){
    $("#stuemail").on("keypress blur", function(){
        var stuemail = $("#stuemail").val();
        $.ajax({
            url : "Student/addstudent.php",
            method: "POST",
            data : {
                checkemail : "checkemail",
                stuemail : stuemail,
            },
            success: function(data){
                // console.log(data);
                if (data != 0){
                    $('#statusmsg2').html('<span class="text-danger">Email Already Used</span>');
                    $('#signup').attr("disabled", true);
                } else if (data == 0){
                    $('#signup').attr("disabled", false);
                }
            },
        });
    });
});


// Adding New Students / Registration 
function addStu(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9]+\.)+[A-Z]{2,4}$/i;
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val(); 
    var stupass = $("#stupass").val();
    // console.log(stuname);
    if (stuname.trim()=="") {
        $('#statusmsg1').html('<span class="text-danger">Please Enter Valid Name</span>');
        $('#stuname').focus();
        return false;
        } else if (stuemail.trim()==""){
        $('#statusmsg2').html('<span class="text-danger">Please Enter Valid Email</span>');
        $('#stuemail').focus();
        return false;
        }else if(stuemail.trim()!="" && !reg.test(stuemail))
        {   $('#statusmsg2').html('<span class="text-danger">Please Enter Valid Email</span>');
            $('#stuemail').focus();  
        }else if(stupass.trim()==""){
        $('#statusmsg3').html('<span class="text-danger">Please Enter Valid Password</span>');
        $('#stupass').focus();
        return false;
        } else{
            $.ajax({
                url : "Student/addstudent.php",
                method : 'POST',
                dataType:"json",
                data : {
                stusignup : "stusignup",
                stuname : stuname,
                stuemail : stuemail,
                stupass : stupass,
                },
                success:function(data){
                console.log(data);
                if(data=="OK"){
                $('#successmessage').html('<span class="alert alert-success">Reghistration Success</span>');
                window.location.href = "login.php";
                } else if (data == "Failed"){
                $('#successmessage').html('<span class="alert alert-danger">Registration Failed</span>');
                }
                },
                });
        } 
}

// Verifying Login Credentials 
function checkStuLogin() {
    var stuLogEmail = $("#stuLogEmail").val();
    var stuLogPass = $("#stuLogPass").val();

    $.ajax({
        url: "Student/addstudent.php",
        method: "POST",
        data: {
            // checkLogmail: "checklogmail",
            stuLogEmail: stuLogEmail,
            stuLogPass: stuLogPass,
        },
        success: function(data) {
            if(data == 0){
                $('#statusLogMsg').html(  
                    '<small class="alert alert-danger">Invalid Email ID or Password</small>'
                );
            }else if (data == 1){
                $("#statusLogMsg").html(
                '<div class="spinner-border text-success" role="status"></div>');
                setTimeout(()=>{
                    window.location.href = "index.php";
                },1000);
            }
        },
    });
}
 