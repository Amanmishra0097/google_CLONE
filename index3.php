<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sams</title>
    <style>
        body{
    font-family: 'Courier New', Courier, monospace;
    background-image: url('./ken-cheung-KonWFWUaAuk-unsplash.jpg');
    background-position: center;
    background-size: cover;

}
ul, li{
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    padding-right: 20px;
    align-items: baseline;
}
a{
    text-decoration: none;
    color: black;
}
a:hover{
    text-decoration: underline;
}

#round{
    align-items: center;
    border-radius: 100%;
    width: 24px;
    
    
}
#round:hover{
    box-shadow: 0 0 0 0.2em  grey;
}
div,a{
    display:flex;
    justify-content: center;
}
div a #middle-img {
    width: 100%;
    height: 200px;
    margin-top: 1.5em;
    /* box-shadow: 1px 12px 63px 0px rgba(0,0,0,1);  */

}

#input-feild{
    margin-top: 1em;
}

#input-area{
    width: 50%;
    padding: 1em 2em;
    border: 3px solid #f6fff8;
    transition: all 1s;
    box-shadow: 1px 12px 63px 0px rgba(0,0,0,1);
    border-radius: 60px;
    background-color: transparent;
    color: #f8f9fa;
    outline: none;
}

::placeholder{
    font-size: 1em;
    color: #f6fff8;
    font-weight: bolder;
    
}

#btn-container{
    margin-top: 2em;
}

.btn{
    padding: 1em 2em 1em 2em;
    font-weight: bolder;
    background-color: transparent;
    border: 2px solid #f6fff8;
    border-radius: 4px;
    cursor: pointer; 
    color: #f6fff8;
    transition: all 0.2s;
}
.btn:hover{
    box-shadow: 0px 15px 10px -15px #f6fff8; 
}
h1{
    position:absolute;
    font-size: 15px;
    border-bottom: 1px solid #000814;
    width: 98%;
    margin-top: 12em;
    padding-left:3em;
}

footer{
    margin-top: 9em;
    display: flex;
    justify-content: space-between;
    
}

    </style>

    <link rel="icon" href="SAMS logo 2.png">
    <!-- <link rel="stylesheet" href="/css/index3.css"> -->

</head>
<body>
    <form action="result.php" method="GET">
    <nav>
        <ul>
            <li><a href="">Video</a> </li>
            <li><a href="">News</a> </li>
            <li><a href="https://www.google.co.in/imghp?hl=en&authuser=0&ogbl">Images</a></li>

            <li><a href="https://accounts.google.com/SignOutOptions?hl=en&continue=https://www.google.com/"><img src="IMG_20221219_204630_419.jpg" alt="user image" id="round"></a></li>
           
        </ul>
    </nav>
    <main>
        <div>
            <a href=""><img src="SAMS_logo_2-removebg-preview.png" id="middle-img" alt=""></a>
        </div>
        <div id="input-feild">
            <input type="search" name="search" placeholder="Search type a URL" id="input-area">
            
        </div>
    </main>
    <div id="btn-container">
        <input type="submit" class="btn" value="Sams search"> 
     
    </div>
   
    <footer>
        <ul id="second-ul">
            <li><a href="">About</a></li>
            <li><a href="">Advertising</a></li>
            <li><a href="">Business</a></li>
            <li><a href=""> How to search works</a></li>
        </ul>
        <ul>
            <li><a href="">Privacy</a></li>
            <li><a href="">Teams</a></li>
            <li><a href="">Settings</a></li>
        </ul>
    </footer>
</form>
</body>
</html>