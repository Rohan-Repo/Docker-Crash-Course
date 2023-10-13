<?php

    // echo '< link rel="stylesheet" href="style.css" type="text/css" />';
    echo '<body style="background-color: lightyellow; color: maroon;">';
    echo '<p> <h1 style="text-align: center"> Hello From PHP Container </h1> </p>';
    echo "<br />";

    $footballClubs = array(
        "FCB" => "Futbol Club Barcelona",
        "PSG" => "Paris Saint-Germain FC",
        "MCI" => "Manchester City FC",
        "BAY" => "FC Bayern Munchen",
        "INT" => "Football Club Internazionale Milano",
        "MIA" => "Inter Miami CF",
        "ANA" => "Al Nassr"
    );

    echo "<p> <h3> List of Football Clubs with their abbreviations </h3> </p>";

    // echo '<p style="padding:10px;"> <dl>';
    echo '<p> <dl>';
    
    foreach( $footballClubs as $key=>$value ){
        echo "<dt> <b>" . $key . "</b> </dt> ";
        echo "<dd> " . $value . " </dd>";
    }
    
    echo "</dl> </p>";
?>