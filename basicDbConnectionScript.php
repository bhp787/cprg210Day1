<?php

$customerId = $_REQUEST['CustomerId'];

$dbh = mysqli_connect("localhost", "root", "root", "travelexperts");
if (!$dbh)
{
    die("Fatal Error:" . mysqli_connect_error());
}
//mysqli_select_db($dbh, "travelexperts") or die("Can't select DB");

//queries would go here

//not case sensitive, but generally keywords are capitalized for ease of reading

$query1 = mysqli_query($dbh, "SELECT * FROM Customers WHERE CustomerId = $customerId");

print(mysqli_error());

print("<table border = '1'>");

while ($row = mysqli_fetch_row($query1))
{
    print("<tr>");
    foreach($row as $col)
    {
        print("<td>$col</td>");
        
    }
    print("<tr>");
};
print("</table>");

print("connection was successful");


mysqli_close($dbh);
?>