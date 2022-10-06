
$('#phoneLogin').click(function () {
	
    var kMail=$('#uMail').val(); 
    var uPassword=$('#uPassword').val(); 
    $.ajax({
        type:'POST',
        url:'login.php',
        data:'uMail='+kMail+'&uPassword='+uPassword,
        success:function(reply){
            if (response == "okey") {
                
               
                window.location.href="TelephoneDirectory/loginpage.php"
            } else {
            
               
                $('.response').html(reply);
            }
        }
    });
});

