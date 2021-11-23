
<?php
  $sql1="SELECT * FROM about_section ORDER BY id DESC LIMIT 0,1";
  $res1= $conn->query($sql1);
  $data=$res1->fetch_assoc();
   $id=!empty($data['id'])?$data['id']:'';
  $title=!empty($data['title'])?$data['title']:'';
  $paragraph=!empty($data['paragraph'])?$data['paragraph']:'';
  $photo=!empty($data['about_photo'])?$data['about_photo']:'';
  $modalParagraph=!empty($data['modal_paragraph'])?$data['modal_paragraph']:'';
  $modalPhoto=!empty($data['modal_photo'])?$data['modal_photo']:'';
 

?>
        
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit about us section</h1>
          </div>

              <div class="col-10 mx-auto">
                <form id="updateForm" name="about_section" rel="<?php echo $id;?>">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control title-input" value="<?php echo $title ?>" type="text" name="about_title" id="title">
                      </div>
                      <div class="form-group">
                        <label for="paragraph">paragraph</label>
                        <textarea class="form-control " rows="3" type="text" name="paragraph" id="paragraph"><?php echo $paragraph ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="about-photo">Choose photo for main photo</label>
                        <input type="file" class="form-control-file" id="about-photo" name="about_photo">
                        <img src="img/<?php echo $photo; ?>" width="200px" height="50px">
                    </div>
                        <div class="form-group">
                        <label for="modal-paragraph">PopUp paragraph</label>
                        <textarea class="form-control " rows="3" type="text" name="modal_paragraph" id="modal-paragraph"><?php echo $modalParagraph ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="modal-photo">Choose photo for popup paragraph</label>
                        <input type="file" class="form-control-file" id="modal-photo" name="modal_photo">
                        <img src="img/<?php echo $modalPhoto; ?>" width="200px" height="50px">                       
                      </div>
                    <button class="btn btn-primary">Submit</button>
                  </form>
                </div>
          