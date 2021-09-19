//small menu
function  openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.visibility = "hidden";
  }
  
  function  closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.visibility ="visible";
  }

//get db data
function showGuide() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/test/guides2.php", true);
  xhttp.send();
}
function myfn(val) {

	document.getElementById("xyz").value= val;

}
//web options
  if (typeof jQuery == 'undefined') {

    alert('JQuery is not defined');
  }
  $(document).ready(function() {
    $(function() {
      $("input:radio").click(function(){
        $("div1").hide();
        var div = "#blk-"+$(this).val();
        $(div).show();
    });
   });
});