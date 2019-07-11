<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="en-IE">
    <meta name="HandheldFriendly" content="true">

    <link rel="shortcut icon" href="">

    <meta name="description"
          content="">
    <meta name="keywords" content="">
    <meta name="geo.region" content="IE">

    <title>Awesome File Uploader</title>

    <script src="{{url('js/base.js')}}"></script>

    <link rel="stylesheet" href="{{url('packages/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">

</head>
<body>

<div class="row m-5">
    <div class="col-md-4 offset-md-4">
        <h1>Hello</h1>

        <form class="box" method="post" action="upload" enctype="multipart/form-data">

            <div class="custom-file" id="customFile">
                <input id="fileinput" class="custom-file-input" type="file" name="image"
                       aria-describedby="fileHelp" accept="image/*" value="">

                <label class="custom-file-label" for="fileinput">
                    Select file...
                </label>
            </div>

            <button type="submit" class="btn btn-outline-secondary btn-block mt-4">Submit</button>
        </form>

    </div>

</div>

</body>
</html>