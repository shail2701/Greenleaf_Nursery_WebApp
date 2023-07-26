


<?php


if(isset($_GET['no'])){

    $no = $_GET['no'];

}


        
$query = "SELECT * FROM home WHERE no = $no";
$select_post = mysqli_query($conn,$query);


while($row = mysqli_fetch_assoc($select_post))
{
    $post_no = $row['no'];
    $post_category = $row['name'];
    $post_link = $row['link'];
    $post_land = $row['land'];
    echo $post_no , $post_link ,  $post_category , $post_land ;

}

if(isset($_POST['update'])){



     $post_category = $_POST['name'];




}

 
 
 
//  $query = "UPDATE home SET name = '{$post_category}',link = '{$post_link}',land = '{$post_land}' WHERE no = {$post_no}";
 //echo $query;












?>
<br><br>
<form action="" method="post" enctype="multipart/form-data">    


 <div class="form-group">
<label for="category">Seeds Category</label>
<select value="" name="dropdone" id="" >
    
<option selected><?php echo $post_category."-selected-";?></option>
<option>easyto</option>
<option>flowering</option>
<option>forest</option>
<option>vegetable</option>

 


</select>
<h3>IF really chose Seeds category So Click update</h3>

<div class="form-group">
  <input class="btn btn-primary" metho="post" type="submit" name="done" value="Upadate Plant">
</div>


</form>
<?php

function checks($query)
{    


}




if(isset($_POST['dropdone'])){


switch($_POST['dropdone']) 
{
case 'easyto';
echo "ME EASY TO GROW  ?";
$post_link  ='easytogrow.php';
$post_land='seeds.php';
$post_category ='easyto';
//  include "includes/plants_add.php";
$query = "UPDATE home SET name = '{$post_category}',link = '{$post_link}',land = '{$post_land}' WHERE no = 2";
$update_post = mysqli_query($conn,$query);

if(!$update_post){

die("QUERY FAILED ." . mysqli_error($conn));
echo "failed ";

}
break; 


case 'flowering';
echo "ME flowering ?";
$post_link='flower.php';
$post_land='seeds.php';
$post_category ='flowering';
$query = "UPDATE home SET name = '{$post_category}',link = '{$post_link}',land = '{$post_land}' WHERE no =2";
$update_post = mysqli_query($conn,$query);

if(!$update_post){

die("QUERY FAILED ." . mysqli_error($conn));
echo "failed ";

}
break; 

case 'forest';
echo "ME forest ?";
$post_link='forest.php';
$post_land='seeds.php';
$post_category = 'forest';       
$query = "UPDATE home SET name = '{$post_category}',link = '{$post_link}',land = '{$post_land}' WHERE no = 1"; 
$update_post = mysqli_query($conn,$query);

if(!$update_post){

die("QUERY FAILED ." . mysqli_error($conn));
echo "failed ";

}
break; 

case 'vegetable';
echo "ME vegetable ?";
$post_link='vegetable.php';
$post_land='seeds.php';
$post_category = 'vegetable';
$query = "UPDATE home SET name = '{$post_category}',link = '{$post_link}',land = '{$post_land}' WHERE no = 2";
$update_post = mysqli_query($conn,$query);

if(!$update_post){

die("QUERY FAILED ." . mysqli_error($conn));
echo "failed ";

}
break; 


default:

echo "ME EASY TO GROW  ?";
$post_link  ='easytogrow.php';
$post_land='seeds.php';
$post_category ='easyto';
//  include "includes/plants_add.php";
$query = "UPDATE home SET name = '{$post_category}',link = '{$post_link}',land = '{$post_land}' WHERE no = 2";
$update_post = mysqli_query($conn,$query);

if(!$update_post){

die("QUERY FAILED ." . mysqli_error($conn));
echo "failed ";

}
break; 
}




}
else{ echo "Not Iterate";}




?>


