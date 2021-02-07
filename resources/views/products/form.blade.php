<div class="form-control">
	<div class="form-group">
		<label for="name"><strong>Nombre</strong></label>
		<input type="text" value="{{old('name')}}" name="name" id="name" class="form-control" placeholder="Ingrese el nombre de la Proveedor" autofocus required>
	</div>
	<div class="form-group">
		<label for="ruc_number"><strong>RUC</strong></label>
		<input type="number" value="{{old('ruc_number')}}" name="ruc_number" id="ruc_number" class="form-control" placeholder="Ingrese el RUC del Proveedor" required>
	</div>
	<div class="form-group">
		<label for="email"><strong>Email</strong></label>
		<input type="email" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="Ingrese el email del Proveedor" required>
	</div>
	<div class="form-group">
		<label for="address"><strong>Dirección</strong></label>
		<input type="text" value="{{old('address')}}" name="address" id="address" class="form-control" placeholder="Ingrese la dirección del Proveedor" required>
	</div>
	<div class="form-group">
		<label for="phone"><strong>Teléfono</strong></label>
		<input type="text" name="phone" value="{{old('phone')}}" id="phone" class="form-control" placeholder="Ingrese un número de teléfono del Proveedor">
	</div>
</div>