document.addEventListener("DOMContentLoaded", function () {

  const navLinks = document.querySelectorAll(".nav-item.nav-link");
  const currentUrl = window.location.href;
  const dir = getLastSegment(currentUrl);

  
    navLinks.forEach((link) => {

      link.addEventListener("click", function () {
        navLinks.forEach((nav) => nav.classList.remove("active"));
        // this.classList.add("active");
      });
  
    })

  navLinks.forEach((link) => {
    // use these later
    var linkPath = link.innerHTML;

  });

  check_page();  
  
  function check_page() {
    const links = {
        home: '../',
        services: '../services',
        projects: '../projects',
        products: '../products',
        productDesign: '../product-design',
        about: '../about-us',
        internship: '../internship',
        contact: '../contact',
        mobileServices: '../service-mobile',
        serviceDesign: '../service-design',
        otherServices: '../other-service'
    };

    const pageMap = {
        'Home': () => {
            document.getElementById('na_home').href = './';
            document.getElementById('na_home_2').href = links.home;
            setCommonLinks();
        },
        'services': () => setCommonLinks(),
        'projects': () => {
            document.getElementById('nav_projects').href = './';
            setCommonLinks();
        },
        'products': () => {
            document.getElementById('nav_products').href = './';
            setCommonLinks();
        },
        'about-us': () => {
            console.log('about us..');
            document.getElementById('nav_about').href = './';
            setCommonLinks();
            document.getElementById('nav_internship').href = links.internship;
            document.getElementById('nav_internship_2').href = links.internship;
        },
        'internship': () => {
            document.getElementById('nav_internship').href = './';
            document.getElementById('nav_internship_2').href = './';
            setCommonLinks();
        },
        'service-mobile': () => {
            document.getElementById('nav_mobile_services').href = './';
            setCommonLinks();
        },
        'service-design': () => {
            document.getElementById('nav_service_design').href = './';
            setCommonLinks();
        },
        'other-service': () => {
            document.getElementById('nav_other_services').href = './';
            setCommonLinks();
        },
        'product-design': () => {
            document.getElementById('nav_products_3').href = './';
            setCommonLinks();
        },
        'contact': () => {
            document.getElementById('nav_contact').href = './';
            setCommonLinks();
            document.getElementById('nav_internship').href = links.internship;
            document.getElementById('nav_internship_2').href = links.internship;
        }
    };

    function setCommonLinks() {
        document.getElementById('na_home').href = links.home;
        document.getElementById('na_home_2').href = links.home;
        document.getElementById('nav_services').href = links.services;
        document.getElementById('nav_services_2').href = links.services;
        document.getElementById('nav_services_3').href = links.services;
        document.getElementById('nav_services_4').href = links.projects;
        document.getElementById('nav_projects').href = links.projects;
        document.getElementById('nav_projects_2').href = links.projects;
        document.getElementById('nav_products').href = links.products;
        document.getElementById('nav_products_2').href = links.products;
        document.getElementById('nav_products_3').href = links.productDesign;
        document.getElementById('nav_about').href = links.about;
        document.getElementById('nav_about_2').href = links.about;
        document.getElementById('nav_contact').href = links.contact;
        document.getElementById('nav_contact_2').href = links.contact;
        document.getElementById('nav_mobile_services').href = links.mobileServices;
        document.getElementById('nav_service_design').href = links.serviceDesign;
        document.getElementById('nav_other_services').href = links.otherServices;
    }

    const currentPage = Object.keys(pageMap).find(key => currentUrl.includes(key));
    if (currentPage) {
        pageMap[currentPage]();
    }
}


  function getLastSegment(url) {
    // Create a URL object
    const urlObj = new URL(url);

    // Get the pathname and split it into segments
    const segments = urlObj.pathname.split('/');

    // Filter out any empty segments and return the last one
    const lastSegment = segments.filter(segment => segment !== '').pop();
    
    return lastSegment;
}

  // Function to handle navbar stickiness on scroll
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      // Change this value to adjust when the class is added
      navbar.classList.add("sticky");
    } else {
      navbar.classList.remove("sticky");
    }
  });

  // Function to prevent vertical scrolling while the loader is visible
  document.body.style.overflow = 'hidden';

  const loader = document.getElementById("loader");
  const body = document.body;

  if (loader) { // Add null check for loader
    // console.log("Loader found, starting fade out.");
    // Function to start fading out the loader
    setTimeout(() => {
      loader.style.opacity = '0';

      // Function to handle the end of the fade-out animation
      loader.addEventListener('transitionend', function() {
        loader.style.display = 'none';
        body.style.overflow = ''; // Restore vertical scrolling
        // console.log("Loader hidden, scrolling restored.");
      }, { once: true });
    }, 0); // Start fade-out immediately
  } else {
    console.log("Loader not found, restoring scrolling immediately.");
    // If loader is not found, restore scrolling immediately
    body.style.overflow = '';
  }


});
