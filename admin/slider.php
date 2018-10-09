<?php include_once 'includes/header.php'; ?>
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Slider</li>
    </ol>
</nav>
<!-- dasboard -->
<button type="button" class="btn btn-raised btn-success btn-block btn-lg" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus-circle"></i>
    Add Image
</button>
<table class="table table-bordered table-hover table-striped table-responsive-sm">
  <thead class="thead-dark">
    <tr>
      <th class="align-middle text-center" scope="col">#</th>
      <th class="align-middle text-center" scope="col">Name</th>
      <th class="align-middle text-center" scope="col">Description</th>
      <th class="align-middle text-center" scope="col">Image</th>
      <th class="align-middle text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="align-middle text-center" scope="row">1</th>
      <td class="align-middle text-center">Image 1</td>
      <td class="align-middle text-center">Description 1</td>
      <td class="align-middle text-center"><img src="../img/slider1.jpg" alt="" height="35%"></td>
      <td class="align-middle text-center">
          <a href=""><i class="fa fa-edit"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href=""><i class="fa fa-trash-alt"></i></a>
      </td>
    </tr>
    <tr>
      <th class="align-middle text-center" scope="row">2</th>
      <td class="align-middle text-center">Image 2</td>
      <td class="align-middle text-center">Description 2</td>
      <td class="align-middle text-center"><img src="../img/slider2.jpg" alt="" height="35%"></td>
      <td class="align-middle text-center">
          <a href=""><i class="fa fa-edit"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href=""><i class="fa fa-trash-alt"></i></a>
      </td>
    </tr>
    <tr>
      <th class="align-middle text-center" scope="row">3</th>
      <td class="align-middle text-center">Image 3</td>
      <td class="align-middle text-center">Description 3</td>
      <td class="align-middle text-center"><img src="../img/slider3.jpg" alt="" height="35%"></td>
      <td class="align-middle text-center">
          <a href=""><i class="fa fa-edit"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href=""><i class="fa fa-trash-alt"></i></a>
      </td>
    </tr>
  </tbody>
</table>
<?php include_once 'includes/sliderAddModal.php'; ?>
<?php include_once 'includes/footer.php'; ?>