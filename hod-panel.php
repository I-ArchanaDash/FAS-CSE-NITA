<!DOCTYPE html>
<?php 
include('func1.php');
$con=mysqli_connect("localhost","root","","fasdb");
?>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <a class="navbar-brand" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp NIT AGARTALA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <style >
      .btn-outline-light:hover{
        color: #25bef7;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
      }
    </style>

  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #342ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>

  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <h3 style = "margin-left: 37%; padding-bottom: 20px;font-family:'IBM Plex Sans', sans-serif; text-transform: capitalize;">Welcome, &nbsp<?php echo $_SESSION['hname'] ?></h3>
    <div class="row">
  <div class="col-md-4" style="max-width:18%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" href="#list-dash" role="tab" aria-controls="home" data-toggle="list">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#list-fac" id="list-fac-list" role="tab" data-toggle="list" aria-controls="home">Faculties</a>
      <a class="list-group-item list-group-item-action" href="#list-thes" id="list-thes-list" role="tab" data-toggle="list" aria-controls="home"> Thesis</a>
      <a class="list-group-item list-group-item-action" href="#list-pub" id="list-pub-list" role="tab" data-toggle="list" aria-controls="home"> Publications</a>
      <a class="list-group-item list-group-item-action" href="#list-course" id="list-course-list" role="tab" data-toggle="list" aria-controls="home"> Courses</a>
      <a class="list-group-item list-group-item-action" href="#list-resp" id="list-resp-list" role="tab" data-toggle="list" aria-controls="home"> Responsibilities</a>
      <a class="list-group-item list-group-item-action" href="#list-sub" id="list-sub-list" role="tab" data-toggle="list" aria-controls="home"> Teachings</a>
    </div><br>
  </div>

  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">
      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        
              <div class="container-fluid container-fullw bg-white" >
              <div class="row">

               <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Faculties</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script>                      
                      <p class="links cl-effect-1">
                        <a href="#list-fac" onclick="clickDiv('#list-fac-list')">
                          Faculties
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: -3%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Thesis</h4>
                        
                      <p class="cl-effect-1">
                        <a href="#list-thes" onclick="clickDiv('#list-thes-list')">
                          Thesis
                        </a>
                      </p>
                    </div>
                  </div>
                </div> 
           
        
            <div class="col-sm-4">
                <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                          <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                          <h4 class="StepTitle" style="margin-top: 5%;">Publication list</h4>
                        
                          <p class="cl-effect-1">
                            <a href="#list-pub" onclick="clickDiv('#list-pub-list')">
                              View Publications
                            </a>
                          </p>
                    </div>
                </div>
            </div>
          </div>
              
            <div class="row">
            <div class="col-sm-4" style="left: 0%;margin-top: 5%;">
              <div class="panel panel-white no-radius text-center">
                <div class="panel-body">
                  <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                  <h4 class="StepTitle" style="margin-top: 5%;">Courses</h4>
                    
                  <p class="links cl-effect-1">
                    <a href="#list-course" onclick="clickDiv('#list-course-list')">
                      Courses
                    </a>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-sm-4" style="left: -3%;margin-top: 5%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Responsibility</h4>
                        
                      <p class="cl-effect-1">
                        <a href="#list-resp" onclick="clickDiv('#list-resp-list')">
                          view responsibility
                        </a>
                      </p>
                    </div>
                  </div>
                </div> 

                <div class="col-sm-4" style="left: 0%;margin-top: 5%">
                <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                          <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                          <h4 class="StepTitle" style="margin-top: 5%;">Teaching</h4>
                        
                          <p class="cl-effect-1">
                            <a href="#list-sub" onclick="clickDiv('#list-sub-list')">
                              View teaching
                            </a>
                          </p>
                    </div>
                  </div>
              </div>
              </div>
            

          
          </div>
        </div>

          
 
    <div class="tab-pane fade" id="list-fac" role="tabpanel" aria-labelledby="list-home-list">
        
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">SNo.</th>          
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","fasdb");
                    global $con;
                    
                    $query = "select pid,fname,lname,email,contact from faculty;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      ?>
                      <tr>
                        <td><?php echo $row['pid'];?></td>                       
                        <td><?php echo $row['fname'];?></td>
                        <td><?php echo $row['lname'];?></td>                  
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                     
                        
                     
                        


                      </tr></a>
                    <?php } ?>
                </tbody>
              </table>
        <br>
      </div>

      

      <div class="tab-pane fade" id="list-thes" role="tabpanel" aria-labelledby="list-thes-list">
        <table class="table table-hover">
                <thead>
                  <tr>
                    
                    <th scope="col">Sno</th>
                    <th scope="col">Course</th>
                    <th scope="col">Thesis Topic</th>
                    <th scope="col">Name</th>
                    <th scope="col">Enroll</th>
                    <th scope="col">Year</th>
                    <th scope="col">Supervision type</th>
                    <th scope="col">Guide</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","fasdb");
                    global $con;

                    $query = "select * from thesis;";
                    
                    $result = mysqli_query($con,$query);
                    if(!$result){
                      echo mysqli_error($con);
                    }
                    

                    while ($row = mysqli_fetch_array($result)){
                  ?>
                      <tr>
                        <td><?php echo $row['sno'];?></td>
                        <td><?php echo $row['course'];?></td>
                        <td><?php echo $row['thesis'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['enroll'];?></td>
                        <td><?php echo $row['year'];?></td>
                        <td><?php echo $row['stype'];?></td>
                        <td><?php echo $row['faculty'];?></td>                                                             
                      </tr>
                    <?php }
                    ?>
                </tbody>
              </table>
      </div>

      <div class="tab-pane fade" id="list-pub" role="tabpanel" aria-labelledby="list-pub-list">
        
        <table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">Type</th>
              <th scope="col">Title</th>
              <th scope="col">Author(s)</th>
              <th scope="col">Volume No</th>
              <th scope="col">Issue No</th>
              <th scope="col">Year</th>
              <th scope="col">Indexing</th>
              <th scope="col">Publisher</th>
              <th scope="col">Isn/Isbn</th>
              <th scope="col">Faculty</th>
            </tr>
          </thead>
          <tbody>
            <?php
              
              $con=mysqli_connect("localhost","root","","fasdb");
              global $con;
              
              $sql1="SELECT * FROM `publication`;";
              $result = mysqli_query($con,$sql1);
              //echo $sql;
              if(!$result){
                echo mysqli_error($con);
              }
              while ($row = mysqli_fetch_array($result)){
                
                
               
            ?>
              <tr>
                  <td><?php echo $row['type'];?></td>
                  <td><?php echo $row['title'];?></td>
                  <td><?php echo $row['auth'];?></td>
                  <td><?php echo $row['vol'];?></td>
                  <td><?php echo $row['issue'];?></td>
                  <td><?php echo $row['year'];?></td>
                  <td><?php echo $row['ind'];?></td>
                  <td><?php echo $row['publ'];?></td>
                  <td><?php echo $row['isn'];?></td>
                  <td><?php echo $row['faculty'];?></td>
              </tr>
              <?php }
              ?>
              </tbody>   
        </table>
  <br>
</div>
           
<div class="tab-pane fade" id="list-course" role="tabpanel" aria-labelledby="list-course-list">
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Program</th>
                    <th class="col">Semester</th>
                    <th class="col">Code</th>
                    <th class="col">Name of subject</th>
                    <th class="col">No. of credits</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","fasdb");
                    global $con;

                    $query = "select prog,sem,code,subName,credits from courses";
                    
                    $result = mysqli_query($con,$query);
                    if(!$result){
                      echo mysqli_error($con);
                    }
                    

                    while ($row = mysqli_fetch_array($result)){
                  ?>
                      <tr>
                        <td><?php echo$row['prog'];?></td>
                        <td><?php echo $row['sem'];?></td>
                        <td><?php echo $row['code'];?></td>
                        <td><?php echo $row['subName'];?></td>
                        <td><?php echo $row['credits'];?></td>                                                                                 
                      </tr>
                    <?php }
                    ?>
                </tbody>
              </table>
            </div>

  <div class="tab-pane fade" id="list-resp" role="tabpanel" aria-labelledby="list-resp-list">
        
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Responsibility Area</th>
              <th scope="col">Responsibility</th>
              <th scope="col">From</th>
              <th scope="col">To</th>
              <th scope="col">Faculty</th>
            </tr>
          </thead>
          <tbody>
            <?php
              
              $con=mysqli_connect("localhost","root","","fasdb");
              global $con;
              $sql="SELECT * FROM `responsibility`";
              $result = mysqli_query($con,$sql);
              //echo $sql;
              if(!$result){
                echo mysqli_error($con);
              }
              while ($row = mysqli_fetch_array($result)){
                
                
               
            ?>
              <tr>
                  <td><?php echo $row['respArea'];?></td>
                  <td><?php echo $row['resp'];?></td>
                  <td><?php echo $row['from'];?></td>
                  <td><?php echo $row['to'];?></td>
                  <td><?php echo $row['faculty'];?></td>
       
              </tr>
              <?php }
              ?>
              </tbody>   
        </table>
      <br>
      </div> 

      <div class="tab-pane fade" id="list-sub" role="tabpanel" aria-labelledby="list-sub-list">
        
        <table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">Course</th>
              <th scope="col">Semester</th>
              <th scope="col">Subject Taught</th>
              <th scope="col">Academic Year</th>
              <th scope="col">Faculty</th>
         
              
            </tr>
          </thead>
          <tbody>
            <?php
              
              $con=mysqli_connect("localhost","root","","fasdb");
              global $con;
              $sql1="SELECT * FROM `teaching`";
              $result = mysqli_query($con,$sql1);
              //echo $sql;
              if(!$result){
                echo mysqli_error($con);
              }
              while ($row = mysqli_fetch_array($result)){
                
                
               
            ?>
              <tr>
                  <td><?php echo $row['course'];?></td>
                  <td><?php echo $row['sem'];?></td>
                  <td><?php echo $row['sub'];?></td>
                  <td><?php echo $row['year'];?></td>
                  <td><?php echo $row['faculty'];?></td>
              </tr>
              <?php }
              ?>
              </tbody>   
        </table>
  <br>
</div>





       
    </div>
  </div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>