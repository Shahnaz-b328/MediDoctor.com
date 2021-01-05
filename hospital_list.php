<?php 
	include('server.php');

	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Doctors' Info</title>
  <link rel="stylesheet" type="text/css" href="d_information/style.css">
</head>
<body>
   <div class="main"  id="home">
    <div class="register-box">
       <ul>  
          <li><a href="../MediDoctor.com/index_2.php">Home</a></li>
          <li><a href="../MediDoctor.com/food_fact/food_facts.php">Food Facts</a></li>
          <li><a href="../MediDoctor.com/disease.php">Disease Dictionary</a></li>
          <li><a href="../MediDoctor.com/Doctors'_info.php">Doctors' Info</a></li>
          <li class="active"><a href="../MediDoctor.com/hospital_list.php">Hospitals</a></li>
          <li><a href="../MediDoctor.com/first_aid.php">First Aid</a></li>
          <li><a href="../MediDoctor.com/video_corner.php">Video Corner</a></li>
          <li><a href="../MediDoctor.com/chatbot.php">Chat Bot</a></li>
          <li><a href="../MediDoctor.com/blog.php">Our Blog</a></li>
          <li><a href="../MediDoctor.com/about.php">About Us</a></li>
          <li><a href="../MediDoctor.com/login.php?logout='1'">Logout</a></li>
      </ul>
 
    </div>
 

    </div>
  </header>


  <section class="who-we-are our-blog">
  <div class="main">
    <div class="heading">
      <h2>Hospitals List</h2>
      <p>You can find all the hospitals of Sylhet with the location and informations about them.</p>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.950369330034!2d91.86694921455056!3d24.899674484035422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552996e61da3%3A0x66854de5aefccb71!2sABC%20DOCTORS%20CHAMBER!5e0!3m2!1sen!2sbd!4v1583228179755!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/abc-diagnostic-center"><h4>ABC Diagnostic Center</h4>
        <P>Hawapara Road, Mirboxtula, Chowhatta, Sylhet 3100
        <br>Open Hours:10AM-7PM (Friday Closed)<br>Phone: 01993-176429</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.072600995271!2d91.86044851455047!3d24.895505084037495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552d09ea2f45%3A0x47c70d6c7b373ddb!2sAyesha%20Medicare!5e0!3m2!1sen!2sbd!4v1583229884828!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>      <div class="text-box">
        <a href="https://sylhetdirectory.com/ayesha-medicare"><h4>Ayesha Medicare </h4>
        <P>Lamabajar, Sylhet Sadar, Sylhet-3100
          <br>Bangladesh
          <br>Phone: +88 0821717222
        </P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7238.547396321321!2d91.88418464528274!3d24.88864410861435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x99709c37d07e5002!2sAl%20Noor%20Eye%20Clinic%20(Feco%20Center)!5e0!3m2!1sen!2sbd!4v1583228413862!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/al-nur-eye-clinic"><h4>Al-Nur Eye Clinic</h4>
        <P>House 7, Road 8, Block A Uposhahar, Sylhet Sadar, Sylhet 3100, Bangladesh <br> Phone: +88 0821715620, +88 01716753657</P>
      </a></div>
    </div>
  </div>
</section>

