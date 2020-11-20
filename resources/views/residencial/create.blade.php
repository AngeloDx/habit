<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/wizad/apple-icon.png">
    <link rel="icon" type="image/png" href="images/wizad/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

</head>

<body style="overflow-x:hidden;">
<div class="image-container set-full-height" style="background-image: url('images/bg9.jpg')">
      <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="blue" id="wizardProfile">
                        <form  method="post" action="store" id="msg_form" autocomplete="off" enctype="multipart/form-data">
                          @csrf
                          <input type="text" name="nome" placeholder="introduza o nome"/>
                          <input type="file" name="icon" />



<input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Salvar' />

                        </form>




</body>


</html>
