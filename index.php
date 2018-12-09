<!DOCTYPE HTML>
<!--
    Read Only by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
  -->
<html>
  <head>
    <title>Dr. Julian Glatzer - Personal Website</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="is-preload">
    
    <!-- Header -->
    <section id="header">
      <header>
	<span class="image avatar"><img src="images/julianprofile.jpg" alt="" /></span>
	<h1 id="logo"><a href="#">Dr. Julian Glatzer</a></h1>
	<p>Physicist</p>
      </header>
      <nav id="nav">
	<ul>
	  <li><a href="#about" class="active">About</a></li>
	  <li><a href="#cv">Curriculum Vitae</a></li>
	  <li><a href="#contact">Contact</a></li>
	</ul>
      </nav>
      <footer>
	<ul class="icons">
	  <li><a href="https://www.linkedin.com/in/julian-glatzer/" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
	  <li><a href="https://github.com/JulianGlatzer" class="icon fa-github"><span class="label">Github</span></a></li>
	  <li><a href="#contact" class="icon fa-envelope"><span class="label">Email</span></a></li>
	</ul>
      </footer>
    </section>
    
    <!-- Wrapper -->
    <div id="wrapper">
      
      <!-- Main -->
      <div id="main">
	<!-- One -->
	<section id="about">
	  <div class="image main" data-position="center">
	    <img src="images/background2.jpg" alt="" />
	  </div>
	  <div class="container">
	    <header class="major">
	      <?php
		 if($_SERVER['REQUEST_METHOD'] === 'POST'){
		   $at="@";
		   $email=preg_replace('=((<CR>|<LF>|0x0A/%0A|0x0D/%0D|\\n|\\r)\S).*=i', null, $_POST['email']);
		   $email_subject=preg_replace('=((<CR>|<LF>|0x0A/%0A|0x0D/%0D|\\n|\\r)\S).*=i', null, $_POST['subject']);
		   $email_body=preg_replace('=((<CR>|<LF>|0x0A/%0A|0x0D/%0D|\\n|\\r)\S).*=i', null, $_POST['message']);
		   $to = "web".$at."commail.glatzer.eu";
		   $headers = "From: web".$at."commail.glatzer.eu \r\n";
		   $headers .= "Reply-To: $email \r\n";
		   /*echo $headers;
		   echo $to;
		   echo $email_subject;
		   echo $email_body;*/
		   if(mail($to,$email_subject,$email_body,$headers)){
		     echo "<h2>Thank you,</h2><p>your message was sent successfully.</p>";
		   }
		   else{
   		     echo "<h2>I am sorry,</h2><p>the delivery of your message failed. You can write me an e-mail at web".$at."commail.glatzer.eu.</p>";
		   }
		 }
		   ?>
	      <h2>Julian Glatzer</h2>
	      <!--<p>Just an incredibly simple responsive site<br />
		  template freebie by <a href="http://html5up.net">HTML5 UP</a>.</p>-->
	    </header>
	    <p>
