<?php
///// TEMPLATE PokemonXtreme ////
$template_active = '<div id="cutenews_base">

<div id="cutenews_p_1">
<div class="bullet"></div><div class="title">{title}</div><div class="comment_shower"><div class="number">[com-link]Commenti #{comments-num}[/com-link]</div></div>
</div>

<table cellpading="0" cellspacing="0"><tr><td valign="top">
{avatar}
</td>
<td valign="top">
{short-story} [full-link][Leggi il resto][/full-link]
</td></tr></table>

<div id="cutenews_p_2"><div class="date_author">Postato il {date} by {author}.</div></div>

</div>

<br />
<br />';
$template_comment = '<div id="cutenews_base">

<div class="number_author">Commentato da {author} il {date} <div style="float: right; margin-right: 2px;">#{comment-iteration}</div></div>

<div class="comment">{comment}</div>

</div>

<br />';
$template_form = '<div id="cutenews_base">

<div id="sign"><center>Lascia anche tu un commento.</center></div><br />

<table cellpadding="0px" cellspacing="0px"><tr>
<td valign="top" width="70px">Name:</td><td valign="top"> <input type="text" name="name"></td></tr></table>

<table cellpadding="0px" cellspacing="0px"><tr>
<td valign="top" width="70px">E-Mail:</td><td valign="top"> <input type="text" name="mail"> (optional)</td></tr></table>

<table cellpadding="0px" cellspacing="0px"><tr><td valign="top" width="70px">Smile:</td><td valign="top"> <div class="emoticons">{smilies}</div></td></tr></table>

      <textarea cols="40" rows="6" id=commentsbox name="comments"></textarea><br />
      <input type="submit" name="submit" value="Add My Comment">
      <input type=checkbox name=CNremember  id=CNremember value=1><label for=CNremember> Ricordami</label> |
  <a href="javascript:CNforget();">Dimenticami</a>

</div>';
$template_full = '<div id="cutenews_base">

<div id="cutenews_p_1">
<div class="bullet"></div><div class="title">{title}</div><div class="comment_shower"><div class="number">[com-link]Commenti #{comments-num}[/com-link]</div></div>
</div>

<table cellpading="0" cellspacing="0"><tr><td valign="top">
{avatar}
</td>
<td valign="top">
{short-story} {full-story}
</td></tr></table>

<div id="cutenews_p_2"><div class="date_author">Postato il {date} by {author}.</div></div>

</div>

<br />
<br />';
$template_prev_next = '<p align="center">[prev-link]<< Nuovo[/prev-link] ({pages}) [next-link]Vecchio >>[/next-link]</p>';
$template_comments_prev_next = '<p align="center">[prev-link]<< Nuovo[/prev-link] ({pages}) [next-link]Vecchio >>[/next-link]</p>';
?>
