//common variable values

var lineLength = 80;

//reusable functions
function getMonthName(monthIndex)
{
		 var monthNames = new Array();
		 monthNames[0] = "January";
		 monthNames[1] = "February";
		 monthNames[2] = "March";
		 monthNames[3] = "April";
		 monthNames[4] = "May";
		 monthNames[5] = "June";
		 monthNames[6] = "July";
		 monthNames[7] = "August";
		 monthNames[8] = "September";
		 monthNames[9] = "October";
		 monthNames[10] = "November";
		 monthNames[11] = "December";
		 return monthNames[monthIndex];
}

function genOption(optNum)
{
   var htmlOptionTag =
      "<option value='" + optNum + "'>Choice " + optNum + "</option>";
   return htmlOptionTag;
}

function drawLine(length)
{
   for (i=0; i<length; i++)
   {
      document.write("-");
   }
   document.write("<br />");
}