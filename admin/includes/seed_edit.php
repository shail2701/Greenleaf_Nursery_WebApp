<?php


        if(isset($_GET['id'])){

            $id = $_GET['id'];

        }


                
$query = "SELECT * FROM seeds WHERE id = $id";
$select_post = mysqli_query($conn,$query);


        while($row = mysqli_fetch_assoc($select_post))
        {
            $post_id = $row['id'];
            $post_category = $row['category'];
            $post_name = $row['name'];
            $post_images = $row['image'];
            $post_price = $row['price'];
            $post_delp = $row['del_price'];
            $post_desc = $row['description'];
            $post_care = $row['care'];
            $post_feture = $row['fetures'];
            $post_uses = $row['uses'];
        }

        if(isset($_POST['create_seeds'])){


         $post_category = $_POST['post_category'];
         $post_name = $_POST['name'];
         // $post_image = $_POST['image'];
         $post_image = $_FILES['image']['name'];
         $post_image_temp = $_FILES['image']['tmp_name'];
         $post_price = $_POST['price'];
         $post_del_price = $_POST['del-price'];
         $post_description = $_POST['description'];
         $post_care = $_POST['care'];
         $post_fetures = $_POST['fetures'];
         $post_uses = $_POST['uses'];
         

         
      // if(empty($post_image)){

      //       $query  = "SELECT * FROME plants WHERE id=$id";
      //       $select_image= mysqli_fetch_array($conn,$query);

      //       while($row = mysqli_fetch_array($select_image)){

      //             $post_image = $row['post_image'];

      //       }

      //    }
      
         
      if($post_image_temp!="") {

         move_uploaded_file($post_image_temp, "../web/category/imgs/$post_image" );
         echo "moved success ".$post_image;

               if($post_category=="" || $post_name=="" || $post_image=="" || $post_price=="" || $post_del_price=="" || $post_description=="" || $post_care=="" || $post_fetures=="" || $post_uses=="")
               {
                  echo "<h3>Field should not be empty.</h3> ";
               }
               else
               {

                     $query = "UPDATE seeds SET category = '{$post_category}',name = '{$post_name}',image = '{$post_image}',price = '{$post_price}',del_price = '{$post_del_price}',description = '{$post_description}',care = '{$post_care}',fetures = '{$post_fetures}', uses = '{$post_uses}' WHERE id = {$post_id}";
                     //echo "<br><br>".$query;

                     
         
                     $update_post = mysqli_query($conn,$query);

                     if(!$update_post){

                     die("QUERY FAILED ." . mysqli_error($conn));
      
                     }

                     else
                     {
                        header("refresh: 1");
                     }
               }
            }
         else
         {
                 
                   
            echo "<h2>Image Not Choosen </h2><h3>Value could not be updated...</h3>";
         }

        }

      




?>

<form action="" method="post" enctype="multipart/form-data">    
     
<!-- <?php
echo "<br>HERE  ".$post_id;
        echo "<br>HERE  ".$post_category;
        echo "<br>HERE  ".$post_name;
        echo "<br>HERE  ".$post_image;
        echo "<br>HERE  ".$post_price;
        echo "<br>HERE  ".$post_delp;
        echo "<br>HERE  ".$post_desc;
        echo "<br>HERE  ".$post_care;
        echo "<br>HERE  ".$post_feture;
        echo "<br>HERE  ".$post_uses;
?> -->
         <div class="form-group">
       <label for="category">Category</label>
       <select value="<?php echo $post_category;?>" name="post_category" id="" >
            
       
       <option >easyto</option>
        <option >flowering</option>
        <option >forest</option>
        <option >vegetable</option>

         

</select>

       <div class="form-group">
         <label for="title">name</label>
          <input type="text" value="<?php echo $post_name;?>" class="form-control" name="name">
      </div>


      <div class="form-group">
         <!-- <label for="image" >Image</label>
          <input type="file" value="<?php echo $post_image;?>" name="image"> -->
            <img width="100" src="../web/category/imgs/<?php echo $post_images;?>" alt="">
      </div>
      <div class="form-group">
         <label for="image">Image</label>
          <input type="file"  name="image">
      </div>



      <div class="form-group">
         <label for="price">Price</label>
          <input type="number" value="<?php echo $post_price;?>" name="price">
      </div>


      <div class="form-group">
         <label for="del-price">Delete Price</label>
          <input type="number" value="<?php echo $post_delp;?>" name="del-price">
      </div>


      <div class="form-group">
         <label for="description">Description</label>
         <textarea value="" class="form-control" name="description"  id="body" cols="40" rows="15"><?php echo $post_desc;?></textarea>
      </div>


      <div class="form-group">
         <label for="care">Care</label>
         <textarea class="form-control" name="care" id="body" value="" cols="40" rows="15"><?php echo $post_care;?></textarea>
      </div>


      <div class="form-group">
         <label for="fetures">Fetures</label>
         <textarea class="form-control" name="fetures" id="body" value="" cols="40" rows="15"><?php echo $post_feture;?></textarea>
      </div>


      <div class="form-group">
         <label for="uses">Uses</label>
         <textarea class="form-control" name="uses" id="body" value="" cols="40" rows="15"><?php echo $post_uses;?></textarea>
      </div>


      <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_seeds" value="Upadate Plant">
      </div>


</form>