Julian Glatzer is a physicist with a focus on the analysis of petabyte-size datasets and the development of new prototypes. He is a member of the ATLAS collaboration at CERN’s Large Hadron Collider which discovered a new elementary particle, the Higgs boson, in 2013. During his work at ATLAS he became an expert in data analysis, including machine learning methods and distributed computing resources (cloud and grid computing). Julian primarily works with Python and C++ on high-profile physics analyses and has a special interest in mathematical modelling and statistical inference.</p>
	    <p>Julian is motivated by new challenges and enjoys to familiarize himself with novel technical topics. He appreciates the work in teams that are both diverse culturally and from the professional background of the members.</p>
	  </div>
	</section>
	
	<section id="cv">
	  <div class="container">
	    <h3>Curriculum Vitae</h3>
	    <h4>Experience</h4>
	    <div class="features">
	      <article>
		<div>
		  <h5>Associate Member of Personnel at CERN, European Organization for Nuclear Research (CH)</h5>
		  <h6>Since 11/08</h6>
		  <ul>
		    <li>Developed algorithms for the analysis of the petabyte-size data from proton collisions in the ATLAS Experiment at the Large Hadron Collider (LHC)</li>
		    <li>Research on application of machine learning techniques for the local and cloud-based data analysis</li>
		    <li>Major contributor to the operation of the experiment, prototyped new detector parts for upgrade</li>
		    <li>More than 800 publications in renowned scientific journals</li>
		  </ul>
		</div>
	      </article>
	      <article>
		<div>
		  <h5>Marie Sklodowska-Curie Fellow at Universitat Aut&ograve;noma de Barcelona (ES)</h5>
		  <h6>Since 07/16</h6>
		  <ul>
		    <li>Fellow of the Horizon 2020 COFUND programme of the European Union</li>
		    <li>Developed a search for new Higgs bosons (C++ and Python, executed locally and on the Worldwide LHC computing grid), research on classification of events using machine learning, leader of the research group</li>
		    <li>Coordinated 30 engineers, physicists and the 24x7 shift crew working on the collision data-taking with the ATLAS Tile Calorimeter</li>
		  </ul>
		</div>
	      </article>
	      <article>
		<div>
		  <h5>Postdoctoral Researcher at Albert-Ludwigs-Universit&auml;t Freiburg (DE)</h5>
		  <h6>02/16 - 06/16</h6>
		  <ul>
		    <li>Developed framework for statistical data analysis and machine learning methods for the classification of Higgs boson production and background</li>
		    <li>Lead research group of two postdocs, a Ph.D. and a M.Sc. student</li>
		  </ul>
		</div>
	      </article>
	      <article>
		<div>
		  <h5>Research Fellow at CERN, European Organization for Nuclear Research (CH)</h5>
		  <h6>10/13 - 12/15</h6>
		  <ul>
		    <li>Extracted the fraction of top quark events with additional b-quarks using a multidimensional fit to collision data and statistical analysis of the results</li>
		    <li>Commissioned new prototype for hardware real-time data acquisition system, wrote the software for the control of the FPGA-based event filter in multi-threaded C++ and a web-based monitoring suite with a strong focus on testing and validation to ensure stability and high availabilitylist</li>
		  </ul>
		</div>
	      </article>
	      <!--										<article>
												<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
												<div class="inner">
												  <h5>header</h5>
												  <h6>time</h6>
												  <ul>
												    <li>list</li>
												  </ul>
												</div>
	      </article>-->
	    </div>
	    <h4>Education</h4>
	    <div class="features">
	      <article>
		<a href="https://cds.cern.ch/record/2244741" class="image"><img src="images/phdthesis.png" alt="Ph.D. thesis title screenshot" /></a>
		<div class="inner">
		  <h5>Ph.D. (Dr. rer. nat.) in Physics at Albert-Ludwigs-Universit&auml;t Freiburg (DE)</h5>
		  <h6>11/08 - 09/13</h6>
		  <ul>
		    <li>Grade summa cum laude for thesis with title <a href="https://cds.cern.ch/record/2244741">&quot;Search for Neutral MSSM Higgs Bosons Decaying to &tau;<sub>h</sub>&tau;<sub>h</sub> in &radic;s = 7 TeV Proton-Proton Collisions with the ATLAS detector&quot;</a></li>
		    <li>Pioneered new petabyte-size data analysis with selection, modelling and statistics routines written in C++</li>
		  </ul>
		</div>
	      </article>
	      <article>
		<a href="http://inspirehep.net/search?p=find+r+fermilab-masters-2008-05" class="image"><img src="images/mscthesis.png" alt="M.Sc. thesis title screenshot" /></a>
		<div class="inner">
		  <h5>Master of Science in Physics at Rutgers - The State University of New Jersey (USA)</h5>
		  <h6>08/07 - 10/08</h6>
		  <ul>
		    <li>Grade A, 4.0 (GPA) for thesis with title <a href="http://inspirehep.net/search?p=find+r+fermilab-masters-2008-05">&quot;Probing mSUGRA with a Search for Chargino-Neutralino Production using Trileptons&quot;</a></li>
		    <li>work at Fermi National Accelerator Laboratory</li>
		  </ul>
		</div>
	      </article>
	    </div>
	    <h4>Most important Publications</h4>
	    <div class="features">
	      <article>
		<a href="http://arxiv.org/abs/1808.03599" class="image"><img src="images/htb.png" alt="example plot" /></a>
		<div class="inner">
		  <h5>Search for charged Higgs bosons decaying into top and bottom quarks at &radic;s = 13 TeV with the ATLAS detector</h5>
		  <h6>ATLAS Collaboration, M. Aaboud et al.</h6>
		  JHEP 11 (2018) 085 <a href="http://arxiv.org/abs/1808.03599">[arXiv:1808.03599]</a>
		</div>
	      </article>
	      <article>
		<a href="https://arxiv.org/abs/1811.08856" class="image"><img src="images/htautau.png" alt="example plot" /></a>
		<div class="inner">
		  <h5>Cross-section measurements of the Higgs boson decaying to a pair of &tau;-leptons in proton-proton collisions at &radic;s = 13 TeV with the ATLAS detector</h5>
		  <h6>ATLAS Collaboration, M. Aaboud et al.</h6>
		  submitted to PRD <a href="https://arxiv.org/abs/1811.08856">[arXiv:1811.08856]<a>
		</div>
	      </article>
	      <article>
		<a href="http://arxiv.org/abs/1508.06868" class="image"><img src="images/ttbb.png" alt="example plot" /></a>
		<div class="inner">
		  <h5>Measurements of fiducial cross-sections for ttbar production with one or two additional b-jets in pp collisions at &radic;s = 8 TeV using the ATLAS detector</h5>
		  <h6>ATLAS Collaboration, G. Aad et al.</h6>
		  Eur. Phys. J. C76 (2016) <a href="http://arxiv.org/abs/1508.06868">[arXiv:1508.06868]</a>
		</div>
	      </article>
	      <article>
		<a href="http://arxiv.org/abs/1211.6956" class="image"><img src="images/mssmhtautau.png" alt="example plot" /></a>
		<div class="inner">
		  <h5>Search for the neutral Higgs bosons of the Minimal Supersymmetric Standard Model in &radic;s = 7 TeV pp collisions with the ATLAS detector</h5>
		  <h6>ATLAS Collaboration, G. Aad et al.</h6>
		  JHEP 1302 (2013) 095 <a href="http://arxiv.org/abs/1211.6956">[arXiv:1211.6956]</a>
		</div>
	      </article>
	      <article>
		<a href="http://arxiv.org/abs/1210.6604" class="image"><img src="images/exoticstautau.png" alt="example plot" /></a>
		<div class="inner">
		  <h5>A search for high mass resonances decaying to &tau;<sup>+</sup>&tau;<sup>-</sup> in pp collisions with &radic;s=7 TeV with the ATLAS detector</h5>
		  <h6>ATLAS Collaboration, G. Aad et al.</h6>
		  Phys.Lett. B719 (2013) 242-260 <a href="http://arxiv.org/abs/1210.6604">[arXiv:1210.6604]</a>
		</div>
	      </article>
	      <article>
		<a href="http://arxiv.org/abs/0808.1605" class="image"><img src="images/multichannel.png" alt="example plot" /></a>
		<div class="inner">
		  <h5>Addressing the Multi-Channel Inverse Problem at High Energy Colliders: A Model Independent Approach to the Search for New Physics with Trileptons</h5>
		  <h6>S. Dube, J. Glatzer, S. Somalwar, A. Sood, and S. Thomas</h6>
		  J.Phys. G39 (Aug, 2012) 085004 <a href="http://arxiv.org/abs/0808.1605">[arXiv:0808.1605]</a>
		</div>
	      </article>
	      <article>
		<a href="http://arxiv.org/abs/1206.5971" class="image"><img src="images/htautau7tev.png" alt="example plot" /></a>
		<div class="inner">
		  <h5>Search for the Standard Model Higgs boson in the H to &tau;<sup>+</sup>&tau;<sup>-</sup> decay mode in &radic;s = 7 TeV pp collisions with ATLAS</h5>
		  <h6>ATLAS Collaboration, G. Aad et al.</h6>
		  JHEP 1209 (Jun, 2012) 070 <a href="http://arxiv.org/abs/1206.5971">[arXiv:1206.5971]</a>
		</div>
	      </article>
	      <article>
		<a href="http://arxiv.org/abs/0808.2446" class="image"><img src="images/cdfsusy.png" alt="example plot" /></a>
		<div class="inner">
		  <h5>Search for Supersymmetry in ppbar Collisions at &radic;s = 1.96 TeV Using the Trilepton Signature of Chargino-Neutralino Production</h5>
		  <h6>CDF Collaboration, T. Aaltonen et al.</h6>
		  Phys.Rev.Lett. 101 (Dec, 2008) 251801 <a href="http://arxiv.org/abs/0808.2446">[arXiv:0808.2446]</a>
		</div>
	      </article>
	    </div>
	  </div>
	</section>
	
	<section id="contact">
	  <div class="container">
	    <h3>Contact Me</h3>
	    <h4>Office Adress</h4>
	    <p>Julian Glatzer<br />
	      c/o CERN European Organization for Nuclear Research<br />
	      Postbox E19900<br />
	      1211 Genève 23<br />	
	      Switzerland</p>
	    <p>Tel.: +41 22 76 71125<br />
	      Room: 40-R-C08</p>
	    <h4>... or write me an e-mail here</h4>
	    <form method="post" action="index.php">
	      <div class="row gtr-uniform">
		<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" /></div>
		<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
		<div class="col-12"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
		<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
		<div class="col-12">
		  <ul class="actions">
		    <li><input type="submit" class="primary" value="Send Message" /></li>
		    <li><input type="reset" value="Reset Form" /></li>
		  </ul>
		</div>
	      </div>
	    </form>
	  </div>
	</section>
	
	<!-- Footer -->
	<section id="footer">
	  <div class="container">
	    <ul class="copyright">
	      <li>Impressum: Julian Glatzer, 10 Chemin des Fleurs, 01210 Ferney-Voltaire, France, E-Mail: web at commail.glatzer.eu</li>
	    </ul>
	    <ul class="copyright">
	      <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
	    </ul>
	  </div>
	</section>
	
      </div>
      
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
      
  </body>
</html>
