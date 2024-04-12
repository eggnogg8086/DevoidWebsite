<?php include 'php/top_of_page.php';?>

<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="../iteration2/images/devoidIcon.svg">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>deVOID</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/common.css">
</head>
<?php include 'php/analytics.php';?>
<body>
    <img loading="lazy" class="pinkEntity entity" id="pinkEntity1" src="../iteration2/images/entityPink.webp" alt="pinkEntity">
    <img loading="lazy" class="purpleEntity entity" id="purpleEntity1" src="../iteration2/images/entityPurple.webp" alt="purpleEntity">
    <img loading="lazy" class="sunsetEntity entity" id="sunsetEntity1" src="../iteration2/images/entitySunset.webp" alt="sunsetEntity">
    <header>
        <?php include 'php/view_components/navbar-homepage.php';?>
    </header>

    <main>
        <contents>
            <chunk>
                <img class="devoidLogoMAIN" src="../iteration2/images/devoidLogo.svg" alt="devoidLogo">
                <p>Witness a young girl's journey as she navigates through the divides in the parasocial space, fueled by election-related misinformation in an emulation of the digital reality.</p>
                <div class="main-buttons">
                    <a href="summary">
                        <button>summary</button>
                    </a>
                    <a href="novel/act1">
                        <button>Read Novel</button>
                    </a>
                    <a href="characters">
                        <button>characters</button>
                    </a>
                </div>
            </chunk>
            <chunk>
                <p>The 2022 Presidential Elections made way for social media, especially Facebook, to cultivate misinformation and weaponize their algorithms to further spread this. DeVOID aims to create a space to inform and discuss this through these articles</p>
                
                <cardholder>
                    <card>
                        <inner-card>
                            <card-title>THE VOID AS THE MIRROR TO REALITY</card-title>
                            <card-description>
                              deVOID creates a fictional digital world where one can navigate that space like a social media network universe with planet-like spheres called Entities. The Void is the social media network and the Entities are the profiles and social circles The base of general knowledge is 
                            </card-description>
                            <a href="mirror/">
                                <button class="card-button">read</button>
                            </a>
                        </inner-card>
                    </card>
                    <card>
                        <inner-card>
                            <card-title>MISINFORMATION DURING THE 2022 ELECTIONS: A GIST</card-title>
                            <card-description>
                                Fake news is not an entirely new concept, especially when it comes to political matters. Given the state of the Philippines and its history with elections, it is increasingly so that misinformation prevails,and even now with troll farms being incentivized to create fake news 
                            </card-description>
                            <a href="misinformation/">
                                <button class="card-button">read</button>
                            </a>
                        </inner-card>
                    </card>
                    <card>
                        <inner-card>
                            <card-title>FOR FUTURE VOTERS</card-title>
                            <card-description>
                                It's crazy how both in real life and online, our country is tangled up in this web of misinformation. It feels like this giant monster we can't seem to defeat, right? It's overwhelming to think about how the system is failing to keep things truthful, and how many people are being misled 
                            </card-description>
                            <a href="future/">
                                <button class="card-button">read</button>
                            </a>
                        </inner-card>
                    </card>

                </cardholder>
                <a href="articles/">
                    <button class="card-button button-articles">see more</button>
                </a>
            </chunk>
        </contents>
    </main>

    <script>
        document.body.style.setProperty('--document-height', document.body.offsetHeight*-1+"px");
        window.addEventListener('scroll', () => {
        document.body.style.setProperty('--scroll', window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
        }, false);
    </script>
</body>
</html>