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

            if ( $userName == "admin" and $password == "admin" ){

                echo "Hello, " . $userName;
                ?>
                

                <h1> Company Dashboard </h1>

                <?php

                    // $json = file_get_contents( 'http://localhost:1234/api/companies');
                    $json = file_get_contents( 'http://company-service:5000/api/companies' );
                    $obj = json_decode( $json );

                    echo $json; 
                    echo $obj;

                    $ch = curl_init();

                    curl_setopt( $ch, CURLOPT_URL, 'http://company-service:5000/api/companies');
                    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);

                    $serverRespose = curl_exec( $ch );

                    curl_close( $ch );

                    # echo "ch : " . $ch;

                    echo "Data : " . $serverRespose;

                    echo $serverRespose;


                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                    CURLOPT_URL => 'localhost:1234/api/companies',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    ));

                    $response = curl_exec($curl);

                    curl_close($curl);
                    echo "Data 2 : " . $response;
                    echo $response;


                    // $client = new Client();
                    // $request = new Request('GET', 'localhost:1234/api/companies');
                    // $res = $client->sendAsync($request)->wait();
                    // echo $res->getBody();

                    // $client = new http\Client;
                    // $request = new http\Client\Request;
                    // $request->setRequestUrl('localhost:1234/api/companies');
                    // $request->setRequestMethod('GET');
                    // $request->setOptions(array());

                    // $client->enqueue($request)->send();
                    // $response = $client->getResponse();
                    // echo $response->getBody();


                    // $curl = curl_init();
                    // curl_setopt( $curl, CURLOPT_URL, 'http://company-service:5000/api/companies');
                    // curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true);

                    // $jsonRespose = curl_exec( $curl );

                    // curl_close( $curl );

                    // echo "Data : " . $jsonRespose;

                    // echo "Type : " . gettype($jsonRespose);

                    // foreach( $json as $jsonObj ){
                    //     echo $jsonObj . "<br />";
                    //     echo gettype($jsonObj) . "<br />";
                    // } 



            }
                ?>



                <table id="company">
                    <tr>
                        <th>Company</th>
                        <th>Contact</th>
                        <th>Country</th>
                    </tr>
                    <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>Berglunds snabbköp</td>
                        <td>Christina Berglund</td>
                        <td>Sweden</td>
                    </tr>
                    <tr>
                        <td>Centro comercial Moctezuma</td>
                        <td>Francisco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>Ernst Handel</td>
                        <td>Roland Mendel</td>
                        <td>Austria</td>
                    </tr>
                    <tr>
                        <td>Island Trading</td>
                        <td>Helen Bennett</td>
                        <td>UK</td>
                    </tr>
                    <tr>
                        <td>Königlich Essen</td>
                        <td>Philip Cramer</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>Laughing Bacchus Winecellars</td>
                        <td>Yoshi Tannamuri</td>
                        <td>Canada</td>
                    </tr>
                    <tr>
                        <td>Magazzini Alimentari Riuniti</td>
                        <td>Giovanni Rovelli</td>
                        <td>Italy</td>
                    </tr>
                    <tr>
                        <td>North/South</td>
                        <td>Simon Crowther</td>
                        <td>UK</td>
                    </tr>
                    <tr>
                        <td>Paris spécialités</td>
                        <td>Marie Bertrand</td>
                        <td>France</td>
                    </tr>
                </table>


            }
        ?>


        
    </body>
</html>


