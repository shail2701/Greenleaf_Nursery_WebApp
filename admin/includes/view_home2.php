
<table class="table table-bordered table-hover">
                            <thead >
                                <tr>
                                    <th>Number</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Landing Page</th>
                                    
                                </tr>
                            </thead>

                            <tbody>

        <?php 
        
$query = "SELECT * FROM home WHERE no=3";
$select_post = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($select_post))
{
    $post_no = $row['no'];
    $post_nm = $row['name'];
    $post_link = $row['link'];
    $post_land = $row['land'];

    echo "<tr>";
    echo "<td>$post_no</td>";
    echo "<td>$post_nm</td>";
    echo "<td>$post_link</td>";
    echo "<td>$post_land</td>";
    // echo "<td><img class='img-responsive' style='' src='../web/category/imgs/$post_image'></td>";
    // echo "<td>$post_price</td>";

    // echo "<td>$post_desc</td>";
    // echo "<td>$post_care</td>";
    // echo "<td>$post_feture</td>";
    // echo "<td>$post_uses</td>";
       echo "<td><a href='home2.php?source=edit_post&no={$post_no}'><b>Edit</b></a></td>";
    // echo "<td><a href='seeds.php?delete={$post_id}'><b>Delete</b></a></td>";



    echo "</tr>";
}
        

        ?>           
      </tbody>
 </table>


 <?php
 
            // if(isset($_GET['delete']))
            // {
            //     $id = $_GET['delete'];

            //     $query = "DELETE FROM seeds WHERE id = {$id}";

            //     $del_query = mysqli_query($conn, $query);  

            //     if(!$del_query){

            //         die("QUERY FAILED ." . mysqli_error($conn));
           
            //        }
            //     header("location:seeds.php");

            // }
    
 ?>