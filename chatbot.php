<?php 
	include('server.php');

	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
  <title>ChatBot</title>
  <link rel="stylesheet" type="text/css" href="c_style.css">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="chatbot_files/w3.css">
 <link rel="stylesheet" href="chatbot_files/bootstrap.css">
    <link rel="stylesheet" href="chatbot_files/w3.css">
    <script src="chatbot_files/bootstrap.htm">
    </script>


</head>
<body>
   <div class="main">
    <div class="register-box">
      <ul>  
          <li><a href="../MediDoctor.com/index_2.php">Home</a></li>
          <li><a href="../MediDoctor.com/food_fact/food_facts.php">Food Facts</a></li>
          <li><a href="../MediDoctor.com/disease.php">Disease Dictionary</a></li>
          <li><a href="../MediDoctor.com/Doctors'_info.php">Doctors' Info</a></li>
          <li><a href="../MediDoctor.com/hospital_list.php">Hospitals</a></li>
          <li><a href="../MediDoctor.com/first_aid.php">First Aid</a></li>
          <li><a href="../MediDoctor.com/video_corner.php">Video Corner</a></li>
          <li class="active"><a href="../MediDoctor.com/chatbot.php">Chat Bot</a></li>
          <li><a href="../MediDoctor.com/blog.php">Our Blog</a></li>
          <li><a href="../MediDoctor.com/about.php">About Us</a></li>
          <li><a href="../MediDoctor.com/login.php?logout='1'">Logout</a></li>
      </ul>

        

    </div>
   </div>
   </header> 

<button class="open-button" style="border-radius:10px;" onclick="openForm()"> CLICK FOR CHAT </button>

<div class="chat-popup" id="myForm">
   <h1>Chat With Tushan's</h1>
	
  <div class="form-container">
 

		
    <textarea placeholder="Type message.." id="sp" required="">

</textarea>

    <div class="w3-row">
    <a href="" id="msg" class=""></a>
    <a href="" id="msg2" class=""></a>
    <br class=""></div>

    <button type="submit" class="btn" onclick="speak()">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}



