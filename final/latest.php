
	
	
<?php

include('connection.php');
if(isset($_POST['submit']))
{
$source=$_POST['source'];
$destination=$_POST['destination'];
$date=$_POST['date'];



if($source==""||$destination=="")
{
echo "<h2> Source and Destination are mandatory</h2>";

}
else
{
   $query=" SELECT * FROM posts WHERE post_via LIKE '%$source%'";
   $search_query=mysqli_query($con,$query);

                    if(!$search_query) {
                        die("Query Failed" .mysqli_error($con));
                    }

                    $count=mysqli_num_rows($search_query);
					
                    if($count>=1) 
					{ while($row=mysqli_fetch_assoc($search_query))
						{
                            $post_title = $row['post_title'];
                            $post_author =$row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = $row['post_content'];
                            $post_id = $row['post_id'];
							
							print $post_title;
							
							print $post_author;
							
						}	

						
                        
					}
                    else { 
                        echo "<h1>NO RESULT </h1>";
						
                       
						
                    }
							
							}
							
							}
                
               
			   ?>
