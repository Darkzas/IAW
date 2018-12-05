$(document).ready(ready);

function ready() {
    $("div[id!='hide']").click(function() {
       $(this).hide("slow", function() {
          $("div#hide").show("slow");
       });
    });
}