document
  .getElementById("mobile-icon")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default action of the anchor tag
    var webContent = document.getElementById("web-developer-content");
    var mobileContent = document.getElementById("mobile-developer-content");
    var graphicContent = document.getElementById("graphic-designer-content");
    var socialMediaContent = document.getElementById(
      "social-media-marketing-content"
    );
    var jobTitleText = document.getElementById("job-title-text");
    var jobIcon = document.getElementById("job-icon");

    // Hide all content and show mobile content
    webContent.style.display = "none";
    mobileContent.style.display = "block";
    graphicContent.style.display = "none";
    socialMediaContent.style.display = "none";

    // Change job title text
    jobTitleText.textContent = "JR. MOBILE DEVELOPER";

    // Change job icon
    jobIcon.innerHTML = `
      <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M11 2C9.89543 2 9 2.89543 9 4V28C9 29.1046 9.89543 30 11 30H21C22.1046 30 23 29.1046 23 28V4C23 2.89543 22.1046 2 21 2H11ZM7 4C7 1.79086 8.79086 0 11 0H21C23.2091 0 25 1.79086 25 4V28C25 30.2091 23.2091 32 21 32H11C8.79086 32 7 30.2091 7 28V4Z" fill="#edeef5" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C10 0.447715 10.4477 0 11 0H12.5C12.8978 0 13.2794 0.158035 13.5607 0.43934C13.842 0.720646 14 1.10218 14 1.5H18C18 1.10218 18.158 0.720646 18.4393 0.43934C18.7206 0.158035 19.1022 0 19.5 0H21C21.5523 0 22 0.447715 22 1C22 1.55228 21.5523 2 21 2H19.9365C19.8479 2.34301 19.669 2.65944 19.4142 2.91421C19.0391 3.28929 18.5304 3.5 18 3.5H14C13.4696 3.5 12.9609 3.28929 12.5858 2.91421C12.331 2.65944 12.1521 2.34301 12.0635 2H11C10.4477 2 10 1.55228 10 1Z" fill="#edeef5" />
      </svg>
    `;
  });

document
  .getElementById("desktop-icon")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default action of the anchor tag
    var webContent = document.getElementById("web-developer-content");
    var mobileContent = document.getElementById("mobile-developer-content");
    var graphicContent = document.getElementById("graphic-designer-content");
    var socialMediaContent = document.getElementById(
      "social-media-marketing-content"
    );
    var jobTitleText = document.getElementById("job-title-text");
    var jobIcon = document.getElementById("job-icon");

    // Hide mobile content and show web content
    mobileContent.style.display = "none";
    webContent.style.display = "block";
    graphicContent.style.display = "none";
    socialMediaContent.style.display = "none";

    // Change job title text
    jobTitleText.textContent = "JR. WEB DEVELOPER";

    // Change job icon
    jobIcon.innerHTML = `
      <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M4 5C3.44772 5 3 5.44772 3 6V22C3 22.5523 3.44772 23 4 23H28C28.5523 23 29 22.5523 29 22V6C29 5.44772 28.5523 5 28 5H4ZM1 6C1 4.34315 2.34315 3 4 3H28C29.6569 3 31 4.34315 31 6V22C31 23.6569 29.6569 25 28 25H4C2.34315 25 1 23.6569 1 22V6Z" fill="#edeef5" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5077 23.876C12.5703 23.3755 12.9957 23 13.5 23H18.5C19.0043 23 19.4297 23.3755 19.4923 23.876L19.9923 27.876C20.0279 28.1606 19.9395 28.4468 19.7497 28.6618C19.5599 28.8768 19.2868 29 19 29H13C12.7132 29 12.4402 28.8768 12.2503 28.6618C12.0605 28.4468 11.9722 28.1606 12.0077 27.876L12.5077 23.876ZM14.3828 25L14.1328 27H17.8672L17.6172 25H14.3828Z" fill="#edeef5" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 28C8 27.4477 8.44772 27 9 27H23C23.5523 27 24 27.4477 24 28C24 28.5523 23.5523 29 23 29H9C8.44772 29 8 28.5523 8 28Z" fill="#edeef5" />
        <path d="M2 19V22C2.00148 22.53 2.21267 23.0378 2.58743 23.4126C2.96218 23.7873 3.47002 23.9985 4 24H28C28.53 23.9985 29.0378 23.7873 29.4126 23.4126C29.7873 23.0378 29.9985 22.53 30 22V19H2ZM16 23C15.8022 23 15.6089 22.9414 15.4444 22.8315C15.28 22.7216 15.1518 22.5654 15.0761 22.3827C15.0004 22.2 14.9806 21.9989 15.0192 21.8049C15.0578 21.6109 15.153 21.4327 15.2929 21.2929C15.4327 21.153 15.6109 21.0578 15.8049 21.0192C15.9989 20.9806 16.2 21.0004 16.3827 21.0761C16.5654 21.1518 16.7216 21.28 16.8315 21.4444C16.9414 21.6089 17 21.8022 17 22C17 22.2652 16.8946 22.5196 16.7071 22.7071C16.5196 22.8946 16.2652 23 16 23Z" fill="#edeef5" />
      </svg>
    `;
  });

