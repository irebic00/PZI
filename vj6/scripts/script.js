/*$(document).ready(function()
{
    $("#thumbnail-container > .thumbnail").on("click", function(){
        
        $("#thumbnail-container > .thumbnail.selected").removeClass("selected");
        
        var $this = $(this);
        
        $this.addClass("selected");
        
        $("$slider-image").attr("src", $this.attr("data-large-image-url"));
    })
});*/


//Execute the function when the whole page is built!
document.addEventListener("DOMContentLoaded", function()
{
    var arrowLeft = document.querySelector("#slider > .arrow-left");
    var arrowRight = document.querySelector("#slider > .arrow-right");
    var deleteButtons = document.querySelectorAll("#cards-container > .card > .delete-button");
    var thumbnails = document.querySelectorAll("#thumbnail-container > .thumbnail");
    var deleteButtonsThumbnail = document.querySelectorAll("#thumbnail-container > .thumbnail > .delete-button");
    
    
    
    arrowLeft.addEventListener("click", function()
    {
        var selectedThumbnail = getSelectedThumbnail();
        var previousThumbnail = selectedThumbnail.previousElementSibling;
        
        if(previousThumbnail == null)
        {
            previousThumbnail= document.querySelector("#thumbnail-container > .thumbnail:last-of-type")
        }
        
        visuallyDeselectCurrentThumbnail();
        visuallySelectThumbnail(previousThumbnail);
    })
    
     arrowRight.addEventListener("click", function()
    {
        var selectedThumbnail = getSelectedThumbnail();
        var nextThumbnail = selectedThumbnail.nextElementSibling;
        
        if(nextThumbnail == null)
        {
            nextThumbnail= document.querySelector("#thumbnail-container > .thumbnail:first-of-type")
        }
        
        visuallyDeselectCurrentThumbnail();
        visuallySelectThumbnail(nextThumbnail);
    })
    
    
    
    for (var i = 0; i < thumbnails.length; i++)
    {
        //Pass in a reference to the function handler!
        thumbnails[i].addEventListener("click", handleThumbnailClick);
    }
    
    function handleThumbnailClick() {
        
        visuallyDeselectCurrentThumbnail()
        visuallySelectThumbnail(this);
    }
    
    function visuallyDeselectCurrentThumbnail()
    {
        var selectedThumbnail = getSelectedThumbnail();
        if(selectedThumbnail != null)
        {
            //Remove one class from the element
            selectedThumbnail.classList.remove("selected");
        }
    }
    
    function visuallySelectThumbnail(thumbnail)
    {
        thumbnail.classList.add("selected");
        
        var imageUrl = thumbnail.getAttribute("data-large-image-url");
        
        var sliderImage = document.querySelector("#slider-image");
        sliderImage.src = imageUrl;
    }
    
    function getSelectedThumbnail()
    {
        return document.querySelector("#thumbnail-container > .thumbnail.selected");
    }
    
    
    
    for(var i = 0; i < deleteButtons.length; i++)
    {
        deleteButtons[i].addEventListener("click", handleDeleteClick);
    }
        
    function handleDeleteClick()
    {
        this.parentElement.remove();
    }
    
    
    for(var i = 0; i < deleteButtonsThumbnail.length; i++)
    {
        deleteButtonsThumbnail[i].addEventListener("click", handleDeleteButtonsThumbnailClick);
    }
    
    function handleDeleteButtonsThumbnailClick()
    {
        this.parentElement.remove();
        var thumbnailsFrame = document.querySelector("#thumbnail-container");
        
        thumbnailsFrame.firstElementChild.classList.add("selected");
        
        var imageUrl = thumbnailsFrame.firstElementChild.getAttribute("data-large-image-url");
        
        var sliderImage = document.querySelector("#slider-image");
        sliderImage.src = imageUrl;
            
        this.parentElement.removeEventListener("click", handleThumbnailClick);
        
        //uklonit jos veliku sliku ako nema niti jedna mala
    }
});