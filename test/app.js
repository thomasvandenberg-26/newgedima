
document.getElementById("formulaire").addEventListener("submit", function(e) {
	e.preventDefault()
	console.log("testjs"); 

    var data = new FormData(this);
	
	console.log(data);
	var xhr = new XMLHttpRequest();
	console.log(data);
	xhr.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
                //  var res = this.response;
				//  console.log(res);
				//  if ( res.success){
				//  console.log(" Realisation envoyé!" );

				//  } else{
				
				//  	console.log(res);  
				//  }
		}
	};
	
	xhr.open("POST", "traitement_formulaire.php", true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.responseType = "json";
	xhr.send(data);
    return false;
  
});


// function test(t) {
// 	if (t === undefined) {
// 	  return 'Undefined value!';
// 	}
// 	return t;
//   }
  
//   let x;
  
//   console.log(test(x));