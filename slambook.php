<?php
 
	
    try 
	{
        $conn = new PDO( "sqlsrv:server = tcp:ukqpx79ecp.database.windows.net,1433;Database = niteesh", "niteesh", "n!teesh558");
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		
    }
    catch(Exception $e)
	{
        die(var_dump($e));
    }
	  try 
	{
        $sql_insert = "select * from slambook";
        //$stmt = $conn->prepare($sql_insert);
        //$stmt->bindValue(1, "niteesh");
        //$stmt->bindValue(2, "good");
        $stmt->execute();
    }
    catch(Exception $e)
    {
        die(var_dump($e));
    }

?>