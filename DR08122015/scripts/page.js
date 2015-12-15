$(document).ready(function(){
   
   $("#add-button").on("click", function()
   {
      var imageUrl = prompt("Enter image URL", "images/newsHeadings/mustang.jpg");
      if(!imageUrl) { return; }
      
      var car_name = prompt("Enter title", "");
      if(!car_name) { return; }
      
      var newsTemplate = $("#news-template").text();
      
      var newNewsHTML = Mustache.render(newsTemplate,
      {
         imageUrl: imageUrl,
         car_name: car_name
      });
   
      var $newNews = $(newNewsHTML);
      
      $("#left-side").append($newNews);
      
      $newNews.find(".delete-button").on("click", handleDeleteCardClick);
      $newNews.find(".comment-button").on("click", handleCommentClick);
      $newNews.find(".fa-star-o").on("click", handleStarClick);
   });
   
   
   $("#left-side > .card > .delete-button").on("click", handleDeleteCardClick);
   function handleDeleteCardClick()
   {
      var $this = $(this);
      
      var $card = $this.parents(".card");
      
      $card.remove();
   }
   
   
   $("#left-side > .card > .comment-button").on("click", handleCommentClick);
   function handleCommentClick()
   {
       var $this = $(this);
       
       var name = prompt("Vase ime", "");
       if(!name) { return; }
       
       var comment = prompt("Vas komentar", "");
       if(!comment) { return; }
       
       var onNews = $this.parents(".card").children(".card-box").children("h2").text();
       
       var commentTemplate = $("#comment-template").text();
       
       var newCommentHTML = Mustache.render(commentTemplate, 
       {
            name: name,
            onNews: onNews,
            comment: comment
       });
       
       var $newComment = $(newCommentHTML);
       $("#comment-section-comments").append($newComment);
   }
   
   
   $("#link-section > .add-link").on("click", function()
   {
      var pageUrl = prompt("URL na stranicu", "");
      if(!pageUrl) { return; }
      
      var linkText = prompt("Naziv", "");
      if(!linkText) { return; }
      
      var linkTemplate = $("#link-template").text();
      
      var newLinkHTML = Mustache.render(linkTemplate, 
      {
          pageUrl: pageUrl,
          linkText: linkText
      });
      
      var $newLink = $(newLinkHTML);
      $("#link-section-links").append($newLink);
   });
   
   
   $(".fa-star-o").on("click", handleStarClick);
   function handleStarClick()
   {
      var $this = $(this);
      
      var prevStars = $this.prevAll(".fa-star-o");
      prevStars.removeClass("fa-star-o");
      prevStars.addClass("fa-star");
      $this.removeClass("fa-star-o");
      $this.addClass("fa-star");
   }
});