
function  openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.visibility = "hidden";
  }
  
  function  closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.visibility ="visible";
  }

  function toggle(theform) { 
    document.getElementById("form1").style.display = "none"; 
    document.getElementById("form2").style.display = "none"; 
    document.getElementById(theform).style.display = "block"; 
} 
  
     