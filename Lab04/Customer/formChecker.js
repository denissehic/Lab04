function clearFields() {
			document.getElementById("user").value="";
			document.getElementById("password").value="";
      document.getElementById("item1").value="";
      document.getElementById("item2").value="";
			document.getElementById("item3").value="";
        var ele = document.getElementsByName("type");
        for(var i=0;i<ele.length;i++)
          ele[i].checked = false;
    }


function toSubmit(){
	if(document.getElementById('type1').checked ||
			document.getElementById('type2').checked ||
				document.getElementById('type3').checked) {}
				else {alert('Shipping option empty');
		    			return false;}
	var password = document.getElementById("password").value;
	if (password.length < 1){
   alert('Password field empty');
   return false;
   }

}
