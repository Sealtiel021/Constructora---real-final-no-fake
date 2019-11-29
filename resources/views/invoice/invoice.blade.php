
<div class="container">
    <div class="row">
            <div class="col-12">

                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-12">
                          <h4>
                            <i class="fa fa-globe"></i> La inquebrantable, Inc.
                            <small class="float-right">Fecha: 2/12/2019</small>
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
                          <b>Invoice #076120</b><br>
                          <br>
                          <b>Orden ID:</b> 4F3S8J<br>
                          <b>Fecha de pago:</b> 2/22/2014<br>
                          <b>RFC:</b> 968-34567
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
                              <th>Cant</th>
                              <th>Producto</th>
                              <th>Serial #</th>
                              <th>Descripcion</th>
                              <th>Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>Pulidora</td>
                              <td>455-981-221</td>
                              <td>Herramienta marca Truper</td>
                              <td>$500</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Martillo</td>
                              <td>247-925-726</td>
                              <td>Herramienta generica</td>
                              <td>$80</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Casco seguridad</td>
                              <td>735-845-642</td>
                              <td>Ropa de seguridad</td>
                              <td>$200</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Chaleco antirreflejante</td>
                              <td>422-568-642</td>
                              <td>Ropa de seguridad</td>
                              <td>$150</td>
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
                          <p class="lead">Monto adeudado desde 2/22/2014</p>

                          <div class="table-responsive">
                            <table class="table">
                              <tbody><tr>
                                <th style="width:50%">Subtotal:</th>
                                <td>$930</td>
                              </tr>
                              <tr>
                                <th>IVA (9.3%)</th>
                                <td>$84</td>
                              </tr>
                              <tr>
                                <th>Envio:</th>
                                <td>$200</td>
                              </tr>
                              <tr>
                                <th>Total:</th>
                                <td>$1214</td>
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

                          <a href="" @click.prevent="printme" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                          <button type="button" class="btn btn-success float-right">
                              <i class="fa fa-credit-card"></i>
                              Realizar pago
                          </button>

                          <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                            <i class="fa fa-download"></i> Generar PDF
                          </button>

                        </div>
                      </div>

                    </div>
                    <!-- /.invoice -->
                  </div>


    </div>
</div>
