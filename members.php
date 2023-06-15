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
        <a href="members.php" class="active">Members</a>
        <div class="title">UKM DEVELOPING</div>
        <a href="gallery.php">Gallery</a>
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
    <main id="members">
      <div class="gallery-title -title" style="font-weight: 800; font-size: 1.5rem;">
        OUR MEMBERS
      </div>
      <div class="teacher">
        <div class="cards">
          <div class="card-dsc">
            <div class="card-h1 -title">Your Name Here</div>
            <div class="card-h2">Teacher</div>
          </div>
          <div class="card-img">
            <img src="https://picsum.photos/180/240?random=56">
          </div>
        </div>
      </div>
      <div class="teams">
        <div class="cards">
          <div class="card-dsc">
            <div class="card-h1 -title">Your Name Here</div>
            <div class="card-h2">Leader</div>
          </div>
          <div class="card-img">
            <img src="https://picsum.photos/180/240?random=12">
          </div>
        </div>
      </div>
      <div class="members">
        <div class="img-grid">
          <?php for($i = 0; $i < 10; $i++):?>
          <div class="cards">
              <div class="card-dsc">
                  <div class="card-h1 -title">Your Name Here</div>
                  <div class="card-h2">Member</div>
              </div>
              <div class="card-img">
              <img src="https://picsum.photos/180/240?random=<?= $i+1; ?>">
              </div>
          </div>
          <?php endfor;?>
        </div>
      </div>
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