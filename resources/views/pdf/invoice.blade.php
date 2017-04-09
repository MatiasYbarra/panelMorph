<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 2</title>
  </head>
  <body>

    <main>
      <div id="details" class="clearfix">
        <div id="invoice">
          <h1>INVOICE {{ $invoice }}</h1>
          <div class="date">Date of Invoice: {{ $date }}</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no" style="width: 200px">TITULO</th>
            <th class="desc"style="width: 200px">AUTOR</th>
            <th class="unit"style="width: 200px">ANO</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>

            <?php foreach ($data as $articulo ): ?>
            <tr style="width: 100%">
              <td style="width: 100px">{{ $articulo['title'] }}</td>
              <td style="width: 100px">{{ $articulo['author'] }}</td>
              <td style="width: 200px">{{ $articulo['year'] }}</td>
            </tr>
            <?php endforeach; ?>


        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td >TOTAL</td>
            <td>$6,500.00</td>
          </tr>
        </tfoot>
      </table>
  </body>
</html>
