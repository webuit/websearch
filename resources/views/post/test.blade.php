<html>
<head>
	<title>ZZZZZ</title>
	<meta charset="utf-8">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
	<h1 id="cc" name="{{route('ajax_comment')}}">Adddd</h1>
	<div id="ajas">.......</div>
	<script>
	$(document).ready(function(){
		$("#cc").click(function(){
			$a = $(this).attr('name');
			alert($a);
			$.ajax({

            type: "get",
            url: $a,
            success: function (data) {
            	//alert(data);
            	alert('success');
                $('#ajas').html(data);
            }
            
        	});
		});
	});
</script>
</body>
</html>

