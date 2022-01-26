<?php  
session_start();
// echo session_id();
 //$_SESSION["name"]="Zura";

// echo "<pre>";
// var_dump($_SESSION);
// echo "<pre>";
// unset($_SESSION["name"]);
//session_unset(); //remove all value from the session
//session_destroy(); //destroy the set velue 

$_SESSION["page_counter"]=$_SESSION["page_counter"] ?? 0;
$_SESSION["page_counter"]++ ;

$page=$_SESSION["page_counter"];
if($_SESSION['page_counter']=== 10){
 
//$page = $_SESSION["page_counter"];
echo "thanks for visiting us 10 time".'<br>';
//session_unset();//remove all value from the session
session_destroy(); //destroy the set velue 
}

?>


<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="app.css">
 <title>Session</title>
</head>

<body>
 <div class="container">
  <h1>Welcome to My presentation,We visited: <?php echo $page;?> Time</h1>

  </boduy>
  </htmll>