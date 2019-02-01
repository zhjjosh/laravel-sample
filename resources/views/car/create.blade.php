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
                          <form method="post" action="{{ route('car.store') }}">
                              <div class="form-group">
                                  @csrf
                                  <label for="name">Car Name:</label>
                                  <input type="text" class="form-control" name="name"/>
                              </div>
                              <div class="form-group">
                                  <label for="price">Car Brand :</label>
                                  <select class="form-control" name="brand">
                                    <option value="Ford">Ford</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Holden">Holden</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Nissan">Nissan</option>
                                  </select> 
                              </div>
                              <div class="form-group">
                                  <label for="quantity">Car Build Year:</label>
                                  <select class="form-control" name="year" id="year"></select>
                              </div>
                              <div class="form-group">
                                  <label for="quantity">Car Cost:</label>
                                  <input type="number" min=0 step=0.01 class="form-control" name="cost"/>
                              </div>
                              <div class="form-group">
                                  <label for="quantity">Description:</label>
                                  <textarea class="form-control" name="description"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Add</button>
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