<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14475.704215642047!2d91.86461260980498!3d24.900503820545534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552846d59a11%3A0x2bcd3fdf1559881c!2sAnwar%20General%20Hospital%20%26%20Laparoscopic%20Surgery%20Centre!5e0!3m2!1sen!2sbd!4v1583231454630!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/al-hamad-medical-center"><h4>Al-Hamad Medical Center</h4>
        <P>House # Alahi A/6, Akhalia, Sunamganj Hwy, Sylhet sadar<br>Bangladesh<br>Phone: 01707-200047
        </P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57898.78255903793!2d91.80336033738239!3d24.90910227983198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1055de160aff019c!2sAruggo%20Clinic!5e0!3m2!1sen!2sbd!4v1583229004999!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <div class="text-box">
        <a href="https://sylhetdirectory.com/arogyo-poly-clinic"><h4>Arogyo Poly Clinic </h4>
        <P>10 Modhushohid, Sylhet Sadar, Sylhet 3100, <br>Bangladesh
        <br>Phone: +88 0821712311 +88 0821714744</P>
      </a></div>
    </div>


    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.7475252152667!2d91.86893951455075!3d24.906592184032185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d87744bb25%3A0x8e159b2ce45408cc!2sAziz%20Medical%20Center%2C%20Airport%20Rd%2C%20Sylhet!5e0!3m2!1sen!2sbd!4v1583230672066!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/aziz-medical-center/"><h4>Aziz Medical Center</h4>
        <P>Amborkhana, Sylhet Sadar, Sylhet 3100, Bangladesh
      <br>Phone: +88 0821718830</P>
      </a></div>
    </div>
  </div>
</section>


<section class="who-we-are our-blog">
  <div class="main">
    
    

    
  </div>
</section>


<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14475.704335472981!2d91.8646126041427!3d24.90050279878008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6b1f96f335fd514!2sCentral%20Hospital!5e0!3m2!1sen!2sbd!4v1583231682775!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/central-poly-clinic/"><h4>Central Poly Clinic</h4>
        <P>Hawa Para, Sylhet Sadar, Sylhet 3100
        <br> Bangladesh
        <br>Phone: +88 0821713838, +88 0821714849</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14475.704335472981!2d91.8646126041427!3d24.90050279878008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb0fcce8befa371fc!2sCity%20Poly%20Clinic%20And%20Shishu%20Hospital!5e0!3m2!1sen!2sbd!4v1583231994761!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/city-poly-clinic/"><h4>City Poly Clinic</h4>
        <P>Puran Medical Road, Stadium Market, Sylhet Sadar, Sylhet 3100 Bangladesh 
          <br>Phone: +88 0821715433</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14475.681569475026!2d91.85864736846239!3d24.900696917482502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11c963aeb91f04e6!2sCrescent%20Medical%20Service!5e0!3m2!1sen!2sbd!4v1583232072894!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/creacen-medical-centre"><h4>Crescen Hospital</h4>
        <P>Medical College Road, Sylhet Sadar, Sylhet 3100
        <br>Bangladesh
        <br>Phone: +88 0821719988</P>
      </a></div>
    </div>
  </div>
</section>


<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57888.79395604097!2d91.8331603376247!3d24.93037940920698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055031cb44649%3A0x66504fccc8c6f4aa!2sGCC%20Approved%20Medical%20Centre%20Associations!5e0!3m2!1sen!2sbd!4v1583248321249!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/g-c-c-approved-medical-centres-association"><h4>G.C.C. Approved Medical Centres Association</h4>
        <P>Hotel Polash Building (Ground Floor), Amberkhana, Sylhet Sadar, Bangladesh
        <br>Phone: +88 0821725822</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.9436172119504!2d91.85298061455055!3d24.899904784035236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505536bef4167b%3A0xa1b25858c42354b4!2sHealth%20Care%20Hospital%20%26%20Trauma%20Centre!5e0!3m2!1sen!2sbd!4v1583248400320!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/health-care-hospital-trauma-centre"><h4>Health Care Hospital & Trauma Centre</h4>
        <P>98 Kazalshah, New Medical Road,Sylhet Sadar
        <br> Bangladesh
        <br>Phone: +88 08212830792</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.185457855886!2d91.87534351455038!3d24.891654884039163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751ab2cd07daf7b%3A0x6b15e9357e82b123!2sIbn%20Sina%20Hospital%20Sylhet%20Ltd!5e0!3m2!1sen!2sbd!4v1583248578396!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/ibn-sina-hospital"><h4>Ibn Sina Hospital Sylhet Ltd</h4>
        <P>Subhanighat Point
        <br>Sylhet Sadar
        <br>Sylhet 3100, Bangladesh
        <br>Phone: +88 08212832735, </P>
      </a></div>
    </div>
  </div>
</section>

