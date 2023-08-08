// Checking Duplicate email Existenance
$(document).ready(function(){
    $("#insemail").on("keypress blur", function(){
        var insemail = $("#insemail").val();
        $.ajax({
            url : "Instructor/addinstructor.php",
            method: "POST",
            data : {
                checkemail : "checkemail",
                insemail : insemail,
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


// Adding New insdents / Registration 
function addIns(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9]+\.)+[A-Z]{2,4}$/i;
    var insname = $("#insname").val();
    var insemail = $("#insemail").val(); 
    var inspass = $("#inspass").val();
    // console.log(insname);
    if (insname.trim()=="") {
        $('#statusmsg1').html('<span class="text-danger">Please Enter Valid Name</span>');
        $('#insname').focus();
        return false;
        } else if (insemail.trim()==""){
        $('#statusmsg2').html('<span class="text-danger">Please Enter Valid Email</span>');
        $('#insemail').focus();
        return false;
        }else if(insemail.trim()!="" && !reg.test(insemail))
        {   $('#statusmsg2').html('<span class="text-danger">Please Enter Valid Email</span>');
            $('#insemail').focus();  
        }else if(inspass.trim()==""){
        $('#statusmsg3').html('<span class="text-danger">Please Enter Valid Password</span>');
        $('#inspass').focus();
        return false;
        } else{
            $.ajax({
                url : "Instructor/addinstructor.php",
                method : 'POST',
                dataType:"json",
                data : {
                inssignup : "inssignup",
                insname : insname,
                insemail : insemail,
                inspass : inspass,
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
function checkInsLogin() {
    var insLogEmail = $("#insLogEmail").val();
    var insLogPass = $("#insLogPass").val();
    console.log(insLogEmail);
    console.log(insLogPass);
    $.ajax({
        url: "Instructor/addinstructor.php",
        method: "POST",
        data: {
            // checkLogmail: "checklogmail",
            insLogEmail: insLogEmail,
            insLogPass: insLogPass,
        },
        success: function(data) {
            if(data == 0){
                $('#statusLogMsg').html(  
                    '<small class="alert alert-danger">Invalid Email ID or Password</small>'
                );
                console.log("check 1");
            }else if (data == 1){
                $("#statusLogMsg").html(
                '<div class="spinner-border text-success" >Successfull Sign In</div>');
                console.log("check 1");
                setTimeout(()=>{
                    window.location.href = "index.php";
                },1000);
            }
        },
    });
}
 