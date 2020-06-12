

  <form action="item_add/image_upload.php" method="POST"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="prdname">Driver name:</label>
      <input type="text" class="form-control" id="prdname" placeholder="Product name" name="prdname">
    </div>
    <div class="form-group">
      <label for="descp">Username:</label>
      <input type="text" class="form-control" id="descp" placeholder="Description" name="descp">
    </div>
    <div class="form-group">
      <label for="qy">Password :</label>
      <input type="number" class="form-control" id="qty" placeholder="Quantity" name="qty">
    </div>
    <div class="form-group">
      <label for="prce">Age:</label>
           <input type="text" class="form-control" id="prce" placeholder="Price" name="prce">
    </div>

     <div class="form-group">
      <label for="sel1">Route:</label>
      <select class="form-control" id="sel1" name = 'city'>
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

 	<div class="form-group">
      <label for="fileToUpload">Upload Photo:</label>
       <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
    </div>
 	

    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>



