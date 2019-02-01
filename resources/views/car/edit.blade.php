@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CRUD Example</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <style>
                      .uper {
                        margin-top: 40px;
                      }
                    </style>
                    <div class="card uper">
                      <div class="card-header">
                        Add Car
                      </div>
                      <div class="card-body">
                        @if ($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                          </div><br />
                        @endif
                          <form method="post" action="{{ route('car.update', $car->id) }}">
                              <div class="form-group">
                                  @method('PATCH')
                                  @csrf
                                  <label for="name">Car Name:</label>
                                  <input type="text" class="form-control" name="name" value={{ $car->name }}>
                              </div>
                              <div class="form-group">
                                  <label for="price">Car Brand :</label>
                                  <select class="form-control" name="brand">
                                    <option value="Ford" {{ $car->brand == 'Ford' ? "selected" : "" }}>Ford</option>
                                    <option value="Toyota" {{ $car->brand == 'Toyota' ? "selected" : "" }}>Toyota</option>
                                    <option value="Holden" {{ $car->brand == 'Holden' ? "selected" : "" }}>Holden</option>
                                    <option value="Honda" {{ $car->brand == 'Honda' ? "selected" : "" }}>Honda</option>
                                    <option value="Nissan" {{ $car->brand == 'Nissan' ? "selected" : "" }}>Nissan</option>
                                  </select> 
                              </div>
                              <div class="form-group">
                                  <label for="quantity">Car Build Year:</label>
                                  <select class="form-control" name="year" id="year">
                                     <option value="{{ $car->year }}" selected >{{ $car->year }}</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="quantity">Car Cost:</label>
                                  <input type="number" min=0 step=0.01 class="form-control" name="cost" value={{ $car->cost }}>
                              </div>
                              <div class="form-group">
                                  <label for="quantity">Description:</label>
                                  <textarea class="form-control" name="description">{{ $car->description }}</textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Edit</button>
                          </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    for (i = new Date().getFullYear(); i > 1900; i--)
    {
        $('#year').append($('<option />').val(i).html(i));
    }
</script>
@endsection