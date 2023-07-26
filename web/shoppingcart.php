<?php include "db_conn.php"; 
include "head1.php";
ob_start();
?>

<?php
if($_SESSION['user_name']==NULL){
  // header("location:login_home.php");
  echo "<script>window.location.href='login_home.php';</script>";
  echo "SESSION IS NULL";
}
else
{
   $em = $_SESSION['user_name'];
}
   // $sql="SELECT *  FROM users WHERE email = '$nm'";
// $result1=mysqli_query($conn,$sql);

//   while ($row = mysqli_fetch_assoc($result1)) {
//     $ids=$row["id"];
//   //  echo "ID IS : ".$ids;
if(isset($_GET['tot'])){
  $rop = $_GET['tot'];
  // echo "total is ".$rop ;
}
if(isset($_GET['uid'])){
  $uid = $_GET['uid'];
  // echo "total is ".$rop ;
}
if(isset($_GET['cancel'])){

  $pop = $_GET['cancel'];
  //$rop = $_GET['tot1'];
   echo $pop."  is deleted" ;
  // echo $rop." ".$uid;

  $query = "DELETE FROM `ordered` WHERE order_id=$pop AND uid=$uid LIMIT 1";
  echo $query;
    $res=mysqli_query($conn,$query);
    if(!$res){

        die("QUERY FAILED ." . mysqli_error($conn));

        }else
        {
         

          $query1 = "SELECT * FROM checkout WHERE oid=$pop";
          $res1=mysqli_query($conn,$query1);
          while($row = mysqli_fetch_assoc($res1))
          { 
                $post_totle=$row['totle_price'];

          }  
          $new_price=$post_totle-$rop;
          $query = "UPDATE `checkout` SET `totle_price`=$new_price WHERE oid=$pop";
          $res2=mysqli_query($conn,$query);
          
          if(!$res2){
            echo "Query Fail";
          }
          header("location:shoppingcart.php");
          //echo $post_totle."-".$rop;
          //echo "<br><br>".$new_price;
          //$postme="Product canceled";
          //echo 'Product canceled';
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Green Leaf Nursery Web Checkout Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="tree1.png"/>

	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
<!-- 
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
     -->

</head>
<style>
/*--//responsive--*/
	
body::-webkit-scrollbar {
    width: 10px;
}
 
body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
	background-color:ghostwhite;
	border-radius: 10px;
}
 
body::-webkit-scrollbar-thumb {
    border-radius: 10px;
	background-color:yellowgreen;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}  
@font-face {
  font-family: SourceSansPro-Regular;
  src: url('../fonts/source-sans-pro/SourceSansPro-Regular.ttf'); 
}

@font-face {
  font-family: SourceSansPro-Bold;
  src: url('../fonts/source-sans-pro/SourceSansPro-Bold.ttf'); 
}

@font-face {
  font-family: JosefinSans-Bold;
  src: url('../fonts/JosefinSans/JosefinSans-Bold.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
    background: -webkit-linear-gradient(left, rgb(151 255 217), #e5ff006b);
	font-family: SourceSansPro-Regular, sans-serif;
}

/*---------------------------------------------*/
a {
	font-family: SourceSansPro-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  text-decoration:none;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: SourceSansPro-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}
table {
 /* margin-left:4.5%;  */
  border-collapse: collapse;
  width: 90%;
  border-radius:15px;
  border: 5px solid rgb(151 255 217);
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 6px;
    height: 69px;
    background-color: white;
    border: 3px solid rgb(151 255 217);
}

tr:nth-child(even) {
  background-color: #dddddd;
}
/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}


input::-webkit-input-placeholder { color: #999999;}
input:-moz-placeholder { color: #999999;}
input::-moz-placeholder { color: #999999;}
input:-ms-input-placeholder { color: #999999;}

textarea::-webkit-input-placeholder { color: #999999;}
textarea:-moz-placeholder { color: #999999;}
textarea::-moz-placeholder { color: #999999;}
textarea:-ms-input-placeholder { color: #999999;}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}


/*---------------------------------------------*/
.container {
	max-width: 1200px;
}




/*//////////////////////////////////////////////////////////////////
[ Contact ]*/

.container-contact100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  position: relative;
  z-index: 1;
}

.container-contact100::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    /* background: rgba(93,84,240,0.5); */
    /* background: -webkit-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5)); */
    /* background: -webkit-linear-gradient(left, rgb(151 255 217), #e5ff006b); */
    background: -o-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
    background: -moz-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
    background: linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
    pointer-events: none;
}
}

.contact100-map {
  position: absolute;
  z-index: -2;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.wrap-contact100 {
    width: 979px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    padding: 66px 47px 25px 47px;
    box-shadow: 0 3px 20px 0px rgb(0 0 0 / 10%);
    -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 0px 20px 15px rgb(0 0 0 / 18%);
    -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
}


/*==================================================================
[ Form ]*/

.contact100-form {
  width: 100%;
}

.contact100-form-title {
  padding: 2%;
    display: block;
    font-family: SourceSansPro-Bold;
    font-size: 30px;
    color: black;
    line-height: 1.2;
    border-radius: 25px;
    text-align: center;
    /* border: 6px solid #dedede; */
    -webkit-box-shadow: 0px 0px 20px 6px rgb(0 0 0 / 18%);
    background: -webkit-linear-gradient(left, rgb(151 255 217), #e5ff006b);
}

body::-webkit-scrollbar {
    width: 10px;
}
 
body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
	background-color:ghostwhite;
	border-radius: 10px;
}
 
body::-webkit-scrollbar-thumb {
    border-radius: 10px;
	background-color:yellowgreen;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}  
/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  background-color: #fff;
  border-radius: 20px;
  margin-bottom: 30px;
}
.bin-delete .fa{
    color: tomato;
    box-shadow: 5px 5px 30px 6px tomato;
    margin-left: 10px;
    animation: andromeda1 1.5s alternate infinite ease-in;
}
.bin-delete .fa:hover{
    color:tomato;
   
}
.bin-delete :hover{
    z-index: inherit;
    box-shadow: 5px 5px 30px 6px #7eff3e;
}
@keyframes andromeda1 {
  0%   {transform: scale(.6);}
  100% {transform: scale(1);}
}
.input100 {
    width: 100%;
    background: transparent;
    font-family: SourceSansPro-Bold;
    font-size: 16px;
    display: inline-table;
    color: #4b2354;
    line-height: 1.2;
}
.input1001 {
    display: inline-table;
    width: 101%;
    background: transparent;
    font-family: SourceSansPro-Bold;
    font-size: 10px;
    font-size: 12px;
    color: #4b2354;
    line-height: 3.2;
    padding: 1% 12%;
    border: 9px solid #53d6a6;
    overflow: hidden;
    padding: 5% 7%;
    border-radius: 20px;
    outline: none;
    transition: all 0.4s ease-in-out;
    box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
}
.input1002 {
  display: inline-table;
    width: 100%;
    background: transparent;
    font-family: SourceSansPro-Bold;
    font-size: 10px;
    font-size: 23px;
    color: #4b2354;
    line-height: 1.2;
    padding: 1% 12%;
    border: 9px solid #53d6a6;
    overflow: hidden;
    padding: 2% 9%;
    letter-spacing: 5px;
    border-radius: 20px;
    text-align: center;
    font-weight: 700;
    outline: none;
    transition: all 0.4s ease-in-out;
    box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
}
.input1001t {
    display: inline-table;
    width: 101%;
    background: transparent;
    font-family: SourceSansPro-Bold;
    font-size: 10px;
    font-size: 12px;
    color: #4b2354;
    line-height: 3.2;
    padding: 1% 12%;
    border: 9px solid rgb(151 255 217);
    overflow: hidden;
    padding: 5% 7%;
    border-radius: 20px;
    outline: none;
    transition: all 0.4s ease-in-out;
    box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
}
.input100 {
    display: block;
    width: 100%;
    background: transparent;
    font-family: SourceSansPro-Bold;
    font-size: 10px;
    font-size: 15px;
    color: #4b2354;
    line-height: 3.2;
    padding: 1% 12%;
    border: 3px solid rgb(255 159 151);
    overflow: hidden;
    padding: 1% 12%;
    border-radius: 20px;
    outline: none;
    transition: all 0.4s ease-in-out;
    box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 0px 20px 6px rgb(255 82 82 / 98%);
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    animation: andromeda 1.5s alternate infinite ease-in;
}
/* @keyframes andromeda {
  0%   {transform: scale(.8);}
  100% {transform: scale(1.1);}
} */

/*---------------------------------------------*/
input.input100 {
  height: 51px;
    padding: 0 20px 0 23px;
    border-radius: 20px;
    transition: all 0.4s;
    border: 3px solid rgb(151 255 217);;
    /* box-shadow: 0 10px 30px 0px #ad3;
    -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -webkit-box-shadow: inset 0px 0px 11px 0px #ad4;
    -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5); */
}


textarea.input100 {
  min-height: 121px;
    padding: 19px 20px 0 23px;
    border-radius: 20px;
    transition: all 0.4s;
    border: 3px solid rgb(151 255 217);
    /* box-shadow: 0 10px 30px 0px #ad3;
    -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -webkit-box-shadow: inset 0px 0px 20px 0px #ad4;
    -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5); */
}

/*------------------------------------------------------------------
[ Focus Input ]*/

.focus-input100 {
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  border-radius: 20px;
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.file-typ{
  padding: 10px;
    background: -webkit-linear-gradient(left, rgb(151 255 217), #e5ff006b);
    border-radius: 6px;
    display: block;
}

.file-typ:hover,:focus{
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
}

.input100:focus, + .focus-input100:hover {
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
}

.input1001:hover,:focus , .input100:hover,:focus{
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  transform: scale(.96);
  
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0px 0px 20px 20px rgb(0 0 0 / 5%);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
}
.input1001t:hover,:focus {
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  /* transform: scale(.96); */
  
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0px 0px 20px 20px rgb(0 0 0 / 5%);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
}
/*------------------------------------------------------------------
[ Button ]*/
.container-contact100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 10px;
  padding-bottom: 43px;
}


.contact100-form-btn {
  display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    min-width: 110px;
    height: 42px;
    background-color: #61d6ab;
    border-radius: 16px;
    font-family: JosefinSans-Bold;
    font-size: 14px;
    color: #fff;
    line-height: 1.2;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding-top: 5px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
    box-shadow: 0 10px 30px 0px #61d6ab;
    -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -webkit-box-shadow: 0 10px 30px 0px #61d6ab;
    -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
}

.contact100-form-btn:hover {
  background-color: #40a285;
    border: 5px solid #61d6ab;
    /* border: 5px solid rgb(151 255 217); */
    box-shadow: 0 10px 30px 0px #40a285;
    -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
    -webkit-box-shadow: 0 10px 30px 0px #40a285;
    -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
    -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
}
.contact100-form-btn:focus, .contact100-form-btn:active {
  background-color: pink;
   
}

/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 768px) {
  .wrap-contact100 {
    padding: 72px 50px 25px 50px;
  }
}

@media (max-width: 576px) {
  .wrap-contact100 {
    padding: 72px 15px 25px 15px;
  }
}


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate .focus-input100 {
  box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
  -moz-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
  -webkit-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
  -o-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
  -ms-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
}

.alert-validate::before {
  content: attr(data-validate);
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  position: absolute;
  width: 100%;
  min-height: 62px;
  background-color: #fff;
  border-radius: 20px;
  top: 0px;
  left: 0px;
  padding: 0 45px 0 22px;
  pointer-events: none;

  font-family: SourceSansPro-Bold;
  font-size: 16px;
  color: #fa4251;
  line-height: 1.2;
}

.btn-hide-validate {
  font-family: Material-Design-Iconic-Font;
  font-size: 15px;
  color: #fa4251;
  cursor: pointer;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  height: 62px;
  top: 0px;
  right: 28px;
}

.rs1-alert-validate.alert-validate::before {
  background-color: #fff;
}

.true-validate::after {
  content: "\f269";
  font-family: Material-Design-Iconic-Font;
  font-size: 15px;
  color: #57b846;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  height: 62px;
  top: 0px;
  right: 28px;
}

/*---------------------------------------------*/
@media (max-width: 576px) {
  .alert-validate::before {
    padding: 0 30px 0 10px;
  }

  .true-validate::after,
  .btn-hide-validate {
    right: 10px;
  }
}
/*----------ROW COL-------------- */

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}
/*==================================================================
[ Contact more ]*/

.contact100-more {
  font-family: SourceSansPro-Regular;
  font-size: 16px;
  color: #999999;
  line-height: 1.5;
  text-align: center;
}

.contact100-more-highlight {
  color: #bd59d4;
}

</style>
<body>


	<div class="container-contact100">

        
		<div class="wrap-contact100">
			
				<span class="contact100-form-title">
				Shopping cart
				</span>
               
<hr>
<br>

<?php
            
      
        
              echo "<div class='input1001'>";
            if(!isset($_SESSION['user_name']))
            {
              
              echo  "<script>alert('Please Login... LogIn require !! ')</script>";
              header("location:login_home.php");
            }else
              {
                  

             
              $nm = $_SESSION['user_name'];
            
              $sql="SELECT *  FROM users WHERE email = '$nm'";
              $result1=mysqli_query($conn,$sql);
            
              while ($row = mysqli_fetch_assoc($result1)) 
              {
               $uid=$row["id"];
               $u_mail=$row['email'];
            
                        $sql = "SELECT * FROM shoppingcart WHERE uid=$uid AND status=0";
                        $result = mysqli_query($conn, $sql);
                        $total_price=0;
                        
                        if (mysqli_num_rows($result) > 0) { ?>
                          
                        <table class="input1001t">
                            <tr>
                               
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th style="">Total</th>
                                <th>Remove</th>
                            </tr>
                         
                            <?php
                            
                            while ($row = mysqli_fetch_assoc($result)) { 
                            $rest = substr($row["name"], 0, 50);?>
            
                               
                                      
                                      <tr>
            
                                   
                                            <td><img width="50" src="category/imgs/<?php echo $row["image"]; ?>" style="";></img> </td>
                                            
                                            <td><?php echo $rest; ?></td>
                                        
                                            <td><?php echo '₹ '.$row["price"];?></td>
                                            <td><?php echo $row["quantity"];?></td>
                                            <td style=""><?php echo '₹ '.$row["price"]*$row["quantity"].'.00';?></td>
                                            <td class='bin-delete' title='Remove'><a href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash fa-2x" style=""></i></a></td>
                                            
                                       </tr>
                                            
            
                                       <?php
                            $total_price += ($row["price"]*$row["quantity"]);?>
            <?php
                            }
                           echo "</table>"; 
                          echo "<table class='input1001t' style='background-color:lightgrey'>
                          <tr>
                            <th  style=''><center>TOTAL PRICE OF ALL THE PRODUCTS</center></th>";
                          echo '<td><strong>₹ '.$total_price.'.00</strong></td></tr></table>';
                        } else {
                            echo "<span class='input100'>Cart Is Empty</span>";
                        }
              }
            }
           
                        ?>
                 
<?php if($total_price==0)
{
        
}
else {?>
<div class="container-contact100-form-btn">
       <a href="checkout.php"><button class="contact100-form-btn" type="submit" name="submit"  value="checkout" style="" title="Checkout Products">
              <i class="fa fa-lock" aria-hidden="true"> Checkout my product</i>
             </button></a><?php } ?>
         <?php $_SESSION['total_p']=$total_price;?>
         </div>

				<!-- <div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						Continue to checkout
					</button>
				</div> -->
			</form>

			<div class="contact100-more">
            Back to Home <a href="index.php" class="contact100-more-highlight" title="Home">click here.</a>&emsp;&emsp;&emsp;&emsp;@copyright greenleaf nursery
			</div>
		</div>
	</div>


 
    <div class="container-contact100">

        
<div class="wrap-contact100">
    
        <span class="contact100-form-title">
        Order History
        </span>
       
<hr>
<br>
      <div class='input1001'>
      <form action="" method="post">
                    <div class="row justify-content-between">
                        <div class="col-2">   
                                <button class="contact100-form-btn" type="submit" name="latest" value="" method="" style="">
	        						 <i class="fa fa-upload" aria-hidden="true" title="Last Ordered"> last</i>
	        						</button></a>
                        </div>
                        <div class="col-2">
                            <button class="contact100-form-btn" type="submit" name="all" value="" method="" style="" title="All Orders">
	        						 <i class="fa fa-list-alt" aria-hidden="true"> All</i>
	        		    	</button></a>
                        </div>
                    </div>
      
            </form>
            <br>
            <?php




$nm = $_SESSION['user_name'];

$sql="SELECT *  FROM users WHERE email = '$nm'";
$result1=mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($result1)) 
  {
          $uid=$row["id"];
          $u_mail=$row['email'];
             
  }
  
  $sql7="SELECT *  FROM shop_history WHERE uid = '$uid'";


  $result7=mysqli_query($conn,$sql7);
  $rowcount=mysqli_num_rows($result7);
if($rowcount == 0)
{

  echo "<center style='color:red';>No History Found</center>";
}
else
{
               while ($row = mysqli_fetch_assoc($result7)) 
               {
                   $ll = $row["lst_tot_prod"];

               }
           
 
              if(isset($_POST['all']))
              {
                $sql2 = "SELECT * FROM ordered WHERE uid=$uid ORDER BY item_time desc ";
                echo "<span class='input1002'>All Ordered Products</span>";
                
              }
               elseif(isset($_POST['latest']))
              {
                  $sql2 = "SELECT * FROM ordered WHERE uid=$uid ORDER BY item_time desc LIMIT $ll";
                  echo "<span class='input1002'>Latest Ordered Products</span>";

              }
              else{
                $sql2 = "SELECT * FROM ordered WHERE uid=$uid ORDER BY item_time desc ";
                echo "<span class='input1002'>All Ordered Products</span>";

              } 

              $result = mysqli_query($conn, $sql2);
        
              $total_price=0;

              
              if (mysqli_num_rows($result) > 0) { ?>
            
          <table class="input1001t">
              <tr>
                 
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Time</th>
                  <th>Total</th>
                  <th>status</th>
              
              </tr>
           
              <?php
              $con=0;
              $oid=0;
              while ($row = mysqli_fetch_assoc($result)) {  $con=$con+1;
                  $resr = substr($row["prod_name"], 0, 41);
              ?>
             
                 
                        
                        <tr>

                              <?php $oid=$row['order_id']; $alien=$row["price"]*$row["quantity"]; $ui=$row["uid"];?>
                              <td><img src="category/imgs/<?php echo $row["image"]; ?>" style="height:100%";></img> </td>
                              
                              <td><?php echo $resr; ?></td>
                          
                              <td><?php echo '₹ '.$row["price"];?></td>
                              <td><?php echo $row["quantity"];?></td>
                              <td><?php echo $row["item_time"];?></td>
                              <td style="width: 14.7%;"><?php echo '₹ '.$row["price"]*$row["quantity"].'.00';?></td>
                              <td><?php echo $row["status"]; 
                              if($row["status"] != "delivered" && $row["status"] != "canceled" )
                              { ?>
                                 <a href="shoppingcart.php?cancel=<?php echo $oid;?>&tot=<?php echo $alien;?>&uid=<?php echo $ui;?>"><br><i class="fa fa-trash fa-x" ></i></a>  
                              <?php }
                                ?>
                              </td>
                              
                         </tr>
                              

                         <?php
              $total_price += ($row["price"]*$row["quantity"]);?>
      <?php
              }
             echo "</table>"; 
             echo "<table class='input1001t' style='background-color:lightgrey'>
            <tr>
              <th >TOTAL PRICE OF ".$con." PRODUCTS </th>";
            echo '<td>₹ '.$total_price.'.00</td></tr>';
            
           echo '</tr></table>';
          } else {
              echo "<br><br><span class='input100'>Shopping Cart History Unavailable</span>";  }
}

          ?>
 </div>

        <!-- <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" name="submit">
                Continue to checkout
            </button>
        </div> -->
    </form>

    <div class="contact100-more">
    Back to Home <a href="index.php" class="contact100-more-highlight" title="Home">click here.</a>&emsp;&emsp;&emsp;&emsp;@copyright greenleaf nursery
    </div>
</div>
</div>


</body>
</html>
