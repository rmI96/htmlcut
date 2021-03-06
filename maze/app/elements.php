<!DOCTYPE html>
<html lang="en">

<head>
    
    <? include '_top.php';?>
    <title>Elements</title>

</head>

<body>

    <div id="content-block">

        <!-- HEADER -->

    <section class='section'>

        <div class='container'>
            <h2>Typography</h2>
            <div class='spacer-lg-60'></div>
            <h1>Development company</h1>
            <h2>Development company</h2>
            <h3>Development company</h3>
            <h4>Development company</h4>
            <h5>Development company</h5>
            <h6>Development company</h6>
            <div class='spacer-lg-60'></div>
            <b> text</b>
            <div class='text'>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur sint voluptates nesciunt qui quod laboriosam ex quisquam tenetur nemo, ullam explicabo doloremque adipisci dolores eaque delectus itaque deleniti assumenda nostrum.</p>
            </div>
            <b>text-sm</b>
            <div class='text-sm'>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, veniam est quas cupiditate maxime eius recusandae amet quisquam necessitatibus, dolore adipisci minima animi! Blanditiis vero rem accusantium quibusdam deleniti ducimus.</p>
            </div>
            <b> text-lg</b>
            <div class='text-lg'>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, veniam est quas cupiditate maxime eius recusandae amet quisquam necessitatibus, dolore adipisci minima animi! Blanditiis vero rem accusantium quibusdam deleniti ducimus.</p>
            </div>
            <div class='spacer-lg-60'></div>
            <div class='text'>
                <p><a href="#"> Lorem ipsum dolor</a> sit amet consectetur <b> adipisicing</b> elit. Et, veniam est quas cupiditate maxime eius recusandae amet quisquam necessitatibus, dolore adipisci minima animi! Blanditiis vero rem accusantium quibusdam deleniti ducimus.</p>
                <ul>
                    <li>Top innovations in users’ access, compliances, and various risks;</li>
                    <li>Data safety and privacy protection;</li>
                    <li>Advanced customer support (including upon finishing our work on your application);</li>
                    <li>Professional and up-to-date advertising campaigns;</li>
                    <li>Enhanced communication technologies.</li>
                </ul>
                <ol>
                    <li>Use Case 1 : Create Jira issue when Opportunity Stage is changed to Closed Won.</li>
                    <li>Use Case 2: Create Jira Issue when Account of Business type is created.</li>
                    <li>Use Case 1: When Comment to Case is added – comment to related Jira ticket should be added.</li>
                    <li>Use Case 3: When Note is added to Lead, comment should be added to a related Jira Ticket.</li>
                    <li>Use Case 4: When Attachment is added to Opportunity, the same attachment should be added.</li>
                </ol>
                <blockquote>
                    We are proud to offer professional Salesforce CRM development from the very initial point and up to the end of production.
                </blockquote>
                <table>
                    <tbody>
                        <tr>
                            <th>Employee</th>
                            <th>Salary</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><a href="http://john.do/">John Saddington</a></td>
                            <td>$1</td>
                            <td>Because that’s all Steve Job’ needed for a salary.</td>
                        </tr>
                        <tr class="even">
                            <td><a href="http://tommcfarlin.com/">Tom McFarlin</a></td>
                            <td>$100K</td>
                            <td>For all the blogging he does.</td>
                        </tr>
                        <tr>
                            <td><a href="http://jarederickson.com/">Jared Erickson</a></td>
                            <td>$100M</td>
                            <td>Pictures are worth a thousand words, right? So Tom x 1,000.</td>
                        </tr>
                        <tr>
                            <td><a href="http://chrisam.es/">Chris Ames</a></td>
                            <td>$100B</td>
                            <td>With hair like that?! Enough said…</td>
                        </tr>
                    </tbody>
                </table>
                <iframe src="https://www.youtube.com/embed/hmLBSCiEoas" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class='spacer-lg-60'></div>
            <h2>Buttons</h2>
            <div class='spacer-lg-60'></div>
            <div style="background-color: #ccc7b6; padding: 50px;">
                <a class="btn btn-primary" href="#">
                    <span>EXPLORE</span><span class="icon"> <img src="./img/arrow2.svg" alt=""> </span>
                </a>
            </div>
            <div class='spacer-lg-60'></div>
            <h2>Form</h2>
            <div class='spacer-lg-60'></div>
            <form class='form-group row'>
                <div class='col-lg-6'>
                    <input class='input' type="text" placeholder="Full Name">
                </div>
                <div class='col-lg-6'>
                    <input class='input' type="text" placeholder="Email address">
                </div>
                <div class='col-lg-6'>
                    <input class='input' type="text" placeholder="Phone number">
                </div>
                <div class='col-lg-6'>
                    <input class='input' type="text" placeholder="Your topic">
                </div>
            </form>
        </div>

