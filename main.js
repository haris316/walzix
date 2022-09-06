function send_message() {
    var fname = jQuery("#fname").val();
    var email = jQuery("#email").val();
    var number = jQuery("#number").val();
    var company = jQuery("#company").val();
    var project = jQuery("#project").val();
    var subject = jQuery("#subject").val();
    var is_error = "";

    if (fname == "") {
        alert('Please Enter Name');
    } else if (email == "") {
        alert('Please Enter Email');
    } else if (number == "") {
        alert("Please Enter Phone Number");
    } else {
        jQuery.ajax({
            url: 'send_message.php',
            type: 'post',
            data: 'fname=' + fname + '&email=' + email + '&number=' + number + '&company=' + company + '&project=' + project + '&subject=' + subject,
            success: function (result) {
                alert(result);
            }
        });
    }
}