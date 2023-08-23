<?php
include("connection.php");  

    $search=$_GET['search'];
    
    if($search=="")
    {
        echo "please write somthing in search box";
        exit();
    }
    $query1="select * from add_website where website_keyword like '%$search%'";
    $data1=mysqli_query($conn,$query1);

    // if(mysqli_num_rows($data1)<1)
    // {
    //     echo"no result found";
    //     exit(); 
    // }
    
    echo"<a href='#' style ='margin-left:105px;'>More Images  for $search</a>";
    echo "<table border='3'><tr>";
    while($row=mysqli_fetch_array($data)){
        // if($row[4]!=0)
        
        //echo $row[4]."<br>";
 
        echo <font size='4'><a href='#'>$row1[0]</a></font>;
        echo <font size='4'><a href='#'>$row1[1]</a></font>;
        echo <font size='4'><a href='#'>$row1[3]</a></font>;
        
    }
echo "</tr></table>";

?>
    </tr> 