document
  .getElementById("graphic-icon")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default action of the anchor tag
    var webContent = document.getElementById("web-developer-content");
    var mobileContent = document.getElementById("mobile-developer-content");
    var graphicContent = document.getElementById("graphic-designer-content");
    var socialMediaContent = document.getElementById(
      "social-media-marketing-content"
    );
    var jobTitleText = document.getElementById("job-title-text");
    var jobIcon = document.getElementById("job-icon");

    // Hide all content and show graphic designer content
    webContent.style.display = "none";
    mobileContent.style.display = "none";
    graphicContent.style.display = "block";
    socialMediaContent.style.display = "none";

    // Change job title text
    jobTitleText.textContent = "JR. GRAPHIC DESIGNER";

    // Change job icon
    jobIcon.innerHTML = `
    <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 5C12.4101 5 9.5 7.91015 9.5 11.5C9.5 15.0899 12.4101 18 16 18C19.5899 18 22.5 15.0899 22.5 11.5C22.5 7.91015 19.5899 5 16 5ZM7.5 11.5C7.5 6.80558 11.3056 3 16 3C20.6944 3 24.5 6.80558 24.5 11.5C24.5 16.1944 20.6944 20 16 20C11.3056 20 7.5 16.1944 7.5 11.5Z" fill="#edeef5" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5 14C17.9101 14 15 16.9101 15 20.5C15 24.0899 17.9101 27 21.5 27C25.0899 27 28 24.0899 28 20.5C28 16.9101 25.0899 14 21.5 14ZM13 20.5C13 15.8056 16.8056 12 21.5 12C26.1944 12 30 15.8056 30 20.5C30 25.1944 26.1944 29 21.5 29C16.8056 29 13 25.1944 13 20.5Z" fill="#edeef5" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 14C6.91015 14 4 16.9101 4 20.5C4 24.0899 6.91015 27 10.5 27C14.0899 27 17 24.0899 17 20.5C17 16.9101 14.0899 14 10.5 14ZM2 20.5C2 15.8056 5.80558 12 10.5 12C15.1944 12 19 15.8056 19 20.5C19 25.1944 15.1944 29 10.5 29C5.80558 29 2 25.1944 2 20.5Z" fill="#edeef5" />
  </svg>
    `;
  });

document
  .getElementById("social-media-icon")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default action of the anchor tag
    var webContent = document.getElementById("web-developer-content");
    var mobileContent = document.getElementById("mobile-developer-content");
    var graphicContent = document.getElementById("graphic-designer-content");
    var socialMediaContent = document.getElementById(
      "social-media-marketing-content"
    );
    var jobTitleText = document.getElementById("job-title-text");
    var jobIcon = document.getElementById("job-icon");

    // Hide all content and show social media marketing content
    webContent.style.display = "none";
    mobileContent.style.display = "none";
    graphicContent.style.display = "none";
    socialMediaContent.style.display = "block";

    // Change job title text
    jobTitleText.textContent = "JR. SOCIAL MEDIA MARKETING";

    // Change job icon
    jobIcon.innerHTML = `
    <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 14C6.89543 14 6 14.8954 6 16C6 17.1046 6.89543 18 8 18C9.10457 18 10 17.1046 10 16C10 14.8954 9.10457 14 8 14ZM4 16C4 13.7909 5.79086 12 8 12C10.2091 12 12 13.7909 12 16C12 18.2091 10.2091 20 8 20C5.79086 20 4 18.2091 4 16Z" fill="#edeef5" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 5C22.8954 5 22 5.89543 22 7C22 8.10457 22.8954 9 24 9C25.1046 9 26 8.10457 26 7C26 5.89543 25.1046 5 24 5ZM20 7C20 4.79086 21.7909 3 24 3C26.2091 3 28 4.79086 28 7C28 9.20914 26.2091 11 24 11C21.7909 11 20 9.20914 20 7Z" fill="#edeef5" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 23C22.8954 23 22 23.8954 22 25C22 26.1046 22.8954 27 24 27C25.1046 27 26 26.1046 26 25C26 23.8954 25.1046 23 24 23ZM20 25C20 22.7909 21.7909 21 24 21C26.2091 21 28 22.7909 28 25C28 27.2091 26.2091 29 24 29C21.7909 29 20 27.2091 20 25Z" fill="#edeef5" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2563 7.98038C22.527 8.46174 22.3563 9.07145 21.875 9.34221L11.1037 15.401C10.6224 15.6717 10.0126 15.501 9.74188 15.0196C9.47112 14.5383 9.64184 13.9286 10.1232 13.6578L20.8945 7.59906C21.3758 7.3283 21.9855 7.49902 22.2563 7.98038ZM9.74188 16.9804C10.0126 16.499 10.6224 16.3283 11.1037 16.5991L21.875 22.6578C22.3563 22.9286 22.527 23.5383 22.2563 24.0196C21.9855 24.501 21.3758 24.6717 20.8945 24.401L10.1232 18.3422C9.64184 18.0715 9.47112 17.4617 9.74188 16.9804Z" fill="#edeef5" />
  </svg>
    `;
  });
