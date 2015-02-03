<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?PHP
			if($this->session->userdata('logged_in') == true)
			{
		?>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="icon" href="<?php echo base_url();?>assets/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/navbar-fixed-top.css" rel="stylesheet">

	<script src="<?php echo base_url(); ?>assets/js/holder.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<title>BGET | Vendor</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><font color="white"><b>VENDOR</b></font></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Profile</a></li>
            <li><a href="<?php echo base_url();?>v_myitem">My Item</a></li>
            <li><a href="#contact">New Auction</a></li>
          </ul>
			<?PHP
					$query = $this->vendor_m->view();
					
					foreach($query->result() as $row) :
					
					$name = $row->v_fullName;
					$pass = $row->v_pass;
					$birth = $row->v_birthDate;
					$email = $row->v_email;
					$address = $row->v_address;
					$phone = $row->v_phone;
					$pict = $row->v_pict;
					$saldo = $row->v_saldo;
					endforeach;
			?>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> &nbsp;<?php echo $this->session->userdata('v_id');?> <b class="caret"></b></a>
				<ul class="dropdown-menu" style="background-color:#428bca;">
				<br/>
				<li align="center">&nbsp;&nbsp;<img class="img-thumbnail" src="<?php echo base_url();?>assets/vendor/<?php echo $pict;?>" alt="Generic placeholder image" width="60px" height="60px"></li>
				<br/>
				<li class="divider"></li>
				<li align="center"><a href="#"><font color="white"><?php echo $name;?></font></a></li>
				<li class="divider"></li>
                <li><a href="<?php echo base_url();?>beranda"><font color="white">Logout</font></a></li>
               
              </ul>
			 </li>
          </ul>
        </div>
      </div>
    </div>
<div class="carousel slide" id="banner">
	<ol class="carousel-indicators">
		<li data-target="#banner" data-slide-to="0" class="active"></li>
		<li data-target="#banner" data-slide-to="1"></li>
		<li data-target="#banner" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" >
		<div class="item active" >
			<img src="<?php echo base_url();?>assets/img/2.jpg" alt="BGET Bet and Get" width="1400px">
		</div>
		<div class="item">
			<img src="<?php echo base_url();?>assets/img/4.jpg"  width="1400px">
		</div>
		<div class="item">
			<img src="<?php echo base_url();?>assets/img/5.jpg"  width="1400px">
			</div>
		</div>
	</div>
<div>
      <a class="left carousel-control" href="#banner" data-slide="prev" style="height:385px;"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#banner" data-slide="next" style="height:385px;"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<br/>
<div class="col-md-9">
<div class="col-md-4">
</div>
<div class="col-md-4" style="background-color:#428bca;color:white; text-align:center;">
MY
</div>
<div class="col-md-4" style="background-color:#555; color:white; text-align:center;">
PROFILE
</div>
</div>
<br/><br/>
<div class="col-md-9">
<div class="col-md-4">
</div>
<div class="col-md-4" align="center">
<img class="img-thumbnail" src="<?php echo base_url();?>assets/vendor/<?php echo $pict;?>" alt="Generic placeholder image" width="250px" height="250px">
<button class="btn btn-info edit" data-toggle="modal" data-target="#profile-vendor" id="id_<?php echo $id=$this->session->userdata('v_id');?>">Edit Profile</button>
</div>
<div class="col-md-4" style="color: #428bca;">
<form method="post">
<div class="form-group" >
  <label class="control-label" >Name</label>
  <input type="text" class="form-control" id="v_name" name="v_name" value="<?php echo $name;?>" disabled></input>
  <input type="hidden" id="v_name_<?php echo $id;?>" value="<?php echo $name;?>">
   <input type="hidden" id="v_pass_<?php echo $id;?>" value="<?php echo $pass;?>">
  <input type="hidden" id="v_birthDate_<?php echo $id;?>" value="<?php echo $birth;?>">
  <input type="hidden" id="v_email_<?php echo $id;?>" value="<?php echo $email;?>">
  <input type="hidden" id="v_address_<?php echo $id;?>" value="<?php echo $address;?>">
  <input type="hidden" id="v_phone_<?php echo $id;?>" value="<?php echo $phone;?>">

</div>
<div class="form-group ">
  <label class="control-label" >Birth Date</label>
  <input type="text" class="form-control" id="v_birthDate" name="v_birthDate" value="<?php $st = strtotime($birth); $tbaru = date('d/m/Y',$st); echo $tbaru;?>" disabled></input>
</div>
<div class="form-group" >
  <label class="control-label" >Email</label>
  <input type="text" class="form-control" id="v_email" name="v_email" value="<?php echo $email;?>" disabled></input>
</div>
<div class="form-group" >
  <label class="control-label">Address</label>
  <input type="textarea" class="form-control" id="v_address" name="v_address" value="<?php echo $address;?>" disabled></input>
</div>
<div class="form-group">
  <label class="control-label" >Phone</label>
  <input type="textarea" class="form-control" id="v_phone" name="v_phone" value="<?php echo $phone;?>" disabled></input>
</div>
<div class="form-group">
  <label class="control-label" >Saldo </label>
 <input type="textarea" class="form-control" id="v_saldo" name="v_saldo" value="<?php echo $saldo;?>" disabled></input>
</div>
</form>
</div>
</div>
<div class="modal fade" id="profile-vendor" >
	<div class="modal-dialog" >
    	<div class="modal-content" style="width:500px"><br/>
        	<div class="modal-header" align="center">
				<img class="img-thumbnail" src="<?php echo base_url();?>assets/vendor/<?php echo $pict;?>" alt="Generic placeholder image" width="100px;"><br/><br/>
            	<h4 class="modal-title"><font color="#069"><?php echo $this->session->userdata('v_id');?></font></h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_vendor" action="<?php echo base_url();?>vendor/edit">
                	<div class="form-group" style="width:300px;" align="left">
                    	<label><font color="#069">Full Name</font></label>
                        <input type="text" class="form-control" name="v_name_e" id="v_name_e" placeholder="Full Name" required autofocus>
						<input type="hidden" name="v_id_tmp" id="v_id_tmp">
                    </div>
					<div class="form-group" style="width:300px;" align="left">
                    	<label><font color="#069">Password</font></label>
                        <input type="password" class="form-control" name="v_pass_e" id="v_pass_e" placeholder="Password" required autofocus>
                    </div>
                    <div class="form-group" style="width:300px" align="left">
                    	<label><font color="#069">Birth Date</font></label>
                        <input type="text" class="form-control" name="v_birthDate_e" id="v_birthDate_e" placeholder="YYYY / MM / DD" required>
                    </div>
					<div class="form-group" style="width:300px" align="left">
                    	<label><font color="#069">Email</font></label>
                        <input type="text" class="form-control" name="v_email_e" id="v_email_e" placeholder="Email" required>
                    </div>
					<div class="form-group" style="width:300px" align="left">
                    	<label><font color="#069">Address</font></label>
                        <textarea class="form-control" name="v_address_e" id="v_address_e" rows="3" required></textarea>
                    </div>
					<div class="form-group" style="width:300px" align="left">
                    	<label><font color="#069">Phone</font></label>
                        <input type="text" class="form-control" name="v_phone_e" id="v_phone_e" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-sm" type="submit" form="form_vendor" id="save">
                	Simpan
                </button>
            	<button class="btn btn-default btn-sm" data-dismiss="modal">
                	Cancel
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(e)){
		$('.carousel').carousel();
	});
</script>

<div class="col-md-9" style="width:100%;">
<?php
	$this->load->view("footer_v");
	} else $this->load->view("beranda_v");
?>
</div>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('.edit').click(function() {
			var id = this.id.substr(3);
			
			$('#v_name_e').val($('#v_name_' + id).val());
			$('#v_pass_e').val($('#v_pass_' + id).val());
			$('#v_birthDate_e').val($('#v_birthDate_' + id).val());
			$('#v_email_e').val($('#v_email_' + id).val());
			$('#v_address_e').val($('#v_address_' + id).val());
			$('#v_phone_e').val($('#v_phone_' + id).val());
			
			$('#form_vendor').attr('action', '<?PHP echo base_url(); ?>vendor/edit');
		});
		
	});
</script>