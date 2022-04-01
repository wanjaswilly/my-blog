<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       <link href="{{ url('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <!-- header -->
    <nav id="header">
      <a href="{{ url('/') }}">wanjaswilly</a>
      <a href="{{ url('/aticles') }}">Articles</a>
      <a href="{{ url('/author') }}">Author</a>
    </nav>
    <!-- body of the page -->
    <div id="content-div">
      <!-- heading -->
      <h3>Welcome to simple beginings,</h3>
      <i id="tagline"
        >written by wilson on 19<sup>th</sup> February 2022</i
      >
      <p>
        <b
          >The sweet sleep of procastination.</b
        >
      </p>
      <p>In its begining, the idea is always a sweet concotion, aging slowly, as the brewer,the idealist keeps adding twists and turns, and given time 
        like fine wine,the idea to materialise into a full brown expensive bottle, a fully developed idea. For the case of the brewer, consistency is always the 
        key to brewing fine wine.
      </p>
      <p>The biggest enemy of consistency the sweet sleep of procastination, or should i say the cunning monster of waiting for the perfect time to launch or perfect
        plan of execution. Most of the times, they fall victim of the sweet naps of my comfort to the point of finding themselves being carried away by the runoff after they 
      have slumbered in the depths of next time is the better time. I would argue that perfectionist and idealists are the perfect procastinators, reason being they(or should i include myself)
    feel they cannot act upon an imperfection.</p>
      <p>
        They lose many opportunities, on the grounds that they are not the perfect prepared person for a specific task or even fail to implement any of their ideas as they fall short of
        my high set standard of creativity or geniusness(is there such a word??). they overthink alot, playing out different outcomes in the future, most of which are fails and they catch their better self
         to the point they are glued to the fact that it would do more harm than good.
      </p>
      <b>chew before you swallow</b>
      <p>
        The the depest fear of an idealist is the fear of chocking, their idea failing and bringing them down with it. The idealist is in a paradise, their head, where magic and charm are the tool of
         of their work. They often fear practice, feeling superior in their egoistic selves to step down a notch and start on the first square. As we all know, many variables come into play when a plan is 
         set into motion physically, which idealists and perfectionists lack in their 'imaginative reality'. if they ever come to a fine tuned idea, they fall short of chewing(practice and experiment) and jump straight to swallowing
         (starting and implementing their idea),without thinking of what they are up against or what they stand to lose as long as it played perfect in their imagination.
      </p>
      <b>slaying the beast</b>
      <p>
        Upon the addiction to sweet sleep, the victims mostly gets traumatised by success of others, especially those they thought of lower mental capability. Some plunge into drugs and the outcome is sickening.
        On my thought, the power of consistency is the sharp sword to the heard to the monster. Inegligible consistent efforts while numbing out the repercusions of the efforts as long as the go hand in hand with the mission at hand 
        are the key to unlocking full potential of the perfectionists idealists. Most of them like challenging problems. The problems come when they find gigantic problems which they feel they have the key to unlocking the solution.
         My greatest advice would be to archive the bigger problems, start with the smallest ones as they pose small tricks to break the big moulds. 
      </p>
      <p>With all that said, i hope you enjoyed my article. If you have a procastinator friend, acquintance or a family member, send them this article it might help them turn on the wheels of self realisation and actualization.</p>
      <p>
       Follow the Author:
       <br>&emsp;&emsp;&emsp;&emsp;Twitter&emsp;&nbsp; <a href="www.twitter.com/wanjaswilly">@wanjaswilly</a>,
       <br>&emsp;&emsp;&emsp;&emsp;Facebook&nbsp; <a href="www.facebook.com/wanjaswilly">@wanja wilson</a> 
       <br>&emsp;&emsp;&emsp;&emsp;Instagram <a href="www.instagram.com/wanjaswilly">@wanjaswilly</a>
      </p>
      <h4>Related articles</h4>
      <div class="row">
        <div class="other-articles">
          <div class="card">
            <h3>Making the Harsh decisions</h3>
            <p>This will come in the future, maybe next week. I am still struggling with procastination ;-)</p>
            <p>Thanks.</p>
          </div>
        </div>
    
        <div class="other-articles">
          <div class="card">
            <h3>Societal expectation vs own will</h3>
            <p>This will come in the future, maybe next week. I am still struggling with procastination ;-)</p>
            <p>Thanks.</p>
          </div>
        </div>
      </div>
    </div>
    <footer>
        ©2022 | wanjaswilly
    </footer>
    <script src="{{ url('js/app.js') }}"></script>
  </body>
</html>