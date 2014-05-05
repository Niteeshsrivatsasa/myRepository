<?php
 
	$host = " ukqpx79ecp.database.windows.net";
    $user = "niteesh";
    $pwd = "n!teesh558";
    $db = "niteesh";
    try 
	{
        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		
    }
    catch(Exception $e)
	{
        die(var_dump($e));
    }
	  try 
	{
        $sql_insert = "INSERT INTO slambook (name,data) 
                   VALUES (?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, "niteesh");
        $stmt->bindValue(2, "good");
        $stmt->execute();
    }
    catch(Exception $e)
    {
        die(var_dump($e));
    }

?>