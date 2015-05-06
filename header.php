<!doctype html>
<html  lang="zh-CN">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="content-language" content="lang="zh-CN"" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="<?php $this->title() ?>" />
	<meta name="description" content="<?php $this->title() ?>" />
	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
	<link type="image/x-icon" rel="icon" href="<?php $this->options->themeUrl('img/favicon.ico'); ?>" />
	<link type="image/x-icon" rel="shortcut icon" href="<?php $this->options->themeUrl('img/favicon.ico'); ?>" />
	<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
	<link href='http://fonts.useso.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body class="p-blog zh">
	<header>
		<div class="haeder">
			<div class="logo">
				<div class = "title">
					<a href="<?php $this->options->siteUrl(); ?>">
						<img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title(); ?>" title="<?php $this->options->title(); ?>Logo" width="126" height="45" />
						
					</a>
				</div>
				<div class = "search">
					<a href="<?php $this->options->siteUrl(); ?>" target="_blank">
						<p class="home">回到首页</p><p class="icon left"></p>
					</a>
					<form role="search" method="get" id="searchform" class="searchform" action="http://blog.360totalsecurity.com/zh-cn">
						<div>
							<input type="text" value="" name="s" id="s" placeholder="Search">
							<input type="submit" id="searchsubmit" value="&#xf105">
						</div>
					</form>
				</div>
			</div>
<nav class="navbar" role="navigation">
    <ul class="nav">
	<li><a href="<?php $this->options->siteUrl(); ?>">主页</a></li>
        <li><a href="<?php $this->options->siteUrl(); ?>friend.html">留言墙</a></li>
        <li><a href="<?php $this->options->siteUrl(); ?>archive.html">归档</a></li>
        <li><a href="<?php $this->options->siteUrl(); ?>about.html">关于我</a></li>				
    </ul>
			</nav>
		</div>
	</header>