<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="../../css/pages/gallery.css">
</head>

<body>

    <!-- Hero Section -->
    <section class="gallery-hero">

        <div class="hero-content">

            <div class="hero-subtitle">
                DETAILED CRAFTSMANSHIP
            </div>

            <h1>
                GALLERY
            </h1>

            <p>
                A curated showcase of precision tailoring, premium fabrics,
                and timeless craftsmanship.
            </p>

        </div>

    </section>


    <!-- Gallery Section -->
    <section class="gallery-section">

        <div class="gallery-grid">

            <?php

            // Use a root-relative path so the image resolves correctly
            // regardless of how this page is served/embedded.
            $galleryImages = [
                '../../images/gallery/Semi Precious Stone (1).png',
                '../../images/gallery/Semi Precious Stone (2).png',
                '../../images/gallery/Semi Precious Stone (3).png',
                '../../images/gallery/Semi Precious Stone (4).png',
                '../../images/gallery/Semi Precious Stone (5).png',
                '../../images/gallery/Semi Precious Stone (6).png',
                '../../images/gallery/Semi Precious Stone (7).png',
                '../../images/gallery/Semi Precious Stone (8).png',
                '../../images/gallery/Semi Precious Stone (9).png',
                '../../images/gallery/Semi Precious Stone (10).png',
                '../../images/gallery/Semi Precious Stone (11).png',
                '../../images/gallery/Semi Precious Stone (12).png',
                '../../images/gallery/Semi Precious Stone (13).png',
                '../../images/gallery/Semi Precious Stone (14).png',
                '../../images/gallery/Semi Precious Stone (15).png',
                '../../images/gallery/Semi Precious Stone (16).png',
                '../../images/gallery/Semi Precious Stone (17).png',
                '../../images/gallery/Semi Precious Stone (18).png',
                '../../images/gallery/Semi Precious Stone (19).png',
                '../../images/gallery/Semi Precious Stone (20).png',
                '../../images/gallery/Semi Precious Stone (21).png',
                '../../images/gallery/Semi Precious Stone (22).png',
                '../../images/gallery/Semi Precious Stone (23).png',
                '../../images/gallery/Semi Precious Stone (24).png',
                '../../images/gallery/Semi Precious Stone (25).png',
                '../../images/gallery/Semi Precious Stone (26).png',
                '../../images/gallery/Semi Precious Stone (27).png',
                '../../images/gallery/Semi Precious Stone (28).png',
                '../../images/gallery/Semi Precious Stone (29).png',
                '../../images/gallery/Semi Precious Stone (30).png',
                '../../images/gallery/Semi Precious Stone (31).png',
                '../../images/gallery/Semi Precious Stone (32).png',
                '../../images/gallery/Semi Precious Stone (33).png',
                '../../images/gallery/Semi Precious Stone (34).png',
                '../../images/gallery/Semi Precious Stone (35).png',
                '../../images/gallery/Semi Precious Stone (36).png',
                '../../images/gallery/Semi Precious Stone (37).png',
                '../../images/gallery/Semi Precious Stone (38).png',
                '../../images/gallery/Semi Precious Stone (39).png',
                '../../images/gallery/Semi Precious Stone (40).png',
                '../../images/gallery/Semi Precious Stone (44).png',
                '../../images/gallery/Semi Precious Stone (45).png',
                '../../images/gallery/Semi Precious Stone (46).png',
                '../../images/gallery/Semi Precious Stone (47).png',
                '../../images/gallery/Semi Precious Stone (48).png',
                '../../images/gallery/Semi Precious Stone (49).png',
                '../../images/gallery/Semi Precious Stone (50).png',
                '../../images/gallery/Semi Precious Stone (51).png',
                '../../images/gallery/Semi Precious Stone (52).png',
                '../../images/gallery/Semi Precious Stone (53).png',
                '../../images/gallery/Semi Precious Stone (54).png',
                '../../images/gallery/Semi Precious Stone (55).png',
                '../../images/gallery/Semi Precious Stone (56).png',
                '../../images/gallery/Semi Precious Stone (57).png',
                '../../images/gallery/Semi Precious Stone (58).png',
                '../../images/gallery/Semi Precious Stone (59).png',
                '../../images/gallery/Semi Precious Stone (60).png',
                '../../images/gallery/Semi Precious Stone (61).png',
                '../../images/gallery/Semi Precious Stone (62).png',
                '../../images/gallery/Semi Precious Stone (63).png',
                '../../images/gallery/Semi Precious Stone (64).png',
                '../../images/gallery/Semi Precious Stone (65).png',
                '../../images/gallery/Semi Precious Stone (66).png',
                '../../images/gallery/Semi Precious Stone (67).png',
                '../../images/gallery/Semi Precious Stone (68).png',
                '../../images/gallery/Semi Precious Stone (69).png',
            ];

            foreach ($galleryImages as $image):
            ?>
                <div class="gallery-item">
                    <img src="<?php echo $image; ?>" alt="Gallery Image">
                </div>
            <?php endforeach; ?>

        </div>

    </section>

</body>

</html>