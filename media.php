<?php
include('inc/header.php');
?>


    <div class="audio_wrapper">
      <h2>Recordings</h2>

      <p>Action</p>
      <audio src="audio/Action.mp3" controls>
        <p>Your browser does not support the <code>audio</code> element.</p>
      </audio>

      <p>Ambient</p>
      <audio src="audio/Ambient.wav" controls>
        <p>Your browser does not support the <code>audio</code> element.</p>
      </audio>

      <p>Baroque Pop</p>
      <audio src="audio/Baroque_Pop.wav" controls>
        <p>Your browser does not support the <code>audio</code> element.</p>
      </audio>

      <p>Dramatic</p>
      <audio src="audio/Dramatic.mp3" controls>
        <p>Your browser does not support the <code>audio</code> element.</p>
      </audio>

      <p>Fantasy Adventure</p>
      <audio src="audio/Fantasty_Adventure.mp3" controls>
        <p>Your browser does not support the <code>audio</code> element.</p>
      </audio>

      <p>Quirky</p>
      <audio src="audio/Quirky.mp3" controls>
        <p>Your browser does not support the <code>audio</code> element.</p>
      </audio>

      <p>Romantic Comedy</p>
      <audio src="audio/Romantic_Comedy.mp3" controls>
        <p>Your browser does not support the <code>audio</code> element.</p>
      </audio>

      <p>Thematic Medley</p>
      <audio src="audio/Thematic_Medley.mp3" controls>
        <p>Your browser does not support the <code>audio</code> element.</p>
      </audio>

      <p>Western Title</p>
      <audio src="audio/Western_Title.wav" controls>
        <p>Your browser does not support the <code>audio</code> element.</p>
      </audio>
    </div>


    <div class="video_wrapper">
      <h2>Videos</h2>

      <iframe width="400" height="260" src="https://www.youtube.com/embed/ebjJ_4R3no4" frameborder="0" allowfullscreen></iframe>

      <br>

      <iframe width="400" height="260" src="https://www.youtube.com/embed/kEcSPpkk-tg" frameborder="0" allowfullscreen></iframe>

      <br>

      <iframe width="400" height="260" src="https://www.youtube.com/embed/oBfd0siZiO0" frameborder="0" allowfullscreen></iframe>

      <br>



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

  </body>
</html>
