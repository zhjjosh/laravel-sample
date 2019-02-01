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
                    <div class="uper">
                      @if(session()->get('success'))
                        <div class="alert alert-success">
                          {{ session()->get('success') }}  
                        </div><br />
                      @endif
                      <table class="table table-striped">
                        <thead>
                            <tr>
                              <td>ID</td>
                              <td>Car Name</td>
                              <td>Car Brand</td>
                              <td>Car Build Year</td>
                              <td>Car Cost</td>
                              <td>Description</td>
                              <td colspan="2">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cars as $car)
                            <tr>
                                <td>{{$car->id}}</td>
                                <td>{{$car->name}}</td>
                                <td>{{$car->brand}}</td>
                                <td>{{$car->year}}</td>
                                <td>${{$car->cost}}</td>
                                <td>{{$car->description}}</td>
                                <td><a href="{{ route('car.edit',$car->id)}}" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <form action="{{ route('car.destroy', $car->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <a href="{{ route('car.create')}}" class="green btn btn-success">Add</a>
                    <div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection