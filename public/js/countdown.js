// countdown title
var countDownDate = new Date("Mar 14, 2022 23:59:59").getTime();


var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

  document.getElementById("demo").innerHTML = days + " days, " + hours + " hours, "
  + minutes + " minutes";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

// countdown early bird

var countDownDateNew = new Date("Jan 29, 2022 23:59:59").getTime();


var xNew = setInterval(function() {

  var nowNew = new Date().getTime();

  var distanceNew = countDownDateNew - nowNew

  var daysNew = Math.floor(distanceNew / (1000 * 60 * 60 * 24));
  var hoursNew = Math.floor((distanceNew % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

  document.getElementById("cd-early-bird").innerHTML = daysNew + " days, " + hoursNew + " hours";

  if (distanceNew < 0) {
    clearInterval(xNew);
    documentNew.getElementById("cd-early-bird").innerHTMLNew = "EXPIRED";
  }
}, 1000);
