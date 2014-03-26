<div class="col-md-6 col-md-offset-3">

  <br>
  <br>
  <br>
  <br>
  <center> <img src="<?=base_url(); ?>assets/images/logo.png" alt="logo" width="200px;"> </center>
  <br>
  
 <center><h2> Área Administrativa </h2></center>
</div>

<div class="col-md-6 col-md-offset-3">
<form class="form-horizontal" role="form" method="post" action="<?=base_url();?>admin/login/logar">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="senha">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Logar</button>
    </div>
  </div>
</form>
  <div><center>  <?=validation_errors(); ?></center></div>
</div>