</section>


    <section style="background-color: rgba(204, 199, 182, 255); padding: 50px 0;">
        <div class="container-cs">
            <div id="mapplic"></div>
        </div>
    </section>

        <!-- FOOTER -->
        <footer class='footer'>
            <? include '_footer.php';?>
        </footer>

    </div>

    <? include '_bottom.php';?>

        
        <link rel="stylesheet" type="text/css" href="./libs/mapplic/mapplic.css">
        <script src="./libs/mapplic/mapplic.js"></script>

        <script>
        jQuery(function($) {
            // Inline JSON example
            var mapplicData = {
                "mapwidth":"970",
                "mapheight":"880",
                "levels":[
                    {
                        "id":"world",
                        "title":"world",
                        "map":"img/WorldMap.svg",
                        "locations":[
                            {
                                "id": "region-1",
                                "title": "USA",
                                "description": "<ul><li>New York</li><li>Chicago</li><li>Boston</li><li>Los Angeles</li></ul>",
                                "fill":"false",
                                "x": "0.6187",
                                "y": "0.8804"
                            },
                            {
                                "id": "region-2",
                                "title": "Львівська область",
                                "description": "<p>Населення: <b>1 220 193</b></p><p>Адміністративний центр області: <br> місто Житомир. <br>міст - 1б в тому числі: <br> міст обласного значення - 5 <br> міст районного значення - 7</p>",
                                "thumbnail": "./img/map-image.jpg",
                                "fill":"#E93543",
                                "x": "0.08",
                                "y": "0.3604"
                            },
                            {
                                "id": "region-3",
                                "title": "Івано-Франківська область",
                                "description": "<p>Населення: <b>1 220 193</b></p><p>Адміністративний центр області: <br> місто Житомир. <br>міст - 1б в тому числі: <br> міст обласного значення - 5 <br> міст районного значення - 7</p>",
                                "thumbnail": "./img/map-image.jpg",
                                "fill":"false",
                                "fill":"#E93543",
                                "x": "0.1000",
                                "y": "0.4804"
                            }

                        ]
                    }
                ]
            };

            var customMapplic= $('#mapplic').mapplic({
                source: mapplicData,
                height: 880,
                // developer: true,
                landmark: false,
                action: 'none',
                search: false,
                lightbox: false,
                sidebar: false,
                minimap: false,
                zoombuttons: false,
                fullscreen: false,
                hovertip: true,
                maxscale: 1,
                zoom: false,
                clearbutton: false
            });

            var customMapplicOpened = false;

            // customMapplic.on('locationopened', function(e, location) {

            //     setTimeout(function() {
            //         $('.mapplic-tooltip').addClass('active');
            //     }, 500);

            // });

            // customMapplic.on('locationclosed', function(e, location) {

            //     $('.mapplic-tooltip').removeClass('active');

            // });

            // setTimeout(function() {
            //     var activeMapplicDefault = $("#" + mapplicData.levels[0].locations.find(x => x.defaultState === 'active').id);

            //     activeMapplicDefault.trigger('click');
            // }, 1500);

        });
    </script>


</body>
</html>