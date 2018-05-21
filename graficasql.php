<?php
  include_once "header.php";
?>
<body>
<?php

  include("includes/fusioncharts.php");

 $hostdb = "localhost";  // MySQl host
 $userdb = "root";  // MySQL username
 $passdb = "";  // MySQL password
 $namedb = "ucbito";  // MySQL database name

 // Establish a connection to the database
 $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

 // Render an error message, to avoid abrupt failure, if the database connection parameters are incorrect
 if ($dbhandle->connect_error) {
  exit("There was an error with your connection: ".$dbhandle->connect_error);
 }

  // Form the SQL query that returns the top 10 most populous countries
  $strQuery = "
  select nombre,count(envio.cp) as sum
    from envio, problema
    where envio.cp=problema.cp
    group by envio.cp
  ";

  // Execute the query, or else return the error message.
  $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

  // If the query returns a valid response, prepare the JSON string
  if ($result) {
    // The `$arrData` array holds the chart attributes and data
    $arrData = array(
      "chart" => array(
          "caption" => "ENVIOS POR PROBLEMA",
          "paletteColors" => "#0075c2",
          "bgColor" => "#ffffff",
          "borderAlpha"=> "20",
          "canvasBorderAlpha"=> "0",
          "usePlotGradientColor"=> "0",
          "plotBorderAlpha"=> "10",
          "showXAxisLine"=> "1",
          "xAxisLineColor" => "#999999",
          "showValues" => "0",
          "divlineColor" => "#999999",
          "divLineIsDashed" => "1",
          "showAlternateHGridColor" => "0"
        )
    );

    $arrData["data"] = array();

    // Push the data into the array
    while($row = mysqli_fetch_array($result)) {
      array_push($arrData["data"], array(
          "label" => $row["nombre"],
          "value" => $row["sum"]
          )
      );
    }

    /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

    $jsonEncodedData = json_encode($arrData);
    echo $jsonEncodedData;

    $columnChart = new FusionCharts("column2D", "myFirstChart" , 400, 300, "chart-1", "json", $jsonEncodedData);

    // Render the chart
    $columnChart->render();
    // Close the database connection
    $dbhandle->close();
  }

?>
<div id="chart-1"><!-- Fusion Charts will render here--></div>
</br>
</br>
</br>
<!----------------------Prueba------------------>
<?php


  


 $hostdb = "localhost";  // MySQl host
 $userdb = "root";  // MySQL username
 $passdb = "";  // MySQL password
 $namedb = "ucbito";  // MySQL database name

 // Establish a connection to the database
 $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

 // Render an error message, to avoid abrupt failure, if the database connection parameters are incorrect
 if ($dbhandle->connect_error) {
  exit("There was an error with your connection: ".$dbhandle->connect_error);
 }

  // Form the SQL query that returns the top 10 most populous countries
  $strQuery = "
  select estado, count(envio.estado) as total
  from envio,usuario
  where envio.cu=usuario.cu
  group by(envio.estado)
  ";

  // Execute the query, or else return the error message.
  $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

  // If the query returns a valid response, prepare the JSON string
  if ($result) {
 
    // creating an associative array to store the chart attributes        
    $arrData = array(
      "chart" => array(
        "theme" => "fint",
        "caption" => "",
        "subcaption" => "Intruccion a la pogramacion",
        "captionFontSize" => "30",
        "captionFontBold" => "1",
        "paletteColors" => "#A2A5FC, #41CBE3, #EEDA54, #BB423F #,F35685",
        "baseFont" => "Quicksand, sans-serif",
        "labelFontSize"=> "15",
        "labelFontBold" =>"1",
        "labelFontItalic" => "1",
        //more chart configuration options
      )
    );
   
    $arrData["data"] = array();
   
    // iterating over each data and pushing it into $arrData array
    while ($row = mysqli_fetch_array($result)) {
      array_push($arrData["data"], array(
        "label" => $row["estado"],
        "value" => $row["total"]
      ));
    }
   
    $jsonEncodedData = json_encode($arrData);

      $jsonEncodedData = json_encode($arrData);
      echo $jsonEncodedData;

      // Syntax for the instance -         
     $doughnutChart = new FusionCharts("doughnut2d", "browserShareChart" , "100%", "450", "chart-2", "json", $jsonEncodedData);

    // FusionCharts render method
    $doughnutChart->render();
         
    // closing database connection      
    $dbhandle->close();
  }
  ?>
  <div id="chart-2"><!-- Fusion Charts will render here--></div>
</body>
</html>