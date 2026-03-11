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

/*~~~~~~~~~~~~~~~ SHOW SCROLL UP ~~~~~~~~~~~~~~~*/

/*~~~~~~~~~~~~~~~ CHANGE BACKGROUND HEADER ~~~~~~~~~~~~~~~*/

/*~~~~~~~~~~~~~~~ SCROLL SECTIONS ACTIVE LINK ~~~~~~~~~~~~~~~*/

/*~~~~~~~~~~~~~~~ SCROLL REVEAL ANIMATION ~~~~~~~~~~~~~~~*/
