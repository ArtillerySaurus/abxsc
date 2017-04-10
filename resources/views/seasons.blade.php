@extends('master')

@section('content')

<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">

    <div class="row">

        <div class="col-md-6 line-down">

            <div class="split-box center-block">

                <table class="season-table">
                    <thead>

                        <tr>

                            <td>Num</td>
                            <td>Name</td>
                            <td>Date started</td>
                            <td>Map</td>
                            <td>Database version</td>
                            <td>Last updated</td>

                        </tr>

                    </thead>

                    @foreach ($seasons as $season)

                    <tr>

                        <td>{{$season->number}}</td>
                        <td>{{$season->name}}</td>
                        <td>{{$season->date}}</td>
                        <td>{{$season->map}}</td>
                        <td>{{$season->databaseVersion}}</td>
                        <td>{{$season->updated_at}}</td>

                    </tr>

                    @endforeach

                </table>

            </div><!--/.split-box -->

        </div><!--/.col-md-6.center-block -->

        <div class="col-md-6">
            <!-- http://getbootstrap.com/components/#btn-dropdowns-split -->

            <div class="split-box center-block">

                <a href="{{URL::to('/home')}}"><button type="button" class="btn btn-primary">Manage your database!</button></a>

            </div><!--/.split-box -->

        </div><!--/.col-md-6 -->

    </div><!--/.row -->

</div><!-- /.jumbotron -->




@endsection
