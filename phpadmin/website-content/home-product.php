
<br></br>
<div class="content-box">
<div class="row">
  <div class="col">
    <h4>Home Photos</h4>
  </div>
  <div class="col">

  </div>
</div>
<br>
<?php
  $sql1="SELECT * FROM home_photo ORDER BY id DESC LIMIT 0,1";
  $res1= $conn->query($sql1);
  $data=$res1->fetch_assoc();
   $id=!empty($data['id'])?$data['id']:'';
   $pr1=!empty($data['pr1'])?$data['pr1']:'';
   $pr2=!empty($data['pr2'])?$data['pr2']:'';
   $pr3=!empty($data['pr3'])?$data['pr3']:'';
   $ft1=!empty($data['ft1'])?$data['ft1']:'';
   $ft2=!empty($data['ft2'])?$data['ft2']:'';
   $ft3=!empty($data['ft3'])?$data['ft3']:'';
   $ft4=!empty($data['ft4'])?$data['ft4']:'';
   $ft5=!empty($data['ft5'])?$data['ft5']:'';
   $ft6=!empty($data['ft6'])?$data['ft6']:'';
   $ft7=!empty($data['ft7'])?$data['ft7']:'';
   $ft8=!empty($data['ft8'])?$data['ft8']:'';
?>

<form id="updateForm" name="home_photo" rel="<?php echo $id;?>">


    <div class="row">
    <div class="col">
      <label>Product 1 <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="pr1">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $pr1; ?>" width="200px" height="50px">
    </div>
    </div>

    <div class="col">
      <label>Product 2 <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="pr2">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $pr2; ?>" width="200px" height="50px">
    </div>
    </div>

    <div class="col">
      <label>Product 3 <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="pr3">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $pr3; ?>" width="200px" height="50px">
    </div>
    </div>

    <div class="col">
      <label>Фотоотчет 1 <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="ft1">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $ft1; ?>" width="200px" height="50px">
    </div>
    </div>

    <div class="col">
      <label>Фотоотчет 2 <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="ft2">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $ft2; ?>" width="200px" height="50px">
    </div>
    </div>

    <div class="col">
      <label>Фотоотчет 3 <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="ft3">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $ft3; ?>" width="200px" height="50px">
    </div>
    </div>

    <div class="col">
      <label>Фотоотчет 4 <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="ft4">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $ft4; ?>" width="200px" height="50px">
    </div>
    </div>

    <div class="col">
      <label>Фотоотчет 5 <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="ft5">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $ft5; ?>" width="200px" height="50px">
    </div>
    </div>

    <div class="col">
      <label>Фотоотчет 6 <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="ft6">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $ft6; ?>" width="200px" height="50px">
    </div>
    </div>

    <div class="col">
      <label>Фотоотчет 7 <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="ft7">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $ft7; ?>" width="200px" height="50px">
    </div>
    </div>

    <div class="col">
      <label>Фотоотчет 8 <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="ft8">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $ft8; ?>" width="200px" height="50px">
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