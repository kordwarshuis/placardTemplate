<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Placard</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <link href="css/all.css" rel="stylesheet">
    <script>
        (function () {
            // if firefox 3.5+, hide content till load (or 3 seconds) to prevent FOUT
            var d = document, e = d.documentElement, s = d.createElement('style');
            if (e.style.MozTransform === '') { // gecko 1.9.1 inference
                s.textContent = 'body{visibility:hidden}';
                var r = document.getElementsByTagName('script')[0];
                r.parentNode.insertBefore(s, r);
                function f() {
                    s.parentNode && s.parentNode.removeChild(s);
                }

                addEventListener('load', f, false);
                setTimeout(f, 3000);
            }
        })();
    </script>
</head>
<body>
<div id="container">
    <a href="#">

        <h1 id="header">Pellentesque commodo</h1>

        <p id="style2">Since 2002</p>

        <h2>
            <span id="style3">Praesent</span>
            <span id="style4">egestas</span>
            <span id="style5">tristique</span>
        </h2>
    </a>
    <img src="img/ornamentalflourish.png" alt=""/>

    <p>Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus. Ut id nisl quis enim dignissim sagittis. Etiam
        sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros.
        Proin magna. Duis vel nibh at velit scelerisque suscipit. Curabitur turpis. Vestibulum suscipit nulla quis orci.
        Fusce ac felis sit amet ligula pharetra condimentum. Maecenas egestas arcu quis ligula mattis placerat. Duis
        lobortis massa imperdiet quam. Suspendisse potenti.</p>

    <p class="call-to-action"><a class="call-to-action" href="#">lobortis</a></p>
    <p id="contact">contact: <a href="mailto:kor@dwarshuis.com">kor@dwarshuis.com</a></p>
</div>
</body>
</html>