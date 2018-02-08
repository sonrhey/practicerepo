$(document).ready(function(){
$("#submitForm").submit(function(e){
e.preventDefault();
var url = $(this).attr("action");
var method = $(this).attr("method");
var data = $(this).serialize();

$.ajax({
type: method,
url: url,
data: data,
success: function(response){
	alert(response);
}
});
});
});