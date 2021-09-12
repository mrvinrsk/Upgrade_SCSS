<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upgrade - Documentation</title>

    <link rel="stylesheet" href="../assets/style/CSS/minified/Upgrade.min.css">
    <link rel="stylesheet" href="../assets/style/CSS/minified/docs.min.css">

    <script src="../assets/js/framework.js" defer></script>
    <script src="https://kit.fontawesome.com/a4ede3fed3.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include_once "./assets/elements/navigator.html";

function getAlert($color, $text)
{
    return "<div class='alert-$color mt-1 mt-lg-2'>$text</div>";
}

function getColorVariationInformation($class)
{
    $plural = $class;
    if (!str_ends_with($plural, 's')) {
        $plural .= 's';
    }

    return "You're able to tint $plural by simply using the $class-[COLOR] class instead of the $class class as seen as in the example below. [COLOR] has to be a color from Upgrades colorscheme.";
}

?>

<main>
    <div class="container-lg my-3 my-lg-10">
        <h1 class="heading heading-larger fs-underline mb-1 mb-lg-2">Documentation</h1>

        <section class="alert-warning mb-5 mb-lg-8">
            Soon you may find a complete documentation of this framework here. 😎<br/>
            <span id="funfact"></span>
        </section>

        <div class="d-flex flex-d-column gy-5 gy-lg-10">
            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="accordions">Accordions</p>
                    <p class="description">
                        Accordions are simple boxes with a summary and a longer text within it. When you click on an
                        accordion
                        it will open up and show the insides information. Try it out!
                    </p>

                    <?php echo getAlert('info', getColorVariationInformation('accordion')); ?>
                </div>

                <div class="example">
                    <div class="accordion accordion-main">
                        <button class="accordion__toggle">Toggle</button>

                        <div class="accordion__content">
                            <p class="accordion__title">Lorem ipsum dolor sit amet, consectetur.</p>
                            <p class="accordion__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque debitis eaque eum
                                illum ipsam laborum magni molestiae odio placeat! Corporis culpa doloremque officiis
                                quas!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
            <pre><code>&lt;div class="accordion accordion-main"&gt;
    &lt;button class="accordion__toggle"&gt;Toggle&lt;/button&gt;

    &lt;div class="accordion__content"&gt;
        &lt;p class="accordion__title"&gt;Lorem ipsum dolor sit amet, consectetur.&lt;/p&gt;
        &lt;p class="accordion__description"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque debitis eaque eum
            illum
            ipsam laborum magni molestiae odio placeat! Corporis culpa doloremque officiis quas!
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="alerts">Alerts</p>
                    <p class="description">
                        Alerts are a practical way to inform the user of your website about completed processes, errors,
                        or
                        similar.
                    </p>

                    <?php echo getAlert('info', getColorVariationInformation('alert')); ?>
                </div>

                <div class="example">
                    <div class="alert-main">
                        This is a simple alert! You can use it for barely everything.
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                    <code class="language-html">&lt;div class="alert-main"&gt;This is a simple alert! You can use it for
                        barely everything.&lt;/div&gt;</code>
                </div>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="badges">Badges</p>
                    <p class="description">
                        Badges are a great way to display, for example, new features.
                    </p>
                </div>

                <div class="example">
                    <p>Lorem ipsum dolor sit. <span class="badge-warning">New</span></p>
                </div>

                <div class="code mt-2 mt-lg-3">
                    <code class="language-html">&lt;p&gt;Lorem ipsum dolor sit. &lt;span class="badge-warning"&gt;New&lt;/span&gt;&lt;/p&gt;</code>
                </div>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="buttons">Buttons</p>
                    <p class="description">
                        Well I guess I don't have to explain what a button is...
                    </p>

                    <div class="alert-warning mt-1 mt-lg-2">
                        You're not yet able to use the button class with &lt;a&gt; Tags; if you have to use &lt;a&gt;,
                        please use <a href="#simple-buttons"
                                      style="text-decoration: underline"><code>simple-button</code></a>'s
                    </div>

                    <?php echo getAlert('info', getColorVariationInformation('button')); ?>
                </div>

                <div class="example">
                    <button class="button-main">Button</button>
                </div>

                <div class="code mt-2 mt-lg-3">
                    <code class="language-html">&lt;button class="button-main"&gt;Button&lt;/button&gt;</code>
                </div>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="simple-buttons">Simple Buttons</p>
                    <p class="description">
                        Well I guess I don't have to explain what a button is...
                    </p>

                    <?php echo getAlert('info', getColorVariationInformation('simple-button')); ?>
                </div>

                <div class="example">
                    <a class="simple-button-main">Simple Button</a>
                </div>

                <div class="code mt-2 mt-lg-3">
                    <code>&lt;a class="simple-button-main"&gt;Simple Button&lt;/a&gt;</code>
                </div>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="cards">Cards</p>
                    <p class="description">
                        A simple design element to display information.
                    </p>

                    <div class="alert alert-info mt-1 mt-lg-2">
                        Cards can include an image, however there is an animated alternative for cards with images:
                        <a href="#image-cards" class="fs-underline"><code>image-card</code></a>'s.
                    </div>
                </div>

                <div class="example">
                    <div class="card" style="transform: translate(-50%, -0);left: 50%;">
                        <img src="https://via.placeholder.com/1280x720" class="card__image">

                        <div class="card__content">
                            <p class="card__title">Lorem ipsum dolor sit.</p>
                            <p class="card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem,
                                officiis?
                            </p>

                            <hr/>

                            <div class="card__links" id="card__links">
                                <a href="#card__links">Link</a>
                                <a href="#card__links">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;div class="card"&gt;
    &lt;img src="https://via.placeholder.com/1280x720" class="card__image"&gt;

    &lt;div class="card__content"&gt;
        &lt;p class="card__title"&gt;Lorem ipsum dolor sit.&lt;/p&gt;
        &lt;p class="card__description"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem,
            officiis?
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="diagonal-sections">Diagonal Sections</p>
                    <p class="description">
                        Create fancy diagonal layouts like its 2020.
                    </p>

                    <div class="alert alert-info mt-1 mt-lg-2">
                        You're able to tint diagonal sections by simply using diagonal_section-COLOR instead of the
                        buttons
                        class as seen as
                        in the example below. COLOR has to be a color from Upgrades colorscheme. Furthermore you can add
                        <code>diagonal_section-invert</code> as a class to invert the skew.
                    </div>
                </div>

                <div class="example">
                    <div class="diagonal_section-main-dark diagonal_section">
                        <p class="fsi-larger fw-bold fc-main-lighter fs-underline">Lorem ipsum dolor sit amet,
                            consectetur.</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, maiores placeat quas
                            repellat
                            sapiente voluptate? Animi consequatur eos eum excepturi facilis ipsum libero maiores odit
                            pariatur. Exercitationem omnis reprehenderit suscipit!
                        </p>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code class="language-html">&lt;div class="diagonal_section-main-dark diagonal_section"&gt;
    &lt;p class="fsi-larger fw-bold fc-main-lighter fs-underline"&gt;Lorem ipsum dolor sit amet,consectetur.&lt;/p&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, maiores placeat quas repellat
        sapiente voluptate? Animi consequatur eos eum excepturi facilis ipsum libero maiores odit
        pariatur. Exercitationem omnis reprehenderit suscipit!
    &lt;/p&gt;
