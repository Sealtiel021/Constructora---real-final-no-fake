<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Facturas</title>
  <link  href="css/app.css" rel="stylesheet"> 
  <script src="js/app.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
            <div class="col-12">

              <!-- Main content -->
              @foreach ($invoices as $invoice)
                    <div class="invoice p-3 mb-3">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-12">
                          <h4>
                            <i class="fa fa-globe"></i> La inquebrantable, Inc.
                          </h4>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          De:
                          <address>
                            <strong>La inquebrantable, Inc.</strong><br>
                            Blvd. Felipe Pescador #1830<br>
                            Durango, Dgo. 34080<br>
                            Telefono: (618) 123-5432<br>
                            Email: info@lainquebrantable.com
                          </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          Para:
                          <address>
                            <strong>Nombre del remitente</strong><br>
                            Direccion del remitente<br>
                            Ciudad del remitente<br>
                            Telefono del remitente<br>
                            Email del remitente
                          </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Invoice</b><br>
                          <br>
                          <b>Orden ID:</b> {{ $invoice->id }}<br>
                          <b>Fecha de pago:</b> {{ $invoice->dateInvoice }}<br>
                          <b>RFC:</b> {{ $invoice->rfc }}
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-12 table-responsive">

                          <table class="table table-striped">
                            <thead>
                            <tr>
                              <th>Cantidad</th>
                              <th>Producto</th>
                              <th>Razon social</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>${{ $invoice->amount }}</td>
                                <td>{{ $invoice->reason }}</td>
                                <td>{{ $invoice->socialReason }}</td>
                                </tr>
                                
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-6">
                          <p class="lead">Metodos de pago:</p>
                          <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/visa.png" alt="Visa">
                          <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/mastercard.png" alt="Mastercard">
                          <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/american-express.png" alt="American Express">
                          <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/paypal2.png" alt="Paypal">

                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Todos los datos del usuario están protegidos
                          </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">
                          <p class="lead">Monto adeudado desde {{ $invoice->created_at }}</p>

                          <div class="table-responsive">
                            <table class="table">
                              <tbody><tr>
                                <th style="width:50%">Subtotal:</th>
                                <td>${{ $invoice->amount }}</td>
                              </tr>
                              <tr>
                                <th>Total:</th>
                                <td>${{ $invoice->amount }}</td>
                              </tr>
                            </tbody></table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-12">

                          <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                            <i class="fa fa-download"></i> Generar PDF
                          </button>

                        </div>
                      </div>

                    </div>
                    @endforeach
                    <!-- /.invoice -->
                  </div>


    </div>
</div>

</body>
</html>
