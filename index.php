<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Madame Wu</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="clearfix" style="padding:0;">
            <div class="col-md-12 hidden-md hidden-lg left">
                <div class="sm-nav">
                    <ul class="list-inline">
                        <li class="list-item list-im imid-mobileID"></li>
                        <li class="list-item"><a href="#slideshow">Welcome</a></li>
                        <li class="list-item"><a href="#dining-menu">Dining menus</a></li>
                        <li class="list-item"><a href="#private-dining">Private Dining</a></li>
                        <li class="list-item"><a href="#venue-functions">Venue Functions</a></li>
                        <li class="list-item"><a href="#gift-cards">Gift Cards</a></li>
                        <li class="list-item"><a href="#events">Events</a></li>
                        <li class="list-item"><a href="#contact">Contact</a></li>
                        <li class="list-item reserve-now"><a href="#">Reserve Now</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs left">
                <div class="md-nav affix">
                    <ul class="list-unstyled text-center text-uppercase">
                        <li class="list-im"><img src="img/logo.png" alt="logo"></li>
                        <li class="list-item"><a href="#slideshow">Welcome</a></li>
                        <li class="list-item"><a href="#dining-menu">Dining menus</a></li>
                        <li class="list-item"><a href="#private-dining">Private Dining</a></li>
                        <li class="list-item"><a href="#venue-functions">Venue Functions</a></li>
                        <li class="list-item"><a href="#gift-cards">Gift Cards</a></li>
                        <li class="list-item"><a href="#events">Events</a></li>
                        <li class="list-item"><a href="#contact">Contact</a></li>
                        <li class="list-item reserve-now"><a href="#">Reserve Now</a></li>
                    </ul>
                    <div class="venue-hours text-center"></div>
                    <!--<div class="disclaimer text-center">Madame Wu recommends a twelve hour buffer for reserving a table via Messagebank or e-mail. Do not assume a reservation as been made unless confirmation has been recieved from OpenTable or Madame Wu.</div>-->
                </div>
            </div>
            <div class="col-md-9 col-sm-12 right">
                <div class="void">
                    <div class="im-cover-size imid-301-kim-9914" id="slideshow">
                        <div class="flex">
                            <div class="content">
                                <h1 class="text-center text-capitalize title">"To the people, food is heaven."</h1>
                                <p class="text-center caption">Madame Wu is a modern Eastern Asian-Australian restaurant with an alluring Chinese influence, suited to those who dare to be exotic and taste the exquisite.</p>
                            </div>
                        </div>
                        <div class="instruction">
                            <p class="text-uppercase text-center">
                                <span class="caret"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="void">
                    <div class="content-container coversize-solid solidid-light-purple" id="dining-menu">
                        <h2 class="text-center sectitle">Dining Menus</h2>
                        <div class="clearfix">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-sm-4 col-md-3">
                                    <a href="docs/menu/dining_menu.pdf" target="_blank">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="img/acrobat.png" class="imid-pdf" alt="Adobe PDF file icon">
                                                <h6 class="text-center">Dinner Menu</h6>
                                                <small class="text-center"><?php echo number_format(filesize("docs/menu/dining_menu.pdf") / 1048576, 2);?> MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <a href="docs/menu/gluten_free_menu.pdf" target="_blank">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="img/acrobat.png" class="imid-pdf" alt="Adobe PDF file icon">
                                                <h6 class="text-center">Gluten Free</h6>
                                                <small class="text-center"><?php echo number_format(filesize("docs/menu/gluten_free_menu.pdf") / 1048576, 2);?> MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <a href="docs/menu/lunch_banquet.pdf" target="_blank">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="img/acrobat.png" class="imid-pdf" alt="Adobe PDF file icon">
                                                <h6 class="text-center">Lunch Banquet</h6>
                                                <small class="text-center"><?php echo number_format(filesize("docs/menu/lunch_banquet.pdf") / 1048576, 2);?> MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <a href="docs/menu/dining_menu.pdf" target="_blank">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="img/acrobat.png" class="imid-pdf" alt="Adobe PDF file icon">
                                                <h6 class="text-center">Banquet 1</h6>
                                                <small class="text-center"><?php echo number_format(filesize("docs/menu/dining_menu.pdf") / 1048576, 2);?> MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <a href="docs/menu/dining_menu.pdf" target="_blank">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="img/acrobat.png" class="imid-pdf" alt="Adobe PDF file icon">
                                                <h6 class="text-center">Banquet 2</h6>
                                                <small class="text-center"><?php echo number_format(filesize("docs/menu/dining_menu.pdf") / 1048576, 2);?> MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <a href="docs/menu/drinks_menu.pdf" target="_blank">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="img/acrobat.png" class="imid-pdf" alt="Adobe PDF file icon">
                                                <h6 class="text-center">Drinks List</h6>
                                                <small class="text-center"><?php echo number_format(filesize("docs/menu/drinks_menu.pdf") / 1048576, 2);?> MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <a href="docs/menu/wine_list.pdf" target="_blank">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="img/acrobat.png" class="imid-pdf" alt="Adobe PDF file icon">
                                                <h6 class="text-center">Wine Menu</h6>
                                                <small class="text-center"><?php echo number_format(filesize("docs/menu/wine_list.pdf") / 1048576, 2);?> MB</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <a href="" target="_blank">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="img/acrobat.png" class="imid-pdf" alt="Adobe PDF file icon">
                                                <h6 class="text-center">Ultimate Banquet<sup>1</sup></h6>
                                                <small class="text-center">NA</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12 fine-print">
                                    <div class="print text-center" id="1"><sup>1</sup> Madame Wu requires two days’ advice to prepare this order and thus it cannot be ordered within two days of a reservation. Madame Wu cannot cater this order for Walk-In Guests, a reservation is required. Madame Wu requires three hours to serve this order, meaning a booking before 6PM on Weekdays and before 7PM on Weekends is required. Be advised that Madame Wu cannot make this order during our lunchtime service.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="void">
                    <div class="content-container coversize-solid solidid-purple" id="private-dining">
                        <h2 class="text-center sectitle">Private Dining</h2>
                        <div class="clearfix">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="feature-list clearfix">
                                    <div class="feature-item col-md-4 col-sm-12">
                                        <img src="img/301-kim-9914.jpg" alt="..." width="100%">
                                        <h3>Outstanding Views</h3>
                                        <p class="textbox">Overlooking scenes of the Kangaroo Point Cliffs, Eagle Street’s modern architecture and the awe-inspiring Brisbane River, the Private Dining Room is the perfect setting to please and astonish those special guests.</p>
                                    </div>
                                    <div class="feature-item col-md-4 col-sm-12">
                                        <img src="img/301-kim-9914.jpg" alt="..." width="100%">
                                        <h3>Dine In Style</h3>
                                        <p class="textbox">Our Private Dining Room can seat two dozen guests for a dining-event or thirty for a standing-event, suitable for quiet, private and personal dinners. Or for that matter, loud, thrilling and gratifying dinners.</p>
                                    </div>
                                    <div class="feature-item col-md-4 col-sm-12">
                                        <img src="img/301-kim-9914.jpg" alt="..." width="100%">
                                        <h3>Personal And Private</h3>
                                        <p class="textbox">Guests have the control over the atmosphere. Our Private Dining Room has isolated lighting and volume settings, and the option for a private auxiliary cord for your own use.</p>
                                    </div>
                                </div>
                                <div class="feature-list clearfix last-clearfix">
                                    <div class="feature-item col-md-offset-2 col-md-4">
                                        <img src="img/301-kim-9914.jpg" alt="..." width="100%">
                                        <h3>World-Class Décor</h3>
                                        <p class="textbox">Developed by award-winning agency DS17, the Private Dining Room is an awe-inspiring display of modern, contemporary and authentic Interior Design. It’s guaranteed to astonish your guests with a unique style of décor seen nowhere else. You’re welcomed to schedule an inspection and see for yourself. </p>
                                    </div>
                                    <div class="feature-item col-md-4">
                                        <img src="img/301-kim-9914.jpg" alt="..." width="100%">
                                        <h3>What’re You Waiting For?</h3>
                                        <p class="textbox">Our helpful staff would love to hear from you. If you’re thinking of hosting an event, we have a selection of packages that cater for all kinds of special events. Whether it be dining in the Private Dining Room or drinking on the balcony aside the Story Bridge.</p>
                                    </div>
                                </div>
                                <div class="reserve">
                                    <button type="button" class="btn button">Enquire Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="void">
                    <div class="content-container coversize-solid solidid-light-purple" id="venue-functions">
                        <h2 class="text-center sectitle">Venue Functions</h2>
                        <div class="clearfix">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="feature-list clearfix">
                                    <h4 class="subtitle">Catering:</h4>
                                    <div class="feature-item col-md-4 col-sm-12">
                                        <img src="img/301-kim-9914.jpg" alt="..." width="100%">
                                        <h3>Beverage Options</h3>
                                        <p class="textbox">We offer a range of Beverage Options, from a simple bar-tab to, two, three and four hour, silver, gold and platinum packages. Starting at $40 PP, Madame Wu’s beverage options offer unmetered consumption of beverages in the package for the duration of the package, providing for an easy and pleasant event. Madame Wu is a responsible server of alcohol and a beverage package does not entitle exception to Responsible Service of Alcohol. </p>
                                    </div>
                                    <div class="feature-item col-md-4 col-sm-12">
                                        <img src="img/301-kim-9914.jpg" alt="..." width="100%">
                                        <h3>Food Options</h3>
                                        <p class="textbox">Just as with our Beverage Options, we offer Food Options from canapé style dining or sit-down style dining. Starting at $20 PP, Madame Wu’s staff will take care of the hassle by serving, clearing and providing for your event space and guests to ensure an enjoyable time for all. We’re also able to cater for any Dietary Requirements that a guest may have, just inform our staff prior to the event. </p>
                                    </div>
                                    <div class="feature-item col-md-4 col-sm-12">
                                        <img src="img/301-kim-9914.jpg" alt="..." width="100%">
                                        <h3>Our Resources</h3>
                                        <p class="textbox">Madame Wu has a range of event resources for your use, including a microphone, photo backdrop, venue-wide stereo, auxiliary connectivity, television, red carpet, printed menus, candles, photo booth, photographer, dj, casino games and a magician. Just let our staff know prior to the event what resources you’d like to use.</p>
                                    </div>
                                </div>
                                <div class="feature-list clearfix last-clearfix">
                                    <h4 class="subtitle">Spaces:</h4>
                                    <div class="feature-item col-md-4">
                                        <img src="img/301-kim-9914.jpg" alt="..." width="100%">
                                        <h3>Story Bridge Balcony</h3>
                                        <p class="textbox">Our large balcony features one-hundred-eighty degree views from the illuminate Story Bridge to the Kangaroo Point Cliffs. Our balcony is able to fit up to one-hundred-twenty guests standing-style and seventy-guests sit-down style.</p>
                                    </div>
                                    <div class="feature-item col-md-4">
                                        <img src="img/301-kim-9914.jpg" alt="..." width="100%">
                                        <h3>River View Bar</h3>
                                        <p class="textbox">Our River View Bar sits alongside the bar with communal seating and high tables and views over the Brisbane River and part views of the Story Bridge and Kangaroo Point Cliffs. We’re able to fit one-hundred guests standing style in the space, and seventy guests sit-down style. </p>
                                    </div>
                                    <div class="feature-item col-md-4">
                                        <img src="img/301-kim-9914.jpg" alt="..." width="100%">
                                        <h3>Whole Venue</h3>
                                        <p class="textbox">You’re welcomed to reserve the use of the entire venue, including both our River View Bar, Private Dining Room and Story Bridge Balcony. We’re able to fit two-hundred-fifty guests standing-style and one-hundred-forty guests sit-down style in the whole venue. We’ll need plenty of notice before reserving the entire venue, as it cannot be reserved if other guests have made dinner reservations on the planned night of the event. </p>
                                    </div>
                                </div>
                                <div class="reserve">
                                    <button type="button" class="btn button">Enquire Now</button>
                                    <button type="button" class="btn button">Functions Pack</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="void">
                    <div class="content-container coversize-solid solidid-purple" id="gift-card">
                        <h2 class="text-center sectitle">Gift Cards</h2>
                        <div class="clearfix">
                            <div class="col-md-offset-2 col-md-8">
                                <div class="subtitle">
                                    <h4>Extraordinary. Cherised. Unique. A gift card is the gift that will not be forgotten.</h4>
                                    <p>We securely process and handle your sensitive data in accordance with our <a href="#">Privacy Policy</a>.</p>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="value">Buyers Name</label>
                                        <input type="text" class="form-control" id="value" placeholder="Taibo Wu">
                                    </div>
                                    <div class="form-group">
                                        <label for="value">Recievers Name</label>
                                        <input type="text" class="form-control" id="value" placeholder="John Doe">
                                    </div>
                                    <div class="form-group">
                                        <label for="value">Value</label>
                                        <input type="text" class="form-control" id="value" placeholder="$100">
                                    </div>
                                    <div class="form-group">
                                        <label for="cardholder">Cardholder</label>
                                        <input type="text" class="form-control" id="cardholder" placeholder="Taibo Wu">
                                    </div>
                                    <div class="form-group">
                                        <label for="cardno">Card No.</label>
                                        <input type="text" class="form-control" id="cardno" placeholder="∙∙∙∙ ∙∙∙∙ ∙∙∙∙ ∙∙∙∙">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ccv">CCV</label>
                                                <input type="text" class="form-control" id="ccv" placeholder="∙∙∙">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="expiry">Expiry</label>
                                                <input type="text" class="form-control" id="expiry" placeholder="MM/YY">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn button">Purchase</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="void">
                    <div class="content-container coversize-solid solidid-light-purple" id="events">
                        <h2 class="text-center sectitle">Events</h2>
                        <div class="clearfix">
                            <div class="col-md-offset-2 col-md-8">
                                <?php
                                    function sortDate($a, $b) {
                                        $yday = getdate()["yday"];
                                        $a = $a['DayInYear'] - $yday;
                                        $b = $b['DayInYear'] - $yday;
                                        return $a - $b;
                                    }


                                    function fetchEvents() {
                                        $pdo = include('inc/connect.php');

                                        $statement = $pdo->prepare("SELECT * FROM Events");
                                        $statement->execute();
                                        $results = $statement->fetchall();
                                        usort($results, "sortDate");
                                        foreach ($results as $item) {

                                            $index = array_search($item, $results);
                                            if ($index === 0) {
                                                echo "<div class=\"clearfix\">";
                                            }
                                            if ($index % 3 === 0 && $index != 0) {
                                                echo "</div>";
                                                echo "<div class=\"clearfix last-clearfix\">";
                                            };

                                            echo "<div class=\"col-md-4\">";
                                                echo "<div class=\"event-item\">";
                                                    echo "<div class=\"date\">{$item['Day']} {$item['Month']}</div>";
                                                    echo "<div class=\"title\">{$item['Title']}</div>";
                                                    echo "<div class=\"details\">{$item['Desc']}</div>";
                                                    if ($item['Flyer'] != null) {
                                                        echo "<div class=\"flyer\"><a href=\"http://{$_SERVER['HTTP_HOST']}{$item['Flyer']}\">Flyer</a></div>";
                                                    } else {
                                                        echo "<div class=\"flyer\">No Flyer</div>";
                                                    };
                                                echo "</div>";
                                            echo "</div>";

                                            if ($index - 1 === count($results)) {
                                                echo "</div>";
                                            };

                                        };
                                    };
                                    fetchEvents();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="void">
                <div class="content-container coversize-solid solidid-purple" id="faq">
                    <h2 class="text-center sectitle">FAQ</h2>
                    <div class="clearfix">
                        <div class="col-md-offset-2 col-md-8">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading exposed" role="tab" id="headingOne" onclick="collapseEvent(this)">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What're your opening hours? <div class="caret"></div></a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo" onclick="collapseEvent(this)">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Why do reservations of 8 or more have to dine from a set-menu? <div class="caret"></div></a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do you split bills? <div class="caret"></div></a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="void">
                <div class="content-container coversize-solid solidid-light-purple" id="contact">
                    <h2 class="text-center sectitle">Contact</h2>
                    <div class="clearfix">
                        <div class="col-md-offset-2 col-md-4">
                            <?php
                                function sendMail() {
                                    if(isset($_POST["sender"])) {
                                        $error = null;
                                        $sender = htmlspecialchars($_POST["sender"]);
                                        if (strlen($sender) > 50) {;
                                            $error = "Invalid: Sender input too large. Limit to 50 characters.";
                                        };

                                        $subject = htmlspecialchars($_POST["subject"]);
                                        if (strlen($subject) > 50) {
                                            $error = "Invalid: Subject input too large. Limit to 50 characters.";
                                        };

                                        $email = htmlspecialchars($_POST["e-mail"]);
                                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                          $error = "Invalid: E-Mail field doesn't meet validation standards."; 
                                        };

                                        $phone = htmlspecialchars($_POST["phone"]);
                                        if (strlen($subject) > 50) {
                                            $error = "Invalid: Phone input too large. Limit to 50 characters.";
                                        };

                                        $body = htmlspecialchars($_POST["body"]);
                                        if (strlen($subject) > 500) {
                                            $error = "Invalid: Body input too large. Limit to 500 characters.";
                                        };

                                        $message = "SENDER: $sender\nPHONE: $phone\nE-MAIL: $email\nBODY: $body";
                                        if ($error === null) {
                                            mail("au_edwardsl@outlook.com", $subject, $message);
                                            echo "<div class=\"success\">Success. We'll try to reply within twelve hours.</div>";
                                        } else {
                                            echo "<div class=\"error\">$error</div>";
                                        }
                                    }
                                    
                                };
                                sendMail();
                            ?>
                                <form action="/madwu/index.php#contact" method="post">
                                    <div class="form-group">
                                        <label for="value">Sender</label>
                                        <input type="text" class="form-control" id="value" placeholder="Taibo Wu" name="sender" maxlength="50">
                                    </div>
                                    <div class="form-group">
                                        <label for="value">Subject</label>
                                        <input type="text" class="form-control" id="value" placeholder="New Year Tickets" name="subject" maxlength="50">
                                    </div>
                                    <div class="form-group">
                                        <label for="value">E-Mail</label>
                                        <input type="email" class="form-control" id="value" placeholder="taibo_wu@madamewu.com.au" name="e-mail" maxlength="50">
                                    </div>
                                    <div class="form-group">
                                        <label for="value">Phone</label>
                                        <input type="number" class="form-control" id="value" placeholder="07 3229 5070" name="phone" maxlength="50">
                                    </div>
                                    <div class="form-group">
                                        <label for="value">Body</label>
                                        <textarea type="text" class="form-control" id="value" placeholder="" name="body" maxlength="500"></textarea>
                                    </div>
                                    <button type="submit" class="btn button">Send</button>
                                </form>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <h4>Phone:</h4>
                                <p>07 3229 5070</p>
                            </div>
                            <div class="item">
                                <h4>E-Mail:</h4>
                                <p>info@madamewu.com.au</p>
                            </div>
                            <div class="item">
                                <h4>Address:</h4>
                                <p>Upper Plaza Level, Riparian Plaza<br>71 Eagle Street, Brisbance City<br>4000, Queensland<br>Australia</p>
                            </div>
                            <div class="item">
                                <h4>Opening Hours:</h4>
                                <p>Sunday through Thursday: Kitchen services 12:00PM til 2:45PM, 5:30PM til 8:45PM. Bar services 12:00PM til late.</p>
                                <p>Friday through Saturday: Kitchen services 12:00PM til 2:45PM, 5:30PM til 9:45PM. Bar services 12:00PM til late.</p>
                            </div>
                            <div class="item">
                                <h4>Disclaimer:</h4>
                                <p>Madame Wu recommends a twelve hour buffer for reserving a table via Messagebank or e-mail. Do not assume a reservation as been made unless confirmation has been recieved from OpenTable or Madame Wu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="void">
                <div class="coversize-solid solidid-black" id="footer">
                    <div class="cr">&copy; Madame Wu. Madame Wu is a<a href="http://rawgroup.com.au" target="_blank"><img src="img/raw-group-logo.png" alt="rawGROUP" height="24px"></a>venture.</div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scroll-spy.js"></script>
    <script src="js/accordion-state.js"></script>
    <script src="js/op-hour.js"></script>
</body>

</html>
