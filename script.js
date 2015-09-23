$(document).ready(function() {
    var $url = "http://localhost/xmailapp/proqesmail.php";
    $("#mailForm").submit(function(event) {
        event.preventDefault();
        console.log("submitit");
        console.log( $( this ).serializeArray() );
        var $formData= $( this ).serializeArray();
        $.ajax({
            type: "POST",
		  	url: $url,
		  	data:$formData,
		 	success: function(srv){
		  	console.log(srv);
		  	$(".njoftim").html(srv);
		  }
        });

    });

});