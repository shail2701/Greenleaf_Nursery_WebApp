<?php include "includes/admin_header.php";

?>



<?php include "includes/admin_navigation.php"; ?>
<!-- php include "login.php";  -->

<style>
.panel{
    border: 5px solid white;
    transition: all 0.4s ease-in-out;
    box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 5px 20px 0px rgb(0 0 0 / 5%);
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
}
.panel:hover,.panel:focus{
    border: 1px solid white;
    box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
  border:none;
  transform: scale(.91);
}
.panel-footer{
    border: 5px solid white;
    border-bottom-left-radius: 14px;
    border-bottom-right-radius: 14px;
    width: 74%;
    color: black;
    background-color: #ffffffba;
    font-weight: 500;
    margin: 4% 14%;
    transition: width 4s, margin 4s;
}
.panel-footer:hover{
    width: 94%;
    margin: 4% 3%;
}

</style>
    <div id="wrapper">


        <!-- Navigation -->
        <!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            Brand and toggle get grouped for better mobile display 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">  Admin</a>
            </div>
            Top Menu Items 
            <ul class="nav navbar-right top-nav">
             
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Darshil Parmar <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                     
                       
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <Sidebar Menu Items - These collapse to the responsive navigation menu on small screens 
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                 
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">View All Categories</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                    </li>

                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
                    </li>
                    
               
                </ul>
            </div>
           
        </nav> -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin Page
                            <small>GreenLeaf</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <!-- <li class="active">
                                <i class="fa fa-file"></i> Home
                            </li> -->
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <br>
     
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-3 col-md-6 " >
        <div class="panel" style="background-image: linear-gradient(45deg, #1eade8, #51ff45eb);
    border: 5px solid white;
    border-radius: 20px;
    color: white;">
            <div class="panel-heading" >
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      
                      <?php 

                        $query = "SELECT * FROM checkout";
                        $select_all_post = mysqli_query($conn,$query);
                        $post_count = mysqli_num_rows($select_all_post);

                      echo  "<div class='huge'>There are Total {$post_count}</div>"

                        ?>


                        <div> Orders</div>
                    </div>
                </div>
            </div>
            <a href="orders.php">
                <div class="panel-footer" style="">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
                        <div class="panel" style="background-image: linear-gradient(45deg, #d462ff, #5a8bf8);
    border: 5px solid white;
    border-radius: 20px;
    color: white;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart  fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                      <?php 

                                    $query = "SELECT * FROM ordered";
                                    $select_all_comments = mysqli_query($conn,$query);
                                    $comment_count = mysqli_num_rows( $select_all_comments);

                                  echo  "<div class='huge'>There are Total {$comment_count} </div>"

                                    ?>

           
                                      <div>Items sold</div>
                                    </div>
                                </div>
                            </div>
                            <a href="order_item.php">
                                <div class="panel-footer" style="">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel" style="    background-image: linear-gradient(45deg, #ff9ea1, #fcff2c);
    border: 5px solid white;
    border-radius: 20px;
    color: white;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                       <?php 

                                        $query = "SELECT * FROM users";
                                        $select_all_users = mysqli_query($conn,$query);
                                        $user_count = mysqli_num_rows($select_all_users);

                                      echo  "<div class='huge'>There are Total {$user_count}</div>"

                                        ?>

                                       
                                        <div> Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer" style="">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel" style="background-image: linear-gradient(45deg, #71f4f0, #f6f85aeb);
    border: 5px solid white;
    border-radius: 20px;
    color: white;">
                            <div class="panel-heading" >
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                     <?php 

                                    $query = "SELECT * FROM ser_detail";
                                    $select_all_categories = mysqli_query($conn,$query);
                                    $category_count = mysqli_num_rows($select_all_categories);

                                  echo  "<div class='huge'>There are Total {$category_count}</div>"

                                    ?>

                                   <div>Service Details</div>
                                    </div>
                                </div>
                            </div>
                            <a href="order_services.php">
                                <div class="panel-footer" style="">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="container-fluid">
            <div class="row">        

                    <div class="col-lg-3 col-md-6">
                        <div class="panel" style="background-image: linear-gradient(45deg, #00fdd2,#1163dd);
    border: 5px solid white;border-radius: 20px;color: white;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                      <?php 

                                    $query = "SELECT * FROM comment";
                                    $select_all_comment = mysqli_query($conn,$query);
                                    $comment_count = mysqli_num_rows( $select_all_comment);

                                  echo  "<div class='huge'>There are Total {$comment_count} </div>";

                                    ?>

           
                                      <div>comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="comment.php">
                                <div class="panel-footer" style="">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel" style="background-image: linear-gradient(115deg, #ffa02c, #ffe931);
 border: 5px solid white;
    border-radius: 20px;
    color: white;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-inr fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                      <?php 

                                    $query = "SELECT * FROM ordered";
                                    $select_all_income = mysqli_query($conn,$query);
                                    $total_prod=0;
                                    while($row = mysqli_fetch_assoc($select_all_income))
                                    {
                                        $total_prod+=$row['price'];
                                    }

                                  echo  "<div class='huge'>Total {$total_prod} ₹</div>"

                                    ?>
                                    
           
                                      <div>Gross Now</div>
                                    </div>
                                </div>
                            </div>
                            <a href="order_item.php">
                                <div class="panel-footer" style="">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
               
                    </div>
                    
                    </div>    
                    <div class="well">
                    <div class="row" style="">
                    
                    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
            
              <?php 

          // $days1 = ['Mon','Tuesday','Wed','Thu','Fri','Sat','Sun'];
  $elements = ['Orders','Services','Users',' Comments'];
    $element_data = [$post_count,$category_count, $user_count,$comment_count,$select_all_comment];


          for($i=0;$i<4; $i++){
        

           
                echo   "['{$elements[$i]}'" . "," . "{$element_data[$i]}],";

        


                }
             

            ?>
 
        ]);

        var options = {
          chart: {
            title: 'Greenleaf Working Preference',
            subtitle: 'Sales, Expenses, and Profit: 2021-2022',
            colors: ['red','green'],

          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
                   

                
   

<div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>
                    

      
    </div>


    </div>
                
                
                
                
                
                
                
                
                
    </div>      
                

</div>
<!-- /.container-fluid -->

</div>


        <?php include "../admin/includes/admin_footer.php"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>