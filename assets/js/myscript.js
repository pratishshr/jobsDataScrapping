
		$('#useremail').hide();
		$('#submit-btn').hide();
        $('#btn-sub').on('click',function(){
            $('#useremail').slideToggle("fast");
            $('#submit-btn').slideToggle("fast");
        });


        $('#sub-form').on("submit",function(){
        	return confirm("Are you sure you want to subscribe?");
        })
