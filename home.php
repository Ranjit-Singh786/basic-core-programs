<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<!-- <button id="showData" class="btn btn-danger ">Show User Data</button> -->

<div id="table-container"></div>



<!-- <script type="text/javascript" src="ajax-script.js"></script> -->
<script>
    $(document).ready(function(){
      $.ajax({    
        type: "GET",
        url: "backend-script.php",            
        dataType: "html",                 
        success: function(data){                  
            $("#table-container").html(data);
            
           
        }
    });
});
</script>
</body>
</html>

