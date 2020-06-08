<!DOCTYPE html>
<html lang="en">
<head>
  <title>My First PHP Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <?php 
    $age = 25;
    if($age > 20){
       echo "<h1>My First PHP Lab in $age years</h1>";  
    }else{
        echo "<h1>My First PHP Lab</h1>";
    } 
  ?>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <?php 
        echo 
        "<ul>
            <li>Mango</li>
            <li>Orange</li>
        </ul>" 
        ?>
    </div>
    <div class="col-sm-4">
    <?php 
        echo 
        "<ul>
            <li>Kiwi</li>
            <li>Avocado</li>
        </ul>" 
        ?>
    </div>
    <div class="col-sm-4">
        <?php 
            echo 
            "<ul>
                <li>Pear</li>
                <li>Strawberry</li>
            </ul>" 
        ?>
    </div>
  </div>
</div>

</body>
</html>