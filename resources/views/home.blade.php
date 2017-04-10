@extends('master')

@section('content')

<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">

    <div class="row">

        <div class="col-md-6 line-down">

            <div class="split-box center-block">

                <div class="form-group">

                    <label for="inputXml">File input</label>
                    <input type="file" id="inputXml">

                    <p class="help-block">
                        Upload your XML here!
                    </p>

                    <!-- Split button -->
                    <div class="btn-group">

                        <input type="submit" class="btn btn-warning" value="Upload and Sync" />

                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>

                        </button>

                        <ul class="dropdown-menu">

                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>

                        </ul>

                    </div><!--/.btn-group -->

                    <p class="help-block">
                        Select a season (<span class="caret"></span>) or just press for the latest!
                    </p>

                </div><!--/.form-group -->

            </div><!--/.split-box -->

        </div><!--/.col-md-6.center-block -->

        <div class="col-md-6">
            <!-- http://getbootstrap.com/components/#btn-dropdowns-split -->

            <div class="split-box center-block">

                <!-- Split button -->
                <div class="btn-group">

                    <button type="button" class="btn btn-success">Download XML</button>

                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>

                    </button>

                    <ul class="dropdown-menu">

                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>

                    </ul>

                </div><!--/.btn-group -->

                <p class="help-block">
                    Select a season (<span class="caret"></span>) or just press for the latest!
                </p>

            </div><!--/.split-box -->

        </div><!--/.col-md-6 -->

    </div><!--/.row -->

</div><!-- /.jumbotron -->




@endsection
