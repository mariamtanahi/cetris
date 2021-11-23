
<br></br>
<div class="content-box">
<div class="row">
  <div class="col">
    <h4>Website Setting</h4>
  </div>
  <div class="col">

  </div>
</div>
<br>
<?php
  $sql1="SELECT * FROM website_setting ORDER BY id DESC LIMIT 0,1";
  $res1= $conn->query($sql1);
  $data=$res1->fetch_assoc();
   $id=!empty($data['id'])?$data['id']:'';
  $websiteTitle=!empty($data['website_title'])?$data['website_title']:'';
  $websiteName=!empty($data['website_name'])?$data['website_name']:'';
  $websiteName=!empty($data['website_name'])?$data['website_name']:'';
  $websiteLogo=!empty($data['website_logo'])?$data['website_logo']:'';

?>

<form id="updateForm" name="website_setting" rel="<?php echo $id;?>">
  <div class="row">
    <div class="col">
        <div class="form-group">
        <label>Website Title<span style="color:red">*</span></label>
        <input type="text" name="website_title" value="<?php echo $websiteTitle ?>" class="form-control">
      </div>
    </div>
    <div class="col">
      <div class="form-group">
      <label>Website Name<span style="color:red">*</span></label>
      <input type="text" name="website_name" value="<?php echo $websiteName ?>" class="form-control">
      <input type="checkbox" name="visible_website_name" value="1"> Show Website Name
     </div>
    </div>
  </div>

    <div class="row">
    <div class="col">
      <label>Website Logo <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="website_logo">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="../img/<?php echo $websiteLogo; ?>" width="200px" height="50px">
    </div>
    </div>
  </div>
   <div class="row">
     <div class="col">
         <div class="form-group">
            <button class="btn btn-danger">Back</button>
      <button class="btn btn-secondary">Save</button>
     </div>
     </div>

  </div>
</form>

</div>