
<table class="table table-bordered table-hover">
                            <thead >
                                <tr>
                                    <th>Id</th>
                                 
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Del-Price</th>
                                     <th>Description</th>
                                    
                                 
                                </tr>
                            </thead>

                            <tbody>

        <?php 
        
$query = "SELECT * FROM accessories";
$select_post = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($select_post))
{
    $post_id = $row['id'];

    $post_name = $row['name'];
    $post_image = $row['image'];
    $post_price = $row['price'];
    $post_delp = $row['del_price'];
    $post_desc = $row['description'];
   

    echo "<tr>";
    echo "<td>$post_id</td>";

    echo "<td>$post_name</td>";
    echo "<td><img class='img-responsive' style='' src='../web/category/imgs/$post_image'></td>";
    echo "<td>$post_price</td>";
    echo "<td>$post_delp</td>";
    echo "<td>$post_desc</td>";
  
    echo "<td><a href='accessories.php?source=edit_post&id={$post_id}'><b>Edit</b></a></td>";
    echo "<td><a href='accessories.php?delete={$post_id}'><b>Delete</b></a></td>";



    echo "</tr>";
}
        

        ?>           
      </tbody>
 </table>


 <?php
 
            if(isset($_GET['delete']))
            {
                $id = $_GET['delete'];

                $query = "DELETE FROM accessories WHERE id = {$id}";

                $del_query = mysqli_query($conn, $query);  

                if(!$del_query){

                    die("QUERY FAILED ." . mysqli_error($conn));
           
                   }
                header("location:accessories.php");
                echo $id." was Deleted";

            }
    
 ?>