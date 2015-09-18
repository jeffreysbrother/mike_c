<?php
$pageTitle = "media.php";
include('inc/header.php');
?>
      <div class="container">
      <div class="row">
      <div class="col-sm-3 col-md-5">
        <div class="audiobox">

          <h2>Music</h2>

          <!-- <p>Action</p>
          <audio src="audio/Action.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio> -->
          <p>Fantasy Adventure</p>
          <audio src="audio/Fantasty_Adventure.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <p>Dramatic</p>
          <audio src="audio/Dramatic.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <p>Thematic Medley</p>
          <audio src="audio/Thematic_Medley.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <p>Indie Flick</p>
          <audio src="audio/Indie_Flick.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <!-- <p>Love Theme</p>
          <audio src="audio/Love_Theme.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio> -->

          <p>Romantic Comedy</p>
          <audio src="audio/RomCom.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <p>Quirky</p>
          <audio src="audio/Quirky.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <p>Ambient</p>
          <audio src="audio/Ambient.wav" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <p>Hopeful</p>
          <audio src="audio/Hopeful.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <p>No More Echoes (song)</p>
          <audio src="audio/No_More_Echoes_Mix_v2.mp3" controls>
            <p>Your browser does not support the <code>audio</code> element.</p>
          </audio>

          <br>
          <br>
        </div>

      </div>

      <div class="row">
      <div class="col-sm-3 col-sm-offset-4 col-md-4 col-md-offset-2">
        <div class="videobox">
          <h2>Video</h2>
          <br>
          <iframe class="img-responsive" width="400" height="260" src="https://www.youtube.com/embed/ebjJ_4R3no4" frameborder="0" allowfullscreen></iframe>

          <br>

          <iframe class="img-responsive" width="400" height="260" src="https://www.youtube.com/embed/kEcSPpkk-tg" frameborder="0" allowfullscreen></iframe>

          <!-- <br>

          <iframe class="img-responsive" width="400" height="260" src="https://www.youtube.com/embed/oBfd0siZiO0" frameborder="0" allowfullscreen></iframe> -->
        </div>
      </div>
    </div>


</div>

  <?php
  include('inc/footer.php');
  ?>

  <!-- the script below allows only one audio track to play at a given time -->
  <script type="text/javascript">
    $("audio").on("play", function() {
      $("audio").not(this).each(function(index, audio) {
          audio.pause();
      });
    });
  </script>
