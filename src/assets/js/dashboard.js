document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".sub-nav .links a[data-service]");
  const learnMoreLinks = document.querySelectorAll(".learn-more");
  const images = document.querySelectorAll(".foreground-images img");
  const texts = document.querySelectorAll(".background-text");
  const defaultLink = document.querySelector(".link-container.active");

  // Show the "Learn more" link for the default active link
  if (defaultLink) {
    const defaultLearnMore = defaultLink.querySelector(".learn-more");
    if (defaultLearnMore) {
      defaultLearnMore.style.display = "block";
    }
  }

  links.forEach((link) => {
    if (link) {
      link.addEventListener("click", function (event) {
        // Check if the clicked link is a "Learn more" link
        if (this.querySelector(".learn-more")) {
          // Allow default behavior for "Learn more" links
          return;
        }

        event.preventDefault();

        // Remove active class and hide all "Learn more" links
        document.querySelectorAll(".link-container").forEach((container) => {
          container.classList.remove("active");
          const learnMore = container.querySelector(".learn-more");
          if (learnMore) {
            learnMore.style.display = "none";
          }
        });

        // Add active class and show the "Learn more" link for the clicked item
        const parentContainer = this.closest(".link-container");
        if (parentContainer) {
          parentContainer.classList.add("active");
          const learnMoreLink = parentContainer.querySelector(".learn-more");
          if (learnMoreLink) {
            learnMoreLink.style.display = "block";

            // Animate the "Learn more" link
            learnMoreLink.style.opacity = 0;
            learnMoreLink.style.transition = "opacity 0.5s";
            setTimeout(() => {
              learnMoreLink.style.opacity = 1;
            }, 10);
          }
        }

        // Get the service type from the clicked link
        const service = this.getAttribute("data-service");

        // Show/Hide images based on the service type
        images.forEach((img) => {
          if (img.getAttribute("data-service") === service) {
            img.style.display = "inline";
          } else {
            img.style.display = "none";
          }
        });

        // Show/Hide texts based on the service type
        texts.forEach((text) => {
          if (text.getAttribute("data-service") === service) {
            text.style.display = "inline";
          } else {
            text.style.display = "none";
          }
        });
      });
    }
  });

  // Event handler for "Learn more" links
  learnMoreLinks.forEach((link) => {
    const closestAnchor = link.closest("a");
    if (closestAnchor) {
      closestAnchor.addEventListener("click", function (event) {
        // Allow default behavior for "Learn more" links
      });
    }
  });

  const statBoxes = document.querySelectorAll(".stat-box");
  const containerNumbers = document.getElementById("container-numbers");
  const statImage = document.getElementById("stat-image");
  const modalImage = document.getElementById("modal-image");
  const imageModal = new bootstrap.Modal(document.getElementById("imageModal"));

  statBoxes.forEach((box) => {
    if (box) {
      box.addEventListener("click", function () {
        const imageUrl = box.getAttribute("data-image");
        if (window.innerWidth <= 500) {
          // Mobile view
          modalImage.src = imageUrl;
          imageModal.show();
        } else {
          // Desktop view
          statImage.src = imageUrl;
          containerNumbers.style.display = "none";
          statImage.style.display = "block";
          statImage.style.top = "10%";
          statImage.style.position = "relative";
          requestAnimationFrame(() => {
            statImage.classList.add("show");
          });
        }
      });
    }
  });

  document.addEventListener("click", function (event) {
    if (!event.target.closest(".stat-box") && window.innerWidth > 500) {
      statImage.classList.remove("show");
      setTimeout(() => {
        statImage.style.display = "none";
        containerNumbers.style.display = "block";
      }, 500); // Match the transition duration
    }
  });

  // Continuous scrolling for logos
  function continuousScroll(wrapperSelector) {
    const wrapper = document.querySelector(wrapperSelector);
    const logos = wrapper.querySelectorAll('img');
    const totalWidth = Array.from(logos).reduce((acc, logo) => acc + logo.offsetWidth + 50, 0); // 50 is the gap

    // Duplicate the entire set of logos to ensure smooth scrolling
    const wrapperContent = wrapper.innerHTML;
    wrapper.innerHTML += wrapperContent;

    let currentPosition = 0;

    function scroll() {
      currentPosition -= 1; // Adjust the speed by changing the decrement value
      if (Math.abs(currentPosition) >= totalWidth) {
        currentPosition = 0;
      }
      wrapper.style.transform = `translateX(${currentPosition}px)`;
      requestAnimationFrame(scroll);
    }

    scroll();
  }

  continuousScroll('.logos-wrapper');
  continuousScroll('.logos-wrapper2');
});