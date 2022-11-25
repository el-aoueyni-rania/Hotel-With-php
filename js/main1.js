
$(function () {


    function inputSearchServices() {
      
      let searchstring = $("#search").val();
  
      $.get("searchservice.php", { search: searchstring }, onAjaxSearchServices);
    }
  
    function onAjaxSearchServices(dataservices) {
      $("#zone").html(dataservices);
    }
  
    $("#search").on("input", inputSearchServices);


  });
  