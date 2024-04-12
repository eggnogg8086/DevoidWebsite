<?php include '../php/top_of_page.php';
$act = 2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="../iteration2/images/devoidIcon.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/novel.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>deVOID ||| ACT2</title>
</head>
<?php include '../php/analytics.php';?>
<body>
    <header>
        <?php include '../php/view_components/navbar.php';?>
    </header>
    <div class="body-container">
        <main>
            <?php include '../php/view_components/action-bar.php';?>

            <div class="comicPages">
                <img id="PAGE11" class="page" src="..\novel\pages\PAGE11.jpg" alt="page 11">
                <img id="PAGE12" loading="lazy" class="page" src="..\novel\pages\PAGE12.jpg" alt="page 12">
                <img id="PAGE13" loading="lazy" class="page" src="..\novel\pages\PAGE13.jpg" alt="page 13">
                <img id="PAGE14" loading="lazy" class="page" src="..\novel\pages\PAGE14.jpg" alt="page 14">
                <img id="PAGE15" loading="lazy" class="page" src="..\novel\pages\PAGE15.jpg" alt="page 15">
                <img id="PAGE16" loading="lazy" class="page" src="..\novel\pages\PAGE16.jpg" alt="page 16">
                <img id="PAGE17" loading="lazy" class="page" src="..\novel\pages\PAGE17.jpg" alt="page 17">
                <img id="PAGE18" loading="lazy" class="page" src="..\novel\pages\PAGE18.jpg" alt="page 18">
                <img id="PAGE19" loading="lazy" class="page" src="..\novel\pages\PAGE19.jpg" alt="page 19">
                <img id="PAGE20" loading="lazy" class="page" src="..\novel\pages\PAGE20.jpg" alt="page 20">
            </div>
        </main>
    </div>

</body>
</html>