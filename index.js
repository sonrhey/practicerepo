$(document).ready(function(){
$("#btnGenerate").click(function(){
$("#username").val("Stud-"+Math.floor(Math.random()*9000090099));
$("#password").val("Pass-"+Math.floor(Math.random()*9000090099));
});

$("#submitForm").submit(function(event){
event.preventDefault();
var url = $(this).attr("action");
var method = $(this).attr("method");
var form_data = $(this).serialize();

$.ajax({
type: method,
url: url,
data: form_data
}).done(function(response){
alert(response);
});

});

});