<?php      
    include('connection.php');  
    $source= $_POST['source'];  
    $destination = $_POST['destination'];

         
        $destination = mysqli_real_escape_string($con, $destination);  
        $source = mysqli_real_escape_string($con, $source);  
      
        $sql ="SELECT * FROM loc WHERE source LIKE '%$source%'";  
        $result = mysqli_query($con,$sql);  
        
        $count = mysqli_num_rows($result);  
          
        if($count>=1)
		{  
          echo "pass"		 ; 
		
        }  
        else{  
            echo "<h1> Login failed. Invalid SOURCE or DESTINATION.</h1>";
	echo $count 	;		
        }     
		
?>  