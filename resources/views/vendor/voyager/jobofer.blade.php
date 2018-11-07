@extends('voyager::master')




@section('content')

    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Text</th>
                                <th>CV</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($cvs as $cv)
                                    <tr>
                                        <td>{{$cv['name']}}</td>
                                        <td>{{$cv['email']}}</td>
                                        <td>{{$cv['text']}}</td>
                                        <td><a target="_blank" href="{{$url.$cv['fileName']}}">{{$cv['fileName']}}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop

