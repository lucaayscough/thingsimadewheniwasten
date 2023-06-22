<?php
///// TEMPLATE Default ////
$template_active = '<div class="news">
    <div class="news-title">[link]{title}[/link]</div>
</div>';
$template_comment = '<div style="width: 400px; margin-bottom:20px;">

<div style="border-bottom:1px solid black;"> by <strong>{author-name}</strong> @ {date}</div>

<div style="padding:2px; background-color:#F9F9F9">{comment}</div>

</div>';
$template_form = '<table border="0" width="370" cellspacing="0" cellpadding="0">
    <tr>
      <td width="60">Name:</td>
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
      <input type=checkbox name=CNremember  id=CNremember value=1><label for=CNremember> Remember Me</label> |
  <a href="javascript:CNforget();">Forget Me</a>
      </td>
    </tr>
  </table>';
$template_full = '<div style="width:420px; margin-bottom:15px;">
<div><strong>{title}</strong></div>

<div style="text-align:justify; padding:3px; margin-top:3px; margin-bottom:5px; border-top:1px solid #D3D3D3;">{full-story}</div>

<div style="float: right;">{comments-num} Comments</div>

<div><em>Posted on {date} by {author}</em></div>
</div>';
$template_prev_next = '<p align="center">[prev-link]<< Previous[/prev-link] {pages} [next-link]Next >>[/next-link]</p>';
$template_comments_prev_next = '<p align="center">[prev-link]<< Older[/prev-link] ({pages}) [next-link]Newest >>[/next-link]</p>';
?>
