var standard = {
    CSS: {
        event_item_desc: function () {
            var element = document.querySelectorAll('#events .event-item .details');
            var height = 0;
            for (var i = 0; i < element.length; i++) {
                if (element[i].clientHeight > height) {
                    height = element[i].clientHeight;
                }
            }
            var style = document.createElement('style');
            style.type = 'text/css';
            style.innerHTML = '#events .event-item .details { height: ' + height + 'px; }';
            document.getElementsByTagName('head')[0].appendChild(style);
        }
    }
}

function executeOnResize() {
    standard.CSS.event_item_desc();
}

function executeOnLoad() {
    standard.CSS.event_item_desc();
}
window.addEventListener('resize', executeOnResize);
executeOnLoad();
