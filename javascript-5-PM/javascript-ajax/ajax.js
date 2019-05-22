	function readfile(pagename){
		//alert('executing');
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("ajaxdata").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET",pagename,true);
		xmlhttp.send();
	}
	
	function readfile2(pagename){
		document.getElementById("modaldata").innerHTML = "<center>Please Wait...</center>"
		
		//alert('executing');
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("modaldata").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET",pagename,true);
		xmlhttp.send();
	}
	
	function readfile3(pagename){
		document.getElementById("modaldata").innerHTML = "<center>Please Wait...</center>"
		
		//alert('executing');
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				//var user=JSON.parse(this.responseText);
				var item=JSON.parse(this.responseText);
				var data="<h2>Data from Json:</h2>";
				var j=1;
				for(var i=0;i<item.length;i++){
					data = data + "<p>" + j +" "+ item[i] + "</p>";
					j++;
				}
				
				//alert(user);
				document.getElementById("modaldata").innerHTML = data;
			}
		};
		xmlhttp.open("GET",pagename,true);
		xmlhttp.send();
	}
	
	function getnav()
	{
		//alert("hello navigation")
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("leftnav").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","navigation.html",true);
		xmlhttp.send();
	}
	
	function localjson()
	{
		var itemjson = '["Apple","Mango","Orange","Banana","Desktop"]';	
		//alert(itemjson.length);
		var item=JSON.parse(itemjson);//json to array
		//alert(item.length);
		//var json2=JSON.stringify(item);//array to json
		//alert(json2);
		var data="<h2>Data from Internal Json:</h2>";
		var j=1;
		for(var i=0;i<item.length;i++){
			data = data + "<p>" + j +" "+ item[i] + "</p>";
			j++;
		}
		document.getElementById("ajaxdata").innerHTML=data;
	}
	
	function externalJson()
	{
		//alert("hello navigation")
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				alert(this.responseText);
				var item=JSON.parse(this.responseText);//JSON to array
				var data="<h2>Data from External Json:</h2>";
				var j=1;
				for(var i=0;i<item.length;i++){
					data = data + "<p>" + j +" "+ item[i] + "</p>";
					j++;
				}
			document.getElementById("ajaxdata").innerHTML=data;
				//document.getElementById("innerHtml").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","item.json",true);
		xmlhttp.send();
		
	}