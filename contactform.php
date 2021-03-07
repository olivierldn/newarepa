    <?php
 $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
    
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

                //submit the form
                $userName = $_POST['name'];
                $userEmail = $_POST['email'];
                $messageSubject = $_POST['subject'];
                $message = $_POST['message'];

                $to = "blah@blah.com";
                $body = "";

                $body .=" From: ".$userName. "\r\n";
                $body .=" Email: ".$userEmail. "\r\n";
                $body .=" Message: ".$message. "\r\n";

                mail($to,$messageSubject,$body);
    

                $message_sent = true;

    }

}



<div class="container-contact">
          
          <form action="./contactform.php" method="POST">
            <div class="form-group">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="name" placeholder="jane@doe.com" tabindex="2" required>
          </div>
            <div class="form-group">
              <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
          </div>
            <div class="form-group">
              <label for="" class="form-label">Message</label>
              <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
          </div>
          <div>
            <button type="submit" class="btn">Send Message!</button>
          </div>
          </form>
        </div>
        
      </div>





    ?>

