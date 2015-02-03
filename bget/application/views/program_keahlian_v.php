<?PHP
	$this->load->view('header_v');
?>

<div class="container">
	
	<?PHP
		if($this->uri->segment(3) == 'error_save')
		{
	?>
	
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Data gagal disimpan
	</div>
	
	<?PHP
		}
	?>
	
	<div class="panel panel-default">
        
        <?PHP
			if($this->session->userdata('logged_in') == true)
			{
		?>
        
    	<div class="panel-heading">
        	<div class="pull-left">
            	<h3 class="panel-title">Program Keahlian</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-primary btn-sm add" title="Tambah" data-toggle="modal" data-target="#modal_program_keahlian">
                    <i class="glyphicon glyphicon-plus"></i> Tambah
                </button>
                <button class="btn btn-danger btn-sm delete_all" title="Hapus Semua" data-toggle="modal" data-target="#modal_konfirmasi">
                    <i class="glyphicon glyphicon-trash"></i> Hapus Semua
                </button>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <?PHP
			}
		?>
		
        <table class="table table-responsive">
			<thead>
				<tr>
					<th>Id Program Keahlian</th>
					<th>Program Keahlian</th>
					
					<?PHP
						if($this->session->userdata('logged_in') == true)
						{
					?>
					
					<th>Modifikasi</th>
					
					<?PHP
						}
					?>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					$query = $this->program_keahlian_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->idpk; ?>
						<input type="hidden" id="program_keahlian_<?PHP echo $row->idpk; ?>" value="<?PHP echo $row->namapk; ?>">
					</td>
					<td><?PHP echo $row->namapk; ?></td>
					
					<?PHP
						if($this->session->userdata('logged_in') == true)
						{
					?>
					
					<td>
						<button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_program_keahlian" id="edit_<?PHP echo $row->idpk; ?>">
							<i class="glyphicon glyphicon-edit"></i> Ubah
						</button>
						<button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="delete_<?PHP echo $row->idpk; ?>">
							<i class="glyphicon glyphicon-trash"></i> Hapus
						</button>
					</td>
					
					<?PHP
						}
					?>
					
				</tr>
				
				<?PHP
					endforeach;
				?>
				
			</tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="modal_program_keahlian">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Form Program Keahlian</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_program_keahlian">
                	<div class="form-group">
                    	<label>Id Program Keahlian</label>
                        <input type="text" class="form-control" name="id_program_keahlian" id="id_program_keahlian" placeholder="Id Program Keahlian" required>
						<input type="hidden" name="id_program_keahlian_tmp" id="id_program_keahlian_tmp">
                    </div>
                    <div class="form-group">
                    	<label>Program Keahlian</label>
                        <input type="text" class="form-control" name="program_keahlian" id="program_keahlian" placeholder="Program Keahlian" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-sm" type="submit" form="form_program_keahlian" id="save">
                	Simpan
                </button>
				<button class="btn btn-primary btn-sm" type="submit" form="form_program_keahlian" id="update">
                	Perbaharui
                </button>
            	<button class="btn btn-default btn-sm" data-dismiss="modal">
                	Batal
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_konfirmasi">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
            	<p id="confirm_str">Apakah Anda yakin akan menghapus data ?</p>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-sm" id="delete_all">
                	Ok
                </button>
				<button class="btn btn-primary btn-sm" id="delete">
                	Ok
                </button>
            	<button class="btn btn-default btn-sm" data-dismiss="modal">
                	Batal
                </button>
            </div>
        </div>
    </div>
</div>

<?PHP
	$this->load->view('footer_v');
?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.add').click(function() {
			$('#id_program_keahlian').val('');
			$('#program_keahlian').val('');
			
			$('#id_program_keahlian').attr('disabled', false);
			
			$('#save').show();
			$('#update').hide();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo base_url(); ?>pk/tambah');
		});
		
		$('.edit').click(function() {
			var id = this.id.substr(5);
			
			$('#id_program_keahlian').val(id);
			$('#id_program_keahlian_tmp').val(id);
			$('#program_keahlian').val($('#program_keahlian_' + id).val());
			
			$('#id_program_keahlian').attr('disabled', true);
			
			$('#save').hide();
			$('#update').show();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo base_url(); ?>pk/update');
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			$('#delete_all').hide();
			
			var id = this.id.substr(7);
			
			$('#id_program_keahlian').val(id);
		});
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			$('#delete').hide();
			$('#delete_all').show();
		});
		
		$('#delete').click(function() {
			window.location = '<?PHP echo base_url(); ?>pk/delete/' + $('#id_program_keahlian').val();
		});
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo base_url(); ?>pk/delete_all';
		});
		
		$('.table').dataTable();
	});
</script>