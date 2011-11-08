<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="zh-CN">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
	<title><?php $this->archiveTitle('_', '', '_'); ?><?php $this->options->title(); ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
	<link rel="index" title="<?php $this->options->title() ?>" href="<?php $this->options->siteUrl(); ?>" />
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('img/favicon.ico'); ?>" type="image/x-icon" />
	<?php $this->header(); ?>
</head>

<body>

<div id="wrapper">

<div id="header">
	    <h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
	    <div class="description"><?php $this->options->description() ?></div>
		<div class="feedrss"><a rel="nofollow" href="<?php $this->options->feedUrl(); ?>" target="_blank" title="<?php _e('订阅'); ?>"><?php _e('订阅'); ?></a></div>
</div><!-- end #header -->

<?php include('navigation.php'); ?>