<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.5481953450217!2d91.85021241455087!3d24.913388284029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750553f0bb112bf%3A0x609ec1bb21b3706a!2sJalalabad%20Ragib-Rabeya%20Medical%20College%20%26%20Hospital!5e0!3m2!1sen!2sbd!4v1583248650956!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/jalalabad-ragib-rabeya-medical-college-hospital/"><h4>Jalalabad Ragib-Rabeya Medical College & Hospital</h4>
        <P>Sunamgonj Road, Pathantula, Sylhet Sadar. Sylhet 3100, Bangladesh</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.971018193299!2d91.85535941455056!3d24.898970184035765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055316095f603%3A0x58eec1a0a2385baa!2sJalalabad%20Clinic!5e0!3m2!1sen!2sbd!4v1583248704856!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/jalalabad-clinic"><h4>Jalalabad Clinic</h4>
        <P>Modhu Shahid, Sylhet Sadar, Sylhet 3100,
        <br> Bangladesh
        <br>Phone: +88 0821712460</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.063358214234!2d91.87631281455049!3d24.895820384037258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d253e52b5d%3A0x8b8ec35bb7cb0a54!2sMa-Moni%20Hospital!5e0!3m2!1sen!2sbd!4v1583248758805!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/mamoni-clinic"><h4>Mamoni Clinic </h4>
        <P> Puran Medical Road, Stadium Market, Sylhet Sadar
         <br>Bangladesh
         <br>Phone: +88 0821713211</P>
      </a></div>
    </div>
  </div>
</section>

<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.7731178506415!2d91.86346771455072!3d24.90571948403258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505525e46f59f9%3A0xe6590b867ab5bc31!2sMarie%20Stopes%20Clinic!5e0!3m2!1sen!2sbd!4v1583743453976!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>      <div class="text-box">
        <a href="https://sylhetdirectory.com/marie-stopes-clinic"><h4>Marie Stopes Clinic </h4>
        <P> Darshan Dewri, Ambarkhana Sunamgonj Bus Stand, Sylhet Sadar
          <br>Bangladesh<br>
          Phone: +88 0821710272, +88 01711995019</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7237.638708379441!2d91.8615150227184!3d24.9041427683028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff219b7e0431113c!2sMedi-Aid%20Diagnostic%20Center!5e0!3m2!1sen!2sbd!4v1583743539427!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>      <div class="text-box">
        <a href="https://sylhetdirectory.com/medi-aid-diagnostic-center"><h4>Medi-Aid Diagnostic Center</h4>
        <P> Modhu Shohid, New Medical Road, Sylhet Sadar, Sylhet 3100
          <br>Bangladesh <br> Phone: +88 0821815864</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930259.9958089025!2d90.56451844074496!3d24.387282379699478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d20ee15e70406ab!2sMarie%20Stopes%20Premium%20Maternity%20Clinic!5e0!3m2!1sen!2sbd!4v1583743631238!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/marie-stopes-maternity-centre"><h4>Marie Stopes Maternity Centre</h4>
        <P> 154 Suvechcha, Fazil Chisha Road, East Subid Bazar, Bangladesh<br>Phone: +88 01911100837, +88 01716643691</P>
      </a></div>
    </div>
  </div>
</section>

<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.926985877109!2d91.8596241145506!3d24.900472034035086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e9a1fed12e9b567!2sMediAid%20Diagnostic%20and%20Consultation%20Centre.!5e0!3m2!1sen!2sbd!4v1583743712788!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/medi-aid-diagnostic-center"><h4>Medi-Aid Diagnostic Center</h4>
        <P> Modhu Shohid, New Medical Road, Sylhet Sadar, Sylhet 3100 Bangladesh<br>
      Phone: +88 0821815864</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.958725105162!2d91.86304291455059!3d24.899389484035517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552ebae09f75%3A0xb0fcce8befa371fc!2sCity%20Poly%20Clinic%20And%20Shishu%20Hospital!5e0!3m2!1sen!2sbd!4v1583744138740!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/metropolitan-poly-clinic/"><h4>Metropolitan Poly Clinic</h4>
        <P> Rikabibajar, Sylhet Sadar<br>
            Sylhet 3100, Bangladesh<br>
            Phone: +88 0821712311</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.94368171357!2d91.8530520145506!3d24.899902584035303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505536be64db9b%3A0x2c59a9310eef1711!2sMedinova%20Medical%20Services%20Ltd.!5e0!3m2!1sen!2sbd!4v1583744382298!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>      <div class="text-box">
        <a href="https://sylhetdirectory.com/medinova"><h4> Medinova Medical Services Ltd</h4>
        <P>98 Kajalshah, Sylhet Sadar, Sylhet 3100, Bangladesh<br>
          Phone: +88 0821815110, +88 0821815111 </P>
      </a></div>
    </div>
  </div>
