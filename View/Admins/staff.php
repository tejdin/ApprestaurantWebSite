<?php

class StaffList {




 public function show ($staffs){

  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>  Staff | Admin Panel</title>

  <!-- Custom fonts for this template-->
  <link href="/projet/public/ressources/css/css2/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/projet/public/ressources/sb-admin-2.css" rel="stylesheet">
  <script>
function update(id, F_name, Email, Phone_number, Job, Salaire) {
  document.getElementById("Id").value = id;
  document.getElementById("f_name").value = F_name;
  document.getElementById("email").value = Email;
  document.getElementById("Phone_numb").value = Phone_number;
  document.getElementById("salaire").value = Salaire;

  // Sélectionnez l'option appropriée dans le menu déroulant
  var selectElement = document.getElementById("type");
  selectElement.value = Job;
}

</script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/projet/public/admin">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Restaurant<sup>®</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="/projet/public/admin">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="/projet/public/admin/users">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>User</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="/projet/public/admin/reservs">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Reservation</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="/projet/public/admin/dtables">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Dining Tables</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="/projet/public/admin/feedbacks">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>FeedBack</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="/projet/public/admin/staffs">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Staff</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">  
               ADMIN
                </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>

              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">

          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form action="/projet/public/logout" method="POST"> 
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- ---------------------------------------------------------- -->
<!-- add Modal-->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Staff Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/projet/public/admin/staffs/add" method="POST">

        <div class="modal-body">
              
            <div class="form-group">
                <label> Full Name </label>
                <input type="text" name="f_name" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
            <label for="phone_numb">Phone Number: <br></label>
                <input required type="text" name="Phone_numb" placeholder="Type Here" class="form-control">
            </div>
            <div class="form-group">
            <label for="salaire">Salaire: <br></label>
                <input required type="text" name="salaire" placeholder="Type Here" class="form-control">
            </div>
            <div class="form-group">
            <label for="type">Job <br></label>
            <select name="type" id="type" class="form-control">
                    <option value="Restaurant_Manger"> Restaurant Manger </option>
                    <option value="customer"> Cashier </option>
                    <option value="Chef"> Chef </option>
                    <option value="server"> Server </option>
                    <option value="Dishwasher"> Dishwasher </option>
                  </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- ---------------------------------------------------------- -->
<!-- edit Modal-->
<div class="modal fade" id="editadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT Staff Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/projet/public/admin/staffs/edit" method="POST">

        <div class="modal-body">
        <input type="text" name="id" hidden id="Id">
            <div class="form-group">
                <label> Full Name </label>
                <input type="text" name="f_name" id="f_name" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
            <label for="phone_numb">Phone Number: <br></label>
                <input required type="text" id="Phone_numb" name="Phone_numb" placeholder="Type Here" class="form-control">
            </div>
            <div class="form-group">
            <label for="salaire">Salaire: <br></label>
                <input required type="text" id="salaire" name="salaire" placeholder="Type Here" class="form-control">
            </div>
            <div class="form-group">
            <label for="type">Job <br></label>
            <select name="type" id="type" class="form-control">
                    <option value="Restaurant_Manger"> Restaurant Manger </option>
                    <option value="customer"> Cashier </option>
                    <option value="Chef"> Chef </option>
                    <option value="server"> Server </option>
                    <option value="Dishwasher"> Dishwasher </option>
                  </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- ---------------------------------------------------------- -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Staff Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Staff Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th>ID </th>
            <th>Full Name </th>
            <th>Email </th>
            <th>Phone Number </th>
            <th>Salaire(TDN)</th>
            <th>Job</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
        <?php
          require_once 'C:/xampp/htdocs/projet/model/Staff.php'; 
            foreach($staffs as $staff){
              echo '<tr>';
          echo '<td>'.$staff->getId_Staff().'</td>';
          echo '<td>'.$staff->getFull_name().'</td>';
          echo '<td>'.$staff->getEmail().'</td>';
          echo '<td>'.$staff->getPhone_number().'</td>';
          echo '<td>'.$staff->getSalaire().'</td>';
          echo '<td>'.$staff->getJob().'</td>';
        
          echo '<td><button type="button" name="edit_btn" class="btn btn-success" data-toggle="modal" data-target="#editadminprofile"
           onclick="update(\'' . $staff->getId_Staff() . '\', \'' . $staff->getFull_name() . '\', \'' . $staff->getEmail() . '\', \'' . $staff->getPhone_number() . '\', \'' . $staff->getJob() . '\', \'' . $staff->getSalaire() . '\')">EDIT</button></td>';

  echo'<td>
  <form action="/projet/public/admin/staffs/delete/'.$staff->getId_Staff().'" method="post">
        <input type="hidden" name="id_user" value="">
        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
      </form>
  </td>
';

            } 
           ?>

          </tr>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php

include('../View/ressourcesphp/scripts_ad.php');
include('../View/ressourcesphp/footer_ad.php');
 }

}