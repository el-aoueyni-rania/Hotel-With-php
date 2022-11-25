$(function () {
 
  function onInputSearchChambre() {
    const search = $("#search").val();
    $.getJSON("chambresearch.php", { search: search }, onAjaxSearchChambre);
  }

  function onAjaxSearchChambre(chambreList) {
    $("tbody").empty();

    chambreList.forEach(function (chambre) {
      $("<tr>")
        .append('<td><a href="" data-toggle="modal" data-target="#exampleModal">' + chambre.id + "</a></td>")
        .append("<td>" + chambre.typeheb + "</td>")
        .append("<td>" + chambre.pour+ "</td>")
        .append("<td>" + chambre.prix + "</td>")
        .append("<td>" + chambre.devise + "</td>")
        .append("<td>" + chambre.vue + "</td>")
        .appendTo("tbody");
    });
  }
  $("#search").on("input", onInputSearchChambre);
});