<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Theme+ Präsentation - Contao Konferenz 2012 - by Tristan Lins, InfinitySoft</title>
    
    <meta name="description" content="Theme+ Präsentation - Contao Konferenz 2012" />
    <meta name="author" content="Tristan Lins, InfinitySoft" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic|PT+Mono" rel="stylesheet" />

	<script src="syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
    <link href="syntaxhighlighter_3.0.83/styles/shCore.css" rel="stylesheet" />
    <link href="syntaxhighlighter_3.0.83/styles/shThemeDefault.css" rel="stylesheet" />
	<script src="syntaxhighlighter_3.0.83/scripts/shBrushPhp.js"></script>
	<script src="syntaxhighlighter_3.0.83/scripts/shBrushCss.js"></script>
	<script src="syntaxhighlighter_3.0.83/scripts/shBrushJScript.js"></script>
	<script src="syntaxhighlighter_3.0.83/scripts/shBrushXml.js"></script>
	<script src="syntaxhighlighter_3.0.83/scripts/shBrushPlain.js"></script>

    <link href="css/style.css" rel="stylesheet" />
</head>

<body>

<div id="impress" class="normal-mode not-supported">
	<?php require('contents.php'); ?>
</div>

<div style="position: absolute; top: 0; right: 0; border: 0; z-index: 1;"><a href="https://github.com/InfinitySoft/ThemePlus"><img src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub"></a></div>

<script src="js/jquery.min.js"></script>
<script src="js/jmpress.js"></script>
<script>
	SyntaxHighlighter.all()
	$('#impress').jmpress({ containerClass: "impress-enabled" });
</script>

</body>
</html>
