@extends('layouts.app')

@section('content')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>Products</div>
                    <div>
                        <a href="{{route('products.create')}}" class="btn btn-primary btn-sm">+ Add</a>
                    </div>
                </div>
                <div class="card-body">
                    @if($products->count() == 0)
                        <h5>No products added yet..</h5>
                    @else
                        <table class="table">
                            <thead>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td><img src="{{asset('storage/'.$product->image)}}" alt="" width="50px"></td>
                                        <td>{{$product->price}}</td>
                                        <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-secondary btn-sm float-right">Edit</a></td>
                                        <td>
                                            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        
                                        
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
