<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Join the Mailing list</title>
  </head>
  <body>
    <h1>Join the Mailing list</h1>
    <?php if ( isset($status) ) : ?>
      <p><i><?php echo $status; ?></i></p>
    <?php endif; ?>
    <form method="post">
      <table>
        <tr>
          <td>
            <label for="name">Name</label>
          </td>
          <td>
            <input type="text" name="name" id="name" value="<?= previous('name'); ?>" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="email">Email</label>
          </td>
          <td>
            <input type="text" name="email" id="email" value="<?= previous('email'); ?>" />
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit"/>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
