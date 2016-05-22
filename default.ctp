<?php echo $html->docType('xhtml-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('favicon.ico', '/favicon.ico',	array('type' => 'icon')) . LF;
		echo $html->meta('keywords', 'music lessons, somerset, taunton, somerset rural music school, srms', array('type' => 'keywords'), true) . LF;
		echo $html->meta('description',	'SRMS', array('type' => 'description'), true) . LF;
		//echo '<meta name="verify-v1" content="nOZx1X3SIspybWl1MbDkoUApKMirq7xNp+MZxTTWO2M=" />' . LF;
		echo $html->css('main');
		echo $scripts_for_layout;
	?>
	<meta name="verify-v1" content="Uw5WU9WS5RY5mTYeXgpUaXxEqSugiMWVTyZmnzdo0xs=" />
	<!--[if lte IE 6]>
    <style type="text/css">
        #menu li a {
            line-height: 49px;
            font-size: 16px;
            height: 49px;
            border: none;
            color: #e6e6e6;
            text-decoration: none;
            text-align: center;
            background: inherit;
            padding: 0px;
        }
        
        #menu li {
            float: left;
            border-left: 3px solid #3399cc;
            display: inline;
            width: 140px;
        } 
    </style>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <div id="header">
        <?php echo $html->image('piper.png', array('alt'=> 'SRMS', 'id' => 'logo')); ?>
        <?php echo $html->image('header-text.png', array('alt'=> 'SRMS', 'id' => 'header-text')); ?>
    </div>
    <div id="menu">
        <div id="links">
            <ul>
                <li <?php if (!empty($menuname) && $menuname == "Home") echo 'class="selected"'; ?>>
                    <? echo $html->link('Home', '/'); ?>
                </li>
                <li <?php if (!empty($menuname) && $menuname == "What We Offer") echo 'class="selected"'; ?>>
                    <? echo $html->link('What We Offer', '/what-we-offer'); ?>
                </li>
                <li <?php if (!empty($menuname) && $menuname == "Where") echo 'class="selected"'; ?>>
                    <? echo $html->link('Where', '/where'); ?>
                </li>
                <li <?php if (!empty($menuname) && $menuname == "Prices") echo 'class="selected"'; ?>>
                    <? echo $html->link('Prices', '/prices'); ?>
                </li>
		<li <?php if (!empty($menuname) && $menuname == "Photos") echo 'class="selected"'; ?>>
		    <? echo $html->link('Photos', '/photos'); ?>
		</li>
                <li <?php if (!empty($menuname) && $menuname == "Tutors") echo 'class="selected"'; ?>>
                    <? echo $html->link('Tutors', '/tutors'); ?>
                </li>
                <li class="last <?php if (!empty($menuname) && $menuname == "Contact") echo 'selected'; ?>">
                    <? echo $html->link('Contact', '/contact-us'); ?>
                </li>
            </ul>
        </div>
    </div>
    <div id="centre-wrapper">
        <div id="right-bar">
            <div id="news">
                <p class="more"><? echo $html->link('more', '/news', array('class' => 'float-right')); ?></p>
                <h1><? echo $html->link('NEWS', '/news'); ?></h1>
                <?php
                    if (!empty($this->data['LayoutInfo']['Posts']))
                    {
                        foreach ($this->data['LayoutInfo']['Posts'] as $post)
                        {
                            echo '<p>' . $html->link($post['Post']['title'], '/news/id:' . $post['Post']['id']) . '</p><br />';
                        }
                    }
                ?>
            </div>
            <div id="dates">
                <p class="more"><? echo $html->link('more', '/dates', array('class' => 'float-right')); ?></p>
                <h1><? echo $html->link('DATES', '/dates'); ?></h1>
                <?php
                    if (!empty($this->data['LayoutInfo']['Events']))
                    {
                        foreach ($this->data['LayoutInfo']['Events'] as $event)
                        {
                            if (!empty($event['Event']['content']))
                                echo '<p>' . $html->link(date('d/m/y', strtotime($event['Event']['date'])) . ' - ' . $event['Event']['title'], '/dates/id:' . $event['Event']['id']) . '</p><br />';
                            else
                                echo '<p>' . date('d/m/y', strtotime($event['Event']['date'])) . ' - ' . $event['Event']['title'] . '</p><br />';
                        }
                    }
                ?>
            </div>
        </div>
        <div id="content">
            <?php $session->flash(); ?>
			<?php echo $content_for_layout; ?>
        </div>
        <hr />
    </div>
    <div id="footer">
        <div id="footer-1">
        </div>
        <div id="footer-main">
            <div id="footer-centre">
                <p id="copyright" class="centre">&copy; 2009 Somerset Rural Music School</p>
                <?php echo $html->image('tdbc.png', array('alt'=> 'Taunton Deane Borough Council', 'id' => 'tdbc', 'class' => 'centre')); ?>
                <p id="thanks" class="centre">SRMS would like to gratefully acknowledge <br />the long-standing and continued support <br />and encouragement of T.D.B.C</p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10507040-3");
pageTracker._setDomainName(".srms.org.uk");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
