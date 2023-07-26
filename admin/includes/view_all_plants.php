
<table class="table table-bordered table-hover">
                            <thead >
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Del-Price</th>
                                     <th>Description</th>
                                   <th>Care</th>
                                    <th>Fetures</th>
                                    <th>Uses</th> 
                                 
                                </tr>
                            </thead>

                            <tbody>

        <?php 
        
$query = "SELECT * FROM plants";
$select_post = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($select_post))
{
    $post_id = $row['id'];
    $post_category = $row['category'];
    $post_name = $row['name'];
    $post_image = $row['image'];
    $post_price = $row['price'];
    $post_delp = $row['del_price'];
    $post_desc = $row['description'];
    $post_care = $row['care'];
    $post_feture = $row['fetures'];
    $post_uses = $row['uses'];

    echo "<tr>";
    echo "<td>$post_id</td>";
    echo "<td>$post_category</td>";
    echo "<td>$post_name</td>";
    echo "<td><img class='img-responsive' style='' src='../web/category/imgs/$post_image'></td>";
    echo "<td>$post_price</td>";
    echo "<td>$post_delp</td>";
    echo "<td>$post_desc</td>";
    echo "<td>$post_care</td>";
    echo "<td>$post_feture</td>";
    echo "<td>$post_uses</td>";
    echo "<td><a href='plants.php?source=edit_post&id={$post_id}'><b>Edit</b></a></td>";
    echo "<td><a href='plants.php?delete={$post_id}'><b>Delete</b></a></td>";



    echo "</tr>";
}
        

        ?>           
      </tbody>
 </table>


 <?php
 
            if(isset($_GET['delete']))
            {
                $id = $_GET['delete'];

                $query = "DELETE FROM plants WHERE id = {$id}";

                $del_query = mysqli_query($conn, $query);  

                if(!$del_query){

                    die("QUERY FAILED ." . mysqli_error($conn));
           
                   }
                header("location:plants.php");

            }
    
 ?>