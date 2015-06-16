<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
#resultTable{
	border-bottom: 7px solid #9BAFF1;
    border-collapse: collapse;
    border-top: 7px solid #9BAFF1;
    font-family: "Lucida Sans Unicode","Lucida Grande",Sans-Serif;
    font-size: 12px;
    margin: 20px;
    text-align: center;
    width: 480px;
}
#resultTable th{
	background: none repeat scroll 0 0 #B9C9FE;
    border-left: 1px solid #9BAFF1;
    border-right: 1px solid #9BAFF1;
    color: #003399;
    font-size: 13px;
    font-weight: normal;
    padding: 8px;
}
#resultTable td {
    background: none repeat scroll 0 0 #E8EDFF;
    border-left: 1px solid #AABCFE;
    border-right: 1px solid #AABCFE;
    color: #666699;
    padding: 8px;
}

</style>
<table cellpadding="1" cellspacing="1" id="resultTable">
	<thead>
		<tr>
			<th> First Name </th>
			<th> Middle Name </th>
			<th> Last Name </th>
			<th> Gender </th>
			<th> Action </th>
		</tr>
	</thead>
	<tbody>
	<?php
		include('db.php');
		$result = mysql_query("SELECT * FROM personalinfo ORDER BY firstname ASC");
		while($row = mysql_fetch_array($result))
			{
				echo '<tr class="record">';
				echo '<td><div align="left">'.$row['firstname'].'</td>';
				echo '<td><div align="left">'.$row['middlename'].'</div></td>';
				echo '<td><div align="left">'.$row['lastname'].'</div></td>';
				echo '<td><div align="left">'.$row['gender'].'</div></td>';
				echo '<td><div align="center"><a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
				echo '</tr>';
			}
		?> 
	</tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="bootbox.min.js"></script>
<script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 bootbox.confirm("Are you sure?",function(result){
		if(result){
			$.ajax({
		   type: "GET",
		   url: "delete.php",
		   data: info,
   			success: function(){
   
   			}
 			});
         
		}
		element.parents(".record").animate({ backgroundColor: "#fbc7c7", display: "none" }, "fast")
		.animate({ opacity: "hide" }, "slow");
 	}
 );
		

return false;

});

});
</script>