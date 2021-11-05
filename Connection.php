<?php 
    $serverName = ".";
    $connectionInfo = array("Database"=>"newpro");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if($conn)
    {
        echo "Connection established. <br />";
        $tsql = "Select * from student";
        $stmt = sqlsrv_query($conn,$tsql);
        while($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
        {
            echo "<span>".$row["name"]."</span>  &nbsp;  <span>".$row["roll"]."</span> <br />";
        }
        //print_r(sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC));
        
    }
    else
    {
        echo "Connection Could not established. <br />";
        die(print_r(sqlsrv_errors(),true));
    }


?>