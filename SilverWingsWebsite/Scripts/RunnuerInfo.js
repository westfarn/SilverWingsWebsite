// JavaScript Document
function UpdateDonation() {
  //this will update the price that the user will donate
  var baseDonation = 0;
  if(document.getElementById("baseDonation").value != '') {  
	  baseDonation = document.getElementById("baseDonation").value;
  }
  
  var perMile = 0;
  if(document.getElementById("perMile").value != '') {
	perMile =   document.getElementById("perMile").value;
  }
  var value = baseDonation + (perMile * 26);
  document.getElementById("donationTotal").value = value.toString();
}