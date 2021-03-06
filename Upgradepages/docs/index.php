<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upgrade - Documentation</title>

    <link rel="stylesheet" href="../../assets/style/CSS/minified/Upgrade.min.css">
    <link rel="stylesheet" href="../../assets/style/CSS/minified/docs.min.css">

    <script src="../../assets/js/framework.js" defer></script>
    <script src="https://kit.fontawesome.com/a4ede3fed3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

<?php
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

    return "You're able to tint $plural by simply using the $class-[COLOR] class instead of the $class class as seen as in
the example below. [COLOR] has to be a color from Upgrades colorscheme.";
}

?>

<a href="./beta/" id="betalink" class="fc-white-darker">Try the new documentation</a>

<main>
    <div class="container-lg my-3 my-lg-10">
        <h1 class="heading heading-larger fs-underline mb-1 mb-lg-2">Documentation</h1>

        <section class="alert-warning mb-5 mb-lg-8">
            Soon you may find a complete documentation of this framework here. 😎<br/>
            <span data-local-href="funfact"></span>
        </section>

        <div class="d-flex flex-d-column gy-6 gy-lg-12">
            <section id="accordions">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="accordions" data-needs-js>
                        Accordions</p>
                    <p class="description">
                        Accordions are simple boxes with a summary and a longer text within it. When you click on an
                        accordion
                        it will open up and show the insides information. Try it out!
                    </p>

                    <?php echo getAlert('info', getColorVariationInformation('accordion')); ?>
                </div>

                <div class="example">
                    <div class="accordion accordion-main">
                        <button class="accordion-toggle">Toggle</button>

                        <div class="accordion-content">
                            <p class="accordion-title">Lorem ipsum dolor sit amet, consectetur.</p>
                            <p class="accordion-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque debitis eaque eum
                                illum ipsam laborum magni molestiae odio placeat! Corporis culpa doloremque officiis
                                quas!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
            <pre><code>&lt;div class="accordion accordion-main"&gt;
    &lt;button class="accordion-toggle"&gt;Toggle&lt;/button&gt;

    &lt;div class="accordion-content"&gt;
        &lt;p class="accordion-title"&gt;Lorem ipsum dolor sit amet, consectetur.&lt;/p&gt;
        &lt;p class="accordion-description"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque debitis eaque eum
            illum
            ipsam laborum magni molestiae odio placeat! Corporis culpa doloremque officiis quas!
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </section>

            <section id="alerts">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="alerts">Alerts</p>
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

            <section id="badges">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="badges">Badges</p>
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

            <section id="buttons">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="buttons">Buttons</p>
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

            <section id="simple-buttons">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="simple-buttons">Simple Buttons</p>
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

            <section id="cards">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="cards">Cards</p>
                    <p class="description">
                        A simple design element to display information.
                    </p>

                    <div class="alert alert-info mt-1 mt-lg-2">
                        Cards can include an image, however there is an animated alternative for cards with images:
                        <a href="#image-cards" class="fs-underline"><code>image-card</code></a>'s.
                    </div>
                </div>

                <div class="example">
                    <div class="card">
                        <img src="https://via.placeholder.com/1280x720" class="card-image">

                        <div class="card-content">
                            <p class="card-title">Lorem ipsum dolor sit.</p>
                            <p class="card-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem,
                                officiis?
                            </p>

                            <hr/>

                            <div class="card-links" data-local-href="card-links">
                                <a href="#card-links">Link</a>
                                <a href="#card-links">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;div class="card"&gt;
    &lt;img src="https://via.placeholder.com/1280x720" class="card-image"&gt;

    &lt;div class="card-content"&gt;
        &lt;p class="card-title"&gt;Lorem ipsum dolor sit.&lt;/p&gt;
        &lt;p class="card-description"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem,
            officiis?
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </section>

            <section id="diagonal-sections">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="diagonal-sections">Diagonal Sections</p>
                    <p class="description">
                        Create fancy diagonal layouts like its 2020.
                    </p>

                    <div class="alert alert-info mt-1 mt-lg-2">
                        You're able to tint diagonal sections by simply using diagonal-section-COLOR instead of the
                        buttons
                        class as seen as
                        in the example below. COLOR has to be a color from Upgrades colorscheme. Furthermore you can add
                        <code>diagonal-section-invert</code> as a class to invert the skew.
                    </div>
                </div>

                <div class="example">
                    <div class="diagonal-section-main-dark diagonal-section">
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
                <pre><code class="language-html">&lt;div class="diagonal-section-main-dark diagonal-section"&gt;
    &lt;p class="fsi-larger fw-bold fc-main-lighter fs-underline"&gt;Lorem ipsum dolor sit amet,consectetur.&lt;/p&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, maiores placeat quas repellat
        sapiente voluptate? Animi consequatur eos eum excepturi facilis ipsum libero maiores odit
        pariatur. Exercitationem omnis reprehenderit suscipit!
    &lt;/p&gt;
