<div id="main-left">
  <div class="section">
  <form id="contact-form" action="contact" method="post">	
    <h2>Contact me</h2>
    <div class="form-left">
      <p class="first field">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" />
      </p>
      <p class="field">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" />
      </p>
      <p class="field">
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" />
      </p>
    </div>
    <div class="form-right">																		
      <p class="field">
        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>
      </p>				
      <p class="submit">
        <button type="submit">Send</button>
      </p>
    </div>
  </form>
  </div>
</div>
<div id="main-right">
  <h2>Remember</h2>
    <p>I can also be reached on my phone:  +46735307028 or 
    on my email: <a href="mailto:purmonen@kth.se">purmonen@kth.se</a></p>
    <p>I should be available during any non-weird hour of the day.</p>
</div>

<script type="text/javascript">
  setFocus("name");  
  $(document).ready(function() {
    $('input, textarea').blur(function() {
      if (!$(this).val().trim()) {
        $(this).parent().removeClass().addClass('cancel');
      } else if ($(this).attr('id') == 'email') {
        var pattern = /^[^@ ]+@[^@ ]+$/;
        if (pattern.test($(this).val().trim())) {
          $(this).parent().removeClass().addClass('accept');
        } else {
          $(this).parent().removeClass().addClass('cancel');
        }
      } else {
        $(this).parent().removeClass().addClass('accept');
      }
    });
    
    $('form').submit(function() {
      var accept = true;
      $('input, textarea').each(function() {
        if (!$(this).parent().hasClass('accept')) {
          alert('Invalid input');
          accept = false;
          return false;
        }
      });
    if (!accept) {
      return false;
    }
    });
  });  
</script>