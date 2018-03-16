var set = {
    title_y: 186
};

var elements = {
    welcome: document.querySelectorAll('#slideshow .panel'),
    dining_menu: document.querySelectorAll('#dining-menu .panel'),
    private_dine: document.querySelectorAll('#private-dining .feature-item'),
    venue_function: document.querySelectorAll('#venue-functions .feature-item'),
    gallery: document.querySelectorAll('#gallery img'),
    events: document.querySelectorAll('#events .event-item'),
    faq: document.querySelectorAll('#faq .panel'),
    contact: document.querySelectorAll('#contact .form-group')
};

var sections = [
    document.querySelector('#slideshow'),
    document.querySelector('#dining-menu'),
    document.querySelector('#private-dining'),
    document.querySelector('#venue-functions'),
    document.querySelector('#gallery'),
    document.querySelector('#events'),
    document.querySelector('#faq'),
    document.querySelector('#contact')
];

var navlinks = [
    document.querySelector('.md-nav a[href="#slideshow"]'),
    document.querySelector('.md-nav a[href="#dining-menu"]'),
    document.querySelector('.md-nav a[href="#private-dining"]'),
    document.querySelector('.md-nav a[href="#venue-functions"]'),
    document.querySelector('.md-nav a[href="#gallery"]'),
    document.querySelector('.md-nav a[href="#events"]'),
    document.querySelector('.md-nav a[href="#faq"]'),
    document.querySelector('.md-nav a[href="#contact"]')
];

function addActiveClass() {
    for (var i = 0; i < sections.length; i++) {
        if (sections[i].getBoundingClientRect().top <= 1 && sections[i].getBoundingClientRect().bottom >= 1) {
            if (!navlinks[i].classList.toString().includes("active")) {
                navlinks[i].classList += " active";
            }
        } else {
            navlinks[i].classList = "";
        }
    }
}

function detectActiveSection() {
    for (var i = 0; i < sections.length; i++) {
        console.log(sections[i]);
        if (sections[i].getBoundingClientRect().top <= 0) {
            console.log(navlinks[i]);
            addActiveClass(navlinks[i]);
        }
    }
}

function addAnimationClass(elementArray) {
    for (var i = 0; i < elementArray.length; i++) {
        var delay = i * 500 + 500;
        var element = elementArray[i];
        var element_y = element.getBoundingClientRect().top;
        if (element_y <= window.innerHeight && !element.classList.contains('animated')) {
            element.classList += ' animated fadeInLeft';
        }
    }
}


var scroll_position = {
    dining_menu: function () {
        addAnimationClass(elements.dining_menu);
    },
    private_dine: function () {
        addAnimationClass(elements.private_dine);
    },
    venue_function: function () {
        addAnimationClass(elements.venue_function);
    },
    gallery: function () {
        addAnimationClass(elements.gallery);
    },
    events: function () {
        addAnimationClass(elements.events);
    },
    faq: function () {
        addAnimationClass(elements.faq);
    },
    contact: function () {
        addAnimationClass(elements.contact);
    }
}

function executeAllAnimations() {
    scroll_position.dining_menu();
    scroll_position.private_dine();
    scroll_position.venue_function();
    scroll_position.gallery();
    scroll_position.events();
    scroll_position.faq();
    scroll_position.contact();
}

function execute() {
    executeAllAnimations();
    addActiveClass();
};

window.addEventListener('scroll', execute);
execute();
