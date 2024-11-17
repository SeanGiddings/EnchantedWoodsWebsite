
document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll(".slideshow__images img");
    const prevButton = document.querySelector(".slideshow__control.prev");
    const nextButton = document.querySelector(".slideshow__control.next");
  
    console.log(images);
    console.log("hello");
    console.log("hello");
    console.log("hello");
    console.log("hello");
    console.log("hello");
  
    let currentIndex = 0;
  
    function updateSlide() {
      const offset = -currentIndex * 100; // Move the slider by 100% per image
      document.querySelector(".slideshow__images").style.transform = `translateX(${offset}%)`;
    }
  
    prevButton.addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + images.length) % images.length; // Loop back to last image
      updateSlide();
    });
  
    nextButton.addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % images.length; // Loop to the first image
      updateSlide();
    });
  });
  