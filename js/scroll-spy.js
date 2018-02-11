var set = {
    title_y: 186
}

var elements = {
    dining_menu: document.querySelectorAll('#dining-menu .panel'),
    private_dine: document.querySelectorAll('#private-dining .feature-item'),
    venue_function: document.querySelectorAll('#venue-functions .feature-item'),
    gift_card: document.querySelectorAll('#gift-card .form-group'),
    events: document.querySelectorAll('#events .event-item'),
    faq: document.querySelectorAll('#faq .panel'),
    contact: document.querySelectorAll('#contact .form-group')
};

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
    gift_card: function () {
        addAnimationClass(elements.gift_card);
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
    scroll_position.gift_card();
    scroll_position.events();
    scroll_position.faq();
    scroll_position.contact();
}

window.addEventListener('scroll', executeAllAnimations);
