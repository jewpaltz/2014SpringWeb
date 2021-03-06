	<?
		@$id = $_REQUEST['id'];
	?>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />
	<h2>
		List of Users
	</h2>
	
	<style type="text/css">
		body table.table .highlighted td{
			background-color: #FFFFAA ; 
		}
	</style>
	
	<? if(isset($_REQUEST['sub_action'])): ?>
		<div class="alert alert-success">
			<a class="close">&times;</a>
			The row has been <?=$_REQUEST['sub_action']?> successfully!
		</div>
	<? endif; ?>
	
	<a href="?action=new" class="cmd-new">Create New</a>
	
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Suplier_id</th>
				<th>Product_Category_id</th>
				<th>Name</th>
				<th>Price</th>
				<th>Picture_Url</th>
				<th>actions</th>
			</tr>
		</thead>
		<tbody>
			
			<? foreach ($model as $row): ?>
				<tr class="<?=$id==$row['id'] ? "highlighted" : "" ?>">
					<td><?=$row['Suplier_id']?></td>
					<td><?=$row['Product_Category_id']?></td>
					<td><?=$row['Name']?></td>
					<td><?=$row['Price']?></td>
					<td><?=$row['Picture_Url']?></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-sm btn-default glyphicon glyphicon-edit" title="Edit" href="?action=edit&id=<?=$row['id']?>"></a>
							<a class="btn btn-sm btn-default glyphicon glyphicon-eye-open" title="Details" href="?action=edit&id=<?=$row['id']?>"></a>
							<a class="btn btn-sm btn-default glyphicon glyphicon-trash" title="Delete" href="?action=delete&format=json&id=<?=$row['id']?>"></a>
						</div>
					</td>
				</tr>
			<? endforeach; ?>
			
		</tbody>
	</table>
	
	<div class="modal fade" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        <p>One fine body&hellip;</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	
	<? function JavaScripts(){ ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.11/require.min.js"></script>
		<script type="text/javascript">
			requirejs.config({
			    //appDir: ".",
			    baseUrl: "../Static/js",
			    paths: { 
			        /* Load jquery from cdnjs. On fail, load local file. */
			        'jquery': ['//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min', 'libs/jquery-min'],
			        /* Load bootstrap from cdnjs. On fail, load local file. */
			        'bootstrap': ['//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min', 'libs/bootstrap-min'],
			        'datatables': ['//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min'],
			        'jqueryui': ['//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min']
			    },
			    shim: {
			        /* Set bootstrap dependencies (just jQuery) */
			        'bootstrap' : ['jquery'],
			        'datatables' : ['jquery'],
			        'jqueryui' : ['jquery']
			    }
			});
			
			require(['jquery', 'bootstrap', 'datatables', 'jqueryui'], function($) {
			    console.log("Loaded :)");    
			    $("#message").html('Loaded scripts using requirejs!');
			    

				$(function(){
					
					$(".table").dataTable();
					$(".highlighted td").delay(2000).animate({backgroundColor: ""}, 2000)
					
					$(".close").click(function(){
						$(this).closest(".alert").slideUp();
					})
					$(".glyphicon-trash").click(function(event){
						var that = this;
						event.preventDefault();
						$.get(that.href, function(results){
							
							if(confirm("Are you sure that you want to delete " + results.data.FirstName + " " + results.data.LastName + "?")){
								$.post(that.href, function(data){
									if(data.success){
										//msg user success
										//delete row
										alert('Deleted Successfuly');
										$(that).closest('tr').remove();
									}else{
										//smg user error
										alert(JSON.stringify(data.errors));
									}
								}, 'json');
							}
							
						},'json')
					});
					
					$(".glyphicon-edit, .cmd-new").click(function(event){
						var that = this;
						event.preventDefault();
						
						$.get(that.href, { format: 'plain'}, function(data){
							var $myModal = $("#myModal");
							$(".modal-content", $myModal).html(data);
							$myModal.modal('show');
						})
						
					});
				})
			});
		</script>
	<? } ?>
	














