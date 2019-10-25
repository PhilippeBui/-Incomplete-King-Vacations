	var $=function(id){
			return document.getElementById(id);
			}
			
			var signuplist= function(){
				var first = $("fname").value;
				var last = $("lname").value;
				var Address = $("address").value;
				var City = $("city").value;
				var State = $("state").value;
				
				var valid= true;
			
			
				if(first==""){
					$("fname_error").firstChild.nodeValue="Missing.";
					valid=false;			
				}
				else{
					$("fname_error").firstChild.nodeValue="";
				}
				
				if(last==""){
					$("lname_error").firstChild.nodeValue="Missing.";
					valid=false;			
				}
				else{
					$("lname_error").firstChild.nodeValue="";
				}
				
				if(Address==""){
					$("address_error").firstChild.nodeValue="Missing.";
					valid=false;			
				}
				else{
					$("address_error").firstChild.nodeValue="";
				}
				
				if(City==""){
					$("city_error").firstChild.nodeValue="Missing.";
					valid=false;			
				}
				else{
					$("city_error").firstChild.nodeValue="";
				}
				
				if(State==""){
					$("state_error").firstChild.nodeValue="Missing.";
					valid=false;			
				}
				else{
					$("state_error").firstChild.nodeValue="";
				}
				
				if(valid){
					$("signup_form").submit();
				}	
				
			window.onload= function(){
				$("signuplist").onclick= signupList;
			}
	}