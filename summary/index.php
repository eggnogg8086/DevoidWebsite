<?php include '../php/top_of_page.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/summary.css">
    <link rel="stylesheet" href="../css/navbar.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

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
            Days before the final presidential rally, a young girl named Kim makes her way into the digital void catered for her by her favorite social media platform and finds herself navigating through mountains of content, from her interest in animals, art, social responsibility, to the fake news surrounding her favorite presidential candidate in time for the elections.
        </synopsis>
        <!-- <card>
            
            
            <inner-card>
                <title>ACT 1</title>
                <description>Hanging out with friends Mima and Mari, Kim shops for outfits for the final presidential rally just before the elections. During a video call on her favorite social media app, Eivod, they discuss Mari's date with a man supporting their opposing presidential candidate, Mariano Ginto, the son of a notorious dictator. As Kim falls asleep during the call, she enters a dark void guided by her personal guardian, exploring the base of general knowledge, guardians with various responsibilities to enhance user experience, and personal content curation though entities.</description>
            </inner-card>
            <a href="../novel/act1">
                <button class="card-button">READ ACT 1</button>
            </a>
        </card> -->

    <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <card>
                
                <img src="../images/pink.svg" alt="">
                <img src="../images/WEBSITE SCRATCH PAD_entityPink.svg" alt="">
                <inner-card>
                    <title>ACT 1</title>
                    <description>Hanging out with friends Mima and Mari, Kim shops for outfits for the final presidential rally just before the elections. During a video call on her favorite social media app, Eivod, they discuss Mari's date with a man supporting their opposing presidential candidate, Mariano Ginto, the son of a notorious dictator. As Kim falls asleep during the call, she enters a dark void guided by her personal guardian, exploring the base of general knowledge, guardians with various responsibilities to enhance user experience, and personal content curation though entities.</description>
                </inner-card>
                <a href="../novel/act1">
                    <button class="card-button">READ ACT 1</button>
                </a>
            </card>
        </div>
        <div class="swiper-slide">
            <card>
                
                
                <inner-card>
                    <title>ACT 2</title>
                    <description>In the digital space, Kim and her friends find fake info about Elinor Rosa in rose-colored glass shards. She tracks it to an entity that resembles a chamber made of rose-colored glass, comprised by a group of Ginto supporters who spread false content, deface opponents, and claim it's freedom of expression. Kim learns reporting individually is usually ignored, so they now report as a group for action to be taken.</description>
                </inner-card>
                <a href="../novel/act1">
                    <button class="card-button">READ ACT 2</button>
                </a>
            </card>
        </div>
        <div class="swiper-slide">
            <card>
                
                
                <inner-card>
                    <title>ACT 3</title>
                    <description>The guardians and a council from the base of general knowledge tackle misinformation, reducing defaced imagery but facing new challenges from anonymous users spreading false content. Kim investigates a fabricated image showing armed supporters of her candidate in a school. Anecdotes reveal the truth: the school is makeshift in the mountains, where students asserting their rights are labeled rebels by the military. Kim emphasizes the importance of multiple sources to validate truth and encourages spreading this truth in the void.</description>
                </inner-card>
                <a href="../novel/act1">
                    <button class="card-button">READ ACT 3</button>
                </a>
            </card>
        </div>
        <div class="swiper-slide">
            <card>
                
                
                <inner-card>
                    <title>ACT 4</title>
                    <description>Kim discovers a disturbing image in the void, a symbol of supporters celebrating their right to spread content that they think is right regardless of it being factual or not. Her friends are divided: some help the guardians remove harmful users, while others protect the truth council. Kim confronts indifferent users who have accepted the chaos, realizing how the void has transformed from a place of unity to a battleground for political agendas. Together, they take action to suppress harmful elements, knowing it's just the beginning of a larger change needed in both the void and the real world.</description>
                </inner-card>
                <a href="../novel/act1">
                    <button class="card-button">READ ACT 4</button>
                </a>
            </card>
        </div>


    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    </div>

    </main>
    
</body>
<script>
    const swiper = new Swiper('.swiper', {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: 2,
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 3,
        slideShadows: false,
      },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    });
</script>
</html>