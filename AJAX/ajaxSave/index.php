<html>
	<head>
		<title>Ajax Save</title>
	</head>
	<body>
	<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#submit").click(function(){
				var name_value = $("#name").val();
				var location_value = $("#location").val();
				if(name_value==''||location_value==''){
					alert("All fields must have a value.");
				}else{
					$.ajax({
						type:	"POST",
						url	:	"insert.php",
						data:	{
							name: name_value,
							location: location_value
						},
						success: function(msg){
							$("#result").html(msg);
						},
						error: function() {
							elert(" Error ");
						}
						
					});
				}
				return false;
			});
		});
	</script>
	
	<form>
		<label>Name : </label>
		<input type="text" name="name" id="name"/>
		<label> Address : </label>
		<input type="text" name="location" id="location"/>
		<input type="submit" id="submit" value="Add"/>
	</form>
	
	<div id="result"></div>
	</body>
</html>