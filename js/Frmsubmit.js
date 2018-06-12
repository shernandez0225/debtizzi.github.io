function isNumber(evt) {
	$('.mobileerror').html("");
        evt = (evt) ?
            evt :
            window.event;
        var charCode = (evt.which) ?
            evt.which :
            evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            $('.mobileerror').html("Please enter only Numbers.");
            return false;
        }

        // return true;
    }
function testvishal(fid){
  var temp=0;
  $(".error").html('');
		var fname = document.forms[fid]["Name"].value;
        var lname = document.forms[fid]["LastName"].value;
        var mobile = document.forms[fid]["Phone"].value;
        var City = document.forms[fid]["City"].value;
        var State = document.forms[fid]["State"].value;
        var Zipcode = document.forms[fid]["Zipcode"].value;
		var Debt = document.forms[fid]["Debt"].value;
        var Address = document.forms[fid]["Address"].value;
        var Email = document.forms[fid]["Email"].value;
		
		if(fname == ""){
			temp++;
			$(".nameerror").html('Required!');
		}
		if(lname == ""){
			temp++;
			$(".lnameerror").html('Required!');
		}
		if(mobile == ""){
			temp++;
			$(".mobileerror").html('Required!');
		}else{
			if(mobile.length != 10){
				$('.mobileerror').html("Please enter 10 digit mobile No.");
			}
		}
		if(City == ""){
			temp++;
			$(".cityerror").html('Required!');
		}
		if(State == ""){
			temp++;
			$(".stateerror").html('Required!');
		}
		if(Zipcode == ""){
			temp++;
			$(".zipcodeerror").html('Required!');
		}
		if(Email == ""){
			temp++;
			$(".emailerror").html('Required!');
		}
		
		if(Debt == ""){
			temp++;
			$(".debteerror").html('Required!');
		}else{
			if(Debt != "" && State != ""){
				if(State == "Georgia"){
					// if(Debt < 15000){
						// $(".debteerror").html('In Georgia you have to have less than $15,000 in unsecured debt and more than $10,000 in unsecured debt to be eligible');
					// }
				}else{
					if(State == "Colorado" || State == "Connecticut" || State == " Georgia" || State == "Illinois" || State == "Kansas" || State == "Minnesota" || State == "New Hampshire" || State == "North Carolina" || State == "North Dakota" || State == "Ohio" || State == "Oregon" || State == "South Carolina" || State == "Washington" || State == "Washington DC" || State == "West Virginia" || State == "Wisconsin" || State == "Vermont"){
						if(Debt != '10,000-15,000'){
							
						}else{
							temp++;
							$(".debteerror").html('In (selected state on this list) an unsecured debt of more than $15,000 is required to be eligible');
						}
					}else{
						temp++;
						$(".debteerror").html('Required! not in list');
					}
				
				}
			}
		}
		if(Address == ""){
			temp++;
			$(".addresserror").html('Required!');
		}
		
		if(temp == 0){
			
		return true;
		}else{
		return false;
		}
  }