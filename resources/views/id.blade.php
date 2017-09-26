@extends('main')

@section('content')

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
        <tr>
            @foreach($row as $item)
                <td>{{ $item }}</td>
            @endforeach
        </tr>
    </tbody>
</table>

@stop