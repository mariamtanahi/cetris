
<?php
  $sql1="SELECT * FROM header_content ORDER BY id DESC LIMIT 0,1";
  $res1= $conn->query($sql1);
  $data=$res1->fetch_assoc();
   $id=!empty($data['id'])?$data['id']:'';
  $welcome=!empty($data['welcome'])?$data['welcome']:'';
  $title=!empty($data['title'])?$data['title']:'';
  $description=!empty($data['description'])?$data['description']:'';
  $photo=!empty($data['photo'])?$data['photo']:'';
 

?>
          
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit header section</h1>
          </div>

              <div class="col-10 mx-auto">
                <form id="updateForm" name="header_content" rel="<?php echo $id;?>">
                    <div class="form-group">
                        <label for="greetings">Greetings</label>
                        <input class="form-control text-input" type="text"  value="<?php echo $welcome ?>" name="header_welcome" id="greetings">
                      </div>
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control title-input" value="<?php echo $title ?>" type="text" name="header_title" id="title">
                      </div>
                      <div class="form-group">
                        <label for="description">description</label>
                        <textarea class="form-control " rows="3" type="text" name="description" id="description"><?php echo $description ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="header-photo">Choose photo</label>
                        <input type="file" class="form-control-file" id="header-photo" name="header_photo">
                        <img src="img/<?php echo $photo; ?>" width="200px" height="50px">
                        
                      </div>
                    <button class="btn btn-primary">Submit</button>
                  </form>
                </div>
          
        

