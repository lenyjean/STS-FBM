@extends('categories.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Category Module</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Category ID</th>
            <th>Category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $categories)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $categories->categories }}</td>
                <td>
                    <form action="{{ route('categories.destroy', $categories->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('categories.show', $categories->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('categories.edit', $categories->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
