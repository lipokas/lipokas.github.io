
// For WIZZKIDD
function tick() {

currentTime = getTime();
displayMessage(currentTime);


Clock.innerHTML = currentTime;
window.setTimeout("tick();", 100);
}

function getTime() {
var hours, minutes, seconds, ap;
var intHours, intMinutes, intSeconds;
var today;
today = new Date();
intHours = today.getHours();
intMinutes = today.getMinutes();
intSeconds = today.getSeconds();

if (intHours <= 12) {
hours = intHours;
ap = "AM";
} else {
hours = (intHours-12);
ap = " PM";
}

minutes = formatDigits(intMinutes);
seconds = formatDigits(intSeconds);

return hours+":"+minutes+":"+seconds+ap;
}

function displayMessage(currTime){
newMessage = "";
timeSplits = new Array("10:40:00PM", "10:41:00PM", "10:42:00PM", "10:43:00PM", "10:44:00PM", "10:45:00PM", "10:46:00PM", "10:47:00PM", "10:48:00PM", "10:49:00PM", "10:50:00PM");
theMessages = new Array("Fourty", "Fourty-1", "Fourty-2", "Fourty-3", "Fourty-4", "Fourty-5", "Fourty-6", "Fourty-7", "Fourty-8", "Fourty-9", "Fifty");

for (var i=0; i<timeSplits.length; i++){
dateA = new Date("January 01, 2000 "+currTime);
dateB = new Date("January 01, 2000 "+timeSplits[i]);
if (dateA >= dateB){
newMessage = theMessages[i];
}
}

strMessage.innerHTML = newMessage;
}

function formatDigits(xxx) {
if (xxx < 10)
return "0"+xxx;
return xxx;
}


window.onload = tick;