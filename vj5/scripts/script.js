//window
//document

document.addEventListener("DOMContentLoaded", function () {
    var arrowLeft = document.querySelector("#slider > .arrow-left");
    var arrowRight = document.querySelector("#slider > .arrow-right");
    var thumbnails = document.querySelectorAll("#thumbnail-container > .thumbnail");
    
    
    
    arrowLeft.addEventListener("click", function()
    {
        alert("left arrow clicked");
    })
    
    arrowRight.addEventListener("click", function() 
    {
        alert("right arrow clicked");
    })
    
    for (var i = 0; i < thumbnails.length; i++)
    {
        thumbnails[i].addEventListener("click", handleThumbnailClick);
    }
    
    function handleThumbnailClick()
    {
        var selectedThumbnail = document.querySelector("#thumbnail-container .thumbnail.selected");
        
        if(selectedThumbnail != null)
        {
            selectedThumbnail.classList.remove("selected");
        }
        
        //this - objekt nad kojim je fja pozvana
        //ako je metoda event handler onda je this objekt nad kojim se dogadaj odvija
        //ovdje: this - thumbnail na kog se kliknulo
        
        this.classList.add("selected");
        
        var sliderImage = document.querySelector("#slider-image");
        var largeImageUrl = this.getAttribute("data-large-image-url");
        
        sliderImage.src = largeImageUrl;
    }
});