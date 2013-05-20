

var currentDate;
/*
var imageArray;
var descriptionArray;
var linkArray;
*/
currentDate = new Date().toDateString();
/*
var onLoad = function()
    {
    
    imageArray = new Array("images/forestTemple.jpg", "images/fullMoonBeach.jpg",
                           "images/monkeySky.jpg", "images/monkSunset.jpg", "images/sunsetDive.jpg");

    descriptionArray = new Array("Forest Temple", "Full moon beach party",
                                 "Overlooking the city from mountain bar with monkey", "Monk taking in the sunrise",
                                 "Diving into the warm colorful ocean!");

    linkArray = new Array("http://www.bangkok.com/attraction-temple/", "http://www.fullmoon.phangan.info/",
                           "http://goseasia.about.com/od/travelplanning/a/avoiding_monkey_attacks.htm",
                           "http://www.dovesnest.org/meditation.html",
                           "http://thirstforadrenaline.com/cliffdiving/location/hawaii.shtml");
    
    
    };
*/
function validate()
    {
       var myform = document.getElementById("form1");
           if (myform.firstName.value == "")
                {
                   alert("First Name must have a value");
                   myform.firstName.focus();
                   return false;
                }
           if (myform.email.value == "")
                {
                   alert("Email must have a value");
                   myform.email.focus();
                   return false;
                }
           else
           {
              var emailRegExp = new RegExp(/^[a-z][0-9a-z_]*(\.[0-9a-z_]+)*@([0-9a-z]+\.)+[a-z]{2,6}$/i);
              if (!emailRegExp.test(myform.email.value))
              {
                 alert("Invalid email address");
                 myform.email.focus();
                 return false;
              }
           }
           if (myform.postal.value == "")
           {
              alert("Postal code must have a value");
              myform.postal.focus();
              return false;
           }
           else
           {
              myform.postal.value = myform.postal.value.toUpperCase();
              var postalRegExp = new RegExp(/^\d{5}-\d{4}|\d{5}|[A-Z]\d[A-Z] ?\d[A-Z]\d$/);
              if (!postalRegExp.test(myform.postal.value))
              {
                 alert("Invalid postal code or zip code");
                 myform.postal.focus();
                 return false;
              }
           }
           return confirm("Continue submitting?");
    }
    
function displayDashes(numberOfDashes)
    {
        var dashes = "";
    for (i = 1; i <= numberOfDashes; i++)
        {
        dashes+= "___"
        }
    document.write(dashes + "</br>");
    }