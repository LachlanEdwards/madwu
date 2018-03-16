function retrieveJSON(url, callback) {
    var XHR = new XMLHttpRequest();
    XHR.open("GET", url, true);
    XHR.responseType = "json";
    XHR.onload = function () {
        if (XHR.status === 200) {
            callback(null, XHR.response);
        } else {
            callback(XHR.status, XHR.response);
        }
    }
    XHR.send();
}

function renderJSON(err, data) {
    if (err !== null) {
        console.log("ERROR: " + err);
    } else {
        document.querySelector(".feed-stat .followers").innerHTML = data.user.followed_by.count;
        for (var i = 0; i < 12; i++) {
            document.querySelector(".feed-media").innerHTML +=
                "<div class=\"feed-item\" style=\"background: url('" + data.user.media.nodes[i].thumbnail_src + "');\">" +
                "<div class=\"feed-item-data\">" +
                "<div class=\"feed-item-data-item\">" + data.user.media.nodes[i].likes.count + " LIKES</div>" +
                "<div class=\"feed-item-data-item\">" + data.user.media.nodes[i].comments.count + " COMMENTS</div>" +
                "</div>" +
                "</div>";
        }
        console.log(data);
    }
}

retrieveJSON("https://www.instagram.com/madamewubris/?__a=1", renderJSON);
