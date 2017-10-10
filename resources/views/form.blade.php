@extends('main')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1>Web Page Analyzer</h1>
                <p>Check web pages for free</p>
                <form action="{{ route('store') }}" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" name="url" required class="form-control" placeholder="https://example.com">
                                <span class="input-group-btn">
                                        <input class="btn btn-default" type="submit" value="Check">
                                    </span>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </form>
            </div>
        </div>
    </div>

@stop
