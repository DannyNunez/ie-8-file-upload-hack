<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Project name</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    <form id="salesPromo" name=”form” action="http://www.ieupload.local/validate-file.php" method="POST" enctype="multipart/form-data">

            <label>Upload File</label>
            <input type="file" id="uploadfile1" name="uploadfile1">
            <span class="help-block">(JPG, PNG, or GIF and 1MB or less, please)</span>
            <iframe id='my_iframe' name='my_iframe' src=""></iframe>

    </form>

</div>

<!-- Le javascript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery-1.8.0.js"></script>
<script src="/js/bootstrap.js"></script>
<script type="text/javascript" language="javascript">

    $(document).ready(function(){

        $( "#uploadfile1" ).change(function(event) {

            document.getElementById('salesPromo').target = 'my_iframe';
            document.getElementById('salesPromo').submit();
            setTimeout(
                function()
                {
                    var result = $('#my_iframe').contents().find('#txt1').val();

                    if(result == 1){
                        alert('success');
                    }else{
                        alert('fail');
                    }


                }, 1000
            );

        });

    });



</script>
</body>
</html>