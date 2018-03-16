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
    <link href="fontawesome/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
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
                        <li class="list-item"><a href="#gallery">Gallery</a></li>
                        <li class="list-item"><a href="#events">Events</a></li>
                        <li class="list-item"><a href="#faq">FAQ</a></li>
                        <li class="list-item"><a href="#contact">Contact</a></li>
                        <li class="list-item"><a href="https://www.opentable.com.au/r/madame-wu-reservations-brisbane?restref=21428" target="_blank">Reserve Now</a></li>
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
                        <li class="list-item"><a href="#gallery">Gallery</a></li>
                        <li class="list-item"><a href="#events">Events</a></li>
                        <li class="list-item"><a href="#faq">FAQ</a></li>
                        <li class="list-item"><a href="#contact">Contact</a></li>
                        <li class="list-item reserve-now"><a href="https://www.opentable.com.au/r/madame-wu-reservations-brisbane?restref=21428" target="_blank">Reserve Now</a></li>
                    </ul>
                    <div class="venue-hours text-center"><img src="img/loading.png" alt="loading" width="14px" /></div>
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
                            <div class="col-lg-offset-2 col-lg-8 ">
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
                                                <h6 class="text-center">Gluten Free<sup>3</sup></h6>
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
                                                <h6 class="text-center">Lunch Banquet<sup>2</sup></h6>
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
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="fine-print col-lg-offset-2 col-lg-8 ">
                                <div class="print text-center" id="1"><sup>1</sup> Madame Wu requires two days’ advice to prepare this order and thus it cannot be ordered within two days of a reservation. Madame Wu cannot cater this order for Walk-In Guests, a reservation is required. Madame Wu requires three hours to serve this order, meaning a booking before 6PM on Weekdays and before 7PM on Weekends is required. Be advised that Madame Wu cannot make this order during our lunchtime service.</div>
                                <div class="print text-center" id="2"><sup>2</sup> Madame Wu's lunctime set-menu is altered day-to-day.</div>
                                <div class="print text-center" id="3"><sup>3</sup> Please inform your waitperson of any dietary requirements or allergies.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="void">
                    <div class="content-container coversize-solid solidid-purple" id="private-dining">
                        <h2 class="text-center sectitle">Private Dining</h2>
                        <div class="clearfix">
                            <div class="col-lg-offset-2 col-lg-8 ">
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
                                    <a type="button" class="btn button" href="#contact">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="void">
                    <div class="content-container coversize-solid solidid-light-purple" id="venue-functions">
                        <h2 class="text-center sectitle">Venue Functions</h2>
                        <div class="clearfix">
                            <div class="col-lg-offset-2 col-lg-8 ">
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
                                    <a type="button" class="btn button" href="#contact">Enquire Now</a>
                                    <a type="button" class="btn button" href="docs/pack/functions_pack.pdf" target="_blank">Functions Pack</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="void">
                    <div class="content-container coversize-solid solidid-purple" id="gallery">
                        <h2 class="text-center sectitle">Gallery</h2>
                        <div class="clearfix">
                            <div class="col-lg-offset-2 col-lg-8 ">
                                <div class="clearfix">
                                    <div class="gallery">
                                        <?php include("inc/gallery.php"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="void">
                    <div class="content-container coversize-solid solidid-light-purple" id="events">
                        <h2 class="text-center sectitle">Events</h2>
                        <div class="clearfix">
                            <div class="col-lg-offset-2 col-lg-8 ">
                                <?php include("inc/events.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="void">
                    <div class="content-container coversize-solid solidid-purple" id="faq">
                        <h2 class="text-center sectitle">FAQ</h2>
                        <div class="clearfix">
                            <div class="col-lg-offset-2 col-lg-8 ">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <?php include("inc/faq.php"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="void">
                    <div class="content-container coversize-solid solidid-light-purple" id="contact">
                        <h2 class="text-center sectitle">Contact</h2>
                        <div class="clearfix">
                            <div class="col-lg-offset-2 col-lg-4 col-md-offset-1 col-md-5">
                                <?php include("inc/sendmail.php"); ?>
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
                            <div class="col-md-5 col-lg-4">
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
                        <div class="clearfix">
                            <div class="col-xs-4">
                                <a href="https://www.facebook.com/MadameWuBrisbane/" target="_blank"><i class="fab fa-facebook"></i></a>
                            </div>
                            <div class="col-xs-4">
                                <a href="https://www.instagram.com/madamewubris/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="col-xs-4">
                                <a href="https://www.tripadvisor.com.au/Restaurant_Review-g255068-d6537605-Reviews-Madame_Wu-Brisbane_Brisbane_Region_Queensland.html" target="_blank"><i class="fab fa-tripadvisor"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