</section>

<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.089476922629!2d91.86651761455047!3d24.89492938403763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055be49c8275d%3A0xc925d90de1aafef6!2sMount%20Adora%20Hospital%2C%20Nayasarak!5e0!3m2!1sen!2sbd!4v1583747863740!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/mount-adora-hospital"><h4>Mount Adora Hospital</h4>
        <P>Kazitula, Nayasarak, Sylhet Sadar, Sylhet-3100 <br> Bangladesh<br>
Phones Number Serial: 01786-637476</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.9598831792105!2d91.86266901455059!3d24.89934998403555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552ebd59feb5%3A0xc48ad6d1e5776caf!2sMother%20Care%20Clinic!5e0!3m2!1sen!2sbd!4v1583747913951!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/mother-care-clinic"><h4> Mother Care Clinic</h4>
        <P>Puran medical, Sylhet, Sylhet Sadar, 
          <br>Bangladesh<br>
Phone: +88 0821713131</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.99397669485!2d91.86580561455055!3d24.898187084036145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552bd476d84d%3A0x4e232278dceefd51!2sRed%20Crescent%20Maternity%20Hospital%20%26%20Child%20Welfare%20Centre!5e0!3m2!1sen!2sbd!4v1583747958251!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/matrimangal-and-red-crescent-hospital"><h4>Matrimangal and Red Crescent Hospital</h4>
        <P>New Medical Road, Kajalshah, Sylhet Sadar, Bangladesh<br>
Phone: +88 0821717055, +88 0821717051</P>
      </a></div>
    </div>
  </div>
</section>


<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.7326038551455!2d91.85843821455073!3d24.907100984031878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750553ad0eb0bbd%3A0xa48957a00f5136c9!2sModern%20General%20Hospital!5e0!3m2!1sen!2sbd!4v1583748048843!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/modern-general-hospital"><h4>Modern General Hospital</h4>
          <P>Subid Bazar, Sylhet Sadar, Sylhet 3100 <br>
            Bangladesh<br>Phone: +88 0821723633</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.930822330201!2d91.8634191145506!3d24.90034118403522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552eb7b53175%3A0xedf9e7ecb96b3915!2sMohanagar%20Hospital!5e0!3m2!1sen!2sbd!4v1583748147829!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/mohanagar-hospital"><h4>Mohanagar Hospital</h4>
        <P>Dorgah Mohollah, Sylhet Sadar, Sylhet 3100, <br> Bangladesh
          <br>Phone: +88 0821720431, +88 0821720432</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.9797006185245!2d91.85472301454976!3d24.864542884051936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751aae9663019c7%3A0x4bf6e960672dc2c0!2sNorth%20East%20Medical%20College%20%26%20Hospital!5e0!3m2!1sen!2sbd!4v1583748330593!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/north-east-medical-pvt-ltd"><h4>North East Medical College & Hospital</h4>
        <P>South Surma, Sylhet-3100, Bangladesh,<br>
          Cell : +880 1715944733,  +880 1786511305, </P>
      </a></div>
    </div>
  </div>
</section>



