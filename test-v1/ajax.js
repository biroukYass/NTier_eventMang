function createInstance()
	{
        var req = null;
		if (window.XMLHttpRequest)
		{
 			req = new XMLHttpRequest();
		} 
		else if (window.ActiveXObject) 
		{
			try {
				req = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e)
			{
				try {
					req = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) 
				{
					alert("XHR not created");
				}
			}
	        }
        return req;
	};

	function storing(data, element)
	{
		element.innerHTML = data;
	}

	function submitForm(element)
	{ 
		var req =  createInstance();

		req.onreadystatechange = function()
		{ 
			if(req.readyState == 4)
			{
				if(req.status == 200)
				{
					storing(req.responseText, element);	
				}	
				else	
				{
					alert("Error: returned status code " + req.status + " " + req.statusText);
				}	
			} 
		}; 
		req.open("GET", "ajax.php", true); 
		req.send(null); 
	}



	function storing2(data)
	{
		var element = document.getElementById('storage2');
		element.innerHTML = data;
	}

	function submitForm2(element)
	{ 
		var req =  createInstance();
		var nom = document.ajax2.nom.value;
		var date = document.ajax2.date.value;
		var adress = document.ajax2.adress.value;		
		var data = "nom=" + nom + "&adress=" + adress + "&date=" + date;
		// var date = "date=" + date ;
		// var adress = "adress=" + adress ;

		req.onreadystatechange = function()
		{ 
			if(req.readyState == 4)
			{
				if(req.status == 200)
				{
					storing2(req.responseText);	
				}	
				else	
				{
					alert("Error: returned status code " + req.status + " " + req.statusText);
				}	
			} 
		}; 
        
		req.open("POST", "ajax_add_event.php", true); 
		req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		req.send(data);
	} 