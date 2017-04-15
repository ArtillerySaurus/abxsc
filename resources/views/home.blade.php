@extends('master')

@section('content')

<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">

    <div class="row">

        @if($errors->any())

        <div class="alert alert-danger" role="alert">

            {{$errors->first()}}

        </div>

        @endif

        <div class="col-md-6 line-down">

            <div class="split-box center-block">

                <form action="{{URL::to('/upload')}}" method="POST" enctype="multipart/form-data" class="upload-form"> 

                    {{ csrf_field() }}

                    <div class="form-group">

                        <label for="inputXml">File input</label>
                        <input type="file" name="input-xml" id="input-xml">

                        <p class="help-block">
                            Upload your XML here!
                        </p>

                        <div class="input-group">

                            <select name="selected-season" class="form-control">

                                @foreach ($seasons as $season)

                                <option value="{{$season->number}}">S{{$season->number}}: {{$season->name}}</option>

                                @endforeach

                            </select>

                            <span class="input-group-btn">

                                <input type="submit" name="upload-database" class="btn btn-warning" value="Upload and Sync" />

                            </span><!-- /.input-group-btn -->

                        </div><!-- /.input-group -->

                        <p class="help-block">
                            Select a season (<span class="caret"></span>) or just press for the latest!
                        </p>

                    </div><!--/.form-group -->

                </form><!--/.upload-form -->

            </div><!--/.split-box -->

        </div><!--/.col-md-6.center-block -->

        <div class="col-md-6">
            <!-- http://getbootstrap.com/components/#btn-dropdowns-split -->

            <div class="split-box center-block">

                <div class="input-group">

                    <select name="selected-season" class="form-control">

                        @foreach ($seasons as $season)

                        <option value="{{$season->number}}">S{{$season->number}}: {{$season->name}}</option>

                        @endforeach

                    </select>

                    <span class="input-group-btn">

                        <input type="submit" name="upload-database" class="btn btn-success" value="Download XML" />

                    </span><!-- /.input-group-btn -->

                </div><!-- /.input-group -->

                <p class="help-block">
                    Select a season (<span class="caret"></span>) or just press for the latest!
                </p>

            </div><!--/.split-box -->

        </div><!--/.col-md-6 -->

    </div><!--/.row -->

</div><!-- /.jumbotron -->




@endsection