&lt;/div&gt;</code></pre>
                </div>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="image-cards">Image Cards</p>
                    <p class="description">
                        An alternative for <a href="#cards" class="fs-underline"><code>card</code></a>'s whose focus
                        lays on
                        the actual image.
                    </p>

                    <div class="alert alert-info mt-1 mt-lg-2">
                        You have to define a color which is going to be used by writing dot-COLOR as seen as in the
                        example
                        below. COLOR has to be a color from Upgrades colorscheme. Furthermore you can add change the
                        size by
                        using dot-SIZE (1-3).
                    </div>
                </div>

                <div class="example">
                    <div class="image-card" style="transform: translate(-50%, -0);left: 50%;">
                        <img src="https://via.placeholder.com/1280x720">

                        <p class="image-card__summary">Summary</p>

                        <div class="image-card__slide">
                            <p class="image-card__slide__title">Lorem ipsum dolor sit amet.</p>
                            <p class="image-card__slide__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi,
                                est
                                et explicabo possimus qui rerum similique vero?
                            </p>

                            <div id="specs" class="mt-1">
                                <div class="spec">
                                    <p class="spec-key">Key</p>
                                    <p class="spec-value">Value</p>
                                </div>
                                <div class="spec">
                                    <p class="spec-key">Key</p>
                                    <p class="spec-value">Value</p>
                                </div>
                            </div>

                            <a href="#image-card-link" id="image-card-link" class="image-card__slide__link">Button</a>
                        </div>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;div class="image-card"&gt;
    &lt;img src="https://via.placeholder.com/1280x720"&gt;

    &lt;p class="image-card__summary"&gt;Summary&lt;/p&gt;

    &lt;div class="image-card__slide"&gt;
        &lt;p class="image-card__slide__title"&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
        &lt;p class="image-card__slide__description"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi, est
            et explicabo possimus qui rerum similique vero?
        &lt;/p&gt;

        &lt;div id="specs" class="mt-1"&gt;
            &lt;div class="spec"&gt;
                &lt;p class="spec-key"&gt;Key&lt;/p&gt;
                &lt;p class="spec-value"&gt;Value&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="spec"&gt;
                &lt;p class="spec-key"&gt;Key&lt;/p&gt;
                &lt;p class="spec-value"&gt;Value&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;a href="#image-card-link" id="image-card-link" class="image-card__slide__link"&gt;Button&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="popups">Popups</p>
                    <p class="description">
                        *plop*
                    </p>
                </div>

                <div class="example">
                    <div class="popup__wrapper" id="demo_popup">
                        <div class="popup bg-white-darker">
                            <p class="popup__title">Lorem ipsum dolor sit amet,
                                consectetur.</p>
                            <p class="fc-dark-light popup__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, maiores placeat quas
                                repellat
                                sapiente voluptate? Animi consequatur eos eum excepturi facilis ipsum libero maiores
                                odit
                                pariatur. Exercitationem omnis reprehenderit suscipit!
                            </p>

                            <div class="d-flex flex-j-flex-end">
                                <button onclick="togglePopup('demo_popup')" class="button-main mt-2">Dismiss</button>
                            </div>
                        </div>
                    </div>

                    <button onclick="togglePopup('demo_popup')" class="button-main">Show Popup</button>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;div class="popup__wrapper" id="demo_popup_"&gt;
    &lt;div class="popup bg-white-darker"&gt;
        &lt;p class="popup__title"&gt;Lorem ipsum dolor sit amet, consectetur.&lt;/p&gt;
        &lt;p class="fc-dark-light popup__description"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, maiores placeat quas
            repellat sapiente voluptate? Animi consequatur eos eum excepturi facilis ipsum libero maiores odit
            pariatur. Exercitationem omnis reprehenderit suscipit!
        &lt;/p&gt;

        &lt;div class="d-flex flex-j-flex-end"&gt;
            &lt;button onclick="togglePopup('demo_popup_')" class="button-main mt-2"&gt;Dismiss&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;button onclick="togglePopup('demo_popup_')" class="button-main"&gt;Show Popup&lt;/button&gt;</code></pre>
                </div>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="tooltips">Tooltips</p>
                    <p class="description">
                        Great for explaining.
                    </p>

                    <div class="alert-warning mt-1 mt-lg-2">
                        Currently incompatible with using <code>overflow: hidden;</code> on parents.
                    </div>
                </div>

                <div class="example">
                    <div class="tooltip-wrapper">
                        <p>Hover me!</p>

                        <div class="tooltip">
                            <p class="tooltip-title">Lorem ipsum dolor sit amet.</p>
                            <p class="tooltip-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, nulla?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;div class="tooltip-wrapper"&gt;
    &lt;p&gt;Hover me!&lt;/p&gt;

    &lt;div class="tooltip"&gt;
       &lt;p class="tooltip-title"&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
       &lt;p class="tooltip-description"&gt;
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, nulla?
       &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="placeholders">Placeholders</p>
                    <p class="description">
                        You can use placeholders for content that isn't loaded yet.
                    </p>

                    <div class="alert-error mt-1 mt-lg-2">
                        Placeholders are currently in beta-state. Use at your own risk!
                    </div>
                </div>

                <div class="example">
                    <div class="card">
                        <img src="https://via.placeholder.com/1280x720" class="card__image placeholder">

                        <div class="card__content">
                            <p class="card__title placeholder"></p>
                            <p class="card__description placeholder"></p>

                            <hr/>

                            <div class="card__links" id="card__links_2">
                                <a href="#card__links_2" class="placeholder"></a>
                                <a href="#card__links_2" class="placeholder"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;div class="card"&gt;
    &lt;img src="https://via.placeholder.com/1280x720" class="card__image placeholder"&gt;

    &lt;div class="card__content"&gt;
        &lt;p class="card__title placeholder"&gt;&lt;/p&gt;
        &lt;p class="card__description placeholder"&gt;&lt;/p&gt;

        &lt;hr/&gt;

        &lt;div class="card__links" id="card__links_2"&gt;
            &lt;a href="#card__links_2" class="placeholder"&gt;&lt;/a&gt;
            &lt;a href="#card__links_2" class="placeholder"&gt;&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="blank">Blank</p>
                    <p class="description">
                        Yes, the framework also provides extra components for missing data.
                    </p>

                    <div class="alert-info mt-1 mt-lg-2">
                        You can use any font-based icons for this
                        (e.g. <a target="popup"
                                 onclick="window.open('//fontawesome.com/', 'Font Awesome', 'width=650,height=775')"
                                 class="fs-underline" style="cursor: pointer;">FontAwesome</a>).
                    </div>
                </div>

                <div class="example">
                    <div class="blank">
                        <i class="fas fa-times-circle blank__icon fsi-xl"></i>

                        <p class="blank__title mb-2">No Data found</p>
                        <p class="blank__description">
                            Oops... based on the data provided, we unfortunately did not find any information.
                        </p>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;div class="blank"&gt;
    &lt;i class="fas fa-times-circle blank__icon"&gt;&lt;/i&gt;

    &lt;p class="blank__title"&gt;No Data found&lt;/p&gt;
    &lt;p class="blank__description"&gt;
        Oops... based on the data provided, we unfortunately did not find any information.
    &lt;/p&gt;
