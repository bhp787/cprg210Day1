

var currentDate;
function getCurrentDate()
    {
    currentDate = new Date().toDateString();
    };


function displayDashes(numberOfDashes)
    {
        var dashes = "";
    for (i = 1; i <= numberOfDashes; i++)
        {
        dashes+= "_|_"
        }
    document.write(dashes);
    }