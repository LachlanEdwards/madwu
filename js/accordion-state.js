function collapseEvent(element) {
    var element_children_0_0 = element.children[0].children[0];
    if (element_children_0_0.classList.value.match(/\bcollapsed\b/)) {
        element.classList += ' exposed';
    } else {
        element.classList = 'panel-heading';
    }
}
