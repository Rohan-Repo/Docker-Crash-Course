<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background-color: lightblue;
                color: teal;
            }

            #company {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            #company td, #company th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #company tr:nth-child(even){background-color: #f2f2f2;}

            #company tr:hover {background-color: #ddd;}

            #company th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            }
        </style>
    </head>
    <body>

        <?php

            $userName = $_POST["uname"];
            $password = $_POST["psw"];
            
            echo "Hello, " . $userName;
            echo "Pwd, " . $password;

            if ( $userName == "admin" and $password == "admin" )
            {

                echo "Hello, " . $userName;
                ?>
                

                <h1> Company Dashboard </h1>

                <?php

                    $json = file_get_contents( 'http://company-service:5000/api/companies' );
                    // $obj = json_decode( $json );

                    // echo "Data : " . $json;

                    // echo "Type 1 : " . gettype($json);

                    // echo "Data : " . $obj;

                    // echo "Type 2 : " . gettype($obj);

                    // echo $json; 
                    // echo $obj;

                    // Decode the Array
                    $jsonArray = json_decode( $json, true );
                    // echo "Type 2 : " . gettype($jsonArray);
                    
                    // echo " <br > B4 : " . var_dump($jsonArray);

                    // Sort based on rating 
                    // $jsonArray = ksort( $jsonArray['rating']);
                    // Sort based on rating
                    array_multisort(array_column($jsonArray, 'rating'), SORT_DESC, $jsonArray);
                    // echo '<br /> <br /> After: ' . json_encode($jsonArray, JSON_PRETTY_PRINT);
                    // echo "<br /> <br /> After : " . print_r($jsonArray);

                    ?>

                            <table id="company">
                                <tr>
                                    <th> Name </th>
                                    <th> Province </th>
                                    <th> CEO </th>
                                    <th> Client-Type </th>
                                    <th> isNonProfit </th>                                    
                                    <th> numberOfEmployees </th>
                                    <th> rating </th>
                                </tr>

                    <?php

                        // echo $jsonObj . "<br />";
                        // echo gettype($jsonObj) . "<br />";
                    
                    foreach( $jsonArray as $jsonObj ){
                        ?>
                        
                                <!-- If JSON Array returns NULL we handle it with a ternary operator -->
								<tr>
                                    <td> <?php echo ( !empty($jsonObj['name']) ) ? $jsonObj['name'] : 'N/A';  ?> </td>
                                    <td> <?php echo ( !empty($jsonObj['Province']) ) ? $jsonObj['Province'] : 'N/A';  ?> </td>
                                    <td> <?php echo ( !empty($jsonObj['ceo']) ) ? $jsonObj['ceo'] : 'N/A';  ?> </td>
                                    <td> <?php echo ( !empty($jsonObj['clientType']) ) ? join ( " , ", $jsonObj['clientType'] ) : 'N/A';  ?> </td>
                                    <td> <?php echo ( !empty($jsonObj['isNonProfit']) ) ? ($jsonObj['isNonProfit'] ? "True" : "False") : "False";  ?> </td>
                                    <td> <?php echo ( !empty($jsonObj['numberOfEmployees']) ) ? $jsonObj['numberOfEmployees'] : 'N/A';  ?> </td>
                                    <td> <?php echo ( !empty($jsonObj['rating']) ) ? $jsonObj['rating'] : 'N/A';  ?> </td>
                                </tr>
                        
                    <?php    
                    } 
                    ?>

                    </table>


            <?php         
            }
            else
            {
                echo "<h1> Invalid Credentials Provided, please Retry </h1>";
            }
        ?>
                
    </body>
</html>


