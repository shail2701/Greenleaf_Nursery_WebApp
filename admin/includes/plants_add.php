<?php 

    if(isset($_POST['create_plant'])){

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

     

        // $query = "INSERT INTO plants ( category, name,image,price,del_price,description,care,fetures,uses) VALUES('{$post_category}','{$post_name}','{ $post_image}',{$post_price},{$post_del_price},'{$post_description}', '{$post_care}','{$post_fetures}','{$post_uses}') ";  
        if($post_image_temp!="") {

         move_uploaded_file($post_image_temp, "../web/category/imgs/$post_image" );
         echo "<br>moved success ".$post_image;

               if($post_category=="" || $post_name=="" || $post_image=="" || $post_price=="" || $post_del_price=="" || $post_description=="" || $post_care=="" || $post_fetures=="" || $post_uses=="")
               {
                  echo "<h3>Field should not be empty.</h3> ";
               }
               else
               {   
        
                     $query = "INSERT INTO plants(category, name,image,price,del_price,description,care,fetures,uses) VALUES('{$post_category}','{$post_name}','{$post_image}',{$post_price},{$post_del_price},'{$post_description}','{$post_care}','{$post_fetures}','{$post_uses}') ";

                  $create_post_query = mysqli_query($conn, $query);  

                  if(!$create_post_query){

                        die("QUERY FAILED ." . mysqli_error($conn));

                  }
                  else
                     {
                        header("location:./plants.php");
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
     

         <div class="form-group">
       <label for="category">Category</label>
       <select name="post_category" id="">
            
            
        <option >avenue</option>
        <option >bonsai</option>
        <option >cactus</option>
        <option >fruit</option>
        <option >herb</option>

         

</select>

       <div class="form-group">
         <label for="title">name</label>
          <input type="text" class="form-control" name="name">
      </div>


      <div class="form-group">
         <label for="image">Image</label>
          <input type="file"  name="image">
      </div>


      <div class="form-group">
         <label for="price">Price</label>
          <input type="number"  name="price">
      </div>


      <div class="form-group">
         <label for="del-price">Delete Price</label>
          <input type="number"  name="del-price">
      </div>


      <div class="form-group">
         <label for="description">Description</label>
         <textarea class="form-control "name="description" id="body" cols="40" rows="15"></textarea>
      </div>


      <div class="form-group">
         <label for="care">Care</label>
         <textarea class="form-control "name="care" id="body" cols="40" rows="15"></textarea>
      </div>


      <div class="form-group">
         <label for="fetures">Fetures</label>
         <textarea class="form-control "name="fetures" id="body" cols="40" rows="15"></textarea>
      </div>


      <div class="form-group">
         <label for="uses">Uses</label>
         <textarea class="form-control "name="uses" id="body" cols="40" rows="15"></textarea>
      </div>


      <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_plant" value="Publish Plant">
      </div>


</form>
    