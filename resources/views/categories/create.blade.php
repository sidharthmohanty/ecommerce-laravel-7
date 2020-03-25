@extends('layouts.app')

@section('content')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{isset($category)? 'Update Category': 'New Category'}}</div>
                <div class="card-body">
                    <form action="{{isset($category) ? route('categories.update', $category->id) : route('categories.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($category))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{isset($category) ? $category->name : ''}}">
                        </div>
                        @if(isset($category))
                            <div class="form-group">
                                <img src="{{asset('storage/'. $category->image)}}" style="height:100px" alt="">
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">{{isset($category) ? 'Update' : 'Add'}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
