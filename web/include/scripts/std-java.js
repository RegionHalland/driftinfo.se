function std_page(a){
window.location.href=a;
}
 

function std_showhide(id){
    if(document.getElementById){ 
var idDisplay = document.getElementById(id).style.display; 

    if (idDisplay=="block"){ 
        document.getElementById(id).style.display="none"; 
    } else { 
        document.getElementById(id).style.display="block"; 
    } 
	}
}


function std_hide(id){
    if(document.getElementById){ 
var idDisplay = document.getElementById(id).style.display; 
        document.getElementById(id).style.display="none"; 
	}
}


 

/* hämta ut select lista */
function std_selectobj(link,from,nextobj){
  var a= document.getElementById(from);
  var sel = a.options[a.selectedIndex].value;
  link = link+"&value="+sel;
  std_loadpage(link,nextobj); // ladda XMLHttpRequest
}


/* GET anrop via URL
loadpage('?go=load&id=$id','divrespondid');
*/
function std_loadpage(a,id){   	
var a = a;
	LOADPAGEobjDiv = document.getElementById(id);
	var loading =document.getElementById(id);
	loading.style.display="block";
	loading.innerHTML = '<div class="std-loader-progress"></div>';
	
	var LOADPAGEhttp = new XMLHttpRequest(); // get objekt
         LOADPAGEhttp.onreadystatechange = function () {
		     if (this.readyState == 4 && this.status == 200) {
		  LOADPAGEhttpresponse = this.responseText;
	    	LOADPAGEobjDiv.innerHTML = LOADPAGEhttpresponse;
				}// if status
	 		}// function
	 LOADPAGEhttp.open('GET', a, true);
	LOADPAGEhttp.send(null); // endget objekt
 return false;
}


function std_api_search(falt,id){
var falt = falt;
 s = document.getElementById(falt).value;
 a = "front.php?page=api_search&search="+s;
 var ch = s.length; // räkna antal bokstäver för anrop
if(ch>2){std_loadpage(a,id);}// anrop XMLHttpRequest
}