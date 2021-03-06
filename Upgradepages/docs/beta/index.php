<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../../../assets/style/CSS/minified/Upgrade.min.css">
    <link rel="stylesheet" href="../../../assets/style/CSS/minified/docs.min.css">

    <script src="https://kit.fontawesome.com/a4ede3fed3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

<!--

Data Attributes

data-[...]
docu-title: Name of the Element (displayed in documentation as heading).
docu-description: Description of the Element.
docu-colorable: Element is colorable.
docu-beta: Element is in beta state.
docu-refer: Similar elements

-->

<main class="container-lg my-5 my-lg-10">
    <header class="mb-3 mb-lg-6">
        <h1 class="heading heading-larger fs-underline mb-1 mb-lg-2">Documentation <span
                    class="badge-warning fsi-small">Beta</span></h1>

        <p>
            This version of the documentation is currently incomplete, but will be constantly updated, it is
            recommended to use the beta version only to see how the documentation will be built in the future.
        </p>
    </header>

    <div class="d-flex flex-d-column gy-5 gy-lg-7">
        <div class="docu-element" data-docu-title="Accordion"
             data-docu-description="Accordions are simple boxes with a summary and a longer text within it. When you click on an accordion it will open up and show the insides information."
             data-docu-colorable data-docu-needs-js>
            <div class="example">
                <div class="accordion accordion-main">
                    <button class="accordion-toggle">Toggle</button>

                    <div class="accordion-content">
                        <p class="accordion-title">Lorem ipsum dolor sit amet, consectetur.</p>
                        <p class="accordion-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque debitis eaque eum
                            illum ipsam laborum magni molestiae odio placeat! Corporis culpa doloremque officiis quas!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="docu-element" data-docu-title="Alert"
             data-docu-description="Alerts are a practical way to inform the user of your website about completed processes, errors, or similar. "
             data-docu-colorable>
            <div class="example">
                <div class="alert-main">
                    This is a simple alert! You can use it for barely everything.
                </div>
            </div>
        </div>

        <div class="docu-element" data-docu-title="Badge"
             data-docu-description="Badges are a great way to display, for example, new features."
             data-docu-colorable>
            <div class="example">
                <p>Lorem ipsum dolor sit. <span class="badge-warning">New</span></p>
            </div>
        </div>

        <div class="docu-element"
             data-docu-title="Button"
             data-docu-description="Badges are a great way to display, for example, new features."
             data-docu-refer="simple-button button"
             data-docu-colorable>
            <div class="example">
                <button class="button-main">Button</button>
            </div>
        </div>

        <div class="docu-element" data-docu-title="Simple Button"
             data-docu-description="Badges are a great way to display, for example, new features."
             data-docu-refer="button"
             data-docu-colorable>
            <div class="example">
                <button class="simple-button-main">Button</button>
                <a class="simple-button-main">Button via &lt;a&gt;</a>
            </div>
        </div>

        <div class="docu-element" data-docu-title="Card"
             data-docu-description="A simple design element to display information."
             data-docu-refer="image-card">
            <div class="example">
                <div class="card">
                    <img src="https://via.placeholder.com/1280x720" class="card-image">

                    <div class="card-content">
                        <p class="card-title">Lorem ipsum dolor sit.</p>
                        <p class="card-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem,
                            officiis?
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="docu-element" data-docu-title="Diagonal Section"
             data-docu-description="A simple design element to display information."
             data-docu-refer="image-card"
             data-docu-colorable>
            <div class="example">
                <div class="diagonal-section-main-dark diagonal-section">
                    <p class="fsi-larger fw-bold fc-main-lighter fs-underline">Lorem ipsum dolor sit
                        amet,consectetur.</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, maiores placeat quas repellat
                        sapiente voluptate? Animi consequatur eos eum excepturi facilis ipsum libero maiores odit
                        pariatur. Exercitationem omnis reprehenderit suscipit!
                    </p>
                </div>
            </div>
        </div>

        <div class="docu-element" data-docu-title="Image Card"
             data-docu-description="A simple design element to display information whose focus lays on the actual image."
             data-docu-refer="card">
            <div class="example">
                <div class="image-card">
                    <img src="https://via.placeholder.com/1280x720">

                    <p class="image-card-summary">Summary</p>

                    <div class="image-card-slide">
                        <p class="image-card-slide-title">Lorem ipsum dolor sit amet.</p>
                        <p class="image-card-slide-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi, est
                            et explicabo possimus qui rerum similique vero?
                        </p>

                        <div data-local-href="specs" class="mt-1">
                            <div class="spec">
                                <p class="spec-key">Key</p>
                                <p class="spec-value">Value</p>
                            </div>
                            <div class="spec">
                                <p class="spec-key">Key</p>
                                <p class="spec-value">Value</p>
                            </div>
                        </div>

                        <a href="#image-card-link" data-local-href="image-card-link" class="image-card-slide-link">Button</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="docu-element" data-docu-title="Popup"
             data-docu-description="A simple design element to display information whose focus lays on the actual image.">
            <div class="example">
                <div class="popup-wrapper" id="demo_popup">
                    <div class="popup bg-white-darker">
                        <p class="popup-title">Lorem ipsum dolor sit amet, consectetur.</p>
                        <p class="fc-dark-light popup-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, maiores placeat quas
                            repellat sapiente voluptate? Animi consequatur eos eum excepturi facilis ipsum libero
                            maiores odit
                            pariatur. Exercitationem omnis reprehenderit suscipit!
                        </p>

                        <div class="d-flex flex-j-flex-end">
                            <button onclick="togglePopup('demo_popup');" class="button-main mt-2">Dismiss</button>
                        </div>
                    </div>
                </div>

                <button onclick="togglePopup('demo_popup')" class="button-main">Show Popup</button>
            </div>
        </div>
    </div>
