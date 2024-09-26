<?php
$students = array(
            array("name"=>"kruti","scores"=>array(90,90,90)),
			array("name"=>"sunju","scores"=>array(80,80,80)),
			array("name"=>"diya","scores"=>array(90,80,90))
			);
			
			foreach($students as $student)
			{
				echo"scores for:".$student['name']."=>";
				echo implode(",",$student['scores'])."<br>";
			}
?>