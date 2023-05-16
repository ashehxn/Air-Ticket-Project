var content1 = document.getElementById("content1");
var content2 = document.getElementById("content2");
var btn1 = document.getElementById("btn1");
var btn2 = document.getElementById("btn2");
var bookingBox = document.getElementById("booking-box");

function openSearchFlights() {
  content1.style.transform = "translateX(0)";
  content2.style.transform = "translateX(200%)";
  btn1.style.color = "#fff";
  btn2.style.color = "#7048e8";
  btn1.style.backgroundColor = "#7048e8";
  btn2.style.backgroundColor = "#fff";
  bookingBox.style.height = "250px";
}
function openManageFlights() {
  content1.style.transform = "translateX(200%)";
  content2.style.transform = "translateX(0)";
  btn1.style.color = "#7048e8";
  btn2.style.color = "#fff";
  btn1.style.backgroundColor = "#fff";
  btn2.style.backgroundColor = "#7048e8";
  bookingBox.style.height = "180px";
}
