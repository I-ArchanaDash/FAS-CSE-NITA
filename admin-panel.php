<!DOCTYPE html>
<?php 
include('func.php');  

$con=mysqli_connect("localhost","root","","fasdb");

$pid = $_SESSION['pid'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$insert = false;
if(isset($_POST['name'])){
  $course=$_POST['course'];
  $thesis=$_POST['thesis'];
  $name=$_POST['name'];
  $enroll=$_POST['enroll'];
  $year=$_POST['year'];
  $stype=$_POST['stype'];
  $sql="INSERT INTO `thesis` (`course`, `thesis`, `name`, `enroll`, `year`, `stype`, `faculty`) VALUES ('$course', '$thesis', '$name', '$enroll', '$year', '$stype', '$username');";
  //echo $sql;



  //execute the query
  if($con->query($sql)==true){
    //echo "successfully submitted";

    //flag for successful insertion
    $insert = true;
  }
  else{
    echo"ERROR: $sql <br> $con->error";
  }
  //close the db connection
  $con->close();
}

/* function display_course()
{
	global $con;
	$query="select * from course";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$course=$row['course'];
		echo '<option value="'.$course.'" >'.$course.'</option>';
	}
} */  

?>
<?php 

$con=mysqli_connect("localhost","root","","fasdb");

$insert1 = false;
if(isset($_POST['title'])){
  $type=$_POST['type'];
  $title=$_POST['title'];
  $auth=$_POST['auth'];
  $vol=$_POST['vol'];
  $issue=$_POST['issue'];
  $year=$_POST['year'];
  $ind=$_POST['ind'];
  $publ=$_POST['publ'];
  $isn=$_POST['isn'];
  $sql1="INSERT INTO `publication` (`type`, `title`, `auth`, `vol`, `issue`, `year`, `ind` , `publ`, `isn`, `faculty`) VALUES ('$type', '$title', '$auth', '$vol', '$issue', '$year', '$ind', '$publ' , '$isn' , '$username');";
  //echo $sql;

  //execute the query
  if($con->query($sql1)==true){
    //echo "successfully submitted";

    //flag for successful insertion
    $insert1 = true;
  }
  else{
    echo"ERROR: $sql1 <br> $con->error";
  }
  //close the db connection
  $con->close();
}

?>

<?php 

$con=mysqli_connect("localhost","root","","fasdb");

$insert = false;
if(isset($_POST['resp'])){
  $respArea=$_POST['respArea'];
  $resp=$_POST['resp'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  
  $sql="INSERT INTO `responsibility` (`respArea`, `resp`, `from`, `to`, `faculty`) VALUES ('$respArea', '$resp', '$from', '$to', '$username');";
  //echo $sql;

  //execute the query
  if($con->query($sql)==true){
    //echo "successfully submitted";

    //flag for successful insertion
    $insert = true;
  }
  else{
    echo"ERROR: $sql <br> $con->error";
  }
  //close the db connection
  $con->close();
}

?>

<?php 

$con=mysqli_connect("localhost","root","","fasdb");

$insert = false;

if(isset($_POST['sub'])){
  $course=$_POST['course'];
  $sem=$_POST['sem'];
  $sub=$_POST['sub'];
  $year=$_POST['year'];
  
  $sql="INSERT INTO `teaching` (`course`, `sem`, `sub`, `year` , `faculty`) VALUES ('$course', '$sem', '$sub', '$year', '$username');";
  //echo $sql;

  //execute the query
  if($con->query($sql)==true){
    //echo "successfully submitted";

    //flag for successful insertion
    $insert = true;
  }
  else{
    echo"ERROR: $sql <br> $con->error";
  }
  //close the db connection
  $con->close();
}

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp NIT AGARTALA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

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

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
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
    <h3 style = "margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif; text-transform: capitalize;"> Welcome, &nbsp<?php echo $username ?> 
   </h3>
    <div class="row">
  <div class="col-md-4" style="max-width:25%; margin-top: 3%">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Add the new thesis supervised</a>
      <a class="list-group-item list-group-item-action" href="#thes-hist" id="list-thes-list" role="tab" data-toggle="list" aria-controls="home">Thesis supervised previously</a>
      <a class="list-group-item list-group-item-action" href="#pub-list" id="list-pub-list" rol="tab" data-toggle="list" aria-controls="home">Add Publication details</a>
      <a class="list-group-item list-group-item-action" href="#pub-list1" id="list-pub1-list" rol="tab" data-toggle="list" aria-controls="home">View Publications</a>
      <a class="list-group-item list-group-item-action" href="#resp-list" id="list-resp-list" rol="tab" data-toggle="list" aria-controls="home">Add Responsibilty</a>
      <a class="list-group-item list-group-item-action" href="#resp1-list" id="list-resp1-list" rol="tab" data-toggle="list" aria-controls="home">View Responsibilty</a>
      <a class="list-group-item list-group-item-action" href="#sub-list" id="list-sub-list" role="tab" data-toggle="list" aria-controls="home">Add Teaching</a>
      <a class="list-group-item list-group-item-action" href="#sub1-list" id="list-sub1-list" role="tab" data-toggle="list" aria-controls="home">View Teaching</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">


      <div class="tab-pane fade  show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white" >
              <div class="row">
               <div class="col-sm-4" style="left: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;"> Add The New Thesis Supervised</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script>                      
                      <p class="links cl-effect-1">
                        <a href="#list-home" onclick="clickDiv('#list-home-list')">
                          Add the new thesis supervised
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: 10%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Thesis Supervision History</h2>
                    
                      <p class="cl-effect-1">
                        <a href="#thes-hist" onclick="clickDiv('#list-thes-list')">
                          View Thesis supervised previously
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>
                
         
            </div>
            
        <div class="container-fluid container-fullw bg-white" >
              <div class="row">
               <div class="col-sm-4" style="left: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Add Publications</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script>                    
                      <p class="links cl-effect-1">
                        <a href="#pub-list" onclick="clickDiv('#list-pub-list')">
                          Add Publications
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: 10%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">View Publications</h2>
                    
                      <p class="cl-effect-1">
                        <a href="#pub-list1" onclick="clickDiv('#list-pub1-list')">
                          View Publications
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>
                
         
         

          <div class="container-fluid container-fullw bg-white" >
              <div class="row">
               <div class="col-sm-4" style="left: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Add Responsibility</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script>                    
                      <p class="links cl-effect-1">
                        <a href="#resp-list" onclick="clickDiv('#list-resp-list')">
                          Add Responsibility
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
          

                <div class="col-sm-4" style="left: 10%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">View Responsibilty</h2>
                    
                      <p class="cl-effect-1">
                        <a href="#resp1-list" onclick="clickDiv('#list-resp1-list')">
                          View Responsibility
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
          
              </div>
          </div>
         
           
          <div class="container-fluid container-fullw bg-white" >
              <div class="row">
               <div class="col-sm-4" style="left: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Add Teaching</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script>                    
                      <p class="links cl-effect-1">
                        <a href="#sub-list" onclick="clickDiv('#list-sub-list')">
                          Add Teaching
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
          

                <div class="col-sm-4" style="left: 10%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">View Teaching</h2>
                    
                      <p class="cl-effect-1">
                        <a href="#sub1-list" onclick="clickDiv('#list-sub1-list')">
                          View Teaching
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
          
              </div>
          </div> 


          </div>
          </div>



      <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <center><h4>Add the recently supervised thesis</h4></center><br>
              
              <form class="form-group" method="post" action="admin-panel.php" onsubmit="submitFunction()">
                <div class="row">
        
                   
                  <div class="col-md-4"><label>Course *</label></div>
                  <div class="col-md-8"><select id="course" class="form-control" name="course" required>
                    <option value="select">--Select--</option>
                    <option value="MTECH(AI)">MTECH(AI)</option>
                    <option value="MTECH(CS)">MTECH(CS)</option>
                    <option value="MTech(DS)">MTech(DS)</option>
                    <option value="BTech">BTech</option>
                    <option value="MCA">MCA</option>
                    </select>
                  </div><br><br>
                  <div class="col-md-4"><label>Thesis title *</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="thesis" placeholder="enter thesis title" required></div><br><br>
                  <div class="col-md-4"><label>Name of the student *</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="name" placeholder="enter name of the student" required></div><br><br>
                  <div class="col-md-4"><label>Enrollment No *</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="enroll" placeholder="enter enrollment number" required></div><br><br>
                  <div class="col-md-4"><label>Year *</label></div>
                  <div class="col-md-8"><input type="number" class="form-control datepicker" name="year" placeholder="yyyy" min="1900"required>
                  <script>
                        document.querySelector("input[type=number]")
                        .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
                  </script>
                  </div><br><br>
                  <div class="col-md-4"><label>Supervision type *</label></div>
                  <div class="col-md-8"><select id="stype"class="form-control" name="stype" required>
                    <option value="select">--Select--</option>
                    <option value="Single">Single</option>
                    <option value="Joint">Joint</option>
                    </select>
                    </div><br><br>
                   

                  <div class="col-md-4">
                    <input type="submit" name="app-submit" value="Submit" class="btn btn-primary" id="inputbtn">
                  </div>
                  <div class="col-md-8"></div>                  
                </div>
              </form>
            </div>
          </div>
        </div><br>
      </div>
      
      <div class="tab-pane fade" id="thes-hist" role="tabpanel" aria-labelledby="list-thes-list">
        
        <table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">Course</th>
              <th scope="col">Thesis title</th>
              <th scope="col">Student Name</th>
              <th scope="col">Enrollment no.</th>
              <th scope="col">Year</th>
              <th scope="col">Supervision type</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
              
              $con=mysqli_connect("localhost","root","","fasdb");
              global $con;
              $username = $_SESSION['username'];
              $sql="SELECT course, thesis, name, enroll, year, stype FROM `thesis` WHERE faculty='$username';";
              $result = mysqli_query($con,$sql);
              //echo $sql;
              if(!$result){
                echo mysqli_error($con);
              }
              while ($row = mysqli_fetch_array($result)){
                
                #course=$row['$course'];
                #thesis=$row['$thesis'];
                #name=$row['name'];
                #enroll=$row['enroll'];
                #year=$row['year'];
                #stype=$row['stype'];
               
            ?>
              <tr>
                  <td><?php echo $row['course'];?></td>
                  <td><?php echo $row['thesis'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['enroll'];?></td>
                  <td><?php echo $row['year'];?></td>
                  <td><?php echo $row['stype'];?></td>



              </tr>
              <?php }
              ?>
              </tbody>   
        </table>
  <br>
</div>

      <div class="tab-pane fade" id="pub-list" role="tabpanel" aria-labelledby="list-pub-list">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <center><h4>Add Publication Details</h4></center><br>
              
              <form class="form-group" method="post" action="admin-panel.php" onsubmit="submitFunction()">
                <div class="row">
        
                   
                  <div class="col-md-4"><label>Type *</label></div>
                    <div class="col-md-8"><select id="type" class="form-control" name="type"required>
                    <option value="select">--Select--</option>
                    <option value="Journal">Journal</option>
                    <option value="Conference">Conference</option>
                    <option value="Book">Book</option>
                    <option value="Others">Others</option>
                    </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Title *</label></div>
                    <div class="col-md-8"><input type="text" class="form-control" name="title" Placeholder="enter publication title" required></div><br><br>
                  <div class="col-md-4"><label>Author(s) *</label></div>
                    <div class="col-md-8"><input type="text" class="form-control" name="auth" placeholder="mention authors' names"required></div><br><br>
                  <div class="col-md-4"><label>Volume No.</label></div>
                    <div class="col-md-8"><input type="text" class="form-control" name="vol" placeholder="mention volume no. if applicable"></div><br><br>
                  <div class="col-md-4"><label>Issue No.</label></div>
                    <div class="col-md-8"><input type="text" class="form-control" name="issue" placeholder="mention issue no. if applicable"></div><br><br>
                  <div class="col-md-4"><label>Year *</label></div>
                    <div class="col-md-8"><input type="number" class="form-control" name="year" placeholder="yyyy" min="1900"required>
                    <script>
                        document.querySelector("input[type=number]")
                        .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
                    </script>
                    </div><br><br>
                  <div class="col-md-4"><label>Indexing</label></div>
                    <div class="col-md-8"><select id="ind"class="form-control" name="ind">
                    <option value="select">--Select--</option>
                    <option value="SCI">SCI</option>
                    <option value="SCIE">SCIE</option>
                    <option value="SCOPUS">SCOPUS</option>
                    <option value="ESCI">ESCI</option>
                    <option value="Others">Others</option>
                    </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Publisher *</label></div>
                    <div class="col-md-8"><input type="text" class="form-control" name="publ" placeholder="mention publisher name"required></div><br><br>
                  <div class="col-md-4"><label>ISN/ISBN/DOI</label></div>
                    <div class="col-md-8"><select id="isn" class="form-control" name="isn">
                    <option value="select">--Select--</option>
                    <option value="ISN">ISN</option>
                    <option value="ISBN">ISBN</option>
                    <option value="DOI">DOI</option>
                    </select>
                    </div><br><br> 

                  <div class="col-md-4">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary" id="inputbtn">
                  </div>
                  <div class="col-md-8"></div>                  
                </div>
              </form>
            </div>
          </div>
        </div><br>
      </div>

      <div class="tab-pane fade" id="pub-list1" role="tabpanel" aria-labelledby="list-pub1-list">
        
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
              
            </tr>
          </thead>
          <tbody>
            <?php
              
              $con=mysqli_connect("localhost","root","","fasdb");
              global $con;
              $username = $_SESSION['username'];
              $sql1="SELECT * FROM `publication` WHERE faculty='$username';";
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
              </tr>
              <?php }
              ?>
              </tbody>   
        </table>
  <br>
</div>



<div class="tab-pane fade" id="resp-list" role="tabpanel" aria-labelledby="list-resp-list">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <center><h4>Add Responsibility</h4></center><br>
              
              <form class="form-group" method="post" action="admin-panel.php" onsubmit="submitFunction()">
                <div class="row">
        
                  <div class="col-md-4"><label>Responsibility area *</label></div>
                  <div class="col-md-8"><select id="respArea" class="form-control" name="respArea"required>
                  <option value="select">--Select--</option>
                  <option value="Department">Department</option>
                  <option value="Institute">Institute</option>
                  </select>
                  </div><br><br>
                  <div class="col-md-4"><label>Responsibilty *</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="resp" placeholder="Mention your responsibility" required></div><br><br>
                  <div class="col-md-4"><label>From *</label></div>
                  <div class="col-md-8"><input type="date" class="form-control" name="from" required></div><br><br>
                  <div class="col-md-4"><label>To *</label></div>
                  <div class="col-md-8"><input type="date" class="form-control" name="to" required></div><br><br>
                  

                  <div class="col-md-4">
                    <input type="submit" name="app-submit" value="Submit" class="btn btn-primary" id="inputbtn">
                  </div>
                  <div class="col-md-8"></div>                  
                </div>
              </form>
            </div>
          </div>
        </div><br>
      </div>
      
      <div class="tab-pane fade" id="resp1-list" role="tabpanel" aria-labelledby="list-resp1-list">
        
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Responsibility Area</th>
              <th scope="col">Responsibility</th>
              <th scope="col">From</th>
              <th scope="col">To</th>
            </tr>
          </thead>
          <tbody>
            <?php
              
              $con=mysqli_connect("localhost","root","","fasdb");
              global $con;
              $username = $_SESSION['username'];
              $sql="SELECT * FROM `responsibility` WHERE faculty='$username';";
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
       
              </tr>
              <?php }
              ?>
              </tbody>   
        </table>
  <br>
</div>            

<div class="tab-pane fade" id="sub-list" role="tabpanel" aria-labelledby="list-sub-list">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <center><h4>Add Teaching</h4></center><br>
              
              <form class="form-group" method="post" action="admin-panel.php" onsubmit="submitFunction()">
                <div class="row">
        
                <div class="col-md-4"><label>Course *</label></div>
                  <div class="col-md-8"><select id="course" class="form-control" name="course" required>
                    <option value="select">--Select--</option>
                    <option value="MTECH(AI)">MTECH(AI)</option>
                    <option value="MTECH(CS)">MTECH(CS)</option>
                    <option value="MTech(DS)">MTech(DS)</option>
                    <option value="BTech">BTech</option>
                    <option value="MCA">MCA</option>
                    </select>
                  </div><br><br>
                  <div class="col-md-4"><label>Semester *</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="sem" placeholder="Mention semester" required></div><br><br>
                  <div class="col-md-4"><label>Subject taught *</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="sub" placeholder="Mention subject"required></div><br><br>
                  <div class="col-md-4"><label>Academic year *</label></div>
                    <div class="col-md-8"><input type="number" class="form-control" name="year" placeholder="yyyy" min="1900"required>
                    <script>
                        document.querySelector("input[type=number]")
                        .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
                    </script>
                    </div><br><br>

                  <div class="col-md-4">
                    <input type="submit" name="app-submit" value="Submit" class="btn btn-primary" id="inputbtn">
                  </div>
                  <div class="col-md-8"></div>                  
                </div>
              </form>
            </div>
          </div>
        </div><br>
      </div>


      <div class="tab-pane fade" id="sub1-list" role="tabpanel" aria-labelledby="list-sub1-list">
        
        <table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">Course</th>
              <th scope="col">Semester</th>
              <th scope="col">Subject Taught</th>
              <th scope="col">Academic Year</th>
         
              
            </tr>
          </thead>
          <tbody>
            <?php
              
              $con=mysqli_connect("localhost","root","","fasdb");
              global $con;
              $username = $_SESSION['username'];
              $sql1="SELECT course,sem,sub,year FROM `teaching` WHERE faculty='$username';";
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
              </tr>
              <?php }
              ?>
              </tbody>   
        </table>
  <br>
</div>



    <script>
    function submitFunction() {
      alert("Details submitted successfully");
    }
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js">
   </script>

<!-- if(isset($_POST['title'])){
  $type=$_POST['type'];
  $title=$_POST['title'];
  $auth=$_POST['auth'];
  $vol=$_POST['vol'];
  $issue=$_POST['issue'];
  $year=$_POST['year'];
  $ind=$_POST['ind'];
  $publ=$_POST['publ'];
  $isn=$_POST['isn'];
  
} -->
  </body>
</html>