<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.075740525839!2d91.84786221455047!3d24.895397984037412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750554a5940d86d%3A0xf05915d157972da1!2sNiramoy%20Poly%20Clinic!5e0!3m2!1sen!2sbd!4v1583748411444!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/niramoy-poly-clinic"><h4>Niramoy Poly Clinic</h4>
        <P>Nowab road, Sylhet Sadar, Sylhet 3100 <br> Bangladesh<br>
        Phone: +88 0821716258</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.94801558801!2d91.87202627904365!3d24.899754765261225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d18dddbc33%3A0xd30c3e65080dba4b!2sLions%20Children%20Hospital!5e0!3m2!1sen!2sbd!4v1583230939970!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
       <div class="text-box">
        <a href="https://sylhetdirectory.com/lions-sishu-hospitals/"><h4>Lions Shishu Hospital</h4>
        <P>Lamabajar, Sylhet Sadar, Sylhet 3100, Bangladesh
      <br>Phone: +88 0821717222</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.886542913289!2d91.86757221455065!3d24.901851384034515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055284a328bf9%3A0xb54dca950cb21752!2sNOORJAHAN%20HOSPITAL!5e0!3m2!1sen!2sbd!4v1583748614099!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/noorjahan-hospital/"><h4>Noorjahan Hospital</h4>
        <P>Dorgah Gate, Sylhet Sadar, Sylhet 3100 <br> Bangladesh<br>
Phone: +88 0821714123</P>
      </a></div>
    </div>
  </div>
</section>


<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28949.181381718856!2d91.82657715416927!3d24.909996845998503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751ab2decf85137%3A0x26f5c13c01bdc33e!2sOasis%20Hospital!5e0!3m2!1sen!2sbd!4v1583748890398!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/oasis-hospital"><h4>Oasis Hospital </h4>
        <P>Bishwa Road, Subhanighat, Sylhet-3100<br>
Mobile: (+88) 01611 99 0000 </P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14476.167996510832!2d91.86923777346956!3d24.896548994588372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552ebae09f75%3A0xb0fcce8befa371fc!2sCity%20Poly%20Clinic%20And%20Shishu%20Hospital!5e0!3m2!1sen!2sbd!4v1583748947412!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/purbasa-poly-clinic"><h4>Purbasa Poly Clinic</h4>
        <P>Sylhet Sadar, Sylhet 3100, Bangladesh<br>
Phone: +88 0821760803</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.961567514216!2d91.8552116145506!3d24.89929253403569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055315d977a2d%3A0xf3cd763aff0632ee!2sPopular%20Medical%20Centre%20Ltd.%2C%20Medical%20College%20Rd%2C%20Sylhet!5e0!3m2!1sen!2sbd!4v1583748995048!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/popular-diagnostic/"><h4>Popular Medical Centre Ltd</h4>
        <P>Kajolshah, Sylhet.<br>
Phone: +880821-725227, Mobile: +8801715084078</P>
      </a></div>
    </div>
  </div>
</section>


<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.048085253094!2d91.8656517145505!3d24.896341384037004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552bb072cd65%3A0x2af1d1b8e64c5fed!2sRoyal%20Hospital%20and%20Research%20Centre%20Ltd.!5e0!3m2!1sen!2sbd!4v1583749075579!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/royal-hospital-and-research-center"><h4>Royal Hospital & Reseach Center</h4>
        <P>Zindabazar, Sylhet Sadar, Sylhet 3100, Bangladesh<br>
          Phone: +88 0821714850, +88 0821723362</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d929492.3183836984!2d90.7392321347913!3d24.491368304991035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe50d67dfc464fda7!2sSylhet%20Poly%20Clinic!5e0!3m2!1sen!2sbd!4v1583749143261!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/sadar-hospital"><h4>Sadar Hospital</h4>
        <P>Chowhatta, Sylhet Sadar, Sylhet 3100, Bangladesh<br>
          Phone: +88 0821713506</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.104496982116!2d91.86255811455045!3d24.894416984037925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552b71cc0bad%3A0x931f4fa754c69896!2sDMT%20Safeway%20Hospital!5e0!3m2!1sen!2sbd!4v1583749228029!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/safeway-clinic"><h4>Safe Way Hospital</h4>
        <P>Mirzazangal, Sylhet Sadar
          Sylhet 3100, Bangladesh <br>
          Phone: +88 08217164</P>
      </a></div>
    </div>
  </div>
