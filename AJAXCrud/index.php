<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery & AJAX Introduction | PHP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			background-color: #2e2e2e;
		}
		.container{
			top:50%;
			left:50%;
			transform:translate(-50%,-50%);
			position: absolute;
		}
	</style>
</head>
<body>
	<div class="container" id="viewRecords">
		<table class="table table-bordered table-hover table-dark table-sm text-center">
			<thead class="thead-light">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Age</th>
					<th>Course</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody class="tbody">
			</tbody>
		</table>
		<button class="btn btn-outline-primary float-right" data-toggle='modal' data-target='#create'>ADD</button>
	</div>

<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">jQuery & AJAX Introduction | PHP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm">
		<h3>Edit Records</h3>
		<input type="number" class="form-control" name="id" placeholder="ID"><br>
		<input type="text" class="form-control" name="name" placeholder="Name" required><br>
		<input type="number" class="form-control" name="age" placeholder="Age" required><br>
		<input type="text" class="form-control" name="course" placeholder="Course" required><br>
		<button class="btn btn-outline-primary">Confirm</button>
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">jQuery & AJAX Introduction | PHP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addForm">
		<h3>Add New Record</h3>
		<input type="number" class="form-control" name="id" placeholder="ID"><br>
		<input type="text" class="form-control" name="name" placeholder="Name" required><br>
		<input type="number" class="form-control" name="age" placeholder="Age" required><br>
		<input type="text" class="form-control" name="course" placeholder="Course" required><br>
		<button class="btn btn-outline-success">Create</button>
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>






	

	

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>