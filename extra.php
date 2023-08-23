<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .extra{
            margin-left: 6em;
            
            
        }
        span{
            text-decoration: none;
        }
        
    </style>
    <title></title>
</head>
<body>
    <table class=extra>
        <?php
        $query1="select*from add_website where website_keyword like '%$search%'";
        $data1=mysqli_query($conn,$query1);
        while($row1=mysqli_fetch_array($data1))
        {
            echo
            "<tr>
            <td>
            <span><b><a href='$row1[1]'>$row1[0]</a></b></span><br>";
            echo"<span>$row1[1]></span><br>";
            echo"<span>$row1[3]></span><br><br> 
            </td>
            </tr>";
            


        } 
        ?>
        </table>
        </body>
        </html>