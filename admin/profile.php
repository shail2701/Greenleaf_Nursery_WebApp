<?php include "includes/admin_header.php" ?>


    <div id="wrapper">
        
  

        <!-- Navigation -->
 
        <?php include "includes/admin_navigation.php" ?>
        
        
    

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">

  <h1 class="page-header">
                Welcome to admin
                <small>Green Leaf</small>
            </h1>
 <?php     
  
 if(isset($_SESSION['umail'])) {
    
    $email = $_SESSION['umail'];
  

    $query = "SELECT * FROM users WHERE email = '{$email}' ";
    
    $select_user_profile_query = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($select_user_profile_query)) {
    

        $uid = $row['id'];
        $user_email = $row['email'];
        $user_password= $row['password'];
        $name = $row['name'];
        $img = $row['img'];
        $contact = $row['contact'];
        $address = $row['address'];
        $user_role= $row['type'];

    
    
  
      ?>     

 
        <div class="form-group">
        <img class="input-img" width="200" src="../web/images/<?php echo $img; ?>" alt="" >
        </div>

        <div class="form-group">
         <label for="title">Admin Id</label>
          <input type="text" value="<?php echo $uid; ?>" class="form-control" name="user_firstname" disabled>
      </div>

        
       <div class="form-group">
         <label for="post_status">Email id</label>
          <input type="text" value="<?php echo $user_email; ?>" class="form-control" name="user_lastname" disabled>
      </div>

      <div class="form-group">
         <label for="title">Name</label>
          <input type="text" value="<?php echo $name; ?>" class="form-control" name="user_firstname" disabled>
      </div>
     
        <div class="form-group">
            <label for="post_tags">Role</label>
            <input type="text" value="<?php echo $user_role; ?>" class="form-control" name="username" disabled>
        </div>
      

      
      
      <div class="form-group">
         <label for="post_content">Password</label>
          <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password" disabled>
      </div>
      
        
      <div class="form-group">
         <label for="post_tags">Contact</label>
          <input type="text" value="<?php echo $contact; ?>" class="form-control" name="username" disabled>
      </div>


      <div class="form-group">
         <label for="post_content">Address</label>
          <textarea type="email" value="" class="form-control" name="user_email" disabled><?php echo $address; ?></textarea >
      </div>


      <?php }}else{ echo "WHAT HAPPENS";} ?>
    
            
            
            
      
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>

     
        <!-- /#page-wrapper -->
        
    <?php include "includes/admin_footer.php" ?>
