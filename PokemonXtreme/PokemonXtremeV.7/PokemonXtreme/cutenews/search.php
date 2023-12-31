<?php
error_reporting (E_ALL ^ E_NOTICE);

$cutepath =  __FILE__;
$cutepath = preg_replace( "'\\\search\.php'", '', $cutepath);
$cutepath = preg_replace( "'/search\.php'", '', $cutepath);

$files_arch = array();

require_once("$cutepath/inc/functions.inc.php");

//check for bad _GET and _POST
if($dosearch == 'yes'){
	$utf8_error = false;
	$check_params = array_merge($_GET, $_POST);
	$special_params = array('story', 'title');
	foreach($special_params as $item){
		if(strpos($check_params[$item], ';') !== false){
			die(str_replace('{x}', $item, $say['bad_chars']));
		}
		$check_params[$item] = str_replace(';', '', utf8_htmlentities($check_params[$item]));
	}
	if($utf8_error){
		die($say['utf8']);
	}
	foreach($check_params as $param_key=>$param_val){
		if(!empty($param_val) && !preg_match('/^[a-zA-Z0-9- &\#]{0,255}$/', $param_val)){
			die(str_replace('{x}', htmlentities($param_key), $say['bad_chars']));
		}
	}
}
$story = utf8_htmlentities($story);
$title = utf8_htmlentities($title);

$user_query = cute_query_string($QUERY_STRING, array("search_in_archives", "start_from", "archive", "subaction", "id", "cnshow",
"ucat","dosearch", "story", "title", "user", "from_date_day", "from_date_month", "from_date_year", "to_date_day", "to_date_month", "to_date_year"));
$user_post_query = cute_query_string($QUERY_STRING, array("search_in_archives", "start_from", "archive", "subaction", "id", "cnshow",
"ucat","dosearch", "story", "title", "user", "from_date_day", "from_date_month", "from_date_year", "to_date_day", "to_date_month", "to_date_year"), "post");

// Define Users
$all_users = file("$cutepath/data/users.db.php");
$my_names = array();
foreach($all_users as $my_user){
	if(strpos($member_db_line, '<'.'?') === false){
		$user_arr = explode('|', $my_user);
		if($user_arr[4] != ''){ $my_names[$user_arr[2]] = $user_arr[4]; }
		else{ $my_names[$user_arr[2]] = $user_arr[2]; }
	}
}
// Show Search Form
$nice_user = htmlentities($user);
echo<<<HTML
<script language='javascript' type="text/javascript">
	function mySelect(form){
		form.select();
	}
	function ShowOrHide(d1, d2) {
		if (d1 != '') DoDiv(d1);
		if (d2 != '') DoDiv(d2);
	}
	function DoDiv(id) {
		var item = null;
		if (document.getElementById) {
			item = document.getElementById(id);
		} else if (document.all){
			item = document.all[id];
		} else if (document.layers){
			item = document.layers[id];
		}
		if (!item) {
		}
		else if (item.style) {
			if (item.style.display == "none"){ item.style.display = ""; }
			else {item.style.display = "none"; }
		}else{ item.visibility = "show"; }
	}
</script>
<form method="get" accept-charset="utf-8" action="$PHP_SELF?subaction=search">
<input type="hidden" name="dosearch" value="yes">

<div align="center">
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
<td><table width="100%" cellspacing="0" cellpadding="0">
<td width="100%">
 <p align="right">{$say['sh_news']} <input type=text value="$story" name=story size="24">
</table></td>
</tr><tr><td>
<div id='advanced' style='display:none;z-index:1;'>
<table width="100%" cellspacing="0" cellpadding="0">
<td width="100%" align="right">
	<p align="right">{$say['sh_title']}&nbsp;<input type=text value="$title" name=title size="24">
<tr>
	<td width="100%" align="right">{$say['sh_author']}&nbsp;<input type=text value="$nice_user" name=user size="24">
</tr>
<tr>
	<td width="100%" align="right">{$say['sh_fromdate']}
	<select name=from_date_day>
	<option value=""> </option>
HTML;
for($i=1;$i<32;$i++){
	if($from_date_day == $i){ echo "<option selected value=$i>$i</option>"; }
	else{ echo "<option value=$i>$i</option>"; }
}

echo "</select><select name=from_date_month><option value=\"\"> </option>";

for($i=1;$i<13;$i++){
	$timestamp = mktime(0,0,0,$i,1,2003);
	if($from_date_month == $i){ echo"<option selected value=$i>".utf8_dates(date('M', $timestamp)).'</option>'; }
	else{ echo"<option value=$i>".utf8_dates(date('M', $timestamp)).'</option>'; }
}

echo '</select><select name=from_date_year><option value=""> </option>';

for($i=2003;$i<date('Y');$i++){
	if($from_date_year == $i){ echo "<option selected value=$i>$i</option>"; }
	else{ echo "<option value=$i>$i</option>"; }
}
//////////////////////////////////////////////////////////////////////////
echo<<<HTML
</tr>
<tr>
 <td width="100%" align="right">{$say['sh_todate']}
	<select name=to_date_day>
	<option value="">  </option>
HTML;
for($i=1;$i<32;$i++){
	if($to_date_day == $i){ echo "<option selected value=$i>$i</option>"; }
	else{ echo "<option value=$i>$i</option>"; }
}

echo "</select><select name=to_date_month><option value=\"\">  </option>";

