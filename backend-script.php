



<!-- Button to Open the Modal -->
<div class="container">
<div class="d-flex justify-content-end">
<button type="button" id="update" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  ADD USERS
</button>
</div>
<h1 class="text-primary">All Record</h1>
<div id="recodscontent">
</div>

<!-- the model -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add users</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="form-group">
  <label for="usr">Username:</label> 
  <input type="text" class="form-control" name="name" placeholder="Enter Username" id="name">
</div>
        <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div><span id="message"></span>
    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="cpassword" placeholder="Confirm Your password" name="cpassword">
    </div><span class="red"></span>
    <div class="form-group">
                    <label for="gen"> Gender:</label><label id="p6">*</label><br/>
                    <input type="radio" name="gender" id="gender" value="Male" >Male
                    <input type="radio" name="gender" id="gender" value="Female" >Female
                </div>
        <div class="form-group" >
			<label for="pwd">City:</label>
			<select name="city" id="city" class="form-control">
      <option value="" selected="selected">Select</option>
				<option value="Delhi">Delhi</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Pune">Pune</option>
				<option value="punjab">Punjab</option>
				<option value="Himachal pradesh">Himachal Pradesh</option>
				<option value="kolkata">kolkata</option>
				<option value="j&k">j&k</option>
				<option value="haryana">haryana</option>
			</select>
		</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="Addrecord()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
 
<!-- this is update button model  -->

<!-- the model -->
<div class="modal" id="update_user_model">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="form-group">
  <label for="usr">Username:</label> 
  <input type="text" class="form-control" name="name" placeholder="Enter Username" id="update_name">
</div>
        <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="update_email" placeholder="Enter email" name="email">
    </div>
    <span class="red"></span>
    <div class="form-group">
                    <label for="gen"> Gender:</label><label id="p6">*</label><br/>
                    <input type="radio" name="update_gender" id="update_gender" value="Male" >Male
                    <input type="radio" name="update_gender" id="update_gender" value="Female" >Female
                </div>
        <div class="form-group" >
			<label for="pwd">City:</label>
			<select name="city" id="update_city" class="form-control">
      <option value="" selected="selected">Select</option>
				<option value="Delhi">Delhi</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Pune">Pune</option>
				<option value="punjab">Punjab</option>
				<option value="Himachal pradesh">Himachal Pradesh</option>
				<option value="kolkata">kolkata</option>
				<option value="j&k">j&k</option>
				<option value="haryana">haryana</option>
			</select>
		</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="UpdateData()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <!-- <input type="hidden" id="hidden_user_id"></input> -->
      </div>

    </div>
  </div>
</div>

</div> 
 
  <script>
    $(document).ready(function(){
      readRecords();
    });
 function readRecords(){
      var readRecords = 'readRecords';
      $.ajax({
        url:'add.php',
        type:'post',
        data:{readRecords:readRecords},
        success:function(data,status){
          $('#recodscontent').html(data);
        }
      })
 }

  function Addrecord(){
    var name = $('#name').val();
    //alert(name)
var email = $('#email').val();
var password = $('#password').val();
var cpassword = $('#cpassword').val();
var gender = $('#gender').val();
var city = $('#city').val();
$.ajax({
		url: "add.php",
		type: "POST",
		data: {
			name: name,
			email: email,
			password: password,
			gender: gender,
      city:city
      				
		},
    success:function(data,status){
      //alert('success');
     readRecords();
    }
  });
  
  }
    ///delete users
    
    function deleteUsers(deleteid){
      var conf = confirm('are you sure');
      if(conf==true){
        $.ajax({
          url:'add.php',
          type:'POST',
          data: {deleteid:deleteid},
          success:function(data,status){
          //alert ('data deleted');
            readRecords();
          }
        });
      }
    }

 //Get Particular Record

    $(document).on('click','#btn_edit',function()
    {
        var id = $(this).attr('data-id');
        $.ajax(
            {
                url: 'add.php',
                type: 'post',
                data:{id:id, callmethod:"geteditid"},
                dataType: 'JSON',
                success: function(response)
                {
                  // alert(response.name);
                   $('#update_name').val(response.name);
                   $('#update_email').val(response.email);
                   $('#update_gender').val(response.gender);
                   $('#update_city').val(response.city);
                   
                }
                
            })
    })

     
  </script>






   





