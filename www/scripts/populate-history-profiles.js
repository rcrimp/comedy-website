  var profiles = [
    {
      name: 'Patrick Davies',
      img: 'img/history/Patrick Davies.jpg',
      bio: 'Actor and Director. Youth theatre, school theatresports. Governance with various art Trusts. Now a board member on the New Zealand Comedy Guild. ',
      awards: '',
      links: '',
    },
    {
      name: 'Te Radar',
      img: 'img/history/TeRadar.jpg',
      bio: 'Member of the sketch troupe Spleen alongside Jesse Griffin, Duncan Sarkies, and Aaron Watson.'
      + ' The sketch troupe won 1st place at the 1993 New Zealand University Comedy Competition in Wellington.'
      + ' Te Radar has since gone on to... ',
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
      bio:  '' +
      'The youngest ever director of the capping shows in its 126 year history.' +
      ' Classically trained' + 'While completing his degree in Theatre Studies at Otago, Jeremy showed great promise as a performer taking lead roles in Hamlet (Saint James Theatre (now Rialto)), Waiting for Godot (Globe), and Je ne Parle Francais' +
      ' His first foray into performance was improv and theatre sports at Otago Boys High School.' +
      ' His first standup set was at the Loaded Goblin (now U-Bar) open mic in 1995, his friend introduced him to the stage unplanned as there were no acts left.' +
      ' Jeremy saw Spleen perform during his orientation at Otago University, he cites them as the inspiration for his own sketch group This is not a Drill (TnD).' + 
      ' The TnD sketch comedy was held every wednesday in the back room of Ruby and the Dust (now CBK) from 96-97, alongside Patrick Davies, Simon McKinney, Julian Wilson and guest starring many of their friends.' + 
      ' Like Spleen, TnD went on to win the NZ University Comedy Competition' + 
      ' He began his comedy career as a musical comedian, but has since become one of New Zealands formost political comedians.',
      awards: '',
      links: '',
    },
    {
      name: 'Simon McKinney',
      img: 'img/history/Simon McKinney.jpg',
      bio: 'Sketch group Speak Easy, Look Both Ways, Nigel Chin. Millenium roadtrip with Jeremy Elwood. Cadrona Hotel. ',
      awards: '',
      links: '',
    },
    {
      name: 'Josh Thomson',
      img: 'img/history/Josh Thomson.jpg',
      bio: 'Timaru. Sketch group alongside Aaron Hawkins (current current Mayor of Dunedin). Ben Simmons.',
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
      bio: 'Known for his colourful atire and running gigs in student flats.' +
      ' The local comedians of his era (Simon Kingsley-Holmes, Brittany Cardwell, Hugo Huntington, Feather Shaw, Andrew Mekhail, ...) performed at these flat gigs as did many pro comedians who travelled down for the shows (Ben Hurley, Urzila Carlson, Tarun Mohanbhai, Nick Rado, Steve Wrigley, ...). ' +
      ' Skivvy went on to make his fortune inventing the Shakti Mat. Little is known of his current whereabouts.',
      awards: '',
      links: '',
    },
    {
      name: 'Simon Kingsley-Holmes',
      img: 'img/history/Simon Kingsley-Holmes.jpg',
      bio: 'Ran open mics from 2014 till 2017. Performed in the Flat Gigs Dunedin series. Multiple Fringe Festivals. Considered a local legend by those who met him.',
      awards: '',
      links: '',
    },
    {
      name: 'Brittany Cardwell',
      img: 'img/history/Brittany Cardwell.jpg',
      bio: 'Got her PhD in psychology at Otago U. Currently resides in NYC performing comedy there.',
      awards: '',
      links: '',
    },
  ];

  let i = 0;
  for (f of profiles) {
    let bioClass = 'col m8 l7 offset-l1';
    let imgClass = 'col s8 m4 l3 offset-s2';
    if (i % 2 == 1) {
      bioClass += ' push-l3 push-m4'
      imgClass += ' pull-l7 pull-m8'
    }
    if (![3, 9, 10, 11, 12].includes(i)) {
      f.img = 'img/history/blank.jpg';
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
    `);}
/*
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
  */