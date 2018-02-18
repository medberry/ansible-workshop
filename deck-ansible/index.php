<?php

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Ansible Essentials Workshop</title>

    <link rel="stylesheet" href="css/reveal.css">

    <!-- Printing and PDF exports -->
    <script>
      var link = document.createElement( 'link' );
      link.rel = 'stylesheet';
      link.type = 'text/css';
      link.href = window.location.search.match( /print-pdf/gi ) ? 'css/pdf.css' : 'css/paper.css';
      document.getElementsByTagName( 'head' )[0].appendChild( link );
    </script>


    <link rel="stylesheet" href="css/ansible.css">

    <!-- Theme used for syntax highlighting of code -->
    <!--link rel="stylesheet" href="css/zenburn.css"-->
    <link rel="stylesheet" href="css/prism.min.css">


  </head>
  <body>
  <div class="ans-mark">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-449 450 125 125" style="enable-background:new -449 450 125 125;" xml:space="preserve">
      <g id="XMLID_3_">
        <circle id="XMLID_7_" class="circle" cx="-386.5" cy="512.5" r="62"/>
        <path id="XMLID_4_" class="a-mark" d="M-356.9,537.1l-24.7-59.4c-0.7-1.7-2.1-2.6-3.9-2.6c-1.7,0-3.2,0.9-4,2.6l-27.1,65.2h9.2 l10.7-26.9l32,25.9c1.3,1,2.2,1.5,3.4,1.5c2.4,0,4.6-1.8,4.6-4.5C-356.5,538.5-356.6,537.8-356.9,537.1z M-385.4,488.4l16.1,39.6 l-24.2-19L-385.4,488.4z"/>
      </g>
    </svg>
  </div>
    <div class="reveal">
      <div class="slides">
        <section data-state="cover">
          <p class="ans-logo">
            <img src="images/GoKEV_Chrome_Color_Ansible.png" height="250"><br>
            <img src="images/ansible-wordmark-white.svg" width="260" alt="" />
          </p>
          <h1>{{ workshop_name }}</h1>
          <h2>{{ workshop_presenter }}</h2>
          <p>{{ workshop_title }}</p>
          <p>{{ workshop_message }}</p>
        </section>
<?php

// We look through the html_slides dir and include them all in order (numeric, alphabetic)
$files = scandir(preg_replace("/index.php/","html_slides/",$_SERVER['SCRIPT_FILENAME']));
foreach( $files as $pagekey => $htmlinclude){
	$count = ($count + 1);

	if ( preg_match("/\.html$/",$htmlinclude)  ){
		include("html_slides/" . $htmlinclude);
	}

}

?>

      </div>
    </div>

    <script src="js/head.min.js"></script>
    <script src="js/reveal.js"></script>

    <script>
      // More info https://github.com/hakimel/reveal.js#configuration
      Reveal.initialize({
        history: true,
        width: "85%",
        height: "90%",
        transition: "fade",

        // More info https://github.com/hakimel/reveal.js#dependencies
        // Notes plugin must remain local for now.
        // See https://github.com/ansible/lightbulb/issues/125
        dependencies: [
          { src: 'js/marked.js' },
          { src: 'js/markdown.js' },
          { src: 'js/notes.js', async: true },
          { src: 'js/prism.min.js'},
          { src: 'js/prism-yaml.min.js'}
          //{ src: 'https://cdnjs.cloudflare.com/ajax/libs/reveal.js/3.4.1/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } }
        ]
      });
    </script>
  </body>
</html>




