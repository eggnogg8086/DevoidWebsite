<?php include '../php/top_of_page.php';?>

<!DOCTYPE html>
<html lang="en" style="height: 100vh;">
<head>
    <link rel="icon" type="image/x-icon" href="../images/devoidIcon.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/characters.css">
    <link rel="stylesheet" href="../css/navbar.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <title>Characters</title>
</head>
<?php include '../php/analytics.php';?>
<body>
    <header>
        <?php include '../php/view_components/navbar.php';?>
    </header>
    <main>
        
        <large-banner>Characters</large-banner>

        <card-container>
            <card>
                <img src="../images/charKim.png" alt="">
                <inner-card>
                    <title>KIM</title>
                    <description>
                        Kim is the main protagonist who experiences the void. Fully supporting her president Elinor Rosa, an advocate for equality and human rights, she dedicates her time to be of service through sharing information about problems that need to be addressed in her community especially that the elections are nearing. 
                    </description>
                </inner-card>
            </card>
            <card>
                <img src="../images/charMima.png" alt="">
                <img src="../images/charMari.png" alt="">
                <inner-card>
                    <title>Mari and Mima</title>
                    <description>
                        Kim’s best friends that share the same ideas with her. Mari is more soft-spoken about what she believes in and Mima is much more vocal about it, balancing out Kim in fortifying her ideas.	
                    </description>
                </inner-card>
            </card>
            <!-- <card>
                <img src="../images/charMichael.png" alt="">
                <inner-card>
                    <title>Michael Viray</title>
                    <description>
                        A software engineer whose family’s career focused on journalism in the 70’s and who have been victims of the media blackout and censorship of the criticisms toward Lando Ginto, Mariano Ginto’s father who had been the president during that time. He was a user who has spent a lot of time in the Void, and had seen all the changes that occurred within the platform, making him apathetic to what he’s seeing.
                    </description>
                </inner-card>
            </card> -->
        </card-container>



    </main>
    
</body>
</html>