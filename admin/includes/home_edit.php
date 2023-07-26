


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
       <label for="category">Plant Category</label>
       <select value="" name="dropdone" id="" >
            
       <option selected><?php echo $post_category."-selected-";?></option>
       <option>avenue</option>
        <option>bonsai</option>
        <option>cactus</option>
        <option>fruit</option>
        <option>herb</option>
         

       
</select>
<h3>IF really chose Plante category So Click update</h3>

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
     case 'cactus';
     echo "ME CACTUS U ?";
     $post_link  ='cactus.php';
     $post_land='product.php';
     $post_category ='cactus';
     //  include "includes/plants_add.php";
     $query = "UPDATE home SET name = '{$post_category}',link = '{$post_link}',land = '{$post_land}' WHERE no = 1";
     $update_post = mysqli_query($conn,$query);

    if(!$update_post){

       die("QUERY FAILED ." . mysqli_error($conn));
       echo "failed ";

      }
     break; 


     case 'fruit';
     echo "ME fruit U ?";
     $post_link='fruit.php';
     $post_land='product.php';
     $post_category ='fruit';
     $query = "UPDATE home SET name = '{$post_category}',link = '{$post_link}',land = '{$post_land}' WHERE no =1";
     $update_post = mysqli_query($conn,$query);

    if(!$update_post){

       die("QUERY FAILED ." . mysqli_error($conn));
       echo "failed ";

      }
     break; 

     case 'herb';
     echo "ME herb U ?";
     $post_link='herb.php';
     $post_land='product.php';
     $post_category = 'herb';       
     $query = "UPDATE home SET name = '{$post_category}',link = '{$post_link}',land = '{$post_land}' WHERE no = 1"; 
     $update_post = mysqli_query($conn,$query);

     if(!$update_post){
 
        die("QUERY FAILED ." . mysqli_error($conn));
        echo "failed ";
 
       }
     break; 

     case 'bonsai';
     echo "ME bonsai U ?";
     $post_link='bonsai.php';
     $post_land='product.php';
     $post_category = 'bonsai';
     $query = "UPDATE home SET name = '{$post_category}',link = '{$post_link}',land = '{$post_land}' WHERE no = 1";
     $update_post = mysqli_query($conn,$query);

    if(!$update_post){

       die("QUERY FAILED ." . mysqli_error($conn));
       echo "failed ";

      }
     break; 


     default:
     case 'avenue';
     $post_link='avenue';
     $post_land='product.php';
     $post_category = 'avenue';
     $query = "UPDATE home SET name = '{$post_category}',link = '{$post_link}',land = '{$post_land}' WHERE no = 1";
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