</main>

<script>
    /* Actual JS */
    document.querySelectorAll('div.docu-element').forEach(function (docuelement) {
        var id = docuelement.dataset.docuTitle.toLowerCase().replaceAll(' ', '-');
        docuelement.id = id;
        docuelement.classList.add("d-flex", "flex-d-column", "gy-5", "gy-lg-7");
        docuelement.innerHTML = '<div><h1 class="fc-main fw-bold fsi-large"><a href="#' + id + '" class="fc-white-darker">#</a> ' + docuelement.dataset.docuTitle + '</h1>' + '<p>' + docuelement.dataset.docuDescription + '</p></div>' + docuelement.innerHTML;

        var title = docuelement.querySelector('h1');

        var badges = "";

        if ("docuColorable" in docuelement.dataset) {
            badges += "<div style='display: inline-block;' class='tooltip-wrapper'><span class='badge-success-lighter m-0'>Colorable</span><div class='tooltip tooltip-dark'><div class='tooltip-content'><p class='tooltip-title'>Element is customizable</p><p class='tooltip-description'>You have the option to tint this element. Just use the <code>" + docuelement.dataset.docuTitle.toLowerCase().replaceAll(' ', '-') + "-[color]</code> class instead of the <code>" + docuelement.dataset.docuTitle.toLowerCase().replaceAll(' ', '-') + "</code> class. [Color] corresponds in this case to a color from the color scheme of Upgrade, which is also used for text colors and the like. Example: main-dark</p></div></div></div>";
        }
        if ("docuNeedsJs" in docuelement.dataset) {
            badges += "<div style='display: inline-block;' class='tooltip-wrapper'><span class='badge-warning m-0'>JavaScript</span><div class='tooltip tooltip-dark'><div class='tooltip-content'><p class='tooltip-title'>Requires JavaScript</p><p class='tooltip-description'>If you plan to use this feature you have to import the <code>framework.js</code> file located in <code>assets/js</code> using a script tag with defer attribute.</p></div></div></div>";
        }
        if ("docuBeta" in docuelement.dataset) {
            badges += "<div style='display: inline-block;' class='tooltip-wrapper'><span class='badge-error-lighter m-0'>Beta</span><div class='tooltip tooltip-dark'><div class='tooltip-content'><p class='tooltip-title'>In Beta State</p><p class='tooltip-description'>This element is currently under development and therefore should not be used on public pages due to possible bugs.</p></div></div></div>";
        }

        title.outerHTML = "<div class='d-flex flex-a-center gx-3 gx-lg-6'>" + title.outerHTML + "<div class='d-flex flex-a-center gx-2 gx-lg-3'>" + badges + "</div></div>";

        /* Add Example Code */
        docuelement.innerHTML += "<div class='code'><i class='fas fa-copy copy'></i><pre><code class='language-html sc'>" + docuelement.querySelector('.example').innerHTML.replaceAll('<', '&lt;').replaceAll('>', '&gt;') + "</code></pre></div>";
        // TODO: Fix last empty line.

        /* Add Referings */
        if ("docuRefer" in docuelement.dataset) {
            var similar = "<div><h2 class='fc-main-light fw-semibold fsi-small'>Related Elements</h2><ul class='similarElements'>";

            docuelement.dataset.docuRefer.split(' ').forEach(refer => {
                similar += "<li><a href='#" + refer + "' class='badge-main-light m-0'>" + refer + "</a></li>";
            });

            similar += "</ul></div>";

            docuelement.innerHTML += similar;
        }
    });
</script>

<script>
    /* Display Code normally */
    $("pre code").each(function () {
        var html = $(this).html();
        var pattern = html.match(/\s*\n[\t\s]*/);
        $(this).html(html.replace(new RegExp(pattern, "g"), '\n'));
    });

    document.querySelectorAll('.code .copy').forEach(btn => {
        btn.addEventListener('click', function () {
            copyTextToClipboard(btn.parentNode.querySelector('.sc').innerText);
        })
    });


</script>

<script src="../../../assets/js/framework.js" defer></script>

</body>
</html>
