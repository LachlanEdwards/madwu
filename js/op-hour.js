function nearEvent(eventHour, currentHour, currentMinute) {
    if (eventHour === currentHour - 1 && currentMinute > 30) {
        return true;
    } else {
        return false;
    }
}

function kitchenOperate(currentMinute, currentDay, currentHour, kitchenStart, kitchenStartBreak, kitchenEndBreak, kitchenEndWeekday, kitchenEndWeekend) {
    var kitchenBreak = currentHour > kitchenStartBreak && (currentHour === kitchenEndBreak && currentMinute < 30 || currentHour < kitchenEndBreak);
    if (currentDay <= 4) {
        //Weekday
        if (currentHour > kitchenStart && currentHour < kitchenEndWeekday && !kitchenBreak) {
            return true;
        } else {
            return false;
        }
    } else {
        //Weekend
        if (currentHour > kitchenStart && currentHour < kitchenEndWeekend && !kitchenBreak) {
            return true;
        } else {
            return false;
        }
    }
}

function venueOperate(currentHour, venueServiceStart, venueServiceEnd) {
    if (currentHour > venueServiceStart && currentHour < venueServiceEnd) {
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
