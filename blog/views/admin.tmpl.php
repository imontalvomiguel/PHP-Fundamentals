<form method="post">
  <h4>Create a new post</h4>
  <table>
    <tr>
      <td><label for="title">Title</label></td>
      <td><input type="text" name="title" id="title" value="<?php if ($title) echo $title;  ?>"/></td>
    </tr>
    <tr>
      <td><label for="body">Body</label></td>
      <td><textarea name="body" id="body" rows="8" cols="40" ><?php if ($body) echo $body; ?></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" /></td>
    </tr>
  </table>
  <?php if ($status) : ?>
    <p><em><?php echo $status; ?></em></p>
  <?php endif; ?>
</form>
