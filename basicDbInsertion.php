<?php

$dbh = mysqli_connect("localhost", "root", "root", "travelexperts");

if (!$dbh)
{
    die(mysqli_connect_error());
}

$sql = "INSERT INTO `TravelExperts`.`Agents` (`AgentId`, `AgtFirstName`, `AgtMiddleInitial`,
`AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (NULL, 'benji',
'g', 'pancher', '4068894432', 'frank@travelexperts.net', 'sell that shit', NULL)";

if (mysqli_query($dbh, $sql))
{
    print("Row was added successfully!");
}
else
{
    print("Failure!" . mysqli_error($dbh));
}

mysqli_close($dbh);
    
?>