&lt;/div&gt;</code></pre>
                </div>
            </section>

            <section id="image-cards">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="image-cards">Image Cards</p>
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
                    <div class="image-card">
                        <img src="https://via.placeholder.com/1280x720">

                        <p class="image-card-summary">Summary</p>

                        <div class="image-card-slide">
                            <p class="image-card-slide-title">Lorem ipsum dolor sit amet.</p>
                            <p class="image-card-slide-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi,
                                est
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

                            <a href="#image-card-link" data-local-href="image-card-link"
                               class="image-card-slide-link">Button</a>
                        </div>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;div class="image-card"&gt;
    &lt;img src="https://via.placeholder.com/1280x720"&gt;

    &lt;p class="image-card-summary"&gt;Summary&lt;/p&gt;

    &lt;div class="image-card-slide"&gt;
        &lt;p class="image-card-slide-title"&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
        &lt;p class="image-card-slide-description"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi, est
            et explicabo possimus qui rerum similique vero?
        &lt;/p&gt;

        &lt;div data-local-href="specs" class="mt-1"&gt;
            &lt;div class="spec"&gt;
                &lt;p class="spec-key"&gt;Key&lt;/p&gt;
                &lt;p class="spec-value"&gt;Value&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="spec"&gt;
                &lt;p class="spec-key"&gt;Key&lt;/p&gt;
                &lt;p class="spec-value"&gt;Value&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;a href="#image-card-link" data-local-href="image-card-link" class="image-card-slide-link"&gt;Button&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </section>

            <section id="popups">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="popups" data-needs-js>Popups</p>
                    <p class="description">
                        *plop*
                    </p>
                </div>

                <div class="example">
                    <div class="popup-wrapper" id="demo_popup">
                        <div class="popup bg-white-darker">
                            <p class="popup-title">Lorem ipsum dolor sit amet,
                                consectetur.</p>
                            <p class="fc-dark-light popup-description">
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
                <pre><code>&lt;div class="popup-wrapper" data-local-href="demo_popup_"&gt;
    &lt;div class="popup bg-white-darker"&gt;
        &lt;p class="popup-title"&gt;Lorem ipsum dolor sit amet, consectetur.&lt;/p&gt;
        &lt;p class="fc-dark-light popup-description"&gt;
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

            <section id="tooltips">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="tooltips">Tooltips</p>
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
                            <div class="tooltip-content">
                                <p class="tooltip-title">Lorem ipsum dolor sit amet.</p>
                                <p class="tooltip-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, nulla?
                                </p>
                            </div>
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

            <section id="placeholders">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="placeholders">Placeholders</p>
                    <p class="description">
                        You can use placeholders for content that isn't loaded yet.
                    </p>

                    <div class="alert-error mt-1 mt-lg-2">
                        Placeholders are currently in beta-state. Use at your own risk!
                    </div>
                </div>

                <div class="example">
                    <div class="card">
                        <img src="https://via.placeholder.com/1280x720" class="card-image placeholder">

                        <div class="card-content">
                            <p class="card-title placeholder"></p>
                            <p class="card-description placeholder"></p>

                            <hr/>

                            <div class="card-links" data-local-href="card-links_2">
                                <a href="#card-links_2" class="placeholder"></a>
                                <a href="#card-links_2" class="placeholder"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;div class="card"&gt;
    &lt;img src="https://via.placeholder.com/1280x720" class="card-image placeholder"&gt;

    &lt;div class="card-content"&gt;
        &lt;p class="card-title placeholder"&gt;&lt;/p&gt;
        &lt;p class="card-description placeholder"&gt;&lt;/p&gt;

        &lt;hr/&gt;

        &lt;div class="card-links" data-local-href="card-links_2"&gt;
            &lt;a href="#card-links_2" class="placeholder"&gt;&lt;/a&gt;
            &lt;a href="#card-links_2" class="placeholder"&gt;&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </section>

            <section id="blank">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="blank">Blank</p>
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
                        <i class="fas fa-times-circle blank-icon fsi-xl"></i>

                        <p class="blank-title mb-2">No Data found</p>
                        <p class="blank-description">
                            Oops... based on the data provided, we unfortunately did not find any information.
                        </p>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;div class="blank"&gt;
    &lt;i class="fas fa-times-circle blank-icon"&gt;&lt;/i&gt;

    &lt;p class="blank-title"&gt;No Data found&lt;/p&gt;
    &lt;p class="blank-description"&gt;
        Oops... based on the data provided, we unfortunately did not find any information.
    &lt;/p&gt;
