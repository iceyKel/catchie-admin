<!DOCTYPE html>
<html>
<title>Admin</title>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../jquery/bootstrap-3.4.1-dist/css/bootstrap.min.css">
  <script src="../jquery/jquery.min.js"></script>
  <script src="../jquery/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">

<script>

$(document).ready(function(){
  $("#button1").click(function(){
    $("#frm").load("item_add/add_prod.php");
  });

   $("#button2").click(function(){
    $("#frm").load("item_add/add_store.php");
  });

    $("#button3").click(function(){
    $("#frm").load("item_add/add_driver.php");
  });

     $("#button4").click(function(){
    $("#frm").load("item_add/add_city.php");
  });


});




function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}

function upddriver(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("error").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","set_driver.php?driver="+str,true);
        xmlhttp.send();
    }
}


</script>
<style>
  .sidebar {
  height: 100%;
  width: 160px;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #ecf0f1;
  overflow-x: hidden;
  padding-top: 16px;
  display: inline-block;
  box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.2), 0 0px 5px 0 rgba(0, 0, 0, 0.19);
  margin-top: 2%;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #2c3e50;
  display: block;

}

.sidebar a:hover {
  color: #2c3e50;
}

.body{

    margin-top: 2%;
    padding: 20px;
}
.header{
  width: 100%;
  border: 1px solid black;
top: 0px;
  left: 0px;
  position: fixed;
}

.main{
  width: 900px;
  margin: auto;
  border: 1px solid #cccccc;
  height: 100%;
}
.button_navi {
  border: none;
  color: black;
  width: 100%;
  padding: 5px 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
}

.button_navi {
  background-color: transparent;
  border: none;
  color: black;
  width: 100%;
  padding: 5px 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  text-align: left;
}
.button_navi:hover {
  background-color: #ecf0f1;
}

#myInput {
  background-image: url('../css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  font-size: 12px;
  padding: 15px 15px 10px 45px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}


</style>

</head>
<body>
<div class="main">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CatchIECart</a>
    </div>
    <ul class="nav navbar-nav">
      <li  class="active"><a href="manage_orders.php">Inbox</a></li>
      <li><a href="manage_products.php">Products</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Others <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><button data-toggle='modal' data-target='#myModal_adding' class="button_navi" id = 'button1'>Add New Product</button></li>
          <li><button data-toggle='modal' data-target='#myModal_adding' class="button_navi" id = 'button2'>Add New Store</button></li>
          <li><button data-toggle='modal' data-target='#myModal_adding' class="button_navi" id = 'button3'>Add New Driver</button></li>
          <li><button data-toggle='modal' data-target='#myModal_adding' class="button_navi" id = 'button4'>Add New City</button></li>
        </ul>
      </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sigh-out</a></li>
    </ul>
  </div>
</nav>
<div class="body">
    <!-- Modal -->
  <div class="modal fade" id="myModal_adding" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title">Add Product</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div id = "frm"  class="modal-body">
          
        
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title">Customer Info</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div  id="txtHint" class="modal-body">
           
        </div>
      
   

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    <table  class="table table-bordered">
    <thead>
 
      <tr>
        <th><i class="fa fa-user" aria-hidden="true"></i> Customer name</th>
        <th><i class="fa fa-money" aria-hidden="true"></i> Price</th>  
        <th><i class="fa fa-info-circle" aria-hidden="true"></i> Status</th> 
        <th></th>
       
    </tr>
  </thead>
  <tbody>
      <?php
       
   include 'config.php';

        /*$sql_fetch_prd = "SELECT concat(tblcustomer.lname , ' ' , tblcustomer.fname ) as 'fullname', tblproducts.prod_name as 'prodname', tblorders.price as 'prodprice',tblorders.qty as 'qty',tblstore.store_name as 'storename' FROM tblorders 
                          INNER JOIN tblcustomer ON tblcustomer.crt_code = tblorders.crt_code
                          INNER JOIN tblstore ON tblstore.store_id = tblorders.store_id
                          INNER JOIN tblproducts ON tblproducts.product_id = tblorders.product_id WHERE tblorders.status = 'notyetdelivered'";*/

           $sql_fetch_prd = "SELECT tblcustomer.customer_id as 'custid',concat(tblcustomer.lname , ' ' , tblcustomer.fname ) as 'fullname', tblproducts.prod_name as 'prodname', sum(tblorders.price) as 'prodprice', tblorders.status as 'status' FROM tblorders 
                          LEFT JOIN tblcustomer ON tblcustomer.crt_code = tblorders.crt_code
                          LEFT JOIN tblstore ON tblstore.store_id = tblorders.store_id
                          LEFT JOIN tblproducts ON tblproducts.product_id = tblorders.product_id";

        $result = mysqli_query($conn, $sql_fetch_prd);
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {

               //$prod_nid = $row['tblproducts.product_id'];     
               $custid = $row['custid'];         
               $cust_name = $row['fullname'];
               //$prod_name = $row['prodname'];
               //$prod_des = $row['tblproducts.description'];
              // $qty = $row['qty'];
               $price = $row['prodprice'];
               $status = $row['status'];
               //$store = $row['storename'];                   

            
              echo "<tr><td>".$cust_name ."</td>";
              //echo "<td>".$prod_name."</td>";
             // echo "<td>".$prod_des."</td>";
            //  echo "<td>".$qty."</td>";
              echo "<td>PHP ".$price."</td>";
              echo "<td>". $status ."</td>";
             // echo "<td>".$store."</td>";
              echo "<td><input type = 'hidden' name='prod_id' value='".$custid."'>
                        <center><button  name='users' onclick ='showUser(this.value)' class= 'btn btn-primary' data-toggle='modal' data-target='#myModal' value='".$custid."'>Check</button></center>
                    </td></tr>";
            
            
              }
            }
      ?>
    </tbody>
    </table>
</div>
</div>
</body>
</html>