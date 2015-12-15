$(document).ready(function()
{
   function handleDeleteCardClick()
   {
      var $this = $(this);
      
      var $card = $this.parents(".card");
      
      $card.remove();
   }
   $("#cards-container > .card > .delete-button").on("click", handleDeleteCardClick);
   
   $("#cards-container > .card > h3").on("dblclick", function()
   {
      var $this = $(this);
      
      var newValue = prompt("Enter new value", $this.text());
      
      if(newValue)
      {
          $this.text(newValue);
      }
   });
   
   
   $("#add-card-button").on("click", function()
   {
      var imageUrl = prompt("Enter image URL", "images/newsHeadings/cetina.jpg");
      if(!imageUrl) { return; }
      
      var title = prompt("Enter title", title);
      if(!title) { return; }
      
      var text = prompt("Enter text", text);
      if(!text) { return; }
      
      var cardTemplate = $("#card-template").text();
      
      var newCardHTML = Mustache.render(cardTemplate,
      {
         imageUrl: imageUrl,
         title: title,
         text: text
      });
   
      var $newCard = $(newCardHTML);
      $("#cards-container").append($newCard);
      
      $newCard.find(".delete-button").on("click", handleDeleteCardClick);
   });
   
   
   
   $(".comment-button").on("click", function()
   {
      var user = prompt("Enter your name", "");
      if(!user) { return; }
      
      var comment = prompt("Enter comment", "");
      if(!comment){ return; }
      
      var commentTemplate = $(".comment-template").text();
      
      var newCommentHTML = Mustache.render(commentTemplate,
      {
         user: user,
         comment: comment
      });
      
      var $newComment = $(newCommentHTML);
      $(this).parents(".card").children(".comment-container").append($newComment);
      
      $newComment.find(".delete-icon").on("click", function() 
      {
            $(this).parents("ul").remove();
      });
   });
});