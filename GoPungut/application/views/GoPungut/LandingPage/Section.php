
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About GoPungut</h2><br>
      <h4>Sampah saat ini merupakan permasalahan klasik yang dapat menyebabkan berbagai dampak pada semua aspek 
      kehidupan manusia khususnya dalam aspek lingkungan dan kesehatan. Berdasarkan data dari Kementrian Lingkungan
       Hidup tahun 2010, jumlah produksi sampah di Indonesia mencapai 200 ribu ton sehari, dimana daerah perkotaan 
       menyumbang sampah paling banyak.</h4><br>
      <p>GoPungut merupakan sebuah marketplace online yang menitik beratkan pada perwujudan usaha yang berkaitan 
      dengan pengelolaan sampah untuk tujuan komersial dan portal informasi yang menciptakan situasi seperti pasar
       dimana ada penjual sampah daur ulang, pembeli sampah daur ulang dan kurir atau perantara. GoPungut dapat membantu 
       dalam menyelesaikan permasalahan sampah di Indonesia serta menumbuhkan semangat kewirausahaan dan kemandirian masyarakat Indonesia.</p>
    </div>
    <div class="col-sm-4 text-center"><br><br>
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
  </div>
</div>


<div id="signup" class="container-fluid text-center">
  <h2>SIGN UP NOW</h2>
  <h4>Join Us as </h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
    <?php $attribute = array( 'class' => 'form-inline','role' => 'form');
     echo form_open("GoPungut/PilihUserSignUp",$attribute);?>
    <button name="signUp" class="btn btn-primary btn-lg" type="submit" value="1"><span class="glyphicon glyphicon-user logo-small"></span></button><?php echo form_close(); ?>
      <h4>Pengolah Sampah</h4>
   <p>Bagi Anda yang membutuhkan sampah untuk</p>
       <p>diolah menjadi hal yang lebih bermanfaat</p>
    </div>
    <div class="col-sm-4">
     <?php $attribute = array( 'class' => 'form-inline','role' => 'form');
     echo form_open("GoPungut/PilihUserSignUp",$attribute);?>
    <button name="signUp" class="btn btn-primary btn-lg" type="submit" value="2"><span class="glyphicon glyphicon-user logo-small"></span></button><?php echo form_close(); ?>
 <h4>Masyarakat</h4>
      <p>Bagi anda yang ingin menjual sampah</p>
    </div>
    <div class="col-sm-4">
<?php $attribute = array( 'class' => 'form-inline','role' => 'form');
     echo form_open("GoPungut/PilihUserSignUp",$attribute);?>
    <button name="signUp" class="btn btn-primary btn-lg" type="submit" value="3"><span class="glyphicon glyphicon-user logo-small"></span></button><?php echo form_close(); ?>
    <h4>Kurir</h4>
      <p>Bagi anda yang ingin bekerja sebagai</p> 
      <p>kurir untuk mengambili sampah</p>
    </div>
  </div>

  <div id="signin" class="container-fluid text-center">
  <h2>SIGN IN</h2>
  <h4>Choose Who You Are </h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
    <?php $attribute = array( 'class' => 'form-inline','role' => 'form');
     echo form_open("GoPungut/PilihUserSignIn",$attribute);?>
    <button name="signIn" class="btn btn-primary btn-lg" type="submit" value="1"><span class="glyphicon glyphicon-user logo-small"></span></button><?php echo form_close(); ?>
      <h4>Pengolah Sampah</h4>
    </div>
    <div class="col-sm-4">
     <?php $attribute = array( 'class' => 'form-inline','role' => 'form');
     echo form_open("GoPungut/PilihUserSignIn",$attribute);?>
    <button name="signIn" class="btn btn-primary btn-lg" type="submit" value="2"><span class="glyphicon glyphicon-user logo-small"></span></button><?php echo form_close(); ?>
 <h4>Masyarakat</h4>
    </div>
    <div class="col-sm-4">
<?php $attribute = array( 'class' => 'form-inline','role' => 'form');
     echo form_open("GoPungut/PilihUserSignIn",$attribute);?>
    <button name="signIn" class="btn btn-primary btn-lg" type="submit" value="3"><span class="glyphicon glyphicon-user logo-small"></span></button><?php echo form_close(); ?>
    <h4>Kurir</h4>
    </div>
  </div><br><br>
  