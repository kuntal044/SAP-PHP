<section class="info_section ">
    <div class="container">
      <div class="info_container">
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h4 class="">
              Follow on
            </h4>
          </div>
          <div class="social_box">
            <a href="https://www.youtube.com/channel/UCXTr_ZVSEX1utCb7RRQi4Kw" target="_blank">
              <img src="../../images/youtube.png" alt="YouTube" id="yt">
            </a>
            <a href="https://www.instagram.com/shahabhayphotographer/" target="_blank">
              <img src="../../images/instagram.png" alt="InstaGram" id="insta">
            </a>
              <a href="https://www.facebook.com/abhayshahnvs" target="_blank">
                <img src="../../images/fb.png" alt="FaceBook" id="fb">
              </a>
            </div>
        </div>
      </div>
    </div>
  </section>

<section class="container-fluid footer_section">
  <div class="container">
    <p>
      Developed By <a href="https://kalashshah19.github.io/SAP/kalash.html" class="kalash"> Kalash Shah </a>
    </p>
  </div>
</section>

<script>
    var path = window.location.pathname;
    var page = path.split("/").pop();
    // alert(page);

    if(page=="index.php") {
        document.getElementById("yt").src="images/youtube.png";
        document.getElementById("insta").src="images/instagram.png";
        document.getElementById("fb").src="images/fb.png";
    }
    else if(page=="register.php") {

    }
    else if(page=="login.php") {
        
    }
    else if(page=="about.php") {
        
    }
    else if(page=="portfolio.php") {
       
    }
    else if(page=="feedbacks.php") {
        
    }
    else if(page=="contact.php") {
        
    }
</script>