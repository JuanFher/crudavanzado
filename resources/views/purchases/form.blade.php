<div class="row">
		<div class="col-12 grid-margin">
			<div class="card">
				<div class="row">
					<div class="col-md-6">
						<div class="card-body">
							<label for="provider_id">Proveedor</label>
				            <select class="form-control" name="provider_id" id="provider_id">
				                @foreach ($providers as $provider)
				                <option value="{{$provider->id}}">{{$provider->name}}</option>
				                @endforeach
				            </select>
				            <label for="tax">Impuesto</label>
					        <div class="input-group">

					            <input type="number" class="form-control" name="tax" id="tax" aria-describedby="basic-addon3"
					                placeholder="18">
					        </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card-body mb-3">
							<label><strong>Tipo</strong></label>
							<select id="type" name="type" class="form-control text-center">
								<option value="Elegir">-- Selecione --</option>
								<option value="FACTURA">FACTURA</option>
								<option value="RECIBO">RECIBO</option>
								<option value="PROFORMA">PROFORMA</option>
							</select>
							<div class="col-md-6 float-left mt-2">
								<label>Fecha de compra</label>
                        		<input class="form-control" id="purchase_date" name="purchase_date" type="date" />
							</div>
							<div class="col-md-6 float-left mt-2">
								<label>Número de Documento</label>
                        		<input class="form-control" id="number_fact" name="number_fact" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{{-- <div class="form-group">
    <label for="code">Código de barras</label>
    <input type="text" name="code" id="code" class="form-control" placeholder="" aria-describedby="helpId">
</div> --}}

<div class="row">
			<div class="col-lg-5 grid-margin grid-margin-lg-0">
				<div class="form-group">
					<label for="name"><strong>Buscar Producto</strong></label>
                    <select class="form-control form-control-lg" name="product_id" id="product_id">
                      <option value="Elegir">-- Seleccione un Producto --</option>
                      @foreach ($products as $product)
                      	<option value="{{ $product->id }}">{{ $product->name }}</option>
                      @endforeach
                    </select>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="form-group">
					<label for="stock"><strong>Cantidad</strong></label>
					<input type="number" value="{{old('quantity')}}" name="quantity" id="quantity" class="form-control" placeholder="Cantidad" >
				</div>
			</div>
			<div class="col-lg-2">
				<div class="form-group">
					<label for="stock"><strong>Precio de compra</strong></label>
					<input type="number" value="{{old('buy_price')}}"  name="buy_price" id="buy_price" class="form-control" placeholder="Precio de compra" >
				</div>
			</div>
			<div class="col-lg-2">
				<div class="form-group">
					<label for="stock"><strong>Precio de venta</strong></label>
					<input type="number" value="{{old('sell_price')}}" name="sell_price" id="sell_price" class="form-control" placeholder="Precio de venta" >
				</div>
			</div>
			<div class="col-lg-1">
				<div class="form-group">
					<button class="btn btn-primary float-right mt-4 ml-2 " id="addPorduct" >Agregar</button>
				</div>
			</div>
		</div>
<div class="row">
              <div class="col-lg-12">
                  <div class="card px-2">
                      <div class="card-body">
                          <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table id="details" class="table">
                                  <thead>
                                    <tr class="bg-dark text-white">
                                        <th>#</th>
                                        <th>Descripción</th>
                                        <th class="text-right">Cantidad</th>
                                        <th class="text-right">Precio de compra</th>
                                        <th class="text-right">Precio de venta</th>
                                        <th class="text-right">subtotal</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  		<tr class="text-right">
		                                    <td class="text-left">1</td>
		                                    <td class="text-left">Brochure Design</td>
		                                    <td>2</td>
		                                    <td>$20</td>
		                                    <td>$20</td>
		                                    <td>$40</td>
	                                    </tr>

                                  </tbody>
                                </table>
                              </div>
                          </div>
                          <div class="container-fluid mt-5 w-100">
                            <p class="text-right mb-2">SubTotal: $12,348</p>
                            <p class="text-right">vat (10%) : $138</p>
                            <h4 class="text-right mb-5">Total : $13,986</h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
