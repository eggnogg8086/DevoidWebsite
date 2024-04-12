<?php include '../php/top_of_page.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="../images/devoidIcon.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/summary.css">
    <link rel="stylesheet" href="../css/navbar.css">


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <title>Summary</title>
</head>
<?php include '../php/analytics.php';?>

<body>
    <header>
        <?php include '../php/view_components/navbar.php';?>
    </header>
    <main>

        <large-banner>SUMMARY</large-banner>
        
        <synopsis>
            Days before the final presidential rally, a young girl named Kim makes her way into the digital void catered
            for her by her favorite social media platform and finds herself navigating through mountains of content,
            from her interest in animals, art, social responsibility, to the fake news surrounding her favorite
            presidential candidate in time for the elections.
        </synopsis>

        <div class="swiper">
            <div class="swiper-wrapper">
                <card class="swiper-slide">
                    <img src="../images/green.webp" alt="">
                    <inner-card>
                        <title>ACT 4</title>
                        <description>Kim discovers a disturbing image in the void, a symbol of supporters
                            celebrating their right to spread content that they think is right regardless of it
                            being factual or not. Her friends are divided: some help the guardians remove harmful
                            users, while others protect the truth council. Kim confronts indifferent users who have
                            accepted the chaos, realizing how the void has transformed from a place of unity to a
                            battleground for political agendas. Together, they take action to suppress harmful
                            elements, knowing it's just the beginning of a larger change needed in both the void and
                            the real world.</description>
                    </inner-card>
                    <a href="../novel/act4">
                        <button class="card-button">READ ACT 4</button>
                    </a>
                </card>
                <card class="swiper-slide">
                    <img src="../images/entityPink.webp" alt="">
                    <inner-card>
                        <title>ACT 1</title>
                        <description>Hanging out with friends Mima and Mari, Kim shops for outfits for the final
                            presidential rally just before the elections. During a video call on her favorite social
                            media app, Eivod, they discuss Mari's date with a man supporting their opposing
                            presidential candidate, Mariano Ginto, the son of a notorious dictator. As Kim falls
                            asleep during the call, she enters a dark void guided by her personal guardian,
                            exploring the base of general knowledge, guardians with various responsibilities to
                            enhance user experience, and personal content curation though entities.</description>
                    </inner-card>
                    <a href="../novel/act1">
                        <button class="card-button">READ ACT 1</button>
                    </a>
                </card>
                <card class="swiper-slide">
                    <img src="../images/orange.webp" alt="">
                    <inner-card>
                        <title>ACT 2</title>
                        <description>In the digital space, Kim and her friends find fake info about Elinor Rosa in
                            rose-colored glass shards. She tracks it to an entity that resembles a chamber made of
                            rose-colored glass, comprised by a group of Ginto supporters who spread false content,
                            deface opponents, and claim it's freedom of expression. Kim learns reporting
                            individually is usually ignored, so they now report as a group for action to be taken.
                        </description>
                    </inner-card>
                    <a href="../novel/act2">
                        <button class="card-button">READ ACT 2</button>
                    </a>
                </card>
                <card class="swiper-slide">
                    <img src="../images/white.webp" alt="">
                    <inner-card>
                        <title>ACT 3</title>
                        <description>The guardians and a council from the base of general knowledge tackle
                            misinformation, reducing defaced imagery but facing new challenges from anonymous users
                            spreading false content. Kim investigates a fabricated image showing armed supporters of
                            her candidate in a school. Anecdotes reveal the truth: the school is makeshift in the
                            mountains, where students asserting their rights are labeled rebels by the military. Kim
                            emphasizes the importance of multiple sources to validate truth and encourages spreading
                            this truth in the void.</description>
                    </inner-card>
                    <a href="../novel/act3">
                        <button class="card-button">READ ACT 3</button>
                    </a>
                </card>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </main>

</body>
<script>
    var z = convertRemToPixels(60);

    console.log(z);
    const swiper = new Swiper('.swiper', {
        effect: "coverflow",
        grabCursor: false,
        centeredSlides: true,
        loop: true,
        slidesPerView: "auto",
        initialSlide: 1,
        spaceBetween: 0,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 1,
            slideShadows: false,
        },

        breakpoints: {
            // when window width is >= 320px
            960: {
                spaceBetween: -300,
                slidesPerView: 2,
            }
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


    function convertRemToPixels(rem) {    
        return rem * parseFloat(getComputedStyle(document.documentElement).fontSize);
    }

</script>

</html>