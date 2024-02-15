<?php
include('konek.php');
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="body.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous' />
   <style>
      @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");

      /* This pen */
      body {
         font-family: "Baloo 2", cursive;
         font-size: 16px;
         color: #ffffff;
         text-rendering: optimizeLegibility;
         font-weight: initial;
      }

      .dark {
         background: #110f16;
      }


      .light {
         background: #f3f5f7;
      }

      a,
      a:hover {
         text-decoration: none;
         transition: color 0.3s ease-in-out;
      }

      #pageHeaderTitle {
         margin: 2rem 0;
         text-transform: uppercase;
         text-align: center;
         font-size: 2.5rem;
      }

      /* Cards */
      .postcard {
         flex-wrap: wrap;
         display: flex;

         box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
         border-radius: 10px;
         margin: 0 0 2rem 0;
         overflow: hidden;
         position: relative;
         color: #ffffff;

         &.dark {
            background-color: #18151f;
         }

         &.light {
            background-color: #e1e5ea;
         }

         .t-dark {
            color: #18151f;
         }

         a {
            color: inherit;
         }

         h1,
         .h1 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
         }

         .small {
            font-size: 80%;
         }

         .postcard__title {
            font-size: 1.75rem;
         }

         .postcard__img {
            max-height: 180px;
            width: 100%;
            object-fit: cover;
            position: relative;
         }

         .postcard__img_link {
            display: contents;
         }

         .postcard__bar {
            width: 50px;
            height: 10px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: #424242;
            transition: width 0.2s ease;
         }

         .postcard__text {
            padding: 1.5rem;
            position: relative;
            display: flex;
            flex-direction: column;
         }

         .postcard__preview-txt {
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: justify;
            height: 100%;
         }

         .postcard__tagbox {
            display: flex;
            flex-flow: row wrap;
            font-size: 14px;
            margin: 20px 0 0 0;
            padding: 0;
            justify-content: center;

            .tag__item {
               display: inline-block;
               background: rgba(83, 83, 83, 0.4);
               border-radius: 3px;
               padding: 2.5px 10px;
               margin: 0 5px 5px 0;
               cursor: default;
               user-select: none;
               transition: background-color 0.3s;

               &:hover {
                  background: rgba(83, 83, 83, 0.8);
               }
            }
         }

         &:before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: linear-gradient(-70deg, #424242, transparent 50%);
            opacity: 1;
            border-radius: 10px;
         }

         &:hover .postcard__bar {
            width: 100px;
         }
      }

      @media screen and (min-width: 769px) {
         .postcard {
            flex-wrap: inherit;

            .postcard__title {
               font-size: 2rem;
            }

            .postcard__tagbox {
               justify-content: start;
            }

            .postcard__img {
               max-width: 300px;
               max-height: 100%;
               transition: transform 0.3s ease;
            }

            .postcard__text {
               padding: 3rem;
               width: 100%;
            }

            .media.postcard__text:before {
               content: "";
               position: absolute;
               display: block;
               background: #18151f;
               top: -20%;
               height: 130%;
               width: 55px;
            }

            &:hover .postcard__img {
               transform: scale(1.1);
            }

            &:nth-child(2n+1) {
               flex-direction: row;
            }

            &:nth-child(2n+0) {
               flex-direction: row-reverse;
            }

            &:nth-child(2n+1) .postcard__text::before {
               left: -12px !important;
               transform: rotate(4deg);
            }

            &:nth-child(2n+0) .postcard__text::before {
               right: -12px !important;
               transform: rotate(-4deg);
            }
         }
      }

      @media screen and (min-width: 1024px) {
         .postcard__text {
            padding: 2rem 3.5rem;
         }

         .postcard__text:before {
            content: "";
            position: absolute;
            display: block;

            top: -20%;
            height: 130%;
            width: 55px;
         }

         .postcard.dark {
            .postcard__text:before {
               background: #18151f;
            }
         }

         .postcard.light {
            .postcard__text:before {
               background: #e1e5ea;
            }
         }
      }

   </style>
</head>

