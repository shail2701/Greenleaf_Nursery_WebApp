<?php ob_start(); 
session_start();

?>

<?php include "db_conn.php";?>
<?php include "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">


<head>

    

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap2.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin1.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="tree1.png" type="image/icon">
 <link href="css/styles.css" rel="stylesheet">

 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script src="js/jquery.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<style>
body::-webkit-scrollbar {
    width: 0.7em;
  }
   
body::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: white;
}
   
body::-webkit-scrollbar-thumb {
    background-color: yellowgreen;
    outline: 1px solid slategrey;
}

</style>
 
</head>

<body style="background: rgba(93,84,240,0.5);
    /* background: -webkit-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5)); */
    /* background: -webkit-linear-gradient(right, #ed5aff9e, #5ce4ff6b); */
    background: -webkit-linear-gradient(left, rgb(94 253 195), #e5ff00ab);";>