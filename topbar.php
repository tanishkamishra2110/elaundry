<?php>

<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: #343A40;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}

img.new_icon {
  vertical-align: middle;
  border-style: none;
  height: 35px;
  position: relative;
  right: 95px;
  top: 1px;
}
</style>

<nav class="navbar navbar-dark bg-dark fixed-top " style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
        <div class="laundry-logo"></div>
  			</div>
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b> <img src="icon.png" class="new_icon" alt=""> <span style="font-size: 25px">E-Laun</span> </b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>
</php>