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
        $sql_insert = "INSERT INTO slambook (name, data) 
                   VALUES (?,?)";
       $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, "test");
		$stmt->bindValue(2, "testhkbkb");
        $stmt->execute();
    }
    catch(Exception $e)
    {
        die(var_dump($e));
    }

?>