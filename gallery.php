<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/536e5435ef.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Neucha&family=Unbounded:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM DEVELOPING</title>
</head>
<body>
    <nav id="desktop">
        <a href="home.php#page1">Home</a>
        <a href="members.php">Members</a>
        <div class="title">UKM DEVELOPING</div>
        <a href="gallery.php" class="active">Gallery</a>
        <a href="about.php">About Us</a>
    </nav>
    <nav id="mobile">
        <div class="title">UKM DEVELOPING</div>
    </nav>
    <nav class="button" id="mobile">
        <i class="fa-solid fa-bars" id="navMenuButton"></i>
    </nav>
    <div class="mobile-nav" id="navMenuList">
        <i class="fa-solid fa-xmark" id="closeNav"></i>
        <div class="navitems">
            <a href="home.php">Home</a>
            <a href="members.php">Members</a>
            <a href="gallery.php">Gallery</a>
            <a href="about.php">About Us</a>
        </div>
    </div>
    <main id="gallery">
      <?php for($i=0; $i<5; $i++):?>
      <div class="gallery-card">
        <div class="gc-thumbnail"><img src="https://picsum.photos/200/240?random=<?= $i; ?>"></div>
        <div class="gc-desc">
          <div class="gc-title">Gallery <?= $i+1; ?></div>
          <div class="gc-sub">Meeting <?= $i+1; ?></div>
        </div>
      </div>
      <?php endfor; ?>
    </main>
    <script>
      let navMenuButton = document.getElementById("navMenuButton");
      let navMenuList = document.getElementById("navMenuList");
      let closeButton = document.getElementById("closeNav");
      let menuListShow = false;
      navMenuButton.addEventListener("click", () => {
        if (menuListShow) {
          navMenuList.style = "display: none;";

          navMenuListOffset.style.display = "none";
          document.body.style.overflow = "auto";
          menuListShow = !menuListShow;
        } else {
          navMenuList.style =
            "display: flex;";
          document.body.style.overflow = "hidden";
          navMenuListOffset.style.display = "block";
          menuListShow = !menuListShow;
        }
      });

      window.addEventListener("resize", () => {
        console.log("resize");
        navMenuList.style = "display: none;";
        document.body.style.overflow = "auto";
        menuListShow = false;
      });

      closeButton.addEventListener("click", () => {
          navMenuList.style = "display: none;";
          document.body.style.overflow = "auto";
      });

      let navMenuListOffset = document.getElementById("navMenuListOffset");

      navMenuListOffset.addEventListener("click", () => {
        if (menuListShow) {
          navMenuList.style = "display: none;";
          navMenuListOffset.style.display = "none";
          document.body.style.overflow = "auto";
          menuListShow = !menuListShow;
        }
      });
    </script>
</body>
</html>

<!-- pengajar, pengurus, anggota,
momen-momen belajar, apa aja yang dipelajari-->