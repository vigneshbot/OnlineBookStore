var myVar = setInterval(myTimer, 1000);
function myTimer()
{
var d = new Date();
document.getElementById("demo").innerHTML =
d.toLocaleTimeString();
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}