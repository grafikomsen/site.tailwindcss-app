/*~~~~~~~~~~~~~~~ TOGGLE BUTTON ~~~~~~~~~~~~~~~*/
const hamburger = document.getElementById('hamburger');
const navMenu   = document.getElementById('nav-menu');
const closeIcon = document.getElementById('nav-close');
const navLink   = document.querySelectorAll('.nav-link');

navLink.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.add('hidden');
    });
});

closeIcon.addEventListener('click', () => {
    navMenu.classList.add('hidden');
})

hamburger.addEventListener('click', () => {
    navMenu.classList.remove('hidden')
})

/*~~~~~~~~~~~~~~~ TABS ~~~~~~~~~~~~~~~*/
const tabs      = document.querySelectorAll('.tabs ul li');
const all       = document.querySelectorAll('.items-wrap');
const foods      = document.querySelectorAll('.food');
const snacks     = document.querySelectorAll('.snack');
const beverages  = document.querySelectorAll('.beverage');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        tabs.forEach(tab => {
            tab.classList.remove('active')
        })

        tab.classList.add('active');
        const tabval = tab.getAttribute('data-tabs');

        all.forEach(item => {
            item.style.display = 'none'
        });

        if (tabval == 'food') {
            foods.forEach(item => {
                item.style.display = 'block';
            })
        } else if (tabval == 'snack') {
            snacks.forEach(item => {
                item.style.display = 'block';
            })
        } else if (tabval == 'beverage') {
            beverages.forEach(item => {
                item.style.display = 'block';
            })
        } else {
            all.forEach(item => {
                item.style.display = 'block';
            })
        }
    })
});

/*~~~~~~~~~~~~~~~ SWIPER ~~~~~~~~~~~~~~~*/
const swiper = new Swiper('.swiper', {
    speed: 400,
    spaceBetween: 30,
    autoplay: {
        deplay: 300,
        disableOnInteraction: false,
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    gradCursor: true,
    // Responsive breakpoints
    breakpoints: {
    // when window width is >= 640px
    640: {
      slidesPerView: 1,

    },
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 2,
    }
  }

});

/*~~~~~~~~~~~~~~~ DARK LIGHT THEME ~~~~~~~~~~~~~~~*/
const html = document.querySelector('html');
const themeBtn = document.getElementById('theme-toggle');

const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

if (localStorage.getItem('mode') === 'dark' || (!localStorage.getItem('mode') && prefersDark)) {
    darkMode();
} else {
    lightMode();
}

themeBtn.addEventListener('click', () => {
    if (localStorage.getItem('mode') === 'light') {
        darkMode();
    } else {
        lightMode();
    }
});

function darkMode() {
    html.classList.add('dark');
    themeBtn.classList.replace('ri-moon-line', 'ri-sun-line');
    localStorage.setItem('mode', 'dark');
}

function lightMode() {
    html.classList.remove('dark');
    themeBtn.classList.replace('ri-sun-line', 'ri-moon-line');
    localStorage.setItem('mode', 'light');
}

/*~~~~~~~~~~~~~~~ SHOW SCROLL UP ~~~~~~~~~~~~~~~*/
const scrollUp = () => {
    const scrollUpBtn = document.getElementById("scroll-up");

    if (window.scrollY >= 250) {
        scrollUpBtn.classList.remove("-bottom-1/2");
        scrollUpBtn.classList.add("bottom-4");
    } else {
        scrollUpBtn.classList.add("-bottom-1/2");
        scrollUpBtn.classList.remove("bottom-4");
    }
}
window.addEventListener('scroll', scrollUp);

/*~~~~~~~~~~~~~~~ CHANGE BACKGROUND HEADER ~~~~~~~~~~~~~~~*/
const scrollHeader = () => {
    const header = document.getElementById("header");

    if (window.scrollY >= 50) {
        header.classList.add("border-b", "border-secondaryColor");
    } else {
        header.classList.remove("border-b", "border-secondaryColor");
    }
}
window.addEventListener('scroll', scrollHeader);

/*~~~~~~~~~~~~~~~ SCROLL SECTIONS ACTIVE LINK ~~~~~~~~~~~~~~~*/
const activeLink = () => {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");

    let current = 'home';

    sections.forEach((section) => {
        const sectionTop = section.offsetTop;

        if (window.scrollY >= sectionTop - 60) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(item => {
        item.classList.remove('text-secondaryColor');
        if (item.href.includes(current)) {
            item.classList.add('text-secondaryColor');
        }
    });
};

window.addEventListener('scroll', activeLink);

/*~~~~~~~~~~~~~~~ SCROLL REVEAL ANIMATION ~~~~~~~~~~~~~~~*/
const sr = ScrollReveal({
  origin: 'top',
  distance: '60px',
  duration: 2500,
  delay: 200
});

sr.reveal(".image-animate");
sr.reveal(".content-animate",{origin: 'bottom'});
sr.reveal(".card-animate",{interval: 300});
sr.reveal(".promo1-animate",{origin: 'left'});
sr.reveal(".promo2-animate",{origin: 'right'});
sr.reveal(".aboutImg-animate",{origin: 'top'});
sr.reveal(".aboutCont-animate",{origin: 'bottom'});
sr.reveal(".menuItem-animate",{origin: 'left'});
sr.reveal(".review-animate",{origin: 'rignt'});
sr.reveal(".contact-animate",{scale: 1});
sr.reveal(".footer-animate");
