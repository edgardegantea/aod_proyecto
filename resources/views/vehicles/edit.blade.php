<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Editar la información del vehículo <b>{{ $vehicle->brand}} {{ $vehicle->model}}</b></h1>

    <form action="{{ route('vehicles.update', $vehicle->id) }}" method="post">
        @csrf
        @method('PUT')
        

        <input type="hidden" name="id">

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" id="" value="{{ $vehicle->brand}}">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" id="" value="{{ $vehicle->model}}">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" id="" value="{{ $vehicle->color}}">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Número de serie: </label>
                <input class="form-control" type="text" name="serialNumber" id="" value="{{ $vehicle->serialNumber}}">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Matrícula: </label>
                <input class="form-control" type="text" name="carRegistration" id="" value="{{ $vehicle->carRegistration}}">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Número de puertas: </label>
                <input class="form-control" type="number" name="numberOfDoors" id="" value="{{ $vehicle->numberOfDoors}}">
            </div>
        </div>
        <br>
        
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Número de asientos: </label>
                <input class="form-control" type="number" name="numberOfSeats" id="" value="{{ $vehicle->numberOfSeats}}">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Kilometraje: </label>
                <input class="form-control" type="number" name="mileage" id="" value="{{ $vehicle->mileage}}">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Cilindraje: </label>
                <input class="form-control" type="number" name="cylinderCapacity" id="" value="{{ $vehicle->cylinderCapacity}}">
            </div>
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $vehicle->description}}</textarea>
        </div>
        <br>
        <div>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" id="" value="{{ $vehicle->comment}}">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-primary" type="submit" value="Guardar cambios">
        </div>

    </form>

</div>