</section>

<section class="who-we-are our-blog">
  <div class="main">
    
    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.136860650299!2d91.86885761455046!3d24.893312884038526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d5582b496f%3A0xbeaadddb9b787553!2sSylhet%20Diabetic%20Hospital!5e0!3m2!1sen!2sbd!4v1583749284613!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/sylhet-diabetic-shamiti"><h4>Sylhet Diabetic Hospital</h4>
        <P>Puranlane, Zindabazar, Sylhet Sadar, Sylhet 3100, Bangladesh<br>
Phone: +88 0821713632, +88 08212830383</P>
      </a></div>
    </div>



    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.081741068685!2d91.86708601455048!3d24.89519328403743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552af72cb2e7%3A0xa434beefad4cf520!2sUnited%20Poly%20Clinic!5e0!3m2!1sen!2sbd!4v1583749546336!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/united-poly-clinic"><h4>United Poly Clinic</h4>
        <P>Modhuban Super Market, Zindabazar, Sylhet Sadar, Sylhet 3100, Bangladesh<br>
Phone: +88 0821713632, +88 08212830383</P>
      </a></div>
    </div>

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.846899824418!2d91.85902531455066!3d24.903203384033826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552fe0960b43%3A0x3118f12ed63a657f!2sSheba%20Poly%20Clinic!5e0!3m2!1sen!2sbd!4v1583749333180!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/seba-poly-clinic"><h4>Seba Poly Clinic Sylhet</h4>
        <P>Dorgah Gate, Sylhet Sadar, Sylhet 3100 <br>
         Bangladesh<br>
Phone: +88 0821713900</P>
      </a></div>
    </div>
  </div>
</section>

<section class="who-we-are our-blog">
  <div class="main">

    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.9834664699624!2d91.87034891455062!3d24.898545584036047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d67663f2fb%3A0xdcda02b3f1e7750d!2sSylhet%20Women&#39;s%20Medical%20College%20Hospital!5e0!3m2!1sen!2sbd!4v1583749763697!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/sylhet-womens-medical-college-hospital"><h4>Sylhet Women's Medical College Hospital</h4>
        <P>Mirboxtula, Sylhet Sadar, Sylhet 3100, Bangladesh
          <br>phone: +88 08212830040</P>
      </a></div>
    </div>

       <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3630.9286276011467!2d91.79394721454096!3d24.48792968423105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751751f1138a43f%3A0x274d66af20638cfd!2sMoulvibazar%20BNSB%20Eye%20Hospital!5e0!3m2!1sen!2sbd!4v1583229117244!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
       <div class="text-box">
        <a href="https://sylhetdirectory.com/bnsb-eye-hospital"><h4>BNSB Eye Hospital</h4>
        <P>Matarkapon, Shamsher Nagar Road, Maulvibazar Sadar, Bangladesh <br> Phone: +88 086152670</P>
      </a></div>
    </div>


    <div class="col-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930523.0663713407!2d90.58200642424137!3d24.351517758057017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf358943fdadbbd37!2sUnited%20Hospital!5e0!3m2!1sen!2sbd!4v1583749852064!5m2!1sen!2sbd" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <div class="text-box">
        <a href="https://sylhetdirectory.com/united-hospital"><h4>United Hospital Ltd</h4>
        <P>69 Osmani Medical Road, Kajalshah, Sylhet Sadar, Sylhet 3100, Bangladesh<br>
        Phone: +88 01914001211</P>
      </a></div>
    </div>
  </div>
</section>


  </body>

  <footer>
  <div class="main">
    <span>Copyright @ 2019<br>
    Design &amp; Developed By Anika & Shahnaz</span>
  </div>


  <div class="arrow">
    <a href="#home">
    <img src="image/arrow.png" alt="up_arrow"></a>
  </div>

</footer>
</html>