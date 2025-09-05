<!DOCTYPE html>
<html lang="en">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<script src="https://cloud.ccm19.de/app.js?apiKey=7d7e22e4605567d8d9fe635802f0ab18e65db6a32df46c24&amp;domain=638201d33a94bf1a0c32d2e2" referrerpolicy="origin"></script>

<title>
	<?php if (is_single()) { ?>
		Blog Archiv
	<?php } ?>
	<?php wp_title('&raquo;', true, 'right') ?> alles &uuml;ber Noten, Instrumente, Zubeh&ouml;r und Musik
</title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/struktur/css/style.php" type="text/css" media="all" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 <!-- Fav and touch icons -->
<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/struktur/images/favicon.ico">
<style type="text/css" media="screen">


<?php
// Checks to see whether it needs a sidebar or not
if ( !$withcomments && !is_single() ) {
?>
	#page { background: url("<?= get_template_directory_uri(); ?>/images/kubrickbg.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?= get_template_directory_uri(); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>
</style>

<!-- bo GA4 -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QR7B8WPBJS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-QR7B8WPBJS');
</script>
<!-- eo GA$ -->

<script type="application/ld+json">
    {
      "@context": "http://schema.org/",
        "@type": "Organization",
        "name": "Musikalienhandel",
        "url": "https://blog.musikalienhandel.de",
        "email": "",
        "telephone": "0800-00-68745",
        "logo": "https://blog.musikalienhandel.de/wp-content/uploads/2018/07/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "",
            "Email": "",
            "contactType": "customer service"
        },
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "",
            "addressRegion": "",
            "postalCode": "",
            "streetAddress": ""
        }
    }
  </script>

</head>
<body>
  <div class="container">
  	<div id="hauptblock" class="blog">
      <div class="row">
  		  <?php include("layout_cockpit.php"); ?>
      </div>

      <div class="row sidebar-anchor-point">
