      function getUrlVars() {
      	var vars = {};
      	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
      		vars[key] = value;
      	});
      	return vars;
      }

      function noplus(string){
      	if (string[0]=="+"){
      		string=string.substring(1,string.length);
      	}
      	if (string[string.length]=="+"){
      		string=string.substring(0,string.length-1);

      	}
      	var split= string.split("+");
      	var spaces= split.join(" ");
      	console.log(spaces);
      	return spaces
      };


