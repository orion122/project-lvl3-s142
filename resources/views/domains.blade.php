@extends('main')

@section('content')
    <div class="text-center">{{ $row->links() }}</div>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>URL</th>
            <th>Status Code</th>
            <th>Content Length</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
        <tbody>
            @foreach($row as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><a href="{{ $item->name }}">{{ $item->name }}</a></td>
                        <td>{{ $item->status_code }}</td>
                        <td>{{ $item->content_length }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
@stop