<?php

   //Set up server

  $host = "ec2-3-92-98-129.compute-1.amazonaws.com";
  $user = "urcyphloccxygf";
  $password = "16e062b8cc6601f501d1b62aee13c758540331c093d7074f424bc687b6bf5351";
  $dbname = "d2kcc4it2iou00";
  $port = "5432";
  
  try{
    //Set DSN data source name
      $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
  
  
    //create a pdo instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  }
 
  //Host: ec2-3-92-98-129.compute-1.amazonaws.com
  //Port: 5432
  //User: urcyphloccxygf
  //Password: 16e062b8cc6601f501d1b62aee13c758540331c093d7074f424bc687b6bf5351
  //Database: d2kcc4it2iou00

  
    //check for empty first...
    if(empty($_POST['firstname']))
    {
        echo 'You left first name blank!';
        exit();
    }


  
    //retrieve form data into PHP variables...
    //Reference legal uid and pass to insert 
    //values in Database

   // $fname = $_POST['firstname'];
 



    //Store data into table
    //$sql = "INSERT INTO CUSTOMER (first)
    //VALUES ('$fname')";

   // if($pdo->query($sql)==true)
   // {
      //echo "Entry entered succesfully<br>";
    //}
    //else 
    //{
     // echo 'Error entering entry'.$pdo->error.'<br>';
    //}

    //PRINT UPDATED TABLE
    $result = $pdo -> fetchAll();

    foreach( $result as $row )
    {
      echo $row['cid']. "\t";
      echo $row['first']. "\t";
      echo $row['last']. "\t";
      echo $row['state']. "\t";
      echo $row['city']. "\t";
      echo $row['zip']. "\t";
      echo $row['street']. "\n";
    }
    

   //Close the connection to the MySQL server 
    $pdo->close(); 
    
?>