&lt;/div&gt;</code></pre>
            </section>

            <section id="progress">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="progress">Progress</p>
                    <p class="description">
                        Perfect for displaying the current status of a payment transaction.
                    </p>
                </div>

                <div class="example">
                    <ul class="progress" data-local-href="steps">
                        <li class="progress_step">
                            <a href="#steps">Order summary</a>
                        </li>

                        <li class="progress_step active">
                            <a href="#steps">Payment</a>
                        </li>

                        <li class="progress_step">
                            <a href="#steps">Confirmation</a>
                        </li>
                    </ul>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;ul class="progress" data-local-href="steps"&gt;
    &lt;li class="progress_step"&gt;
        &lt;a href="#steps"&gt;Order summary&lt;/a&gt;
    &lt;/li&gt;

    &lt;li class="progress_step active"&gt;
        &lt;a href="#steps"&gt;Payment&lt;/a&gt;
    &lt;/li&gt;

    &lt;li class="progress_step"&gt;
        &lt;a href="#steps"&gt;Confirmation&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </section>

            <section id="input">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="input">Input</p>
                    <p class="description">
                        Yeah... it's used for forms.
                    </p>

                    <?php echo getAlert('info', getColorVariationInformation('form-input')); ?>
                </div>

                <div class="example">
                    <form class="d-flex flex-d-column gy-2 gy-lg-4" style="width: 75%;">
                        <div class="form-input-warning">
                            <label for="input1">Input #1</label>
                            <input type="text" id="input1">
                        </div>

                        <div class="form-input">
                            <label for="input2">Input #2</label>
                            <input type="text" id="input2">
                        </div>

                        <div class="form-input-error">
                            <label for="textarea">Textarea</label>
                            <textarea id="textarea"></textarea>
                        </div>
                    </form>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;form&gt;
    &lt;div class="form-input-warning mb-2"&gt;
        &lt;label for="input1"&gt;Input #1&lt;/label&gt;
        &lt;input type="text" data-local-href="input1"&gt;
    &lt;/div&gt;

    &lt;div class="form-input"&gt;
        &lt;label for="input1"&gt;Input #2&lt;/label&gt;
        &lt;input type="text" data-local-href="input2"&gt;
    &lt;/div&gt;
                        
    &lt;div class="form-input-error"&gt;
        &lt;label for="textarea"&gt;Textarea&lt;/label&gt;
        &lt;textarea id="textarea"&gt;&lt;/textarea&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
            </section>

            <section id="tabs">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="tabs" data-needs-js>Tabs</p>
                    <p class="description">
                        Can be used for sorting information or something.
                    </p>
                </div>

                <div class="example">
                    <div class="tabs">
                        <div class="tab-wrapper">
                            <div class="tab fc-main" data-tab-toggle="1" data-tab-active>#1</div>
                            <div class="tab fc-main" data-tab-toggle="2">#2</div>
                            <div class="tab fc-main" data-tab-toggle="3">#3</div>
                        </div>

                        <div class="tab-panel" data-tab-listen="1" data-tab-active>
                            <div class="tab-content">
                                <h3>This is the first section.</h3>
                                <p class="fc-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat debitis non
                                    alias aut
                                    dolores repudiandae nihil aliquam, suscipit exercitationem voluptas consequuntur
                                    ratione iste
                                    molestias quasi, voluptatum aspernatur magnam minus molestiae at quisquam! Dolorem
                                    aut possimus
                                    iste ducimus, eius repudiandae.
                                </p>
                            </div>
                        </div>

                        <div class="tab-panel" data-tab-listen="2">
                            <div class="tab-content">
                                <h3>This is the second section.</h3>

                                <p class="fc-dark">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi assumenda,
                                    commodi consequatur cum delectus dignissimos doloremque eius hic id illum in iusto
                                    minus modi officiis praesentium quibusdam recusandae reprehenderit sed unde ut vitae
                                    voluptate voluptatum. Aperiam assumenda aut, cumque cupiditate eligendi fuga
                                    inventore iure, neque nesciunt non sint ullam!
                                </p>
                            </div>
                        </div>

                        <div class="tab-panel" data-tab-listen="3">
                            <div class="tab-content">
                                <h3>This is the third section.</h3>
                                <img src="https://via.placeholder.com/1280x720" class="mt-1 mt-lg-3"
                                     style="object-fit: cover; width: 100%; height: 100%; border-radius: 5px;">
                                <p class="fc-dark">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid amet animi
                                    aspernatur assumenda autem, deserunt dolores ea eligendi, est et exercitationem
                                    magni maiores modi molestiae molestias necessitatibus neque nesciunt obcaecati odit
                                    quasi quos similique tempore vero voluptatum! Ab accusantium aliquid aspernatur ea
                                    eos, excepturi fugit incidunt itaque, officiis porro recusandae rem sequi
                                    voluptatibus? Consequuntur, dicta ex fugit minima molestias non reiciendis
                                    repellendus. Ab aspernatur deserunt dolorem laudantium nesciunt numquam optio
                                    repudiandae rerum sequi veniam. Accusantium cupiditate itaque quisquam similique!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>
