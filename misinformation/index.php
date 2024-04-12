<?php include '../php/top_of_page.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="../images/devoidIcon.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/articles.css">
    <link rel="stylesheet" href="../css/misinformation.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <style>
        header{
            background: url(../images/coverMisinfo.jpg);
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <title>Misinformation</title>
</head>
<?php include '../php/analytics.php';?>
<body>
    <header>
    <?php include '../php/view_components/navbar.php';?>
    <large-banner>MISINFORMATION DURING<br>THE 2022 ELECTIONS: A GIST</large-banner>
    <div class="first-paragraph">
        Fake news is not an entirely new concept, especially when it comes to political matters.
        Given the state of the Philippines and its history with elections, it is increasingly so that misinformation prevails, and even now with troll farms 
        being incentivized to create fake news campaigns on social media, it continued a culture of dismissing the integrity of not only the elections, but Facebook’s
        accountability towards the spread of misinformation.
    </div>

    </header>
    <main>
    <div class="body-container">

        <content>
            <p>Disinformation is deliberately spreading false information for an agenda. Misinformation, more often than not, arises from the lack of awareness of information.</p>
            <p>While disinformation may have more severe consequences, Misinformation still harms the ingenuity of media and content shared in social media.</p> 
            <p>Given the emotions and upbringings from different ideologies and groups, it's more likely to affect a citizen's judgment when sharing their opinions about their favored candidates online.</p>
        </content>

        <seperator></seperator>
           
        <div class="misinformationFacebook">
            <div class="misinformationFacebook-container">
                <p>In the Philippines, Facebook has partnered with the following organizations for fact-checking </p>
                <div class="misinformationFacebook-partners">
                    <div class="misinformationFacebook-sites">
                        <a class="factcheckerLink" href="https://www.rappler.com/"> 
                            <img class="factcheckerLogo" src="../misinformation/images/rapplerLogo.png" alt="rapplerLogo">
                            <span class="factcheckerName">Rappler</span>
                        </a>
                    </div>
                    <div class="misinformationFacebook-sites">
                        <a class="factcheckerLink" href="https://www.afp.com/en/agency/afp-in-world/manilaphilippines"> 
                            <img class="factcheckerLogo" src="../misinformation/images/afpLogo.svg" alt="afpLogo">
                            <span class="factcheckerName">Agence France Presse (AFP) - Philippines</span>
                        </a>
                    </div>
                    <div class="misinformationFacebook-sites">
                        <a class="factcheckerLink" href="https://verafiles.org/"> 
                            <img class="factcheckerLogo" src="../misinformation/images/verafilesLogo.svg" alt="verafilesLogo">
                            <span class="factcheckerName">VERA Files</span>
                        </a>
                    </div>
                </div>

            <content>    
                <p>They help Facebook review flagged and reported content by users as false. Upon review, they take action by reducing false information visibility in the platform and show warning labels upon coming across these. They may also limit the reach of users or pages taking part in spreading these or make it less likely for them to monetize content.</p></div>
            </content>
        </div>

        <seperator></seperator>

        <content>
            <p>At the end of the day, Facebook is a social media platform through and through. It's designed to respond to engagement over accurate information. Emotionally-charged and opinionated statements is what helps it become a more personalized and successful business model. The more that people engage with content containing misinformation, the more that Facebook tailors these through your home screens regardless of whether you agree with it or not.</p>
            <p>This also means that Facebook is more likely to take action towards posts you flagged for false information if there are<span>a lot</span>of you who reported it.</p>
        </content>
            
        </main>
    </div>
    
</body>
</html>