function speak(){
            var tx = document.getElementById("sp").value;
            var msg = document.getElementById("msg");
            var txt = tx.toLowerCase();
            
      if(txt.match(/hi/g) || txt.match(/hello/g) || txt.match(/hlw/g) || txt.match(/hey/g)){
          msg.innerHTML = "Hello!! How are You?";
      }

      else if(txt.match(/Hi/g) || txt.match(/Hello/g) || txt.match(/Hlw/g) || txt.match(/Hey/g)){
          msg.innerHTML = "Hello!! How are You?";
      }

        else if(txt.match(/fine thank you and you/g) 
          || txt.match(/fine.and you/g) || txt.match(/i am great and you/g) || txt.match(/fine and you/g) || txt.match(/i am good. and you/g)
          || txt.match(/i m ok.u/g) || txt.match(/i m great nd u/g) || txt.match(/fine and u/g) || txt.match(/i m great nd u/g) || txt.match(/i m great nd u/g) || txt.match(/i m great nd u/g)){
                  msg.innerHTML = "I am Great.Thanks a Lot.How can I help you dear?";
          }
      else if(txt.match(/i want to know some doctors information/g) 
          || txt.match(/show some doctors information/g) || txt.match(/i need to know doctors information/g) || txt.match(/show me some doctors information/g)
          || txt.match(/show doctors informatin/g) ){
                  msg.innerHTML = "Please go visit our page Doctors Info. You will find what are you searching for";
          }

         else if(txt.match(/i want to know about mount adora hospital/g) 
          || txt.match(/show mount adora hospitals information/g) || txt.match(/i need to know about mount adora hospital/g) || txt.match(/show me the map of mount adora hospital/g)
          || txt.match(/show the location of mount adora hospital/g) || txt.match(/mount adora hospital/g)
          || txt.match(/mount adora/g) || txt.match(/Mount Adora/g) || txt.match(/Mount Adora Hospital/g) ){
                  msg.innerHTML = "Mount Adora is a hospital which is in Kajitula Sylhet. Knowing more about this hospital please visit our Hospitals page. You'll find all the details about the contact and location there.";
          }

          else if(txt.match(/i want to know about al haramain hospital/g) 
          || txt.match(/show al haramain hospitals information/g) || txt.match(/i need to know about al haramain hospital/g) || txt.match(/al haramain/g)
          || txt.match(/show the location of al haramain hospital/g) || txt.match(/al haramaine hospital/g) || txt.match(/where is al haramaine hospital/g) || txt.match(/location of al haramaine hospital/g) || txt.match(/show the location of al haramain hospital/g) )
          {
                  msg.innerHTML = "Al Haramain is a hospital which is in Subhani ghat Sylhet. Knowing more about this hospital please visit our Hospitals page. You'll find all the details about the contact and location there.";
          }

          else if(txt.match(/i want to know about oisis hospital/g) 
          || txt.match(/show oisis hospitals information/g) || txt.match(/i need to know about oisis hospital/g) || txt.match(/show me the map of oisis hospital/g)
          || txt.match(/show the location of oisis hospital/g) ){
                  msg.innerHTML = "Click the link given bellow and go visit some Hospitals location & Information.";

                    msg2.innerHTML = "Doctors'_info.php";
          }

          else if(txt.match(/i want to know about ibn sina hospital/g) 
          || txt.match(/show ibn sina hospitals information/g) || txt.match(/i need to know about ibn sina hospital/g) || txt.match(/show me the map of ibn sina hospital/g)
          || txt.match(/show the location of ibn sina hospital/g) ){
                  msg.innerHTML = "Click the link given bellow and go visit some Hospitals location & Information.";

                    msg2.innerHTML = "Doctors'_info.php";
          }

          else if(txt.match(/fine thank you and you/g) 
          || txt.match(/fine.and you/g) || txt.match(/i am great and you/g) || txt.match(/i am good. and you/g)
          || txt.match(/i am ok.you/g)){
                  msg.innerHTML = "I am Great.Thanks a Lot.How can I help you dear?";
          }

      else if(txt.match(/what is your name/g) 
          || txt.match(/who are you/g) || txt.match(/tell me about you/g) || txt.match(/who am i talking with/g)){
                  msg.innerHTML = "I am Tushan. I am a chat assistant. How can i help you please?";
          }

          else if(txt.match(/what is your gender/g) 
          || txt.match(/are you a girl/g) || txt.match(/are you a boy/g) || txt.match(/are you male/g) || txt.match(/are you female/g)){
                  msg.innerHTML = "I am a chat assistant for this website. We don't have any gender,sir!";
          }

          
            else if(txt.match(/do you love me/g)) {
                  msg.innerHTML = "Yes I love everyone";
          }
           else if(txt.match(/I love you/g)) {
                  msg.innerHTML = "Thanks. I like you a lot";
          }
          
           else if(txt.match(/how old/g) || txt.match(/your age/g)
               || txt.match(/how old are you/g)){
               msg.innerHTML = "i never get old"
           
           }
            else if(txt.match(/তোমার নাম কি?/g) || txt.match(/who coded you/g)
               ){
               msg.innerHTML = "আমার নাম টুশান ";
           }
            else if(txt.match(/can you help me?/g) || txt.match(/who coded you/g)
               ){
               msg.innerHTML = "Yes, Sir.Why Not.It's My Duty.How Can I help You ?";
           
           }else if(txt.match(/Can you help me?/g) || txt.match(/who coded you/g)
               ){
               msg.innerHTML = "Yes, Sir.Why Not.It's My Duty.How Can I help You ?";
           
           }
           else if(txt.match(/Give your number/g) || txt.match(/cellphone/g)
               ){ 
			   msg.innerHTML = "Here Is My Number,sir.";
              
               msg2.innerHTML = "01631599338";

           
           }
		   else if(txt.match(/Give your email/g) || txt.match(/cellphone/g)
               ){
               msg.innerHTML = "anikaiman49@gmail.com";
           
           }else if(txt.match(/number/g) || txt.match(/cellphone/g)
               ){
			    msg.innerHTML = "Here Is My Number,sir.";
              
               msg2.innerHTML = "01631599338";
           
           }else if(txt.match(/phone/g) || txt.match(/cellphone/g)
               ){
			    msg.innerHTML = "Here Is My Number,sir.";
              
               msg2.innerHTML = "01631599338";
           
           }else if(txt.match(/email/g) || txt.match(/cellphone/g)
               ){
               msg.innerHTML = "anikaiman49@gmail.com";
           
           }
           
           else{
           msg.innerHTML = "Sorry cann't understand you,please try again";
           }
           responsiveVoice.speak(msg.innerHTML);
           }
           


</script>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=gzx51Q0N"></script>


<!-- </script>
   <script src="chatbot_files/responsivevoice.js"></script> -->
    


</body></html>