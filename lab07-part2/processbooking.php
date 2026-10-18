<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    
    <?php
    
    if(isset($_POST["firstname"]) && isset($_POST["lastname"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        echo "<p>Welcome $firstname $lastname !</p>";
    }

    
    $tour = "You are now booked on the ";
    if(isset($_POST["accom"])) { $tour .= "Accommodation, "; }
    if(isset($_POST["4day"])) { $tour .= "4 Day Tour, "; }
    if(isset($_POST["10day"])) { $tour .= "10 Day Tour"; }
    echo "<p>$tour</p>";

   
    if(isset($_POST["species"])){
        $species_code = $_POST["species"];
        $species = "";
        if($species_code == "M") $species = "Human";
        else if($species_code == "D") $species = "Dwarf";
        else if($species_code == "E") $species = "Elf";
        else if($species_code == "H") $species = "Hobbit";
        
        echo "<p>Species: $species</p>";
    }

    
    if(isset($_POST["age"])){
        echo "<p>Age: " . $_POST["age"] . "</p>";
    }

    
    if(isset($_POST["food"])){
        echo "<p>Meal Preference: " . $_POST["food"] . "</p>";
    }

   
    if(isset($_POST["partysize"])){
        echo "<p>Number of travellers: " . $_POST["partysize"] . "</p>";
    }
    ?>

</body>
</html>