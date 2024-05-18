
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>moviepedia</title>


  <link rel="icon" type="image/x-icon" href="/Images/favicon.ico">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">



  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">



</head>



<body>

  <h1 class="heading" style="text-align: center;"> MOVIEPEDIA </h1>


  <marquee behavior="" direction="left">
    <h3> Explore the latest  movies and TV shows live in theatres !!!</h3>
  </marquee>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="Images\logo.jpg" width="75px" height="75px" alt=""></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">

          <!-- <li class="nav-item">
               <button class="btn btn-dark "> <a style="margin-top: 5px ; color: aliceblue;" class="nav-link" href="https://www.hotstar.com/in"><b>watch movies here</b></a></button>
              </li> -->
          
          <li class="nav-item">
            <button class="btn btn-dark "><a style="margin-top: 5px ; color: aliceblue;" class="nav-link"
                href="index.php"><b>Trending</b></a></button>
          </li>
          <li class="nav-item">
            <button class="btn btn-dark "><a style="margin-top: 5px ; color: aliceblue;" class="nav-link"
                href="toprated.php"><b>Top-rated</b></a></button>
          </li>
          <li class="nav-item">
            <button class="btn btn-dark "><a style="margin-top: 5px ; color: aliceblue;" class="nav-link"
                href="popular.php"><b>Popular</b></a></button>
          </li>
          <li class="nav-item">
            <button class="btn btn-dark "><a style="margin-top: 5px; color: aliceblue;" class="nav-link"
                href="upcoming.php"><b>upcoming </b></a></button>
          </li>
          <li class="nav-item">
            <button class="btn btn-dark "><a style="margin-top: 5px; color: aliceblue;" class="nav-link"
                href="form.php"><b>contact us</b></a></button>
          </li>
          <li style="margin-top: 19px;" class="dropdown"><a href="#"><span
                style="margin-top: 5px ; color: aliceblue;"><b>Watch Movies here▼</b></span> <i
                class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://www.primevideo.com/">Amazon prime</a></li>

              <li><a href="https://www.netflix.com/in/">Netflix</a></li>
              <li><a href="https://www.hotstar.com/in/home?ref=%2Fin">Disney hostar</a></li>

              <li class="dropdown"><a href="#"><span>Free platforms></span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="https://www.youtube.com/">Youtube</a></li>
                  <li><a href="https://www.mxplayer.in/">MX Player</a></li>
                  <li><a href="https://www.jiocinema.com/">JIO Cinema</a></li>
                  <li><a href="https://www.tataplay.com/">TATA Play</a></li>
                  <li><a href="https://www.airtelxstream.in/">Airtel Xstream</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <form id="form">

      <input type="text" autocomplete="off" id="search" placeholder="Search" class="search">
    </form>
  </header>
  <main id="main">

  </main>
  <br>
  <footer style="color: aliceblue;" id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">

            <label for="">
              <h4>Log in for future updates </h4>
            </label>
            <a href="lf.php" id="login-button"> <button class="btn btn-light"
                style="border: 2px solid gold; text-decoration: solid;"><b>Log in</b></button></a>
                <label for="">
              <h4>Not yet registered , sign up here </h4> 
            </label>   
            <a href="signup.php" id="signup-button"> <button class="btn btn-light"
                style="border: 2px solid blue; text-decoration: solid;"><b>sign up</b></button></a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MOVIEPEDIA</h3>
            <p>
              Pune 411014<br>

              <strong>Phone:</strong> +91 5589 55488 55<br>
              <strong>Email:</strong> moviepedia@movies.com<br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div style="text-align: center;" class="copyright">
        &copy; Copyright <strong><span>Sanket Lipne</span></strong>. All Rights Reserved
      </div>
      <div style="text-align: center;" class="credits">
        Designed by <a href="Sanketlipne@gmail.com">Sanket Lipne</a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <script >
    const APIURL = "https://api.themoviedb.org/3/movie/now_playing?api_key=7456a33850084554e3a824c16cb3486b";

const IMGPATH = "https://image.tmdb.org/t/p/w1280";

const SEARCHAPI = "https://api.themoviedb.org/3/search/movie?&api_key=04c35731a5ee918f014970082a0088b1&query=";


const main = document.getElementById("main");
const form = document.getElementById("form");
const search = document.getElementById("search");


getMovies(APIURL);

async function getMovies(url) {
  const resp = await fetch(url);
  console.log(resp);
  const respData = await resp.json();
 

  
  // console.log(respData);
  
  showMovies(respData.results);
  // console.log(respData.results);

}

function showMovies(movies) {
  //clear main
  main.innerHTML = "";
  movies.forEach((movie) => {
    const { poster_path, title, vote_average, overview } = movie;
    
    const movieEl = document.createElement("div");
    movieEl.classList.add("movie");


    movieEl.innerHTML = `
       <img src="${IMGPATH + poster_path}" alt="${title}"/>

     <div class="movie-info">
         <h3>${title}</h3>
         <span class="${getClassByRate(vote_average)}">${vote_average}</span>
     </div> 

     <div class="overview">

     <h2>Overview:</h2>
     ${overview}
     </div>
     `;

    main.appendChild(movieEl)
  });

}


function getClassByRate(vote) {
  if (vote >= 8) {
    return 'green';
  } else if (vote >= 5) {
    return 'orange'
  } else {
    return 'red';
  }

}


form.addEventListener("submit", (e) => {
  e.preventDefault();


  const searchTerm = search.value;

  if (searchTerm) {

    getMovies(SEARCHAPI + searchTerm);

    search.value = "";
  }
});

on('click', '.navbar .dropdown > a', function(e) {
  if (select('#navbar').classList.contains('navbar-mobile')) {
    e.preventDefault()
    this.nextElementSibling.classList.toggle('dropdown-active')
  }
}, true)

  </script>
   <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/6422e82531ebfa0fe7f522f5/1gsk5lksd';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
</body>

</html>