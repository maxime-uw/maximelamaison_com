$(document).ready(function(){
	$("#sendmail").click(function(){
	  
	  var sendingMail = '<div class="alert alert-info alert-block">Sending Mail ...</div>';
		var valid = '';
		var isr = ' is required.';
		var name = $("#name").val();
		var mail = $("#mail").val();
		var subject = $("#subject").val();
		var text = $("#text").val();
		if (name.length<1) {
			valid += 'A valid Name'+isr+'<br />';
		}
		if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
			valid += 'A valid Email'+isr+'<br />';
		}
		if (subject.length<1) {
			valid += 'Subject'+isr+'<br />';
		}
		if (text.length<1) {
			valid += 'Text'+isr+'<br />';
		}
		if (valid!='') {
			$("#response").fadeIn("slow");
			$("#response").html('<div class="alert"><button type="button" class="close" data-dismiss="alert">×</button><strong>Warning!</strong><br />'+valid+'</div>');
		}
		else {
			var datastr ='name=' + name + '&mail=' + mail + '&subject=' + subject + '&text=' + text;
			$("#response").css("display", "block");
			$("#response").html(sendingMail);
			$("#response").fadeIn("slow");
			setTimeout("send('"+datastr+"')",2000);
		}
		return false;
	});
});

function send(datastr){
	$.ajax({	
		type: "POST",
		url: "mail.php",
		data: datastr,
		cache: false,
		success: function(html){
		$("#response").fadeIn("slow");
		$("#response").html(html);
		setTimeout('$("#response").fadeOut("slow")',2000);
	}
	});
}