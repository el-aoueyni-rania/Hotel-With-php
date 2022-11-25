$(function () {

    function onClickChambreModal() {
        const chambreId = $(this).html();
        console.log(chambreId);
        // Envoi d'une requête Ajax en GET avec la fonction jQuery $.get
        $.get("chambremodal.php", { id: chambreId }, onAjaxchambreModal);
      }
    
      function onAjaxchambreModal(chambreInfo) {
        $(".modal-body").html(chambreInfo);
      }
  
  

    $(document).on("click", "td a", onClickChambreModal);
});