var eventData = [
  {
    name: 'Otago RAW Comedy Quest',
    img: 'img/shows/bark.png',
    desc: 'First ever RAW Comedy Quest in Otago.',
  }, {
    name: 'Breast Cancer Fundraiser',
    img: 'img/shows/breast-banner.png',
    desc: 'Raised $1,200 for Breast Cancer Foundation NZ.',
  }, {
    name: 'Christmas Variety Show',
    img: 'img/shows/christmas-banner.jpg',
    desc: 'Balclutha City Impact Church.',
  }, {
    name: 'COVID-19 Alert Level 1',
    img: 'img/shows/laughter-banner.png',
    desc: 'Social distancing, contact tracing.',
  }, {
    img: 'img/shows/toast.jpg',
    name: 'Stand-up Comedy, Toast Bar',
    desc: 'Stand-up Comedy at Toast Bar',
  }, {
    img: 'img/shows/inch-banner.png',
    name: 'Open mic comedy shows',
    desc: 'Open Mics from April 2018 to February 2020.',
  }, {
    img: 'img/shows/cannabash-banner.png',
    name: 'Whakamana Cannabis Museum',
    desc: 'Stoned up comedy.',
  }, {
    img: 'img/shows/punbattle.jpg',
    name: 'Dunedin Pun Battle',
    desc: 'Dunedin Pun Battle',
  }, {
    img: 'img/shows/firinglines-banner.jpg',
    name: 'Firing Lines, Zanzibar',
    desc: 'Open Mics from April 2018 to February 2020.',
  }, {
    img: 'img/shows/ars-banner.png',
    name: 'A Hot Piece of Ars Festival Showcase',
    desc: 'Festival show. Dunedin, Christchurch, Hastings, Palmerston North.',
  }, {
    img: 'img/shows/halloween-banner.png',
    name: 'Nightmare on 403 Princes St',
    desc: 'Open Mics from April 2018 to February 2020.',
  }, {
    img: 'img/shows/chip-banner.jpg',
    name: 'CHIP - The Comedy Experiencee',
    desc: 'Harriet Moir',
  }, {
    img: 'img/shows/stadej-fringe.jpg',
    name: 'Sh*t Towns & Dead End Jobs',
    desc: 'Mike Chewie Bennet, Nicholas Gray, and John Bagnall'
  }
];

for (e of eventData) {
  $('#past-events').append(`
  <div class="col s12 m6 l4">
    <div class="card hoverable">
      <div class="card-image">
        <img class="activator" src="${e.img}" alt="">
        <a class="activator btn-floating halfway-fab waves-effect waves-light red darken-2"><i class="material-icons">expand_less</i></a>
      </div>
      <div class="activator card-content">
        <p class="truncate">${e.name}</p>
      </div>
      <div class="card-reveal">
        <span class="card-title btn-floating red darken-2 right"><i class="material-icons right">close</i></span>
        <p>${e.desc}</p>
      </div>
    </div>
  </div>
  `);
}

/* photo gallery event */
      // <div class="col s12 m6 l4">
          //   <div class="card hoverable">
          //     <div class="card-image modal-trigger" href="#gallery-modal">
          //       <img src="img/shows/raw-banner.jpg" alt="">
          //       <a class="activator btn-floating halfway-fab waves-effect waves-light red darken-2"><i class="material-icons">launch</i></a>
          //     </div>
          //     <div class="card-content">
          //       <p class="truncate">Otago RAW Comedy Quest</p>
          //     </div>
          //   </div>
          //   <div id="gallery-modal" class="modal">
          //     <div class="modal-content">
          //       <!-- <a class="modal-close btn-floating red darken-2 right" href="#!"><i class="material-icons">close</i></a> -->
          //       <!-- <h4>Otago RAW Comedy Quest 2020</h4> -->
          //       <!-- <p class="btn-large btn-floating">First ever RAW Comedy Quest in Otago.</p> -->
      
          //       <div class="slider">
          //         <ul class="slides">
          //           <li><img src="img/raw/RAW_00.JPG"></li>
          //           <li><img src="img/raw/RAW_06.JPG"></li>
          //           <li><img src="img/raw/RAW_07.JPG"></li>
          //           <li><img src="img/raw/RAW_10.JPG"></li>
          //           <li><img src="img/raw/RAW_12.JPG"></li>
          //         </ul>
          //       </div>
          //       <a class="modal-close btn-floating red darken-2 right" href="#!"><i class="material-icons">close</i></a>
          //                 <p class="center">Innagural Otago RAW Comedy Quest in a basement theatre.</p>
      
          //     </div>
          //   </div>
          // </div>