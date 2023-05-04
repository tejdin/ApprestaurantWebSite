<?php

class UserList {




 public function show ($users){

  ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>  User | Admin Panel</title>

  <!-- Custom fonts for this template-->
  <link href="/projet/public/ressources/css/css2/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/projet/public/ressources/sb-admin-2.css" rel="stylesheet">
  <script>
function update(id, Frist_name, Last_name, Email, Role) {
  document.getElementById("Id").value = id;
  document.getElementById("Frist_name").value = Frist_name;
  document.getElementById("Last_name").value = Last_name;
  document.getElementById("Email").value = Email;
  document.getElementById("type").value = Role;
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
        <h5 class="modal-title" id="exampleModalLabel">Add User Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/projet/public/admin/users/add" method="POST">
        <div class="modal-body">

            <div class="form-group">
                <label> First Name </label>
                <input type="text"  name="Frist_name" class="form-control" placeholder="Type Here">
            </div>
            <div class="form-group">
                <label> Last Name </label>
                <input  type="text" name="Last_name" class="form-control" placeholder="Type Here">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">

            </div>

            <div class="form-group">
                <label for="type">Type Of User</label>
                  <select name="type" class="form-control">
                    <option value="admin"> Admin </option>
                    <option value="customer"> Customer </option>
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

<!-- ------------------------------------------------------------>
<!-- edit Modal-->

<div class="modal fade" id="editadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/projet/public/admin/users/edit" method="POST">
        <div class="modal-body">
        <input type="hidden" id="Id" name="id">

            <div class="form-group">
                <label> First Name </label>
                <input type="text" id="Frist_name" name="Frist_name" class="form-control" placeholder="Type Here">
            </div>
            <div class="form-group">
                <label> Last Name </label>
                <input type="text" id="Last_name" name="Last_name" class="form-control" placeholder="Type Here">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" id="Email" name="Email" class="form-control" placeholder="Enter Email">

            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="Password" name="Password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label for="type">Type Of User</label>
                  <select name="type" id="type" class="form-control">
                    <option value="admin"> Admin </option>
                    <option value="customer"> Customer </option>
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
    <h6 class="m-0 font-weight-bold text-primary">User Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add UserProfile 
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
            <th>Password </th>
            <th>Type </th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
          <?php
          require_once 'C:/xampp/htdocs/projet/model/user.php'; 
            foreach($users as $user){
              echo '<tr>';
          echo '<td>'.$user->getId().'</td>';
          echo '<td>'.$user->getFirst_name().' '.$user->getLast_name().'</td>';
          echo '<td>'.$user->getEmail().'</td>';
          echo '<td>'.$user->getPassword().'</td>';
          echo '<td>'.$user->getRole().'</td>';
        
          echo '<td><button type="button" name="edit_btn" class="btn btn-success" data-toggle="modal" data-target="#editadminprofile" onclick="update(\'' . $user->getId() . '\', \'' . $user->getFirst_name() . '\', \'' . $user->getLast_name() . '\', \'' . $user->getEmail() . '\', \'' . $user->getRole() . '\')">EDIT</button></td>';

  echo'<td>
  <form action="/projet/public/admin/users/delete/'.$user->getId().'" method="post">
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