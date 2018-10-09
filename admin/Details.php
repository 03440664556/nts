<?php

if(!isset($_SESSION)){
    session_start();
}

?>
    <!DOCTYPE html>
    <html>
    <?php 
require_once("includes/header.php");
include 'connection.php';
// echo "session_login : " . $_SESSION['login'];
// exit(1);
if($_SESSION['login']=="1"){
?>
    <script type="text/javascript">
    window.onload = function() {
        var wid = document.getElementById("projectName").offsetWidth;
        document.getElementById("projectDetails").style.width = wid + "px";
        document.getElementById("clientTestimonial").style.width = wid + "px";
    }
    </script>

    <body>
        <nav class="navbar" width="100%" style="width: 100%;">
            <div class="container-fluid" style="width: 100%;">
                <div class="navbar-header" style="width: 100%;">
                    <a class="navbar-brand" href="#"><img src="assets/images/LinearLogo.png" width="75%"></a>
                    <a class="navbar-brand" href="index.php" style="float: right;">Logout</a>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-inverse sidebar" role="navigation">
            <center>
                <h1 style="color: white; margin-top: 10px;">Portfolio Details - Admin Panel</h1></center>
        </nav>
        <div class="col-sm-1 navbar-toggler-left well">
            <p align="center"><a href="Details.php">Portfolio</a></p>
            <br>
            <p align="center"><a href="Details.php?q=new">Add New</a></p>
        </div>
        <?php
    // $sessionCheck = htmlspecialchars($_GET["q"]);
    if(isset($_GET['q'])){

            require_once('includes/editModal.php');
    }
    else{
        ?>
            <div class="table-responsive col-lg-offset-1" style="margin-bottom: 5em;">
                <div class="panel-body">
                    <input type="text" class="form-control" data-action="filter" data-filters="#dev-table" placeholder="Filter Projects" id="myInput" onkeyup="myFunction()" autofocus="" />
                </div>
                <table id="myTable" class="table table-bordred table-striped">
                    <thead>
                        <th>
                            <input type="checkbox" id="checkall" />
                        </th>
                        <th>Project Name</th>
                        <th>Project Details</th>
                        <th>Client Name</th>
                        <th>Client Testimonial</th>
                        <th>Created By</th>
                        <th>Completed On</th>
                        <th>Skills</th>
                        <th>Website Link</th>
                        <th>Categories</th>
                        <!-- <th>Edit</th> -->
                    </thead>
                    <tbody>
                        <?php 

                $sql = "SELECT  pid, thumbnail_image, header_image, project_details, client_name, client_testimonial, created_by, completed_on, skills, website_link, project_name, category FROM tbl_projectdetails";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()){

                    $pid = $row["pid"];
                    $projectName = $row["project_name"];
                    $projectDetails = $row["project_details"];
                    $clientName = $row["client_name"];
                    $clientTestimonial = $row["client_testimonial"];
                    $createdBy = $row["created_by"];
                    $completedOn = $row["completed_on"];
                    $completedOn = date("D, d M Y", strtotime($completedOn));
                    $skills = $row["skills"];
                    $websiteLink = $row["website_link"];
                    $category = "all" . $row["category"];

                 ?>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                            </td>
                            <td><?=$projectName ?></td>
                            <td><?=$projectDetails ?></td>
                            <td><?=$clientName ?></td>
                            <td><?=$clientTestimonial ?></td>
                            <td><?=$createdBy ?></td>
                            <td><?=$completedOn ?></td>
                            <td><?=$skills ?></td>
                            <td><?=$websiteLink ?></td>
                            <td><?=$category ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
            </div>
            <?php } 
            require_once('includes/footer.php');
            ?>
 

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td1 = tr[i].getElementsByTagName("td")[1];
    td2 = tr[i].getElementsByTagName("td")[2];
    td3 = tr[i].getElementsByTagName("td")[3];
    td4 = tr[i].getElementsByTagName("td")[4];
    td5 = tr[i].getElementsByTagName("td")[5];
    td6 = tr[i].getElementsByTagName("td")[6];
    td7 = tr[i].getElementsByTagName("td")[7];
    td8 = tr[i].getElementsByTagName("td")[8];
    td9 = tr[i].getElementsByTagName("td")[9];
    if (td9 || td8 || td7 || td6 || td5 || td4 || td3 || td2 || td1) {
      if (td9.innerHTML.toUpperCase().indexOf(filter) > -1 ||
        td8.innerHTML.toUpperCase().indexOf(filter) > -1 ||
        td7.innerHTML.toUpperCase().indexOf(filter) > -1 ||
        td6.innerHTML.toUpperCase().indexOf(filter) > -1 || 
        td5.innerHTML.toUpperCase().indexOf(filter) > -1 || 
        td4.innerHTML.toUpperCase().indexOf(filter) > -1 || 
        td3.innerHTML.toUpperCase().indexOf(filter) > -1 || 
        td2.innerHTML.toUpperCase().indexOf(filter) > -1 || 
        td1.innerHTML.toUpperCase().indexOf(filter) > -1
        ) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

    </body>
    <?php 
}
else{
    header("Location: index.php");
}
 ?>


    </html>