for($i=1;$i<13;$i++){
	$timestamp = mktime(0,0,0,$i,1,2003);
	if($to_date_month == $i){ echo "<option selected value=$i>".utf8_dates(date('M', $timestamp)).'</option>'; }
	else{ echo"<option value=$i>".utf8_dates(date('M', $timestamp)).'</option>'; }
}

echo '</select><select name=to_date_year><option value=""> </option>';

for($i=2003;$i<date('Y');$i++){
	if($to_date_year == $i){ echo"<option selected value=$i>$i</option>"; }
	else{ echo"<option value=$i>$i</option>"; }
}

if($search_in_archives){ $selected_search_arch = "checked=\"checked\""; }

echo<<<HTML
      </select>
  </tr>
  <tr>
    <td width="100%" align="right">
      <p align="right"><label>{$say['sh_archives']}
    <input type=checkbox $selected_search_arch name="search_in_archives" value="TRUE"></label>
  </tr>
</table>
</div>
	</td>
    </tr>
    <tr>
      <td>
        <p align="right">&nbsp;
    <a href="javascript:ShowOrHide('advanced','')">{$say['sh_adv']}</a>&nbsp;&nbsp; <input type=submit value="{$say['search']}">
      </td>
    </tr>
  </table>
</div>
$user_post_query
</form>
HTML;

// Don't edit below this line unless you know what you are doing !!!

if($dosearch == 'yes'){
	echo '<center>';
	if(is_numeric($from_date_day) && is_numeric($from_date_month) && is_numeric($from_date_year) && is_numeric($to_date_day) && is_numeric($to_date_month) && is_numeric($to_date_year)){
		$date_from = mktime(0,0,0,$from_date_month,$from_date_day,$from_date_year);
		$date_to = mktime(0,0,0,$to_date_month,$to_date_day,$to_date_year);

		$do_date = TRUE;
	}

	$story = trim($story);

	if($search_in_archives){
		if(!$handle = opendir("$cutepath/data/archives")){ die("<center>Can not open directory $cutepath/data/archives "); }
		while (false !== ($file = readdir($handle))){
			if($file != '.' and $file != '..' and strpos($file, 'news') !== false){
				$files_arch[] = "$cutepath/data/archives/$file";
			}
		}
	}
	$files_arch[] = "$cutepath/data/news.txt";

	foreach($files_arch as $file){
		$archive = FALSE;
		if(preg_match('/([[:digit:]]{0,})\.news\.arch/', $file, $regs)){ $archive = $regs[1]; }
			$all_news_db = file($file);
			foreach($all_news_db as $news_line){
				$news_db_arr = explode('|', $news_line);
				$found  = 0;

				$fuser  = FALSE;
				$ftitle = FALSE;
				$fstory = FALSE;
				$title = utf8_strtolower($title);
				$story = utf8_strtolower($story);
				if($title and @preg_match("/$title/i", utf8_strtolower($news_db_arr[2]))){ $ftitle = TRUE; }
				if($user  and @preg_match("/\b$user\b/i", "$news_db_arr[1]")){ $fuser = TRUE; }
				if($story and (@preg_match("/$story/i", utf8_strtolower($news_db_arr[4])) or @preg_match("/$story/i", utf8_strtolower($news_db_arr[3])))){
					$fstory = TRUE;
				}

				if($title and $ftitle){ $ftitle = TRUE; }elseif(!$title){ $ftitle = TRUE; }else{ $ftitle = FALSE; }
				if($story and $fstory){ $fstory = TRUE; }elseif(!$story){ $fstory = TRUE; }else{ $fstory = FALSE; }
				if($user  and $fuser) { $fuser  = TRUE; }elseif(!$user) { $fuser  = TRUE; }else{ $fuser  = FALSE; }
				if($do_date){
					if($date_from < $news_db_arr[0] and  $news_db_arr[0] < $date_to){ $fdate = TRUE; }
					else{ $fdate = FALSE; }
				}
				else{ $fdate = TRUE; }

			if($fdate and $ftitle and $fuser and $fstory){ $found_arr[$news_db_arr[0]] = $archive; }
		}
	}


	echo '<br /><b>'.str_replace('{x}', count($found_arr), $say['sh_found']).':</b><br />';

	if($do_date){echo 'from '.@utf8_dates(date('d F Y',$date_from)).' to '.@utf8_dates(date('d F Y', $date_to)).'<br />';}


	// Display Search Results
	if(is_array($found_arr)){
		foreach($found_arr as $news_id => $archive){
			if($archive){
				$all_news = file("$cutepath/data/archives/$archive.news.arch");
			}
			else{
				$all_news = file("$cutepath/data/news.txt");
			}
			foreach($all_news as $single_line){
				$item_arr = explode('|', $single_line);
				$local_id = $item_arr[0];
				if($local_id == $news_id){
// Showing Result
echo"<br /><b><a href=\"$PHP_SELF?misc=search&amp;subaction=showfull&amp;id=$local_id&amp;archive=$archive&amp;cnshow=news&amp;ucat=$item_arr[6]&amp;start_from=&amp;{$user_query}\">$item_arr[2]</a></b> (".utf8_dates(date('d F, Y', $item_arr[0])).')';
// End Showing Result
				}
			}
		}
	}
	else{ echo $say['sh_zilch'];}
}//if user wants to search
elseif( ($misc == "search") and ($subaction == "showfull" or $subaction == "showcomments" or $_POST["subaction"] == "addcomment" or $subaction == "addcomment")){

        require_once("$cutepath/show_news.php");

        unset($action,$subaction);
}

?>