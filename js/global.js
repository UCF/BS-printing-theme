function showTab(tabIndex) {

	var totalTabs = 5;
	
	for (var t=1; t <= totalTabs; t++) {
		
		tabBodyElement = document.getElementById("tabBody"+t);
	
		if (t == tabIndex) {
			tabBodyElement.style.display = 'block';
		} else {
			tabBodyElement.style.display = 'none';
		}
		
		
	}	

	return false;
}

// logos
var logos = new Array();
var logoImagePrefix = "/images/logos/";
var logoImageSuffix = ".jpg";


// list of logos to randomly display in places list
logos[0]="ucf_bookstore";
logos[1]="chick_filia";
logos[2]="einstine_bros";
logos[3]="suntrust";
logos[4]="starbucks";


// generate a unique random sequence of logos
function genRandomLogo(maxLogos)
{
	maxLogos++;
	// pick logos
	selectedLogos = new Array();
	for (i=0;i< maxLogos;i++)
	{
		aLogo =pickRandomLogo();
		// check previously picked logo
		for (z=0;z<selectedLogos.length; z++)
		{		
			// have we already picked this show?
			if (aLogo == selectedLogos[z])
			{
				//  pick a differnt logo
				aLogo = pickRandomLogo();
				// restart at the begining;
				z=-1;
			}
		}		
		selectedLogos[i]= aLogo;
	}	
	
	// generate logo image markup
	logosMarkup = '';
	
	for (i=0;i< maxLogos;i++)
	{
		logosMarkup+="<img src='"+logoImagePrefix+logos[selectedLogos[i]]+logoImageSuffix+"' /><br/>";
	}
	
	return logosMarkup;	
}


// return a random show
function pickRandomLogo ()
{
	return Math.round((Math.random() * (logos.length -1)));
}