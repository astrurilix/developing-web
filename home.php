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
        <a href="home.php#page1" class="active">Home</a>
        <a href="members.php">Members</a>
        <div class="title">UKM DEVELOPING</div>
        <a href="gallery.php">Gallery</a>
        <a href="about.php">About Us</a>
    </nav>
    <nav id="mobile">
        <a href="#page1">
            <div class="title">UKM DEVELOPING</div>
        </a>
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
    <main id="home">
        <div id="page1">
            <h1>UKM DEVELOPING</h1>
            <h4>SOEGIJAPRANATA CATHOLIC UNIVERSITY</h4>
            <p>Community who are passionate about <span>Programming</span>.</p>
            <a href="#page2"><button class="home">Check Us Out</button></a>
        </div>
        <div id="page2">
            <div class="members">
                <a href="members.php">
                    <h4 class="-primary" style="font-weight:500; margin-bottom: 1rem;">OUR TEAMS</h4>
                </a>
                <div class="img-grid">
                    <div class="cards">
                        <div class="card-dsc">
                            <div class="card-h1 -title">Andre Kurniawan Pamudji, S.Kom, M.Ling.</div>
                            <div class="card-h2">Pengajar</div>
                        </div>
                        <div class="card-img">
                            <img src="img/pengajar/1.jpg">
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card-dsc">
                            <div class="card-h1 -title">Soen Anita Sanjaya</div>
                            <div class="card-h2">Ketua</div>
                        </div>
                        <div class="card-img">
                            <img src="https://picsum.photos/230/240?random=12">
                        </div>
                    </div>
                    <?php for($i = 0; $i < 6; $i++):?>
                    <div class="cards">
                        <div class="card-dsc">
                            <div class="card-h1 -title">Your Name Here</div>
                            <div class="card-h2">Anggota</div>
                        </div>
                        <div class="card-img">
                            <img src="https://picsum.photos/230/240?random=<?= $i; ?>">
                        </div>
                    </div>
                    <?php endfor;?>
                    <a href="members.php" class="more-card">
                        Check Our Members
                    </a>
                </div>
            </div>
            <div class="gallery">
                <a href="gallery.php">
                    <h4 class="-primary" style="font-weight:500;">WHAT WE DO <i class="fa-solid fa-angle-right" style="font-size: 1rem; opacity:30%;"></i></h4>
                </a>
                <div class="missions">
                    <div class="mission-1">
                        <i class="fa-regular fa-lightbulb"></i>
                        <h4>Innovate</h4>
                        <p>Helps student to innovate on any ideas</p>
                    </div>
                    <div class="mission-2">
                        <i class="fa-solid fa-code"></i>
                        <h4>Create</h4>
                        <p>Make your imagination to reality</p>
                    </div>
                    <div class="mission-3">
                        <i class="fa-regular fa-handshake"></i>
                        <h4>Teamwork</h4>
                        <p>Make something in a team enviroment</p>
                    </div>
                </div>
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