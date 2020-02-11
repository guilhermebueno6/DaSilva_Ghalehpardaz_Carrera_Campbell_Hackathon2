<template>
  <div id="output">
  <div id="messageBoxId"></div>
    <form action="" method="post" id="frmSignUp">
			<div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname"/>
			</div>
			<div class="form-group">
				<label for="lname">Last Name</label>
				<input type="text" name="lname" id="lname" />
			</div>
			<div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
			</div>
			<div class="form-group">
        <label for="country">Country</label>
        <input type="text" name="country" id="country">
			</div>
        <button type="button" name="SignUp" value="">Submit</button>
    </form>
  </div>
</template>
<script>

// var fname = document.getElementById("fname").value;
// 	var lname = document.getElementById("lname").value;
// 	var email = document.getElementById("email").value;
// 	var country = document.getElementById("country").value;




//   xmlHttpRequest=new XMLHttpRequest();
// 	// For Older browsers
// 	// xmlHttpRequest=new ActiveXObject("MSXML2.XmlHttp");
// 	xmlHttpRequest.onreadystatechange=function() {
// 		if (xmlHttpRequest.readyState==4 && xmlHttpRequest.status==200) {
// 			var response = xmlHttpRequest.responseText;
// 			if(response > 0) {
// 				var welcome_message = '<p class="welcome-message">Welcome, You have successfully loggedin!</p>';
// 				document.getElementById("output").innerHTML = welcome_message;
// 			} else {
// 				document.getElementById("messageBoxId").innerHTML="Invalid Credentials";
// 				document.getElementById("messageBoxId").className="error-message";
// 			}
// 		}
// 	}
// 	xmlHttpRequest.open("POST","./index.php?fname="+fname+"&lname="+lname+"&email="+email+"&country="+country",true);
// 	xmlHttpRequest.send();
</script>
