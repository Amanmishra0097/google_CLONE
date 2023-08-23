<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result By Aman mishra </title>
    <style>
        body{
            background-color: #f6fff8;
            margin:0;
        }
        
        #searchfield{
            width: 500px;
            height:30px;
            border-radius:5px;
            border:1px solid green;
            outline: none;
            padding: 0.1em 2em 0.1em 1em;
        }
        #gobtn{
            width:100px;
            height:34px;
            border-radius:4px;
            border:1px solid green;
            background color:white;
            font-size:17px;
        }
        #gobtn:hover{
            background-color:green;
            color:white; 
        }
        .img{
            margin-left: 6em;
            margin-bottom: 1rem;
            margin-top: 1rem;
        }
       .ig{
        border-radius: 0.5em;
        padding: 2px;
        opacity: 0.7;
        transition: all 0.3s;
       }
       .ig:hover{
        opacity: 1;
       }
       a{
        text-decoration:none;
        color: #7209b7;
       }
       span{
        color: #073b4c;
       }
       .logo{
        width: 200px;
        height: 100px;
       }
    </style>


</head>
<form action="" method="GET">
    <table border="0" width="100%"> 
        <tr>
            <td width="10%">
                <a href="index3.php"><img class="logo" src="SAMS_logo_2-removebg-preview.png" width="100%"></a>
            </td>
            <td>
                <input type="text" name="" id="searchfield">
                <input type ="Submit" name="" value="GO!" id="gobtn">
               </td>
        </tr>
    </table>
    <body>  

  
<?php
include("connection.php");  

    $search=$_GET['search'];
    
    if($search=="")
    {
        echo "please write somthing in search box";
        exit();
    }
    $query="select * from add_website where website_keyword like '%$search%'";
    $data=mysqli_query($conn,$query);

    if(mysqli_num_rows($data)<1)
    {
        echo"no result found";
        exit(); 
    }
    echo"<a href='#' style ='margin-left:105px;'>More Images  for $search</a>";
    echo "<table class=img ><tr>";
    while($row=mysqli_fetch_array($data)){
        if($row[4]!=0)
        {
        //echo $row[4]."<br>";
        echo "<td>
        <img class=ig src='Website_image/".$row[4]."' width='150px';>
        </td>";
    
        }}
echo "</tr></table>";

?>

    <?php include("extra.php"); ?>
    </form>
</body>
</html> 