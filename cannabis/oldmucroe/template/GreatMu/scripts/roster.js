function ctRoster(usrPrfx, usrName)
{
	var collection = "~<strong>" +usrPrfx+ "</strong>." +usrName+ "<strong>!</strong>";

	document.getElementById('namebox').innerHTML = collection;
}
function ctRosterClean()
{
	document.getElementById('namebox').innerHTML = "Hover over a member";
}