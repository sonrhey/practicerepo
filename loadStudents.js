$(document).ready(function(){

function loadStudents(){
	$.ajax({
		type: "GET",
		url: "loadStud.php"
	}).done(function(response){
		var convert = $.parseJSON(response);
		var count = convert.length;
		for(var i=0;i<count;i++){
			$("#tableData").append("<tr><td>"+convert[i].id+"</td><td>"+convert[i].username+"</td><td>"+
			convert[i].password+"</td><td><input type='radio' value="+convert[i].id+" name='optRadio'></td></tr>");
		}
	});
}

loadStudents();
});