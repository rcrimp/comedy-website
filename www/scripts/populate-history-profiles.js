  var profiles = [
    {
      name: 'Patrick Davies',
      img: 'img/history/Patrick Davies.jpg',
      bio: 'Theatresports. Now a board member on the New Zealand Comedy Guild',
      awards: '',
      links: '',
    },
    {
      name: 'Te Radar',
      img: 'img/history/TeRadar.jpg',
      bio: 'Founding member of the sketch group Spleen while studying at Otago University, alongside Jesse Griffin, Aaron Watson, and Duncan Sarkies. The sketch troupe won 1st place at the 1993 NZ University Comedy Competition in Wellington',
      awards: '',
      links: '',
    },
    {
      name: 'Jesse Griffin',
      img: 'img/history/Jesse Griffin.jpg',
      bio: 'Spleen. Wilson Dixon.',
      awards: '',
      links: '',
    },
    {
      name: 'Jeremy Elwood',
      img: 'img/history/Jeremy Elwood.jpg',
      bio: 'Alot to write',
      awards: '',
      links: '',
    },
    {
      name: 'Simon McKinney',
      img: 'img/history/Simon McKinney.jpg',
      bio: 'To interview soon.',
      awards: '',
      links: '',
    },
    {
      name: 'Josh Thomson',
      img: 'img/history/Josh Thomson.jpg',
      bio: 'Sketch group alongside current Aaron Hawkins the current Mayor of Dunedin.',
      awards: '',
      links: '',
    },
    {
      name: 'Sam Smith',
      img: 'img/history/Sam Smith.jpg',
      bio: 'Studied dentistry. Writer for Jono and Ben at Ten, 7 Days, and The Project.',
      awards: '',
      links: '',
    },
    {
      name: 'Tony Lyall',
      img: 'img/history/Tony Lyall.jpg',
      bio: '2006.',
      awards: '',
      links: '',
    },
    {
      name: 'Louise Beuvink',
      img: 'img/history/Louise Beuvink.jpg',
      bio: 'Studied marketing. Capping Show. peer-pressured into doing a stand-up comedy show in 2009. Dunedins open-mic circuit: Re:Fuel, the Bog, the Church on Dundas St',
      awards: '',
      links: '',
    },
    {
      name: 'Dan Brader',
      img: 'img/history/Dan Brader.jpg',
      bio: '2011-2012 Dan Braders Comedy Den at Re:Feul',
      links: '',
    },
    {
      name: 'Skivvy Jon',
      img: 'img/history/Skivvy Jon.jpg',
      bio: 'Famous for both his colourful atire and running gigs in student flats. Performing at these flag gigs were the local comedians at the time (Simon Kingsley-Holmes, Brittany Cardwell, Hugo Huntington, Feather Shaw, Andrew Mekhail, and others), as well as Ben Hurley, Urzila Carlson, Tarun Mohanbhai, Nick Rado, and Steve Wrigley. Skivvy later went on to invent the Shakti Mat. Little is known of his current whereabouts.',
      awards: '',
      links: '',
    },
    {
      name: 'Simon Kingsley-Holmes',
      img: 'img/history/Simon Kingsley-Holmes.jpg',
      bio: 'Ran open mics from 2014 till 2017. Performed in the Flat Gigs Dunedin series.',
      awards: '',
      links: '',
    },
    {
      name: 'Brittany Cardwell',
      img: 'img/history/Brittany Cardwell.jpg',
      bio: 'PhD in psychology now back doing standup in NYC.',
      awards: '',
      links: '',
    },
  ];

  let i = 0;
  for (f of profiles) {
    let bioClass = 'col m8 l7 offset-l1';
    let imgClass = 'col s8 m4 l3 offset-s2';
    if (i % 2 == 1 || true) {
      bioClass += ' push-l3 push-m4'
      imgClass += ' pull-l7 pull-m8'
    }
    if (![3, 9, 10, 11, 12].includes(i)) {
      imgClass += ' hide';
    }
    i++;

    $("#historical-profiles").append(
      `<div id="historical-profile" class="row">
      <div class="col s12">
        <h3 class="center-align">${f.name}</h3>
      </div>
      <div class="${bioClass}">
        <p>${f.bio}</p>
      </div>
      <div class="${imgClass}">
        <img class="responsive-img" src="${f.img}" alt="">
      </div>
    </div>

    <div class="row">
      <div class="col s6 m6 l5 offset-l1">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">star</i>Accolades</div>
            <div class="collapsible-body">
            
            </div>
          </li>
        </ul>
      </div>
      <div class="col s6 m6 l5">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">people</i>Follow</div>
            <div class="collapsible-body">
            </div>
          </li>
        </ul>
      </div>
    </div>`
    );
  }