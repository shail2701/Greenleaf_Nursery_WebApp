<?php include "includes/admin_header.php";?>
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
                            
                            
                            <small> Darshil</small>
                        </h1>
              
     
                    </div>
                </div>
       
                <!-- /.row -->
                
                
                
                
                
                
                
            
    
                <div class="row">
                    
                    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
            
              <?php 

          // $days1 = ['Mon','Tuesday','Wed','Thu','Fri','Sat','Sun'];
  $elements = ['Active Posts','Categories','Users',' Comments'];
    $element_data = [$post_count,$category_count, $user_count,$comment_count];


          for($i=0;$i<4; $i++){
        

           
                echo   "['{$elements[$i]}'" . "," . "{$element_data[$i]}],";

        


                }
             

            ?>
 
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
                   
                   
<div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>
                    
                    
                    
                    
                    
                </div>



                
                
                
                
                
                
                
                
                
                
                

            </div>
            <!-- /.container-fluid -->

        </div>
        
        
        
     
        
        <!-- /#page-wrapper -->
        
    <?php include "includes/admin_footer.php" ?>
