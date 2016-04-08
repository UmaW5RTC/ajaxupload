<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<form method="post" name="frm" id="frm" enc-type="multipart/form-data">
	   no<input type="text" name="colgid" id="colgid" />
	 name<input type="text" name="name" id="name" /><br /><br />
	file1<input type="file" name="file1" id="file1" /><br /><br />
	<!-- file2<input type="file" name="file2" id="file2" /><br /><br />
	file3<input type="file" name="file3" id="file3" /><br /><br />
	file4<input type="file" name="file4" id="file4" /><br /><br /> -->
	<input type="submit" name="save" id="btn_save" value="SAVE" />
</form>
<script type="text/javascript">
// document.getElementById('btn_save').onclick=function()
// {
// 	alert('lets put the code for upload');
// }
document.getElementById('colgid').onkeyup=function()
{
	//alert('hello');
	var a=document.getElementById('colgid').value;
	document.getElementById('name').value=a;
}


$(document).ready(function (e) {
$("#frm").on('submit',(function(e) {
e.preventDefault();
$.ajax({
url: "upload.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
	alert(data);
}
});

}));
});
</script>