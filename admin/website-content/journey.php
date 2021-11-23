<?php
  $sql1="SELECT * FROM journey_section ORDER BY id DESC LIMIT 0,1";
  $res1= $conn->query($sql1);
  $data=$res1->fetch_assoc();
   $id=!empty($data['id'])?$data['id']:'';
  $jourTitle=!empty($data['jour_title'])?$data['jour_title']:'';
  $jourParagraph=!empty($data['jour_paragraph'])?$data['jour_paragraph']:'';
  $nom_one=!empty($data['nom_one'])?$data['nom_one']:'';
  $nom_two=!empty($data['nom_two'])?$data['nom_two']:'';

?>


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Our journey section</h1>
          </div>

      
            <div class="col-10 mx-auto">
                <form id="updateForm" name="journey_section" rel="<?php echo $id;?>">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="jour_title" value="<?php echo $jourTitle ?>" id="title">
                      </div>
                      <div class="form-group">
                        <label for="paragraph">paragraph</label>
                        <textarea class="form-control " rows="3" type="text" name="jour_paragraph" placeholder="" id="paragraph"><?php echo $jourParagraph ?> </textarea>
                      </div>

                      <div class="form-group">
                        <label for="nomOne">First number</label>
                        <input class="form-control" type="text" name="nom_one" value="<?php echo $nom_one ?>" id="nomOne">
                      </div>
                      <div class="form-group">
                        <label for="nomTwo">Second number</label>
                        <input class="form-control" type="text" name="nom_two" value="<?php echo $nom_two ?>" id="Two">
                      </div>

                    
                    <button class="btn btn-primary">Submit</button>
                  </form>
            </div>
        
    