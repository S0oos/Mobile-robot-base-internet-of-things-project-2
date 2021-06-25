<?php

$conn =mysqli_connect('localhost','root','','mobile_robot_base_project_2_database');


        $sql =mysqli_query($conn,"SELECT * FROM movement ORDER BY id DESC LIMIT 1");
		$print_data= mysqli_fetch_row($sql);
			echo $print_data[1];
			echo $print_data[2];
			echo $print_data[3];
			echo $print_data[4];
			echo $print_data[5];
			

?>