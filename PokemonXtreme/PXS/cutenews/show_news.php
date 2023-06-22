<?PHP
error_reporting (E_ALL ^ E_NOTICE);

$cutepath =  __FILE__;
$cutepath = preg_replace( "'\\\show_news\.php'", "", $cutepath);
$cutepath = preg_replace( "'/show_news\.php'", "", $cutepath);

require_once("$cutepath/inc/functions.inc.php");
require_once("$cutepath/data/config.php");
if(file_exists("$cutepath/data/captcha.php")){
	require_once("$cutepath/data/captcha.php");
}

// If we are showing RSS, include some needed variables
if($template == 'rss'){
	include("$cutepath/data/rss_config.php");
}

//----------------------------------
// Check if we are included by PATH
//----------------------------------
if($_SERVER['HTTP_ACCEPT'] or $_SERVER['HTTP_ACCEPT_CHARSET'] or $_SERVER['HTTP_ACCEPT_ENCODING'] or $_SERVER['HTTP_CONNECTION']){ /* do nothing */ }
elseif(strpos($PHP_SELF, 'show_news.php') !== false){
die("<h4>CuteNews has detected that you are including show_news.php using the URL to this file.<br>
This is incorrect and you must include it using the PATH to show_news.php</h4><br>Example:<br>
this is <font color=red>WRONG</font> :&nbsp;&nbsp; &lt;?PHP include(\"http://yoursite.com/cutenews/show_news.php\"); ?&gt;<br>
this is <font color=green>CORRECT</font>:&nbsp;&nbsp; &lt;?PHP include(\"cutenews/show_news.php\"); ?&gt;<br>
<br><BR>// <font size=2>if you think this message shouldn't be shown, open show_news.php and delete it from there</font>");
}
//----------------------------------
// End of the check
//----------------------------------

if(!isset($subaction) or $subaction == ''){ $subaction = $POST['subaction']; }

if(!isset($template) or $template == '' or strtolower($template) == 'default'){ require_once("$cutepath/data/Default.tpl"); }
else{
	if(file_exists("$cutepath/data/${template}.tpl")){ require("$cutepath/data/${template}.tpl"); }
	else{ die("Error!<br>the template <b>".htmlspecialchars($template)."</b> does not exists, note that templates are case sensetive and you must write the name exactly as it is"); }
}

// Prepare requested categories
if(preg_match('/[a-z]/i', $category)){
	die("<b>Error</b>!<br>CuteNews has detected that you use \$category = \"".htmlspecialchars($category)."\"; but you can call the categories only with their <b>ID</b> numbers and not with names<br>
	example:<br><blockquote>&lt;?PHP<br>\$category = \"1\";<br>include(\"path/to/show_news.php\");<br>?&gt;</blockquote>");
}
$category = str_replace(' ', '', $category);
$neg_cats = array();
$tmp_cats_arr = explode(',', $category);
foreach($tmp_cats_arr as $key=>$value){
	if($value == ''){ continue; }
	if($value < 0){ $value = 0 - $value; $neg_cats[$value] = TRUE; }
	else{ $requested_cats[$value] = TRUE; }
}

if($archive == ''){
	$news_file = "$cutepath/data/news.txt";
	$comm_file = "$cutepath/data/comments.txt";
}else{
	$news_file = "$cutepath/data/archives/$archive.news.arch";
	$comm_file = "$cutepath/data/archives/$archive.comments.arch";
}

$allow_add_comment = FALSE;
$allow_full_story = FALSE;
$allow_active_news = FALSE;
$allow_comments = FALSE;



// --------- Determine what user wants to do
if($CN_HALT != TRUE and $static != TRUE and ($subaction == 'showcomments' or $subaction == 'showfull' or $subaction == 'addcomment')){
	if($subaction == 'addcomment'){  $allow_add_comment = TRUE; $allow_comments = TRUE; }
	if($subaction == 'showcomments'){ $allow_comments = TRUE; }
	if(($subaction == 'showcomments' or $allow_comments == TRUE) and $config_show_full_with_comments == 'yes'){$allow_full_story = TRUE; }
	if($subaction == 'showfull') $allow_full_story = TRUE;
	if($subaction == 'showfull' and $config_show_comments_with_full == 'yes') $allow_comments = TRUE;

}
else{
	if($config_reverse_active == 'yes'){ $reverse = TRUE; }
	$allow_active_news = TRUE;
}
// --------- /Determine what user wants

require("$cutepath/inc/shows.inc.php");
	if($_GET['archive'] and $_GET['archive'] != ''){ $archive = $_GET['archive']; }
unset($static, $template, $requested_cats, $category, $catid, $cat,$reverse, $in_use, $archives_arr, $number, $no_prev, $no_next, $i, $showed, $prev, $used_archives, $user);
?>
<!-- UTF-8 CuteNews: http://korn19.ch/coding/utf8-cutenews/ -->