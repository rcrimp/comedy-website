<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179982524-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-179982524-1');
  </script>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">  
  <link rel="stylesheet" href="style/main.css">
  <style>
    .select-wrapper ul li span {
      color: #C62828 !important
    }
  </style>

  <title>Dunedin Comedy</title>
</head>
<body>

  <!-- navbar -->
  <header>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper red darken-4">
          <div class="container">
            
            <!-- MOBILE MENU BUTTON -->
            <a href="" class="sidenav-trigger" data-target="side-menu" data-position="right" data-tooltip="Menu">
              <i class="material-icons">menu</i>
            </a>

            <!-- DESKTOP NAVIGATION -->
            <ul class="left hide-on-med-and-down">
              <li><a href="index.html" class="">Home</a></li>
              <!-- <li><a href="#comedian-anchor" class="">Comedians</a></li> -->
            </ul>

            <!-- DESKTOP SOCIAL MEDIA -->
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="http://www.facebook.com/dunedincomedy" class="btn-floating btn-small white tooltipped z-depth-0" data-tooltip="Facebook">
                  <i class="red-text text-darken-3 fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="http://www.instagram.com/dunedincomedy" class="btn-floating btn-small white tooltipped z-depth-0" data-tooltip="Instagram">
                  <i class="red-text text-darken-3 fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="mailto:hello@dunedincomedy.co.nz" class="btn-floating btn-small white tooltipped z-depth-0" data-tooltip="Email">
                  <i class="red-text text-darken-3 fas material-icons">mail_outline</i>
                </a>
              </li>

            </ul>

            <img class="brand-logo center responsive-img" src="img/dunedin-logo.png" alt="">

          </div> <!-- container -->
        </div> <!-- nav-wrapper -->
      </nav>
    </div>  <!-- nav-fixed -->

    <!-- MOBILE NAVIGATION -->
    <ul id="side-menu" class="sidenav">
      <li>
        <div class="user-view">
          <div class="background">
            <img class="responsive-img" src="img/bricks.jpg">
          </div>
          <!-- <a href="#" class="large right sidenav-close"><i class="material-icons">close</i></a> -->
          <a href="#" class="white-text large right sidenav-close"><i class="material-icons">close</i></a>              
          <a href="#user"><img class="circle z-depth-2" src="img/partners/dunedincomedy.jpg"></a>

          <a href="#"><span class="white-text name">Dunedin Comedy</span></a>
          <!-- <a href="#"><span class="white-text name">Dunedin Comedy</span></a> -->
          <a href="mailto:hello@dunedincomedy.co.nz"><span class="white-text email">hello@dunedincomedy.co.nz</span></a>
        </div>
      </li>
      <li><a href="#index.html" class="sidenav-close">Home</a></li>
      <li><div class="divider"></div></li>
      <li><a href="http://www.facebook.com/dunedincomedy"><i class="fab fa-facebook-f"></i>Facebook</a></li>
      <li><a href="http://www.instagram.com/dunedincomedy"><i class="fab fa-instagram"></i>Instagram</a></li>
      <li><a href="mailto:hello@dunedincomedy.co.nz" class="sidenav-close"><i class="fas fa-envelope"></i>Email</a></li>
    </ul>

  
    <div id="hero-image" class="shadow-inset">
      <div class="container row">
        <div id="dunedin-comedy-logo" class="col s8 m6 l6 offset-s2 offset-m3 offset-l3 valign-wrapper">
          <img class="responsive-img" src="img/dunedin-comedy-awards.png" alt="">
        </div>
        <!-- mobile buttons -->
        <div class="right hide-on-med-and-up">
          <ul id="mobile-social-buttons">
            <li>
              <a href="http://www.facebook.com/dunedincomedy" class="btn-small btn-floating red darken-4 tooltipped" data-position="left" data-tooltip="Facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="http://www.instagram.com/dunedincomedy" class="btn-small btn-floating red darken-4 tooltipped " data-position="left" data-tooltip="Instagram">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="mailto:hello@dunedincomedy.co.nz" class="btn-small btn-floating red darken-4 tooltipped" data-position="left" data-tooltip="Email">
                <i class="fab material-icons">mail_outline</i>
              </a>
            </li>
          </ul>
        </div>

        <!-- MED BUTTONS -->
        <div class="right hide-on-small-only hide-on-large-only">
          <ul id="mobile-social-buttons">
            <li>
              <a href="http://www.facebook.com/dunedincomedy" class="btn-floating red darken-4 tooltipped" data-position="left" data-tooltip="Facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="http://www.instagram.com/dunedincomedy" class="btn-floating red darken-4 tooltipped " data-position="left" data-tooltip="Instagram">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="mailto:hello@dunedincomedy.co.nz" class="btn-floating red darken-4 tooltipped" data-position="left" data-tooltip="Email">
                <i class="fab material-icons">mail_outline</i>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  
  </header>

    <section class="container">
	
			<?php
				$voterid = $_GET["voterid"];
				$voteremaillist = array(						
					"024de771-c736-4972-b6c1-cefc25f111e1" => "chewie_nz@orcon.net.nz",
					"03eba4b7-6256-4476-9d80-d018223dec27" => "elsadaisy@gmail.com",
					"1d6e2403-fdcd-4f38-83c1-561ae3abe0ed" => "rename.gerard@gmail.com",
					"2391ce85-4594-485c-be38-cdf07cbddc2f" => "harriet_moir@hotmail.com",
					"27c67446-7e79-4f20-bab6-ba704eb07ac8" => "jbagman46@gmail.com",
					"2be0a261-d712-407d-b253-1bf83eb1af33" => "jonfalco@gmail.com",
					"331f7a8f-c757-4b28-bfb9-7c1e425f4188" => "josh@dunedincomedy.co.nz",
					"3fe8fd53-31a5-4cfd-b71a-ae6e6c9c35b3" => "kate.hansen0@gmail.com",
					"4babb548-3b2f-4027-9ec4-230a0d81b612" => "reubencrimp@gmail.com",
					"51c3cbb7-97be-4d90-8177-73c182310b4e" => "rex.jacobus@gmail.com",
					"5b4605b9-9b17-47d1-8b36-fbdaedd516f6" => "nzrobmclennan@gmail.com",
					"61c0f8d7-fab3-4436-b348-6325a438b92a" => "sarperd@gmail.com",
					"70593f22-4b7b-499b-8c44-794ec896dcc1" => "elisalaughs@yahoo.com",
					"7d870605-0ee3-4551-b69d-6a74e11bd870" => "az.davies87@gmail.com",
					"92dcdf94-254f-48f5-a436-29d8cda1a7f2" => "carrie.ankerstein@otago.ac.nz",
					"948d1e83-76d4-45f9-a401-84fee7d63239" => "jenny.beatrix@outlook.com",
					"9d8d3b8d-9cae-4879-aed1-a5154f07c1d2" => "nicola@nicolabrown.co",
					"a9c49081-8632-469d-bf73-787631477b68" => "warwi639@student.otago.ac.nz",
					"acbea2ff-e446-4315-b17c-c81e0370134e" => "ianloff@yahoo.com.au",
					"b487265a-0921-4316-98a1-a45fa6a09890" => "whyisnick@gmail.com",
					"bd284da5-2ffb-4043-9e82-2554d1da04be" => "skingsleyholmes@ymail.com",
					"c145d29a-9b0c-454d-8a6d-131a36db7e97" => "roslyn.n@xtra.co.nz",
					"ccbe09a4-3143-403c-9070-fa9edeeb6618" => "mikeeyt1@gmail.com",
					"cdab2186-03b0-41e8-8519-2c1c1de1ade9" => "danielbrader@hotmail.com"
				);
				$voteremail = $voteremaillist[$voterid];

				if (strlen($voteremail) == 0) { ?>
							<h3 class="center red-text text-darken-3">2020 Dunedin Comedy Awards</h3>
							<p>Invalid voting link.</p>
			
					<?php } else { ?>
			<h3 class="center red-text text-darken-3">2020 Dunedin Comedy Awards</h3>
			<p>Nominations are in and it's time to cast your votes</p>
			<p>There are 8 categories, one vote each. You may skip any of the categories. You may vote for yourself. You may recast your vote(s) unlimited times until the voting closes. </p>
			<p>Voting closes at midnight on Sunday, 3rd of January. Winners will be announced at the awards ceremony on Wednesday, 20th of January at Inch Bar after the open mic.</p>
			<p>If you have any issues with the ballot please email <a href="mailto:contact@dunedincomedy.co.nz">contact@dunedincomedy.co.nz</a></p>
		

      <form action="submit_vote.php" method="post">
        <input type="hidden" id="voter" name="voter" value=<?php echo $voteremail ?>>

        <h4 class="center red-text text-darken-3">Best Newcomer</h4>
        <div class="row">
          <div class="col s12 m6 push-m3">
            <div class="input-field">
              
              <select id="Best-Newcomer" name="Best-Newcomer">
                <option value="none" class="right" selected>Best Newcomer</option>
								<option value="Carrie Ankerstein" data-icon="img/voting/Carrie-Ankerstein.jpg" class="right">Carrie Ankerstein</option>
								<option value="Gerard Dougherty" data-icon="img/voting/Gerard-Dougherty.jpg" class="right">Gerard Dougherty</option>
                <option value="Kate Hansen" data-icon="img/voting/Kate-Hansen.jpg" class="right">Kate Hansen</option>
                <option value="Sarper Dorter" data-icon="img/voting/Sarper-Dorter.jpg" class="right">Sarper Dörter</option>
              </select>
            </div>
          </div>
        </div>

        <h4 class="center red-text text-darken-3">Most Improved</h4>
        <div class="row">
          <div class="col s12 m6 push-m3">
            <div class="input-field">
              
              <select id="Most-Improved" name="Most-Improved">
                <option value="none" class="right" selected>Most Improved</option>
								<option value="Gerard Dougherty" data-icon="img/voting/Gerard-Dougherty.jpg" class="right">Gerard Dougherty</option>
								<option value="John Bagnall" data-icon="img/voting/John-Bagnall.jpg" class="right">John Bagnall</option>
								<option value="Jonathan Falconer" data-icon="img/voting/Jonathan-Falconer.jpg" class="right">Jonathan Falconer</option>
                <option value="Sarper Dorter" data-icon="img/voting/Sarper-Dorter.jpg" class="right">Sarper Dörter</option>
              </select>
            </div>
          </div>
        </div>

      <h4 class="center red-text text-darken-3">Best Greenroomer</h4>
      <div class="row">
        <div class="col s12 m6 push-m3">
          <div class="input-field">
            
            <select id="Best-Greenroomer" name="Best-Greenroomer">
              <option value="none" class="right" selected>Best Greenroomer</option>
							<option value="Elisa Rubin" data-icon="img/voting/Elisa-Rubin.jpg" class="right">Elisa Rubin</option>
							<option value="Harriet Moir" data-icon="img/voting/Harriet-Moir.jpg" class="right">Harriet Moir</option>
							<option value="Jenny Kendrick" data-icon="img/voting/Jenny-Kendrick.jpg" class="right">Jenny Kendrick</option>
              <option value="Reuben Crisp" data-icon="img/voting/Reuben-Crisp.jpg" class="right">Reuben Crisp</option>
            </select>
          </div>
        </div>
      </div>

      <h4 class="center red-text text-darken-3">Best MC</h4>
      <div class="row">
        <div class="col s12 m6 push-m3">
          <div class="input-field">
            
            <select id="Best-MC" name="Best-MC">
              <option value="none" class="right" selected>Best MC</option>
              <option value="Aaron Davies" data-icon="img/voting/Aaron-Davies.jpg" class="right">Aaron Davies</option>
							<option value="Harriet Moir" data-icon="img/voting/Harriet-Moir.jpg" class="right">Harriet Moir</option>
              <option value="Jonathan Falconer" data-icon="img/voting/Jonathan-Falconer.jpg" class="right">Jonathan Falconer</option>
							<option value="Reuben Crisp" data-icon="img/voting/Reuben-Crisp.jpg" class="right">Reuben Crisp</option>
            </select>
          </div>
        </div>
      </div>

      <h4 class="center red-text text-darken-3">Best Venue</h4>
      <div class="row">
        <div class="col s12 m6 push-m3">
          <div class="input-field">
            
            <select id="Best-Venue" name="Best-Venue">
              <option value="none" class="right" selected>Best Venue</option>
              <option value="Dog with two Tails" data-icon="img/voting/Dog-with-two-Tails.jpg" class="right">Dog with two Tails</option>
							<option value="Inch Bar" data-icon="img/voting/Inch-Bar.jpg" class="right">Inch Bar</option>
							<option value="New Athenaeum Theatre" data-icon="img/voting/New-Athenaeum-Theatre.jpg" class="right">New Athenaeum Theatre</option>
            </select>
          </div>
        </div>
      </div>

      <h4 class="center red-text text-darken-3">Best Solo Show</h4>
      <div class="row">
        <div class="col s12 m6 push-m3">
          <div class="input-field">
            
            <select id="Best-Solo-Show" name="Best-Solo-Show">
              <option value="none" class="right" selected>Best Solo Show</option>
              <option value="Ben Hurley" data-icon="img/voting/Ben-Hurley.jpg" class="right">Ben Hurley: The Straight-out-of-lockdown Tour</option>
              <option value="Harriet Moir" data-icon="img/voting/Harriet-Moir.jpg" class="right">Harriet Moir: CHIP: Salty with a Bit of Sauce</option>
              <option value="James Mustapic" data-icon="img/voting/James-Mustapic.jpg" class="right">James Mustapic is Coming Out (From Under a Rock)</option>
              <option value="Jonathan Falconer" data-icon="img/voting/Jonathan-Falconer.jpg" class="right">Jonathan Falconer: World's Dumbest Doctor</option>
            </select>
          </div>
        </div>
      </div>

      <h4 class="center red-text text-darken-3">Best Comedian (visiting)</h4>
      <div class="row">
        <div class="col s12 m6 push-m3">
          <div class="input-field">
            
            <select id="Best-Visiting-Comedian" name="Best-Visiting-Comedian">
              <option value="none" class="right" selected>Best Comedian (visiting)</option>
              <option value="Ben Hurley" data-icon="img/voting/Ben-Hurley.jpg" class="right">Ben Hurley (Auckland)</option>
							<option value="Dan Brader" data-icon="img/voting/Dan-Brader.jpg" class="right">Dan Brader (Wanaka)</option>
							<option value="Gary Sansome" data-icon="img/voting/Gary-Sansome.jpg" class="right">Gary Sansome (UK)</option>
              <option value="Jadwiga Green" data-icon="img/voting/Jadwiga-Green.jpg" class="right">Jadwiga Green (Christchurch)</option>
              <option value="James Mustapic" data-icon="img/voting/James-Mustapic.jpg" class="right">James-Mustapic (Auckland)</option>
            </select>
          </div>
        </div>
      </div>

      <h4 class="center red-text text-darken-3">Best Comedian (Dunedin)</h4>
      <div class="row">
        <div class="col s12 m6 push-m3">
          <div class="input-field">
            
            <select id="Best-Comedian" name="Best-Comedian">
              <option value="none" class="right" selected>Best Comedian</option>
							<option value="Demelza Daisy Ray" data-icon="img/voting/Demelza-Daisy-Ray.jpg" class="right">Demelza-Daisy-Ray</option>
							<option value="Harriet Moir" data-icon="img/voting/Harriet-Moir.jpg" class="right">Harriet Moir</option>
							<option value="Jonathan Falconer" data-icon="img/voting/Jonathan-Falconer.jpg" class="right">Jonathan Falconer</option>
							<option value="Mike Chewie Bennett" data-icon="img/voting/Mike-Chewie-Bennett.jpg" class="right">Mike "Chewie" Bennett</option>
							<option value="Reuben Crisp" data-icon="img/voting/Reuben-Crisp.jpg" class="right">Reuben Crisp</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m6 push-m3">
          <input type="submit" value="Submit Votes" class="red darken-3 right btn">
        </div>
      </div>
		</form>
		
				<?php } ?>

    </section>

    <!-- parallax -->
    <div class="parallax-container shadow-inset"><div class="parallax"></div></div>

    <!-- footer -->
    <footer id="contact-anchor" class="page-footer white black-text scrollspy">
        <div class="footer-copyright red darken-4">
            <div class="white-text container center-align">Dunedin Comedy &copy; 2020</div>
        </div>
    </footer>

  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="scripts/populate-comedian-profiles.js"></script>
  <script src="scripts/populate-past-events.js"></script>
  <script>
    $(document).ready(function(){
      $(".sidenav").sidenav();
      $(".materialboxed").materialbox();
      // $(".parallax").parallax();
      $(".tabs").tabs();
      $(".datepicker").datepicker({});
      $(".tooltipped").tooltip();
      $(".scrollspy").scrollSpy();
      $('.modal').modal();
      $('.slider').slider({height: 500});
      $('.collapsible').collapsible();
      $('.dropdown-trigger').dropdown();
      $('.tabs').tabs();

      $("select").formSelect();
    });
  </script>
</body>

</html>
