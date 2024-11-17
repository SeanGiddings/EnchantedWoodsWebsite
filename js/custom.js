document.addEventListener("DOMContentLoaded", () => {
  const imagesContainer = document.querySelector(".slideshow__images");
  const images = document.querySelectorAll(".slideshow__images img");
  const prevButton = document.querySelector(".slideshow__control.prev");
  const nextButton = document.querySelector(".slideshow__control.next");

  const totalImages = images.length; // Total number of images
  let currentIndex = 0; // Track the current slide

  // Function to update the slide
  function updateSlide() {
    const offset = -currentIndex * 100; // Calculate the offset for translateX
    imagesContainer.style.transform = `translateX(${offset}%)`;
  }

  // Function for the next slide
  function nextSlide() {
    if (currentIndex < totalImages - 1) {
      currentIndex++;
    } else {
      currentIndex = 0; // Loop back to the first image
    }
    updateSlide();
  }

  // Function for the previous slide
  function prevSlide() {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = totalImages - 1; // Loop back to the last image
    }
    updateSlide();
  }

  // Event listeners for navigation buttons
  nextButton.addEventListener("click", nextSlide);
  prevButton.addEventListener("click", prevSlide);

  // Ensure smooth transition
  imagesContainer.style.transition = "transform 0.5s ease-in-out";
});

$(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});

