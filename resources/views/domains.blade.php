@extends('main')

@section('content')
    <div class="text-center">{{ $row->links() }}</div>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>url</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        </thead>
        <tbody>
            @foreach($row as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><a href="{{ $item->name }}">{{ $item->name }}</a></td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
@stop