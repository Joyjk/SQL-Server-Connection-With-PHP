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

//https://www.youtube.com/watch?v=upvALf8zJXg
//Link for php7 drivers
//https://github.com/Microsoft/msphpsql/releases
//Link for Microsoft ODBC driver for sql server
//
//https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbXlCamVDUjhYZHpaci1Yc09fd2c1MzR0MHljQXxBQ3Jtc0tsdXNXSXQ1VVk1c3E2Q1Q2b3lCVUdvZ0NNZktnVGRDVEFlTjU1cDdJWUpSQ3RNenB0RjJ6endHNlZoY0hDSDNxRGswWDFNa0pDYUlmXzcyWXQzNl9PUHdYNTBXbVB3VC1BTkxiZHlWcDlWcTdCS3lYWQ&q=https%3A%2F%2Fwww.microsoft.com%2Fen-in%2Fdownload%2Fconfirmation.aspx%3Fid%3D36434
?>


