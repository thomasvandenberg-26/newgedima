document.getElementById("formulaire").addEventListener("submit", function(e) {
	e.preventDefault();

    var data = new FormData(this);
	var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			console.log(this.response);
			var res = this.response;
			if ( res.success){
				console.log(" Realisation envoyé!" );
			} else{
				alert(res.msg); 
			}
		} else if (this.readyState == 4) {
			alert("Une erreur est survenue...");
		}
	};

	xhr.open("POST", "traitement_formulaire_realisation.php", true);
	xhr.responseType = "text";
	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhr.send(data);

	return false;
});