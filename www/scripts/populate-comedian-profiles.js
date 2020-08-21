  var premium = [
    {
      name: 'Jonathan Falconer',
      flag: 'usa.png',
      social: {
        facebook: '',
        instagram: '',
        twitter: '',
        email: '',
        site: '', 
      },
      bio: ''
    },
    {
      name: 'Harriet Moir',
      flag: 'nz.png',
      social: {
        facebook: '',
        instagram: '',
        twitter: '',
        email: '',
        site: '', 
      },
      bio: ''
    },
    {
      name: 'Reuben Crisp',
      flag: 'nz.png',
      social: {
        facebook: 'facebook.com/phyterjet',
        instagram: 'instagram.com/reuben_crisp',
        twitter: 'twitter.com/reuben_crisp',
        email: 'reubencrimp@gmail.com',
        site: 'reubencrimp.com', 
      },
      bio: 'test bio.',
    },
    {
      name: 'Simon Kingsley-Holmes',
      flag: 'uk.png',
      social: {
        facebook: '',
        instagram: '',
        twitter: '',
        email: '',
        site: '', 
      },
      bio: ''
    },
    {
      name: 'Brittany Cardwell',
      flag: 'usa.png',
      social: {
        facebook: '',
        instagram: '',
        twitter: '',
        email: '',
        site: '', 
      },
      bio: ''
    },
    {
      name: 'Aaron Davies',
      flag: 'wales.png',
      social: {
        facebook: '',
        instagram: '',
        twitter: '',
        email: '',
        site: '', 
      },
      bio: ''
    },
  ];
  var comedians = [
    'Ian Loughran',
    'Nicholas Gray',
    'Annie Hayes',
    // 'Jimmy Fletcher',
    'Brent Harpur',
    'John Bagnall',
    'Richie Lewis',
    'Chewie',
    'Rob McLennan',
    'Elisa Rubin',
    'Joseph Corbett',
    'Moe Stebbings',
    'Gerard Dougherty',
    'Sarper Dorter',
    'Josh Ritchie',
    'Hamish Mabon-Ross',
    'Jenny Kendrick',
    'Demelza Daisy Ray',
    'Gerrit Gray',
    'Rachael Hodge',
    'Stefan Ayto',
    'Cheryl Anne Amos',
    'Nicola Brown',
    'Cullum Harmer',
    // 'William Warren',
    'Matt Wedd',
    // 'Simon McKinney',
    'Mike Thom',
  ];
  for (f of premium) {
    $("#comedian-list").append(
      `<div class="col s4 m3 l2">
        <div class="profile-card card hoverable">
          <div class="card-image modal-trigger waves-effect" href="#${f.name.replace(' ', '-')}-modal">
            <img class="" src="img/comedians/${f.name}.jpg" alt="">
          </div>
          <p class="center truncate red-text text-darken-2">${f.name}</p>
        </div>
      </div>
      <div id="${f.name.replace(' ', '-')}-modal" class="modal modal-fixed-footer">
        <div class="modal-content row">
          <div class="col s8 offset-s2 m6 l5">
            <img class="circle responsive-img" src="img/comedians/${f.name}.jpg" alt="">
            <div class="row"/>
            <div class="row">
              <div class="col s2 offset-s1"><a href="http://${f.social.facebook}" class="btn-floating btn-small black"><i class="fab fa-facebook"></i></a></div>
              <div class="col s2"><a href="http://${f.social.instagram}" class="btn-floating btn-small black"><i class="fab fa-instagram"></i></a></div>
              <div class="col s2"><a href="http://${f.social.twitter}" class="btn-floating btn-small black"><i class="fab fa-twitter"></i></a></div>
              <div class="col s2"><a href="mailto:${f.social.email}" class="btn-floating btn-small black"><i class="material-icons">email</i></a></div>
              <div class="col s2"><a href="http://${f.social.site}" class="btn-floating btn-small black"><i class="material-icons">public</i></a></div>

            </div>
          </div>
          <h5 class="col s10   m5 l6 red-text text-darken-4">${f.name}</h5>
          <img class="col s2 m1" title="NZ" src="img/${f.flag}" alt="" class="reponsive-img"/>
          <p class="col m6 l7">${f.bio}</h5>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
      </div>`
    );
  }
  for (f of comedians.sort()) {
    $("#comedian-list").append(
      `<div class="col s3 m2 l1">
        <div class="profile-card-small card hoverable">
          <div class="card-image">
            <img class="" src="img/comedians/${f}.jpg" alt="">
          </div>
          <p class="center truncate red-text text-darken-2">${f.split(' ')[0]}</p>
        </div>
      </div>`
    );
  }