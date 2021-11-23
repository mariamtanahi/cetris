

	<?php
if($_GET['subcat']=='add-qoutes'){

	if(!empty($_GET['edit'])){

   $editId= $_GET['edit'];
   $query="SELECT * FROM qoutes WHERE id=$editId";
   $res= $conn->query($query);
   $editData=$res->fetch_assoc();
   $qoute= $editData['qoute_body'];
  
   $idAttr="updateForm";
   
}else{
	$qoute='';
  
  
   $editId='';
    $idAttr="adminForm";
}


?>
	
        <div class="d-sm-flex align-items-center justify-content-between mb-4 w-100">
                    <h1 class="h3 mb-0 text-gray-800 d-inline-block">qoutes section</h1>
                    <a href="dashboard.php?cat=website-content&subcat=qoutes" class="btn btn-primary content-link float-right"> View</a>
        </div>
			
        <div class="col-10 mx-auto">
            <form id="<?php echo $idAttr; ?>" rel="<?php echo $editId; ?>" name="qoutes">
                    <div class="form-group">
                    <textarea class="form-control " rows="3" type="text" name="qoute_body"><?php echo $qoute ?></textarea>
            </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>

<?php }elseif (!empty($_GET['view'])) {?>
	
	<?php 

  $id= $_GET['view'];
   $query="SELECT * FROM qoutes WHERE id=$id";
   $res= $conn->query($query);
   $viewData=$res->fetch_assoc();
   $backId=$viewData['id']-1;
    $qoute=$viewData['qoute_body']; 
   
	?>
	<!-----=================table content start=================-->
	<br>
	
			<a href="dashboard.php?cat=website-content&subcat=qoutes" class="btn btn-primary content-link">Back </a>
		
	<br>

	<div class="table-responsive">
        <p class="mt-5"><?php echo $qoute; ?></p>
	</div>
</div>
</div>
	<!-----==================table content end===================-->
	<?php
}

else{?>

	<!-----=================table content start=================-->
	<br>
	<div class="row">
		<div class="col">
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
		</div>
		<div class="col text-right">
			<a href="dashboard.php?cat=website-content&subcat=add-qoutes" class="btn btn-primary content-link">Add New Qoute </a>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>#</th>
				<th>qoute</th>
				<th>View</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
						<?php
  $sql1="SELECT * FROM qoutes ORDER BY id DESC";
  $res1= $conn->query($sql1);
  if($res1->num_rows>0)
  {$i=1;
   while($data=$res1->fetch_assoc()){
   	?>
   	<tr>
   		<td><?php echo $i; ?></td>
   		<td><?php echo $data['qoute_body']; ?></td>
   		
   		<td><a  href="dashboard.php?cat=website-content&subcat=qoutes&view=<?php echo $data['id']; ?>" class="text-secondary content-link">view</a></td>
        <td><a href="dashboard.php?cat=website-content&subcat=add-qoutes&edit=<?php echo $data['id']; ?>" class="text-success content-link">edit</a></td>
        <td><a href="javascript:void(0)" class="text-danger delete"  name="qoutes" id="<?php echo $data['id']; ?>">delete</a></td>

   	</tr>
   	<?php
   $i++;}
}else{

?>
<tr>
	<td colspan="6">No qoutes saved</td>
</tr>
<?php } ?>
		</table>
	</div>
</div>
</div>
	<!-----==================table content end===================-->
<?php } ?>

