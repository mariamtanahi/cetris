<?php
  $sql1="SELECT * FROM values_section ORDER BY id DESC LIMIT 0,1";
  $res1= $conn->query($sql1);
  $data=$res1->fetch_assoc();
   $id=!empty($data['id'])?$data['id']:'';
  $valueOne=!empty($data['value_one'])?$data['value_one']:'';
  $valueTwo=!empty($data['value_two'])?$data['value_two']:'';
  $valueThree=!empty($data['value_three'])?$data['value_three']:'';
  $descOne=!empty($data['desc_one'])?$data['desc_one']:'';
  $descTwo=!empty($data['desc_two'])?$data['desc_two']:'';
  $descThree=!empty($data['desc_three'])?$data['desc_three']:'';
 

?>


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Our Values section</h1>
          </div>

      
            <div class="col-10 mx-auto">
                <form id="updateForm" name="values_section" rel="<?php echo $id;?>">
                    <div class="form-group">
                        <label for="firstValue">First Value</label>
                        <input class="form-control" type="text" name="value_one" value="<?php echo $valueOne ?>" id="firstValue">
                      </div>
                      <div class="form-group">
                        <label for="description">description</label>
                        <textarea class="form-control " rows="3" type="text" name="desc_one" placeholder="" id="description"><?php echo $descOne ?> </textarea>
                      </div>

                      <div class="form-group">
                        <label for="secondValue">Second Value</label>
                        <input class="form-control" type="text" name="value_two" value="<?php echo $valueTwo ?>" id="secondValue">
                      </div>
                      <div class="form-group">
                        <label for="description">description</label>
                        <textarea class="form-control " rows="3" type="text" name="desc_two" placeholder="" id="description"><?php echo $descTwo ?></textarea>
                      </div>

                      <div class="form-group">
                        <label for="thirdValue">Third Value</label>
                        <input class="form-control" type="text" name="value_three" value="<?php echo $valueThree ?>" id="thirdValue">
                      </div>
                      <div class="form-group">
                        <label for="description">description</label>
                        <textarea class="form-control " rows="3" type="text" name="desc_three" placeholder="" id="description"><?php echo $descThree ?></textarea>
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        
    