<body class="utama">
   <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-light navbar-light">
         <div class="container">
            <a class="navbar-brand" href="#"><img id="valorant-logo" src="gambar/valorant_logo.png" alt="MDB Logo" draggable="false" style="height: 50px; background-color: red;" /></a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto align-items-center">
                  <li class="nav-item">
                     <a class="nav-link mx-2" href="halmut.php"><i class="fa-solid fa-house"></i> Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link mx-2" href="#Premium"><i class="fa-solid fa-cart-shopping"></i> Premium</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link mx-2" href="#Map"><i class="fa-solid fa-map"></i> Map</a>
                  </li>
                  <li class="nav-item ms-3">
                     <a class="btn btn-primary btn-rounded" href="admin.php">Admin</a>
                  </li>
                  <li class="nav-item ms-3">
                     <a class="btn btn-primary btn-rounded" href="admin.php" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign In</a>
                  </li>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<!-- modal -->
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Pendaftaran</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="proses-daftar.php" class="row g-3" style="color: black;">
                <input type="hidden" name="daftar">
                <div class="col-md-4">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputNama">
                </div>
                <div class="col-md-4">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail">
                </div>
                <div class="col-md-4">
                    <label for="inputPhone" class="form-label">Phone Number</label>
                    <input type="text" name="hp" class="form-control" id="inputPhone">
                </div>
                <div class="col-md-6">
                    <label for="inputJK" class="form-label">Jenis Kelamin</label>
                    <select name="jk" id="inputJK" class="form-select">
                        <option selected>Pilih Jenis kelamin</option>
                        <option value="laki-laki">Laki Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputBayar" class="form-label">Pembayaran</label>
                    <select name="bayar" id="inputBayar" class="form-select">
                        <option selected>Pilih</option>
                        <option value="tunai">Tunai</option>
                        <option value="debit">Debit</option>
                        <option value="kredit">Kredit</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputPaket" class="form-label">Pilih Paket</label>
                    <select name="paket" id="inputPaket" class="form-select">
                        <option selected>Silahkan Pilih</option>
                        <option value="newbie">Newbie</option>
                        <option value="beginer">Beginer</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

                  <!-- end modal -->
               </ul>
            </div>
         </div>
      </nav>
      <!-- Navbar -->
   </header>

   <section id="Home" class="slider_section" id="home">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="gambar/valorant1.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="gambar/valorant2.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="gambar/valorant3.jpg" class="d-block w-100 h-100" alt="...">
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>
   </section>


   <section id="Premium">
      <div class="whyschose">
         <div class="container">
         </div>
      </div>
      <section class="dark">
         <div class="container py-4">
            <div class="title">
               <h2 style="color: white;">Premium <strong class="black">Pass</strong></h2>
            </div>

            <article class="postcard dark blue">
               <a class="postcard__img_link" href="#">
                  <img class="postcard__img" src="gambar/1.png" alt="Image Title" />
               </a>
               <div class="postcard__text">
                  <h1 class="postcard__title blue"><a href="#">Newbie</a></h1>
                  <div class="postcard__subtitle small">

                  </div>
                  <div class="postcard__bar"></div>
                  <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                  <ul class="postcard__tagbox">
                     <li class="tag__item"><i class="fas fa-tag mr-2"></i> $1.99</li>
                     <li class="tag__item play blue">
                        <a href="#"><i class="fas fa-play mr-2"></i> Buy Now</a>
                     </li>
                  </ul>
               </div>
            </article>
            <article class="postcard dark red">
               <a class="postcard__img_link" href="#">
                  <img class="postcard__img" src="gambar/2.png" alt="Image Title" />
               </a>
               <div class="postcard__text">
                  <h1 class="postcard__title red"><a href="#">Beginer</a></h1>
                  <div class="postcard__subtitle small">
                  </div>
                  <div class="postcard__bar"></div>
                  <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                  <ul class="postcard__tagbox">
                     <li class="tag__item"><i class="fas fa-tag mr-2"></i> $2.99</li>
                     <li class="tag__item play red">
                        <a href="#"><i class="fas fa-play mr-2"></i> Buy Now</a>
                     </li>
                  </ul>
               </div>
            </article>
            <article class="postcard dark green">
               <a class="postcard__img_link" href="#">
                  <img class="postcard__img" src="gambar/WW.png" alt="Image Title" />
               </a>
               <div class="postcard__text">
                  <h1 class="postcard__title green"><a href="#">Premium</a></h1>
                  <div class="postcard__subtitle small">
                  </div>
                  <div class="postcard__bar"></div>
                  <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                  <ul class="postcard__tagbox">
                     <li class="tag__item"><i class="fas fa-tag mr-2"></i> $3.99</li>
                     <li class="tag__item play green">
                        <a href="#"><i class="fas fa-play mr-2"></i> Buy Now</a>
                     </li>
                  </ul>
               </div>
            </article>
         </div>
      </section>


   </section>
   <section id="Map">
      <section class="dark">
         <div class="container py-4">
            <div class="title">
               <h2 style="color: white;">Our <strong class="black">Maps</strong></h2>
            </div>

            <article class="postcard dark blue">
               <a class="postcard__img_link" href="#">
                  <img class="postcard__img" src="gambar/lotus1.jpg" alt="Image Title" />
               </a>
               <div class="postcard__text">
                  <h1 class="postcard__title blue"><a href="#">Lotus Maps</a></h1>
                  <div class="postcard__subtitle small">

                  </div>
                  <div class="postcard__bar"></div>
                  <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                  <ul class="postcard__tagbox">
                     <li class="tag__item"><i class="fas fa-tag mr-2"></i> Hot</li>
                     <li class="tag__item play blue">
                        <a href="#"><i class="fas fa-play mr-2"></i> Learn More</a>
                     </li>
                  </ul>
               </div>
            </article>
            <article class="postcard dark red">
               <a class="postcard__img_link" href="#">
                  <img class="postcard__img" src="gambar/bind1.jpg" alt="Image Title" />
               </a>
               <div class="postcard__text">
                  <h1 class="postcard__title red"><a href="#">Bind Maps</a></h1>
                  <div class="postcard__subtitle small">
                  </div>
                  <div class="postcard__bar"></div>
                  <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                  <ul class="postcard__tagbox">
                     <li class="tag__item"><i class="fas fa-tag mr-2"></i> Hot</li>
                     <li class="tag__item play red">
                        <a href="#"><i class="fas fa-play mr-2"></i> Learn More</a>
                     </li>
                  </ul>
               </div>
            </article>
            <article class="postcard dark green">
               <a class="postcard__img_link" href="#">
                  <img class="postcard__img" src="gambar/breeze.jpg" alt="Image Title" />
               </a>
               <div class="postcard__text">
                  <h1 class="postcard__title green"><a href="#">Breezee Maps</a></h1>
                  <div class="postcard__subtitle small">
                  </div>
                  <div class="postcard__bar"></div>
                  <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                  <ul class="postcard__tagbox">
                     <li class="tag__item"><i class="fas fa-tag mr-2"></i> Hot</li>
                     <li class="tag__item play green">
                        <a href="#"><i class="fas fa-play mr-2"></i> Learn Mpre</a>
                     </li>
                  </ul>
               </div>
            </article>
         </div>
      </section>
   </section>
   </section>
   <section id="Contact">
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <ul class="sociel">
                        <li> <a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li> <a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li> <a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li> <a href="#"><i class="fa-brands fa-github"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="contact">
                        <h3>Alamat</h3>
                        <span>SMKN 1 JAKARTA<br>
                           JL.Budi Utomo NO.7</span>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="contact">
                        <h3>Anyone Link</h3>
                        <ul class="lik">
                           <li> <a href="#">About us</a></li>
                           <li> <a href="#">Terms and conditions</a></li>
                           <li> <a href="#">Privacy policy</a></li>
                           <li> <a href="#">News</a></li>
                           <li> <a href="#">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="contact">
                        <h3>Premium</h3>
                        <ul class="lik">
                           <li> <a href="#">Newbie</a></li>
                           <li> <a href="#">Beginer</a></li>
                           <li> <a href="#">Premium</a></li>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-5">
                     <div class="contact">
                        <h3>About</h3>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, animi assumenda veritatis architecto modi earum quae quidem distinctio illo ducimus libero ad? Pariatur, esse ut id vel quibusdam error modi. </span>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </footr>
   </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>