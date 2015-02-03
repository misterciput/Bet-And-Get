<?php

	$this->load->view('header_v');
	
?>

<div class="carousel slide" id="banner">
	<ol class="carousel-indicators">
		<li data-target="#banner" data-slide-to="0" class="active"></li>
		<li data-target="#banner" data-slide-to="1"></li>
		<li data-target="#banner" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" >
		<div class="item active" >
			<img src="<?php echo base_url();?>assets/img/1.jpg" alt="BGET Bet and Get" width="1400px">
		</div>
		<div class="item">
			<a href="#modal-vendor" data-toggle="modal"><img src="<?php echo base_url();?>assets/img/2.jpg" alt="Komunikasi" width="1400px"></a>
		</div>
		<div class="item">
			<a href="#modal-user" data-toggle="modal"><img src="<?php echo base_url();?>assets/img/3.jpg" alt="Gizi" width="1400px"></a>
			</div>
		</div>
	</div>
	
<div>
      <a class="left carousel-control" href="#banner" data-slide="prev" style="height:335px;"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#banner" data-slide="next" style="height:335px;"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>


<script type="text/javascript">
	$(document).ready(function(e)){
		$('.carousel').carousel();
	});
</script>
<br/>
<br/>
<div class="container marketing" align="center">

      <!-- Three columns of text below the carousel -->
      <div class="row">
	  <div class="col-xs-6 col-sm-3">
	  </div>
        <div class="col-xs-6 col-sm-3">
          <img class="img-circle" src="<?php echo base_url();?>assets/img/ico1.jpg" alt="Generic placeholder image">
          <h2>Vendor</h2>
          <p align="justify">Sebagai Vendor, anda dapat mengadakan pelelangan untuk barang yang ingin anda lelang. Setiap barang yang anda lelang akan dikenai biaya tertentu tergantung dengan masa lelang barang tersebut. Dan barang yang sudah melewati masa lelang akan otomatis dinonaktifkan oleh sistem BGET.</p>
        </div><!-- /.col-lg-4 -->
      
        <div class="col-xs-6 col-sm-3">
          <img class="img-circle" src="<?php echo base_url();?>assets/img/ico2.jpg" alt="Generic placeholder image">
          <h2>User</h2>
		  <p align="justify">Sebagai User, anda dapat ikut serta dalam lelang. Anda dapat memasukkan penawaran tertinggi oleh suatu barang. Apabila barang tersebut telah melewati masa lelang dan anda sebagai penawar tertinggi, andalah pemenangnya. Dan saldo anda akan otomatis berkurang sesuai dengan harga tertinggi yang anda tawarkan.</p>
        </div>
		<div class="col-xs-6 col-sm-3">
	  </div>
      </div><!-- /.row -->
	  
	  <div class="row">
	  <div class="col-xs-6 col-sm-3">
	  </div>
		 <div class="col-xs-6 col-sm-3"> 
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-vendor">Vendor Log In &raquo;</button>
		 </div>
		 <div class="col-xs-6 col-sm-3"> 
			<button type="button" class="btn btn-success"  data-toggle="modal" data-target="#modal-user">User Log In &raquo;</button>
		 </div>
	  </div>
</div>
<div class="modal fade" id="modal-vendor" >
	<div class="modal-dialog" >
    	<div class="modal-content" align="center" style="width:500px"><br/>
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
				<img class="img-circle" src="<?php echo base_url();?>assets/img/ico1.jpg" alt="Generic placeholder image"><br/><br/>
            	<h4 class="modal-title"><font color="#069">Vendor Log In</font></h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_vendor">
                	<div class="form-group" style="width:300px;" align="left">
                    	<label><font color="#069">Vendor ID</font></label>
                        <input type="text" class="form-control" name="vendor_id" id="vendor_id" placeholder="Vendor ID" required autofocus>
						<input type="hidden" name="vendor_id_tmp" id="vendor_id_tmp">
                    </div>
                    <div class="form-group" style="width:300px" align="left">
                    	<label><font color="#069">Password</font></label>
                        <input type="password" class="form-control" name="vendor_pass" id="vendor_pass" placeholder="Password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-info v_login" type="submit" form="form_vendor" id="vendor_save">
                	Log In
                </button>
            	<button class="btn btn-default btn-sm" data-dismiss="modal">
                	Cancel
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-user" >
	<div class="modal-dialog" >
    	<div class="modal-content" align="center" style="width:500px"><br/>
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
				<img class="img-circle" src="<?php echo base_url();?>assets/img/ico2.jpg" alt="Generic placeholder image"><br/><br/>
            	<h4 class="modal-title"><font color="green">User Log In</font></h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_user" target="<?php base_url();?>user/login">
                	<div class="form-group" style="width:300px;" align="left">
                    	<label><font color="green">User ID</font></label>
                        <input type="text" class="form-control" name="user_id" id="user_id" placeholder="User ID" required autofocus>
						<input type="hidden" name="user_id_tmp" id="user_id_tmp">
                    </div>
                    <div class="form-group" style="width:300px" align="left">
                    	<label><font color="green">Password</font></label>
                        <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="Password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-success" type="submit" form="form_user" id="user_save">
                	Log In
                </button>
            	<button class="btn btn-default btn-sm" data-dismiss="modal">
                	Cancel
                </button>
            </div>
        </div>
    </div>
</div>

<br/>
<br/>
<br/>
<br/>
<br/>

<script type="text/javascript">
$(document).ready(function() {
		$('.v_login').click(function() {
			$('#form_vendor').attr('action', '<?PHP echo base_url(); ?>vendor/login');
		});
});
</script>
<?php
	$this->load->view('footer_v');
?>
