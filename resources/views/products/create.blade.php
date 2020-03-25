@extends('layouts.app')

@section('content')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{isset($product) ? 'Update Product' : "New Product"}}</div>
                <div class="card-body">
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                   <form action="{{isset($product) ? route('products.update', $product->id) : route('products.store')}}" method="post" enctype="multipart/form-data">  
                   @csrf
                   @if(isset($product))
                    @method('PUT')
                   @endif
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{isset($product) ? $product->name : ''}}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" value="{{isset($product) ? $product->price : ''}}">
                    </div>
                    @if(isset($product))
                        <div class="form-group">
                            <img src="{{asset('storage/'.$product->image)}}" alt="" style="height:100px">
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" >
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input id="x" type="hidden" name="description" value="{{isset($product) ? $product->description : ''}}">
                        <trix-editor input="x"></trix-editor>                    
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category_id" id="category" class="form-control" selected>
                            @foreach($categories as $category)
                                <option value="{{isset($product) ? $product->category->id : $category->id}}">{{isset($product) ? $product->category->name : $category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">{{isset($product) ? "Update" : "Add Product"}}</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
