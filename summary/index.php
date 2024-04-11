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
                    <title>ACT 3</title>
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
                    <title>ACT 4</title>
                    <description>Hanging out with friends Mima and Mari, Kim shops for outfits for the final presidential rally just before the elections. During a video call on her favorite social media app, Eivod, they discuss Mari's date with a man supporting their opposing presidential candidate, Mariano Ginto, the son of a notorious dictator. As Kim falls asleep during the call, she enters a dark void guided by her personal guardian, exploring the base of general knowledge, guardians with various responsibilities to enhance user experience, and personal content curation though entities.</description>
                </inner-card>
                <a href="../novel/act1">
                    <button class="card-button">READ ACT 1</button>
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