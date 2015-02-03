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
            <li ><a href="<?php echo base_url();?>vendor">Profile</a></li>
            <li class="active"><a href="#">My Item</a></li>
            <li><a href="#contact">New Auction</a></li>
          </ul>
			<?PHP
					$query = $this->vendor_m->view();
					
					foreach($query->result() as $row) :
					$name = $row->v_fullName;
					$birth = $row->v_birthDate;
					$email = $row->v_email;
					$address = $row->v_address;
					$phone = $row->v_phone;
					$pict = $row->v_pict;
					
					endforeach;
			?>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> &nbsp;<?php echo $this->session->userdata('v_id');?> <b class="caret"></b></a>
				<ul class="dropdown-menu" style="background-color:#428bca;">
				<br/>
				<li align="center">&nbsp;&nbsp;<img class="img-thumbnail" src="<?php echo base_url();?>assets/vendor/<?php echo $pict;?>" alt="Generic placeholder image" width="60px" height="60px"></li>
				<br/>
				<li class="divider"></li>
				<li align="center"><a href="<?php echo base_url();?>vendor"><font color="white"><?php echo $name;?></font></a></li>
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
			<img src="<?php echo base_url();?>assets/img/2.jpg" alt="BGET Bet and Get" style="width:100%;">
		</div>
		<div class="item">
			<img src="<?php echo base_url();?>assets/img/4.jpg" style="width:100%;">
		</div>
		<div class="item">
			<img src="<?php echo base_url();?>assets/img/5.jpg" style="width:100%;">
			</div>
		</div>
	</div>
<div>
      <a class="left carousel-control" href="#banner" data-slide="prev" style="height:385px;"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#banner" data-slide="next" style="height:385px;"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<br/>
<div class="col-lg-9" style="height:50px;"></div>
<div class="row" style="width:100%;border:none;">
<?php
				$query = $this->vendor_m->view_item();
					
				foreach($query->result() as $row) :
				
?>

<input type="hidden" name="i_id" id="i_id_<?PHP echo $row->i_id; ?>" value="<?PHP echo $x = $row->i_id; ?>">
<input type="hidden" id="i_name_<?PHP echo $row->i_id; ?>" value="<?PHP echo $row->i_name; ?>">
<input type="hidden" id="i_price_<?PHP echo $row->i_id; ?>" value="<?PHP echo $row->i_price; ?>">
<input type="hidden" id="i_type_<?PHP echo $row->i_id; ?>" value="<?PHP echo $row->i_type; ?>">
<input type="hidden" id="i_startDate_<?PHP echo $row->i_id; ?>" value="<?PHP echo $row->i_startDate; ?>">
<input type="hidden" id="i_finishDate_<?PHP echo $row->i_id; ?>" value="<?PHP echo $row->i_finishDate; ?>">
<input type="hidden" id="i_pict_<?PHP echo $row->i_id; ?>" value="<?PHP echo $row->i_pict; ?>">
<input type="hidden" id="i_status_<?PHP echo $row->i_id; ?>" value="<?PHP echo $row->i_status; ?>">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary" style="height: 270px; width:300px; margin-left:20px; border:none;">
                        <div class="panel-heading" align="center">
						
                            <b><?php echo $row->i_name;?></b>
                        </div>
                        <div class="panel-body" style="height: 170px; border:none;" align="center">
							<img class="img-rounded" src="<?php echo base_url();?>assets/vendor/<?php echo $row->i_pict;?>" width="200px" height="150px">    
                        </div>
						
                        <div class="panel-footer" style="margin-bottom: 0px; background-color:white; border:none;" align="right">
						<input type="hidden" name="i_id_temp" id="i_id_temp">
                            <button class="btn btn-default more" data-toggle="modal" data-target="#modal-more_<?PHP echo $row->i_id; ?>" id="more_<?PHP echo $row->i_id; ?>">View Detail</button>
                        
						</div>
                    </div>
                </div>			
		<?php 
		
		$this->load->model("vendor_m");
		$s = $this->session->userdata('v_id');
		$this->vendor_m->set_item_id($x);
		$this->vendor_m->set_vendor_id($s);
		$q = $this->vendor_m->view_item_i();
		foreach($q->result() as $r) :
			$i_id = $r->i_id;
			$u_id = $r->u_id;
			$v_id = $r->v_id;
			$i_price = $r->i_price;
			$b_price = $r->b_price;
			$i_startDate = $r->i_startDate;
			$i_finishDate = $r->i_finishDate;
			$b_date = $r->b_date;
			$i_name = $r->i_name;
			$v_name = $r->v_fullName;
			$i_type = $r->i_type;
			$i_pict = $r->i_pict;	
		
?>
<div class="modal fade" id="modal-more_<?PHP echo $row->i_id; ?>" align="center">
	<div class="modal-dialog" >
    	<div class="modal-content" align="center" style="width:500px" align="center"><br/>
        	<div class="modal-header">
				<img class="img-thumbnail" src="<?php base_url();?>assets/vendor/<?php echo $i_pict;?>" alt="Generic placeholder image"><br/><br/>
				<h3><?php echo $i_name;?></h3>
            </div>
            <div class="modal-body" align="center">
							<form class="form-horizontal" role="form" align="center">
							<div class="form-group" align="center">
							<label class="col-sm-2 control-label" for="inputEmail3">Type</label>
							<div class="col-sm-10" align="left">
							<input type="text" class="form-control" id="inputEmail3" value="<?php echo $i_type;?>" style="width:200px;" disabled>
							</div>
							</div>
							<div class="form-group">
							<label class="col-sm-2 control-label" for="inputEmail3" align="left">Basic Price</label>
							<div class="col-sm-10" align="left">
							<input type="text" class="form-control" id="inputEmail3"  value="<?php echo $i_price;?>" style="width:200px;"disabled>
							</div>
							</div>
							<div class="form-group">
							<label class="col-sm-2 control-label" for="inputEmail3" align="left">Start</label>
							<div class="col-sm-10" align="left">
							<input type="text" class="form-control" id="inputEmail3"  value="<?php echo date('d-M-Y',strtotime($i_startDate));?>" style="width:200px;" disabled>
							</div>
							</div>
							<div class="form-group">
							<label class="col-sm-2 control-label" for="inputEmail3" align="left">End</label>
							<div class="col-sm-10" align="left">
							<input type="text" class="form-control" id="inputEmail3"  value="<?php echo date('d-M-Y',strtotime($i_finishDate));?>" style="width:200px;" disabled>
							</div>
							</div>
							<div class="form-group">
							<label class="col-sm-2 control-label" for="inputEmail3" align="left">Highest Bet</label>
							<div class="col-sm-10" align="left">
							<input type="text" class="form-control" id="inputEmail3" value="<?php echo $b_price?>" style="width:200px;" disabled>
							</div>
							</div>
							<h4>User ID</h4> <br><button class="btn btn-info"><?php echo $u_id?></button>
			
</form>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-default btn-sm" data-dismiss="modal">
                	Cancel
                </button>
            </div>
        </div>
    </div>
</div>
				<?php endforeach;
				endforeach;?>
				
</div>



<div class="col-md-9" style="margin-top:100px; width:100%;">
<?php
	$this->load->view("footer_v");
	} else $this->load->view("beranda_v");
?>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.more').click(function() {
			var id = this.id.substr(5);
			$('#i_id_temp').val(id);
		});
		
		
	});
</script>