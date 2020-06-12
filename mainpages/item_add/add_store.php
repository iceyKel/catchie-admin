

  <form action="item_add/image_upload.php" method="POST"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="prdname">Store name:</label>
      <input type="text" class="form-control" id="prdname" placeholder="Product name" name="prdname">
    </div>
    <div class="form-group">
      <label for="descp">Address:</label>
      <input type="text" class="form-control" id="descp" placeholder="Description" name="descp">
    </div>

     <div class="form-group">
      <label for="sel1">Select City:</label>
      <select class="form-control" id="sel1" name = 'store'>
      <?php
      include 'config.php';

            $sql="SELECT * FROM tblcity";
      $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)) { 
        $cityid = $row['city_id'];
        $cityname = $row['city_name'];
    
          echo "<option>".$cityname."</option>";
 

        }

      ?>
      </select>
 	</div>

 	

    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>



