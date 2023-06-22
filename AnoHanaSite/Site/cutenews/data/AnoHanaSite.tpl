<?php
///// TEMPLATE AnoHanaSite ////
$template_active = '<div class="news">
    <div class="news-title">[link]{title}[/link]</div>

    <div class="news-info">Postato il {date} da {author-name}. <span class="comments-link">Commenti {comments-num}</span></div>
    
    <div class="avatar">{avatar}</div>
    <div class="news-content">{short-story}[full-link]<br /><br />[Continua a leggere...][/full-link]</div>
</div>

<div class="newsbl"></div>';
$template_comment = '<div class="comment">
    <div class="comment-top">
        Commento postato da {author-name} il {date}.
    </div>

    <div class="comment-content">
        {comment}
    </div>
</div>

<div class="comment-spacer"></div>';
$template_form = '<table border="0" width="610px" cellspacing="0" cellpadding="0" id="addcform">
    <tr>
      <td width="60">Name:</td>
      <td><input type="text" name="name" /></td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><input type="text" name="mail" /> (optional)</td>
    </tr>
    <tr>
      <td>Smile:</td>
      <td>{smilies}</td>
    </tr>
  </table>
      <textarea id="txtbox" cols="40" rows="6" id=commentsbox name="comments"></textarea><br />
      <input id="inpbutton" type="submit" name="submit" value="Add My Comment" />
      <input type="checkbox" name="CNremember"  id="CNremember" value="1" /><label for="CNremember"> Remember Me</label> |<a href="javascript:CNforget();">Forget Me</a>';
$template_full = '<div class="news">
    <div class="news-title">{title}</div>

    <div class="news-info">Postato il {date} da {author-name}. <span class="comments-link">Commenti {comments-num}</span></div>
    
    <div class="full-news">{full-story}</div>
</div>

<div class="newsbl"></div>';
$template_prev_next = '<p align="center">[prev-link]<< Previous[/prev-link] {pages} [next-link]Next >>[/next-link]</p>';
$template_comments_prev_next = '<p align="center">[prev-link]<< Older[/prev-link] ({pages}) [next-link]Newest >>[/next-link]</p>';
?>
