@extends('layouts.app')

@section('content')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>Categories</div>
                    <div><a href="{{route('categories.create')}}" class="btn btn-primary btn-sm">+ Add</a></div>
                </div>

                <div class="card-body">
                   @if($categories->count() == 0)
                    <h5>No categories added yet..</h5>
                   @else
                    <table class="table">
                        <thead>
                            <th class="text-center">Name</th>
                            <th>Image</th>
                            <th class="text-center">No of products</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td class="text-center">{{$category->name}}</td>
                                    <td><img src="{{asset('storage/'. $category->image)}}" alt="" width="50px"></td>
                                    <td class="text-center">{{$category->products()->count()}}</td>
                                    <td><a class="btn btn-primary btn-sm float-right" href="{{route('categories.edit', $category->id)}}">Edit</a></td>
                                    <td>
                                        <form action="{{route('categories.destroy', $category->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
