
function  openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.visibility = "hidden";
  }
  
  function  closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.visibility ="visible";
  }



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

