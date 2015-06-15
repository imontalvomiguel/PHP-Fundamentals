<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Registered users</title>
  </head>
  <body>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
      <?php if (!empty($registered_users)) : foreach ($registered_users as $user) : extract($user) ?>
      <tr>
        <td><?= $name; ?></td>
        <td><?= $email; ?></td>
      </tr>
      <?php endforeach; else : ?>
      <tr>
        <td>Empty</td>
        <td>Empty</td>
      </tr>
      <?php endif; ?>
    </table>
  </body>
</html>
