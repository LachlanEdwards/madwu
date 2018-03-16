/* Accordion State Script */
function collapseEvent(element) {
    var element_children_0_0 = element.children[0].children[0];
    if (element_children_0_0.classList.value.match(/\bcollapsed\b/)) {
        element.classList += ' exposed';
    } else {
        element.classList = 'panel-heading';
    }
}

/* Venue Operating Hours Script */
function nearEvent(eventHour, currentHour, currentMinute) {
    if (eventHour === currentHour - 1 && currentMinute > 30) {
        return true;
    } else {
        return false;
    }
}

function kitchenOperate(currentMinute, currentDay, currentHour, kitchenStart, kitchenStartBreak, kitchenEndBreak, kitchenEndWeekday, kitchenEndWeekend) {
    var kitchenBreak = currentHour >= kitchenStartBreak && (currentHour === kitchenEndBreak && currentMinute < 30 || currentHour < kitchenEndBreak);
    if (currentDay <= 4) {
        //Weekday
        if (currentHour >= kitchenStart && currentHour < kitchenEndWeekday && !kitchenBreak) {
            return true;
        } else {
            return false;
        }
    } else {
        //Weekend
        if (currentHour >= kitchenStart && currentHour < kitchenEndWeekend && !kitchenBreak) {
            return true;
        } else {
            return false;
        }
    }
}

function venueOperate(currentHour, venueServiceStart, venueServiceEnd) {
    if (currentHour >= venueServiceStart && currentHour < venueServiceEnd) {
        return true;
    } else {
        return false;
    }
}

function closedDate(date) {
    var datesClosed = [
        new Date(date.getUTCFullYear(), 11, 24),
        new Date(date.getUTCFullYear(), 11, 25)
    ];

    for (var i = 0; i < datesClosed.length; i++) {
        if (date === datesClosed[i]) {
            closedDate = true;
        } else {
            closedDate = false;
        }
    }
}

function writeElement(text) {
    document.querySelector(".venue-hours").innerHTML = text;
}

function stateElement(state) {
    document.querySelector(".venue-hours").classList = "venue-hours text-center " + state;
}

function hours() {
    var date = new Date();

    var currentDay = date.getUTCDay();
    var currentDate = date.getUTCDate();
    var currentMonth = date.getUTCMonth();
    var currentHour = date.getUTCHours();
    var currentMinute = date.getUTCMinutes();

    var venueServiceStart_t = 12 - 10;
    var kitchenServiceBreakStart = 15 - 10;
    var kitchenServiceBreakEnd = 17 - 10;
    var kitchenServiceEndWeekday_t = 21 - 10;
    var kitchenServiceEndWeekend_t = 22 - 10;
    var venueServiceEnd_t = 23 - 10;
    var bufferMinutes = 30;

    var boolKitchenOperate = kitchenOperate(currentMinute, currentDay, currentHour, venueServiceStart_t, kitchenServiceBreakStart, kitchenServiceBreakEnd, kitchenServiceEndWeekday_t, kitchenServiceEndWeekend_t);
    var boolVenueOperate = venueOperate(currentHour, venueServiceStart_t, venueServiceEnd_t);
    var boolClosedDate = closedDate(date);
    var boolNearKitchenClose;
    var boolNearVenueClose = nearEvent(venueServiceEnd_t, currentHour, currentMinute);
    if (currentDay <= 4) {
        boolNearKitchenClose = nearEvent(kitchenServiceEndWeekday_t, currentHour, currentMinute);
    } else {
        boolNearKitchenClose = nearEvent(kitchenServiceEndWeekend_t, currentHour, currentMinute);
    }



    if (!boolClosedDate) {
        if (boolVenueOperate && !boolNearVenueClose) {
            if (boolKitchenOperate && !boolNearKitchenClose) {
                writeElement("Madame Wu is open.");
                stateElement("text-success");
            } else if (boolKitchenOperate && boolNearKitchenClose) {
                writeElement("Kitchen closing soon. Bar open.");
                stateElement("text-warning");
            } else {
                writeElement("Kitchen now closed. Bar open.");
                stateElement("text-warning");
            }
        } else if (boolVenueOperate && boolNearVenueClose) {
            writeElement("Kitchen closed. Bar closing soon.");
            stateElement("text-warning");
        } else {
            writeElement("Madame Wu is currently closed.");
            stateElement("text-danger");
        }
    } else {
        writeElement("Madame Wu is currently closed.");
        stateElement("text-danger");
    }

}

hours();

/* Scroll Spy Script */
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
