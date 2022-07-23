<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyContacts</title>
   
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/db76417cf2.js" crossorigin="anonymous"></script>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>
<body>

    <div class="container">
        <div class="buttons" style="margin: 20px 0px;">
            <button  id="add"  class="btn btn-success">Add New</button>
                <!-- modal  -->
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Save Your Contacts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class="fa fa-window-close" style="background-color: white; font-size: 20px;" aria-hidden="true"></i>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
        <div class="form-group mb-2">
          <label for="">ID</label>
          <input type="text" class="form-control" id="id">
        </div>

        <div class="form-group mb-2">
          <label for="">Name</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group mb-2">
          <label for="">Mobile</label>
          <input type="text" class="form-control" id="mobile">
        </div>
        <div class="form-group mb-2">
          <label for="">Address</label>
          <input type="text" class="form-control" id="address">
        </div>

        <div class="form-group mb-2">
          <label for="">Category</label>
          <input type="text" class="form-control" id="Category">
        </div>
        <button type="button" class="btn btn-primary" id="save">Save changes</button>
      </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
        -->
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="tables">
        <table class="table" id="contactTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Category</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   
  </tbody>
</table>

        </div>
    </div>


    <!-- update modal -->
    <div class="modal fade" id="updateContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Save Your Contacts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class="fa fa-window-close" style="background-color: white; font-size: 20px;" aria-hidden="true"></i>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
        <div class="form-group mb-2">
          <label for="">ID</label>
          <input type="text" class="form-control" id="uid">
        </div>

        <div class="form-group mb-2">
          <label for="">Name</label>
          <input type="text" class="form-control" id="uname">
        </div>
        <div class="form-group mb-2">
          <label for="">Mobile</label>
          <input type="text" class="form-control" id="umobile">
        </div>
        <div class="form-group mb-2">
          <label for="">Address</label>
          <input type="text" class="form-control" id="uaddress">
        </div>

        <div class="form-group mb-2">
          <label for="">Category</label>
          <input type="text" class="form-control" id="uCategory">
        </div>
        <button type="button" class="btn btn-primary" id="edit">Edit</button>
      </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
        -->
      </div>
    </div>
  </div>
</div>
    <!-- update end  -->



    <!--  end modal -->

<!-- <button class="btn btn-danger">Sucess</button> -->

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="../js/jquery-3.6.0.min.js"></script> -->
<script src="../js/app.js"></script>


</body>
</html>