&lt;/div&gt;</code></pre>
            </section>

            <section>
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" id="progress">Progress</p>
                    <p class="description">
                        Perfect for displaying the current status of a payment transaction.
                    </p>
                </div>

                <div class="example">
                    <ul class="progress" id="steps">
                        <li class="progress_step">
                            <a href="#steps">Step 1</a>
                        </li>

                        <li class="progress_step active">
                            <a href="#steps">Step 2</a>
                        </li>

                        <li class="progress_step">
                            <a href="#steps">Step 3</a>
                        </li>
                    </ul>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;ul class="progress" id="steps"&gt;
    &lt;li class="progress_step"&gt;
        &lt;a href="#steps"&gt;Step 1&lt;/a&gt;
    &lt;/li&gt;

    &lt;li class="progress_step active"&gt;
        &lt;a href="#steps"&gt;Step 2&lt;/a&gt;
    &lt;/li&gt;

    &lt;li class="progress_step"&gt;
        &lt;a href="#steps"&gt;Step 3&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </section>


            <div class="alert-gray-lightest mt-2 mt-lg-5">More documentation soon... 👋</div>
        </div>
    </div>
</main>

<script>
    const facts = Array(
        'This page is made using only Upgrade.',
        'You\'ve found an easter egg, congratulations!'
    );
    document.getElementById('funfact').innerText = facts[Math.floor(Math.random() * facts.length)];
</script>

</body>
</html>