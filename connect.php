<?php

$conn = new mysqli('localhost','root','','mobile_robot_base_project_2_database');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
		
} else { 
        if($_POST["bt"]=="f"){
		$forwardMovement = "f";
        $leftMovement = "";
        $stopMovement ="";
        $rightMovement ="";
        $backwardMovement ="";
		
		$stmt = $conn->prepare("insert into movement(forwardMovement,leftMovement,stopMovement,rightMovement,backwardMovement) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $forwardMovement	, $leftMovement, $stopMovement, $rightMovement, $backwardMovement);
		$execval = $stmt->execute();
		echo $execval;
		echo "الروبوت يتحرك الى الامام";
		$stmt->close();
		$conn->close();
		
	}else if($_POST["bt"]=="l"){
	    $forwardMovement = "";
        $leftMovement = "l";
        $stopMovement ="";
        $rightMovement ="";
        $backwardMovement ="";
		
		$stmt = $conn->prepare("insert into movement(forwardMovement, leftMovement, stopMovement, rightMovement, backwardMovement) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $forwardMovement, $leftMovement, $stopMovement, $rightMovement, $backwardMovement);
		$execval = $stmt->execute();
		echo $execval;
		echo "الروبوت يتحرك الى اليسار";
		$stmt->close();
		$conn->close();
		
	}else if($_POST["bt"]=="s"){
		$forwardMovement = "";
        $leftMovement = "";
        $stopMovement ="s";
        $rightMovement ="";
        $backwardMovement ="";
		
		$stmt = $conn->prepare("insert into movement(forwardMovement, leftMovement, stopMovement, rightMovement, backwardMovement) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $forwardMovement, $leftMovement, $stopMovement, $rightMovement, $backwardMovement);
		$execval = $stmt->execute();
		echo $execval;
		echo "الروبوت توقف عن الحركة";
		$stmt->close();
		$conn->close();
		
	}else if($_POST["bt"]=="r"){
		$forwardMovement = "";
        $leftMovement = "";
        $stopMovement ="";
        $rightMovement ="r";
        $backwardMovement ="";
		
		$stmt = $conn->prepare("insert into movement(forwardMovement, leftMovement, stopMovement, rightMovement, backwardMovement) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $forwardMovement, $leftMovement, $stopMovement, $rightMovement, $backwardMovement);
		$execval = $stmt->execute();
		echo $execval;
		echo "الروبوت يتحرك الى اليمين";
		$stmt->close();
		$conn->close();
		
	}else if($_POST["bt"]=="b"){
		$forwardMovement = "";
        $leftMovement = "";
        $stopMovement ="";
        $rightMovement ="";
        $backwardMovement ="b";
		
		$stmt = $conn->prepare("insert into movement(forwardMovement, leftMovement, stopMovement, rightMovement, backwardMovement) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $forwardMovement, $leftMovement, $stopMovement, $rightMovement, $backwardMovement);
		$execval = $stmt->execute();
		echo $execval;
		echo "الروبوت يتحرك الى الخلف";
		$stmt->close();
		$conn->close();
		
	}
	}
?>