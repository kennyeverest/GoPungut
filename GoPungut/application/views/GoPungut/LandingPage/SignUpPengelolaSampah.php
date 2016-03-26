<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		background-color: #5F9EAD;
	}
</style>
<body>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header ">
          <a  style="float:right" href="<?php echo base_url()?>index.php/GoPungut">
       <img src="http://expediaholiday.d.seven2.net/_images/modal_close.png"/>
         </a><br><br><br>
         <div class="text-center">
				<img src="<?php echo base_url('assets/img/Untitled-1.png'); ?>" alt="Logo GoPungut" width="150" height="100"></div>
				<div class="text-center">
        		<h4 class="modal-title " style="color:green" ><?php echo $user;?></h4>
				</div>

		</div>

        <div class="modal-body">


          <?php
   $attribute = array( 'class' => 'form-horizontal',
          'role' => 'form');
   echo form_open($aksi,$attribute);
   ?>
   <div class="form-group row">
  <label for="inputNama" class="col-sm-4 form-control-label">Username</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="inputNama" placeholder="Nama" name="username">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail" class="col-sm-4 form-control-label">Email</label>
  <div class="col-sm-8">
    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputPassword" class="col-sm-4 form-control-label">Password</label>
  <div class="col-sm-8">
    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
  </div>
  </div>
  <div class="form-group row">
  <label for="confirmPassword" class="col-sm-4 form-control-label">Confirm Password</label>
  <div class="col-sm-8">
    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmation Password" name="confirmPassword">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputAlamat" class="col-sm-4 form-control-label">Alamat</label>
  <div class="col-sm-8">
   <textarea type="text" class="form-control" rows="5" id="inputAlamat" placeholder="Alamat" name="alamat"></textarea>
  </div>
  </div>
  <div class="form-group row">
  <label for="inputKontak" class="col-sm-4 form-control-label">Kontak</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="inputKontak" placeholder="Kontak" name="kontak">
  </div>
  </div>
  <div class="kirim">
  <button type="submit" class="btn btn-secondary">Sign in</button>
</div>
       </form>
        </div>



		</div>
      </div>

    </div>
  </div>

</div>

</body>
<script >$('#myModal').modal('show');</script>
</html>
