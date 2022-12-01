<!DOCTYPE html>
<?php 
$con=mysqli_connect("localhost","root","","fasdb");

if(isset($_POST['hodsub']))
{
  $hname=$_POST['hname'];
  $hpassword=$_POST['hpassword'];
  $hemail=$_POST['hemail'];
  $query="INSERT INTO `hod` (`username`, `email`, `password`) VALUES ('$hname', '$hemail', '$hpassword');";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('HOD added successfully!');</script>";
    }
}

if(isset($_POST['allhod']))
{
  $hodName=$_POST['hodName'];
  $email=$_POST['email'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  $query="INSERT INTO `hodhist` (`hodName`, `email`, `from`, `to`) VALUES ('$hodName', '$email', '$from', '$to');";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('HOD added successfully!');</script>";
    }
}


if(isset($_POST['prog1']))
{
  $prog=$_POST['prog'];
  $sem=$_POST['sem'];
  $code=$_POST['code'];
  $subName=$_POST['subName'];
  $credits=$_POST['credits'];
  
  $query="INSERT INTO `courses` (`prog`,`sem`,`code`,`subName`,`credits`) VALUES ('$prog','$sem','$code','$subName','$credits');";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('A new program is added successfully!');</script>";
  }
}


if(isset($_POST['hodsub1']))
{
  $hemail=$_POST['hemail'];
  $query="delete from hod where email='$hemail';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('HOD removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}

/* if(isset($_POST['prog2']))
{
  $course=$_POST['course'];
  $query="delete from course where code='$code';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Program removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
} */


?>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpeg" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <a class="navbar-brand" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp NIT AGARTALA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<!--   <script >
    var check = function() {
  if (document.getElementById('dpassword').value ==
    document.getElementById('cdpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
  </script> -->

  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

.col-md-4{
  max-width:20% !important;
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

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
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
    <h3 style = "margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"> Welcome, ADMIN</h3>
    <div class="row">
  <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#hod" id="list-hod-list"  role="tab"    aria-controls="home" data-toggle="list">HOD</a>
      <a class="list-group-item list-group-item-action" href="#list-fac" id="list-fac-list"  role="tab" data-toggle="list" aria-controls="home">Faculty</a>
      <a class="list-group-item list-group-item-action" href="#list-thes" id="list-thes-list"  role="tab" data-toggle="list" aria-controls="home">Thesis</a>
      <a class="list-group-item list-group-item-action" href="#list-pub" id="list-pub-list"  role="tab" data-toggle="list" aria-controls="home">Publication</a>
      <a class="list-group-item list-group-item-action" href="#list-course1" id="list-course1-list"  role="tab" data-toggle="list" aria-controls="home">Add Program</a>
      <a class="list-group-item list-group-item-action" href="#list-prog" id="list-prog-list"  role="tab" data-toggle="list" aria-controls="home">Program</a>
      <a class="list-group-item list-group-item-action" href="#list-settings" id="list-ahod-list"  role="tab" data-toggle="list" aria-controls="home">Add HOD</a>
      <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-dhod-list"  role="tab" data-toggle="list" aria-controls="home">Remove HOD</a>
      <a class="list-group-item list-group-item-action" href="#hod-hist" id="list-hod-hist"  role="tab"    aria-controls="home" data-toggle="list">Add All HOD</a>
      <a class="list-group-item list-group-item-action" href="#hod-all" id="list-allhod-list"  role="tab"    aria-controls="home" data-toggle="list">View All HOD</a>
      <a class="list-group-item list-group-item-action" href="#list-resp" id="list-resp-list"  role="tab" data-toggle="list" aria-controls="home">Responsibility</a>
      <a class="list-group-item list-group-item-action" href="#list-sub" id="list-sub-list"  role="tab" data-toggle="list" aria-controls="home">Teaching</a>
      
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
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-user fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">HOD</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script> 
                      <p class="links cl-effect-1">
                        <a href="#hod" onclick="clickDiv('#list-hod-list')">
                          view current
                        </a> &nbsp|
                        <a href="#hod-all" onclick="clickDiv('#list-allhod-list')">
                          view all
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: -3%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Faculty list</h4>
                      
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-fac-list')">
                          View faculties
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              

                <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Thesis list</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-app-list')">
                          View all thesis
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-4" style="left: 0%;margin-top: 5%;">
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



                <div class="col-sm-4" style="left: -3%;margin-top: 5%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Manage Programs</h4>
                    
                      <p class="cl-effect-1">
                      <a href="#list-course1" onclick="clickDiv('#list-course1-list')">Add</a>
                        &nbsp|
                        <a href="#list-prog" onclick="clickDiv('#list-prog-list')">
                          View
                        </a>
                      </p>
                    </div>
                  </div>
                </div>


                <div class="col-sm-4" style="left: 0%;margin-top: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-user fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Manage HOD</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-ahod-list')">Add current</a>
                        &nbsp|
                        <a href="#app-hist" onclick="clickDiv('#list-dhod-list')">
                          Remove
                        </a>
                        &nbsp|
                        <a href="#hod-hist" onclick="clickDiv('#list-hod-hist')">
                          Add all
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>
                        

                <div class="row">
                <div class="col-sm-4" style="left: 0%;margin-top: 5%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Responsibility</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#list-resp" onclick="clickDiv('#list-resp-list')">
                          View Responsibility
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

        
                
                <div class="col-sm-4" style="left: -3%;margin-top: 5%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Teachings</h4>
                      
                      <p class="cl-effect-1">
                        <a href="#list-sub" onclick="clickDiv('#list-sub-list')">
                          View Teaching
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                </div>  
              </div>
            </div>
      
                
<!-- -------------------------------------------VIEW CURRENT HOD---------------------------------------------------------------------------------- -->

<div class="tab-pane fade" id="hod" role="tabpanel" aria-labelledby="list-home-list">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">HOD Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","fasdb");
                    global $con;
                    $query = "select * from hod";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      $name= $row['username'];
                      $email = $row['email'];
                      $password = $row['password'];
                    
                      
                      echo "<tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$password</td>                       
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>
        <br>
      </div>
      
<!----------------------------------------------------------VIEW ALL HOD--------------------------------------------------------------------->
<div class="tab-pane fade" id="hod-all" role="tabpanel" aria-labelledby="list-allhod-list">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">HOD Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","fasdb");
                    global $con;
                    $query = "select * from hodhist";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      $hodName= $row['hodName'];
                      $email = $row['email'];
                      $from = $row['from'];
                      $to = $row['to'];
                      
                      echo "<tr>
                        <td>$hodName</td>
                        <td>$email</td>
                        <td>$from</td> 
                        <td>$to</td>                      
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>
        <br>
      </div>
   
<!------------------------------------------------------------------FACULTY------------------------------------------------------------------------------->

<div class="tab-pane fade" id="list-fac" role="tabpanel" aria-labelledby="list-home-list">

<div class="col-md-8">
      <form class="form-group" action="facultysearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>

        
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


<!-------------------------------------------------ADD COURSES------------------------------------------------------------------------------>
<div class="tab-pane fade" id="list-course1" role="tabpanel" aria-labelledby="list-course1-list">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
                  <div class="col-md-4"><label>Program:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="prog" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Semester:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="sem" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Course Code:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="code" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Course Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="subName" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>No. of credits:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="credits" onkeydown="return alphaOnly(event);" required></div><br><br>  
                  
                </div>
          <input type="submit" name="prog1" value="Add" class="btn btn-primary">
        </form>
      </div>
<!-- ---------------------------------------------------------VIEW COURSES-------------------------------------------------------------------- -->

<div class="tab-pane fade" id="list-prog" role="tabpanel" aria-labelledby="list-prog-list">

<div class="col-md-8">

 <div class="row">
 

 
       <table class="table table-hover">
         <thead>
           <tr>
             <th scope="col">Program</th>
             <th class="col">Semester</th>
             <th class="col">Course Code</th>
             <th class="col">Course Name</th>
             <th class="col">No. of credits</th>
           </tr>
         </thead>
         <tbody>
           <?php 
             $con=mysqli_connect("localhost","root","","fasdb");
             global $con;
             $query = "select prog,sem,code,subName,credits from courses";
             $result = mysqli_query($con,$query);
             while ($row = mysqli_fetch_array($result)){
               
               $prog=$row['prog'];
               $sem=$row['sem'];
               $code=$row['code'];
               $subName=$row['subName'];
               $credits=$row['credits'];

               
               echo "<tr>
                 <td>$prog</td>
                 <td>$sem</td>
                 <td>$code</td>
                 <td>$subName</td>
                 <td>$credits</td>
               </tr>";
             }

           ?>
           
         </tbody>
       </table>
 <br>
</div>
</div>
</div>


<!-------------------------------------------------------------THESIS------------------------------------------------------------------------->


<div class="tab-pane fade" id="list-thes" role="tabpanel" aria-labelledby="list-thes-list">
<div class="col-md-8">
      <form class="form-group" action="thesissearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="thesis" placeholder="Enter thesis topic" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>



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
<!--------------------------------------------------------------------------PUBLICATIONS---------------------------------------------------------->

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



      

<!---------------------------------------------------------------------RESPONSIBILITY---------------------------------------------------------------->
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

<!------------------------------------------------------------------------TEACHING------------------------------------------------------------>

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

<!-- ----------------------------------------------------------------------------MANAGE HOD----------------------------------------------------- -->
<!-------------------- ADD CURRENT HOD-------------------- -->

<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
                  <div class="col-md-4"><label>Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="hname" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="hemail" required></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control"  onkeyup='check();' name="hpassword" id="hpassword"  required></div><br><br>
                  <div class="col-md-4"><label>Confirm Password:</label></div>
                  <div class="col-md-8"  id='cpass'><input type="password" class="form-control" onkeyup='check();' name="cdpassword" id="cdpassword" required>&nbsp &nbsp<span id='message'></span> </div><br><br>
                </div>
          <input type="submit" name="hodsub" value="Add HOD" class="btn btn-primary">
        </form>
      </div>
<!-----------------REMOVE CURRENT HOD----------------------->
  <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="hemail" required></div><br><br>
                  
          </div>
          <input type="submit" name="hodsub1" value="Remove" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>
  

<!-----------------ADD ALL HOD-------------------------->
<div class="tab-pane fade" id="hod-hist" role="tabpanel" aria-labelledby="list-hod-hist">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
                  <div class="col-md-4"><label>Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="hodName" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="email" required></div><br><br>
                  <div class="col-md-4"><label>From:</label></div>
                  <div class="col-md-8"><input type="date" class="form-control"  name="from"  required></div><br><br>
                  <div class="col-md-4"><label>To:</label></div>
                  <div class="col-md-8"><input type="date" class="form-control" name="to" required>&nbsp &nbsp</div><br><br>
                </div>
          <input type="submit" name="allhod" value="Add HOD" class="btn btn-primary">
        </form>
      </div>
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

