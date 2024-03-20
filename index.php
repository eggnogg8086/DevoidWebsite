<?php include 'php/top_of_page.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>deVOID</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/homepage.css">
    <style id="customStyles">
    .entity{
      transform: translateY(0);
    }
  </style>
</head>
<body>
    <img loading="lazy" class="pinkEntity entity" id="pinkEntity1" src="../iteration1/images/entityPink.webp" alt="pinkEntity">
    <img loading="lazy" class="purpleEntity entity" id="purpleEntity1" src="../iteration1/images/entityPurple.webp" alt="purpleEntity">
    <img loading="lazy" class="sunsetEntity entity" id="sunsetEntity1" src="../iteration1/images/entitySunset.webp" alt="sunsetEntity">
    <header>
        <?php include 'php/view_components/navbar-homepage.php';?>
    </header>

    <div class="body-container">
        <main>
            <div class="main-container">
                <div class="main-content">
                    <img class="devoidLogoMAIN" src="../iteration1/images/devoidLogo.svg" alt="devoidLogo">
                    <p>Witness a young girl's journey as she navigates through the divides in the parasocial space, fueled by election-related misinformation in an emulation of the digital reality.</p>
                    <a href="novel/act1">
                        <button class="novelBtn">Read Novel</button>
                    </a>
                </div>
                <div class="main-content">
                    <p>The 2022 Presidential Elections made way for social media, especially Facebook, to cultivate misinformation and weaponize their algorithms to further spread this.</p>
                    <a href="misinformation/">
                        <button class="misinformationBtn">Read About It</button>
                    </a>
                </div>
            </div>
        </main>
        <footer></footer>
    </div>
    <script>
        const customStyles = document.getElementById('customStyles');
        const styleSheet = customStyles.sheet;

        let ruleIndex = -1;
        for (let i = 0; i < styleSheet.cssRules.length; i++) {
            if (styleSheet.cssRules[i].selectorText === '.entity') {
            ruleIndex = i;
            break;
            }
        }

        addEventListener("scroll", (event) => {
            let movement = window.scrollY*-2.05;
            styleSheet.cssRules[0].style.transform = "translateY(" + movement + "px)";
        });

    </script>
</body>
</html>