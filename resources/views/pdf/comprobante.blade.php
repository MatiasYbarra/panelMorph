<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <tbody>
        <tr>
          <td style="width: 10px">ID</td>
          <td style="width: 100px">Titulo</td>
          <td style="width: 100px">Autor</td>
        </tr>
        <?php foreach ($data as $articulo): ?>
          <tr>
            <td>{{ $data['id'] }}</td>
            <td>{{ $data['title'] }}</td>
            <td>{{ $data['author'] }}</td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
