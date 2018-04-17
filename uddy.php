<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First project</title>
</head>
<style>
.column {
    float: left;
    width: 50%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
img{
    width:100%;
    height:119vh;
}
.show{
    background-color: #6d706d;
    min-height: 119vh;
}
.txt{
    color:gold;
    float: left;
    font-size: 23pt;
    width:40%;
    margin-top: 25rem;
    margin-left: 4rem;

    
}
.tym{
    color:white;
    font-size:20pt;
    float:left;
    margin-left:4rem;

}
 
</style>
<body>
    <div class="row">
        <div class="column">
            <img src="https://res.cloudinary.com/djdsmtbvk/image/upload/v1523646006/h.jpg"  class="img-fluid">
        </div>
        <div class="column show">
             <h1 class="txt" >Design is a<br>Visual language. </h1>
             <br>
             
             <p class="tym"><b>Current time: <?php echo date("h:i:sa") ?></b></p>

        </div>
    </div>
    <br>
   
              
    
</body>
</html>