&lt;div class="tabs"&gt;
    &lt;div class="tab-wrapper"&gt;
        &lt;div class="tab" data-tab-toggle="1" data-tab-active&gt;#1&lt;/div&gt;
        &lt;div class="tab" data-tab-toggle="2"&gt;#2&lt;/div&gt;
        &lt;div class="tab" data-tab-toggle="3"&gt;#3&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="tab-panel" data-tab-listen="1" data-tab-active&gt;
        &lt;div class="tab-content"&gt;
            &lt;h3&gt;This is the first section.&lt;/h3&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat debitis non alias aut
                dolores repudiandae nihil aliquam, suscipit exercitationem voluptas consequuntur ratione iste
                molestias quasi, voluptatum aspernatur magnam minus molestiae at quisquam! Dolorem aut possimus
                iste ducimus, eius repudiandae.
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="tab-panel" data-tab-listen="2"&gt;
        &lt;div class="tab-content"&gt;
            &lt;h3&gt;This is the second section.&lt;/h3&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi assumenda, commodi consequatur cum delectus dignissimos doloremque eius hic id illum in iusto minus modi officiis praesentium quibusdam recusandae reprehenderit sed unde ut vitae voluptate voluptatum. Aperiam assumenda aut, cumque cupiditate eligendi fuga inventore iure, neque nesciunt non sint ullam!
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="tab-panel" data-tab-listen="3"&gt;
        &lt;div class="tab-content"&gt;
            &lt;h3&gt;This is the third section.&lt;/h3&gt;
            &lt;img src="https://via.placeholder.com/1280x720" class="mt-1 mt-lg-3"
                             style="object-fit: cover; width: 100%; height: 100%; border-radius: 5px;"&gt;
            &lt;p&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid amet animi aspernatur assumenda autem, deserunt dolores ea eligendi, est et exercitationem magni maiores modi molestiae molestias necessitatibus neque nesciunt obcaecati odit quasi quos similique tempore vero voluptatum! Ab accusantium aliquid aspernatur ea eos, excepturi fugit incidunt itaque, officiis porro recusandae rem sequi voluptatibus? Consequuntur, dicta ex fugit minima molestias non reiciendis repellendus. Ab aspernatur deserunt dolorem laudantium nesciunt numquam optio repudiandae rerum sequi veniam. Accusantium cupiditate itaque quisquam similique!
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </section>

            <section id="paths">
                <div class="mb-2 mb-lg-4">
                    <p class="heading local_redirect" data-local-href="paths" data-needs-js>Paths</p>
                    <p class="description">
                        Used for displaying your current location on the pages structure.
                    </p>

                    <?php echo getAlert('info', 'You\'re able to change the separator of a path simply by adding <code>data-path-separator=\'SEPERATOR\'</code> to the parent element or adding it to the <code>.path-element</code> BEFORE the element you want it to display (example). Standard: \'/\'') ?>
                </div>

                <div class="example">
                    <div class="path" data-path-separator="-">
                        <a href="#paths" class="path-element">Upgradepages</a>
                        <a href="#paths" class="path-element">Welcome</a>
                        <a href="#paths" class="path-element" data-path-separator="#">Documentation</a>
                        <a href="#paths" class="path-element">Paths</a>
                    </div>
                </div>

                <div class="code mt-2 mt-lg-3">
                <pre><code>&lt;div class="path" data-path-separator="-"&gt;
    &lt;a href="#paths" class="path-element"&gt;Upgradepages&lt;/a&gt;
    &lt;a href="#paths" class="path-element" data-path-separator="/"&gt;Welcome&lt;/a&gt;
    &lt;a href="#paths" class="path-element" data-path-separator="#"&gt;Documentation&lt;/a&gt;
    &lt;a href="#paths" class="path-element"&gt;Paths&lt;/a&gt;
&lt;/div&gt;</code></pre>
            </section>


        </div>
    </div>
</main>

<script>
    const facts = Array(
        'Upgrade is made by Marvin Roßkothen',
        'SLZ doesn\'t like CSS',
        'You\'ve found an easter egg, congratulations!'
    );

    //document.getElementById('funfact').innerText = facts[Math.floor(Math.random() * facts.length)];

    document.querySelectorAll('section p.heading').forEach(function (node) {
        if ("needsJs" in node.dataset) {
            var html = node.outerHTML;
            node.outerHTML = "<div class='requireJS'>" + html + " <div style='display: inline-block;' class='tooltip-wrapper'><span class='badge-warning-light'>JavaScript</span><div class='tooltip tooltip-dark'><div class='tooltip-content'><p class='tooltip-title'>Requires JavaScript</p><p class='tooltip-description'>If you plan to use this feature you have to import the framework.js file located in <code>assets/js</code> using a script tag with defer attribute.</p></div></div></div></div>"
        }
    });
</script>

</body>
</html>