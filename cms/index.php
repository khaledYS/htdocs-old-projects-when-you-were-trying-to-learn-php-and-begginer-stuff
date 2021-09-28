<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<style>
		body{
			margin: 0px;
			padding: 0px 0px;
			background-color: paleturquoise;
		}
		#form{
			background-color: paleturquoise;
			padding: 50px 50px 20px 50px;
		}
		.col-auto{
			margin: 10px 0px;
		}
		.btn{
			margin: 20px;
		}
	</style>
    <title>index.php</title>
  </head>
  <body>
	  <!-- Button trigger modal --><center>
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  press here to sign in
</button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">sign in </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		  	  	<form class="row g-3" action="insert.php" method="POST"><center>
  			<div class="col-auto">
    			<label for="staticEmail2" class="visually-hidden">أسم المقال</label>
    			<input type="text"  class="form-control" id="inputEmail2" placeholder="title" name="Email">
  			</div>
  			<div class="col-auto">
				<label for="inputPassword2" class="visually-hidden">المقال</label>
    			<input type="text" class="form-control" id="inputPassword2" placeholder="the Arth" name="Pass">
  			</div>
  			<div class="col-auto">
    			<button type="submit" class="btn btn-primary mb-3">sign in</button>
  			</div></center>
		  </form>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>