<!DOCTYPE html>
<html>
<head>

    <meta charset="=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivia Bunga</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/index2.css">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet">


</head>
<body>
    
    <section class="index">
        <div class="index-2">
            <h1 class="akhir"> HI! <span> WELCOME,</span></h1>
            <?php $username = $_POST["nama"]; ?>

            <div id="tampilan">
            <p class="desk2" style=""> <?php echo $username;?> </p>
            </div>  

            <div class="button">
                <a href="newproject.html">MASUK -></a>
            </div>
        </div>


    </section>

</body>
