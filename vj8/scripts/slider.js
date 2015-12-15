$(document).ready(function()
{
   var thumbnails = 
   [
       { largeImage: "images/cetina.jpg", thumbnailImage: "images/thumbnails/cetina.jpg"},
       { largeImage: "images/kozjak.jpg", thumbnailImage: "images/thumbnails/kozjak.jpg"},
       { largeImage: "images/primosten.jpg", thumbnailImage: "images/thumbnails/primosten.jpg"},
       { largeImage: "images/sibenik.jpg", thumbnailImage: "images/thumbnails/sibenik.jpg"},
       { largeImage: "images/svilaja.jpg", thumbnailImage: "images/thumbnails/svilaja.jpg"}
   ];
   thumbnails.currentIndex = 0;
   
   thumbnails.forEach(function(thumbnail)
   {
      var image = new Image();
      image.src = thumbnail.largeImage;
   });
   
   //var a = [1, 2, 3, false, "asd"]; //->JS nizovi
   //a.push(2); //-> dodaj element u niz
   
   //var obj = {};
   /*a = {
         firstName: "asdad",
         lastName: "adasd",
         years: 25,
         description: {
            
         }
     };
     
     a.newProp = "ad"; //Dodaj novo svojstvo
     var array = [1,2];
     array[0]//1
     array[1]//2
     
     array.sum = 1; //Moguće dodati nova svojstva u nizu
   */
   
   var $thumbnails = $("#thumbnail-container > .thumbnail");
   
   $thumbnails.on("click", function()
   {
      //this -> objekt nad kojim se event dogodija
      var $this = $(this);
      
      thumbnails.currentIndex = $thumbnails.index($this);
      
      updateSliderUI();
   });
   
   function updateSliderUI()
   {
      $thumbnails.removeClass("selected");
      
      $thumbnails.eq(thumbnails.currentIndex).addClass("selected");
      
      var $sliderImage = $("#slider-image");
      
      var currentThumbnail = thumbnails[thumbnails.currentIndex];
      
      $sliderImage.fadeOut(function()
      {
         $sliderImage.attr("src", currentThumbnail.largeImage);
         
         $sliderImage.fadeIn();
      });
   }
   
   $("#slider .arrow-left").on("click", function()
   {
      thumbnails.currentIndex--;
      
      if(thumbnails.currentIndex < 0)
      {
         thumbnails.currentIndex = thumbnails.length - 1;
      }
      
      updateSliderUI();
   });
   
   $("#slider .arrow-right").on("click", function()
   {
      thumbnails.currentIndex++;
      
      if(thumbnails.currentIndex > thumbnails.length - 1)
      {
         thumbnails.currentIndex = 0;
      }
      
      updateSliderUI();
   });
});