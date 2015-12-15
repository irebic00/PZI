$(document).ready(function()
{
    // googlaj jquerry
   $("#cards-container > .card > .delete-button").on("click", function()
   {
      var $this = $(this);
      
      var $card = $this.parents(".card");
      $card.remove();
   });
   
   $("#cards-container > .card > h3").on("dblclick", function()
   {
       var $this = $(this);
       
       var newValue = prompt("Edit value", $this.text());
       
       if(newValue)
       {
           $this.text(newValue);
       }
   });
   
   $("#cards-container > .card > p").on("dblclick", function()
   {
       var $this = $(this);
       
       var newValue = prompt("Edit value", $this.text());
       
       if(newValue)
       {
           $this.text(newValue);
       }
   });
});