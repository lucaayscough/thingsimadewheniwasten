<?php
///// TEMPLATE Default ////
$template_active = '<div id="main">
<div id="link">
<div id="text">
<span id="bigtext">{title}</span> <span style="float: right;">[com-link] Commenti [/com-link] ({comments-num})</span>
<hr />
<table>
<tr>
<td valign="top">{avatar}</td>
<td valign="top">{short-story}<br /> [full-link] Leggi il resto [/full-link]</td>
</tr>
</table>
<hr />
Postato da [mail]{author}[/mail] il {date}.
</div>
</div>
</div>
<br />
<br /> 
<br />';
$template_comment = '<div id="main">
<div id="link">
<div id="text">
Commentato il {date} da {author}.
<hr />
{comment}
</div>
</div>
</div>
<br />
<br />';
$template_form = '<div id="main">

<table border="0" width="370" cellspacing="0" cellpadding="0">
    <tr>
      <td width="60">Nick:</td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><input type="text" name="mail"> (optional)</td>
    </tr>
    <tr>
      <td>Smile:</td>
      <td>{smilies}</td>
    </tr>
    <tr>
      <td colspan="2">
      <textarea cols="40" rows="6" id=commentsbox name="comments"></textarea><br />
      <input type="submit" name="submit" value="Add My Comment">
      <input type=checkbox name=CNremember  id=CNremember value=1><label for=CNremember> Ricordami</label> |
  <a href="javascript:CNforget();">Dimenticami</a>
      </td>
    </tr>
  </table>

</div>';
$template_full = '<div id="main">
<div id="link">
<div id="text">
<span id="bigtext">{title}</span> <span style="float: right;">[com-link] Commenti [/com-link] ({comments-num})</span>
<hr />
<table>
<tr>
<td valign="top">{avatar}</td>
<td valign="top">{short-story} {full-story}</td>
</tr>
</table>
<hr />
Postato da [mail]{author}[/mail] il {date}.
</div>
</div>
</div>
<br />
<br /> 
<br />';
$template_prev_next = '<div id="main">
<div id="text">
<div id="link">
[prev-link] Nuovo [/prev-link] {pages} [next-link] Vecchio [/next-link]
</div>
</div>
</div>';
$template_comments_prev_next = '<div id="main">
<div id="text">
<div id="link">
[prev-link] Nuovo [/prev-link] {pages} [next-link] Vecchio [/next-link]
</div>
</div>
</div>';
?>
