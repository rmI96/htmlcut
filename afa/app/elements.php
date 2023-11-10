<!DOCTYPE html>
<html lang="en">

<head>

    <? include 'inc/_top.php';?>
	<title>Elements - Home</title>

    <style>
        .spacer-lg-60{
            height: 60px;
        }
        .spacer-lg-30{
            height: 30px;
        }
    </style>

</head>

<body>

    <div id="content-block">

        <!-- HEADER -->
        <header class='header'>
            <? include 'inc/_header.php';?>
        </header>


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
                <p><a href="#"> Lorem ipsum dolor</a> sit amet consectetur adipisicing elit. Et, veniam est quas cupiditate maxime eius recusandae amet quisquam necessitatibus, dolore adipisci minima animi! Blanditiis vero rem accusantium quibusdam deleniti ducimus.</p>
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
            </div>
            <div class='spacer-lg-60'></div>
            <h2>Buttons</h2>
            <div class='spacer-lg-60'></div>
            <button class='btn btn-primary'>Text</button>
            <div class="spacer-lg-30"></div>
            <button class="btn btn-secondary">Text</button>
            <div class="spacer-lg-30"></div>
            <button class="btn btn-close"></button>
            <div class='spacer-lg-60'></div>
            <h2>Form 1</h2>
            <div class='spacer-lg-60'></div>
            <div class="select-choice_wrapper">
                <select class="select-choice" data-options='{"itemSelectText": "", "searchEnabled":false}'>
                    <option placeholder>text</option>
                    <option selected>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                </select>
            </div>
            <div class="spacer-lg-60"></div>
            <form class='form-group row'>
                <div class='col-lg-6'>
                    <div class="input-inner">
                        <input class='input error' type="text" placeholder="Full Name">
                        <div class="input-error">Електронна адреса має містити «@»</div>
                    </div>
                </div>
                <div class='col-lg-6'>
                    <div class="input-inner">
                        <input class="input" type="text" placeholder="Email address">
                        <div class="input-error">Електронна адреса має містити «@»</div>
                    </div>
                </div>
                <div class='col-lg-6'>
                    <div class="input-inner">
                        <input class="input" type="text" placeholder="Phone number">
                        <div class="input-error">Електронна адреса має містити «@»</div>
                    </div>
                </div>
                <div class='col-lg-6'>
                    <div class="input-inner">
                        <input class="input" type="text" placeholder="Your topic">
                        <div class="input-error">Електронна адреса має містити «@»</div>
                    </div>
                </div>
                <div class='col-lg-12'>
                    <div class="input-inner">
                        <textarea class="input" placeholder="Your message"></textarea>
                        <div class="input-error">Електронна адреса має містити «@»</div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label class="checkbox-entry">
                        <input type="checkbox"><span></span>
                        Text
                    </label>
                </div>
                <div class="col-lg-12">
                    <label class="checkbox-entry">
                        <input type="radio"><span></span>
                        Text
                    </label>
                </div>
            </form>
            <div class="spacer-lg-30"></div>
            <h2>Badge</h2>
            <div class='spacer-lg-60'></div>
            <div class="badge-wrapper">
                <div class="badge">кредит</div>
                <div class="badge">точка зору</div>
                <div class="badge">законодавство</div>
            </div>
            <div class='spacer-lg-60'></div>
        </div>

</section>

        <!-- FOOTER -->
        <footer class='footer'>
            <? include 'inc/_footer.php';?>
        </footer>

    </div>

    <? include 'inc/_bottom.php';?>


</body>
</html>
