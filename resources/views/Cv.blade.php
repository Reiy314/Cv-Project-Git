<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TugasCvPortofolio</title>
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Styles -->
    </head>

        <!-- Navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
            <!-- svg-->
            <div class="container-fluid">
                <a>
                  <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.3412 9.5C9.53284 8.96254 9.00008 8.04349 9.00008 7C9.00008 5.34315 10.3432 4 12.0001 4C13.5954 4 14.8999 5.24523 14.9946 6.81674M9.00558 12.1867C8.13595 12.618 7.07365 12.6199 6.16996 12.0981C4.73509 11.2697 4.24346 9.43495 5.07189 8.00007C5.86955 6.61848 7.60018 6.11139 
              9.0085 6.81513M10.6644 14.6867C10.6032 15.6555 10.0736 16.5764 9.16993 17.0981C7.73506 17.9266 5.90029 17.4349 5.07186 16.0001C4.2742 14.6185 4.70036 12.8662 6.01398 11.9984M13.3357 9.31328C13.397 8.3445 13.9265 7.4236 14.8302 6.90186C16.2651 6.07343 18.0998 6.56
              505 18.9283 7.99993C19.7259 9.38152 19.2998 11.1338 17.
              9862 12.0016M14.9946 11.8133C15.8642 11.382 16.9265 11.3801 17.8302 11.9019C19.2651 12.7303 19.7567 14.5651 18.9283 15.9999C18.1306 17.3815 16.4 17.8886 14.9917 17.1849M13.659 14.5C14.4674 15.0375 15.0001 15.9565 15.0001 17C15.0001 18.6569 13.657 20 12.0001 20C10.4048 20 9.10032 18.7548 9.00562 17.1833M15.0001 12C15.0001 13.6569 13.6569 15 12.0001 15C10.3432 15 9.00008 13.6569 9.00008 12C9.00008 10.3431 10.3432 9 12.0001 9C13.6569 9 15.0001 10.3431 15.0001 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
                </a>
            <!-- svg -->
        <a class="navbar-brand" href="#">My Portofolio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#skill">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#project">Project</a>
              </li>
          </div>
        </div>
      </nav>
        <!-- Navbar-->


<style>
body {
    background: url('gambar2.webp');
    background-size: auto ;
    font-family: 'Poppins';
}
.navbar {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 9999; /* nilai z-index tinggi untuk memastikan elemen navbar selalu berada di atas konten lainnya */
}
</style>
        <!--Body-->
        <br> <br> <br> <br> 

<section id="home">
    <div class="container">
      <div style="center">
  <div class="row">
    <div class="col-md-4">
      <div class="card1">
      <img src="{{ asset('gambar.jpg') }}" class="card img-fluid my-3 mx-auto d-block" alt="about me" width="300px" height="300px">

      </div>
    </div>
    <div class="col-md-8">
    <div class="white">
      <H3><b>Rayson Wijaya</b></H3>
      <p style="text-align: justify;"><B><U><I>Just imagination </B></U></I><br><br>Senior Administrative Assistant excited at the prospect of 
      transporting files and accounting support in a professional setting. 
      Adaptable worker recognized by peers for my effective communication 
      and creative thinking skills. Looking to apply my understanding of Meeting Minutes and 
      Workers' Compensation Knowledge at your establishment. 0..Senior Administrative Assistant excited at the prospect of 
      transporting files and accounting support in a professional setting. 
      Adaptable worker recognized by peers for my effective communication 
      and creative thinking skills. Looking to apply my understanding of Meeting Minutes and 
      Workers' Compensation Knowledge at your establishment. 0..Senior Administrative Assistant excited at the prospect of 
      transporting files and accounting support in a professional setting. 
      Adaptable worker recognized by peers for my effective communication 
      and creative thinking skills. Looking to apply my understanding of Meeting Minutes and 
      Workers' Compensation Knowledge at your establishment. 0..</p></div>
      
    <style>
.white {
color: white;
}
.card1 {
  opacity: 1; 
}
             
      </style>
    </div>
  </div>
 </div>
</div>

<br>
<style>
  .img-fluid {
    max-height: 300px;
  }

</style>
</section>
        <!--Body-->


<!--Skills-->

    <!--4Card-->
<secton id=skill>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <a class="img-fluid my-3 mx-auto ">
<svg width="200px" height="200px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25.187
2 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#330000"/>
<path d="M15.5686 19.5963H11.2297L10.3469 22.409C10.3224 22.5135 10.2262 22.5875 10.1215 22.5823H7.92384C7.79851 22.5823 7.75469 22.5117 7.79236 22.3704L11.549 11.2738C11.5866 11.1582 11.6242 11.0266 11.6617 10.8789C11.7109 10.6218 11.736 10.3606 11.7369 10.0987C11.7261
 10.0213 11.7941 9.95294 11.8683 9.96378H14.8549C14.9424 9.96378 14.9924 9.9959 15.0051 10.0601L19.269 22.3897C19.3065 22.5182 19.269 22.5824 19.1563 22.5823H16.7144C16.6288 22.5921 16.547 22.5334 16.5266 22.4475L15.5686 19.5963ZM11.9059 17.1689H14.8737C14.3861 15.5027 13.8358 13.8584 13.3898 12.1793C12.9086 13.8613 12.3836 15.5365 11.9059 17.1689Z" fill="#FF9A00"/>
<path d="M21.8045 12.0058C21.6129 12.0137 21.4219 11.98 21.2438 11.907C21.0658 11.834 20.9048 11.7232 20.7714 11.582C20.6384 11.4346 20.535 11.2618 20.4673 11.0733C20.3996 10.8849 20.3689 10.6846 20.3769 10.4839C20.3701 10.2852 20.4042 10.0873 20.477 9.90305C20.5499 9
.71881 20.6598 9.5524 20.7996 9.41468C20.938 9.27839 21.1014 9.17161 21.2804 9.10052C21.4593 9.02942 21.6502 8.99543 21.842 9.00049C22.2929 9.00049 22.6466 9.13856 22.9033 9.41468C23.0329 9.55818 23.1336 9.72648 23.1997 9.90995C23.2657 10.0934 23.2959 10.2885 23.2883 1
0.4839C23.2962 10.6853 23.2645 10.8864 23.1951 11.075C23.1258 11.2636 23.0201 11.436 22.8845 11.582C22.7428 11.7253 22.5736 11.8369 22.3878 11.9099C22.2019 11.9828 22.0033 12.0155 21.8045 12.0058ZM20.5084 22.3896V13.181C20.5084 13.0654 20.5583 13.0076 20.6587 13.0076H22.9691C23.0691 13.0076 23.1192 13.0654 23.1193 13.181V22.3896C23.1193 22.5182 23.0692 22.5824 22.9691 22.5823H20.6775C20.5648 22.5823 20.5084 22.5181 20.5084 22.3896Z" fill="#FF9A00"/>
</svg>
      </a>
      <div class="card-body">
        <h5 class="card-title"><b>Adobe Illustrator</b></h5>
        <p class="card-text" style="text-align: justify;">Adobe Illustrator is a vector graphics software that allows users to create and edit digital artwork using geometric shapes, 
          lines, and curves. It is widely used by graphic designers, artists, and illustrators to create logos, icons, illustrations, and other types of 
          visual content. The software offers a variety of drawing tools, color palettes, and effects that allow users to create high-quality artwork for 
          both print and digital media. With its user-friendly interface and powerful features, 
          Adobe Illustrator has become a popular choice among professionals and beginners alike.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">10 Month Experience</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a class="img-fluid my-3 mx-auto ">
    <svg width="200px" height="200px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25
.1872 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#001E36"/>
<path d="M8 22.5162V10.2034C8 10.1197 8.035 10.0718 8.11667 10.0718C9.3223 10.0718 10.5274 10 11.7333 10C13.6902 10 15.809 10.6691 16.5517 12.7162C16.7267 13.2188 16.82 13.7333 16.82 14.2718C16.82 15.3009 16.5867 16.1504 16.12 16.8205C14.8164 18.6923 12.557 18.6632 10.5317 18.663
2V22.5043C10.5475 22.618 10.4506 22.6718 10.3567 22.6718H8.14C8.04667 22.6718 8 22.6239 8 22.5162ZM10.5433 12.3812V16.4017C11.3464 16.4605 12.1867 16.4669 12.9583 16.2103C13.8102 15.9645 14.2767 15.2272 14.2767 14.3436C14.3003 13.5907 13.8901 12.8683 13.1917 12.5966C12.4294 12.2796 11.3662 12.2606 10.5433 12.3812Z" fill="#31A8FF"/>
<path d="M24.0967 15.6074C23.7437 15.4213 23.3677 15.2852 22.979 15.2028C22.4796 15.0853 20.5098 14.6737 20.509 15.7037C20.5265 16.2787 21.4393 16.5604 21.8426 16.7247C23.2585 17.2108 24.8607 18.0797 24.8292 19.8264C24.8725 22.0008 22.7657 22.8701 20.9598 22.8703C20.0197 22.88 19.0
403 22.7344 18.1799 22.3308C18.0977 22.2873 18.0449 22.1944 18.0484 22.0996V20.019C18.0391 19.9356 18.1287 19.8627 18.1987 19.9227C19.0417 20.4325 20.0409 20.6801 21.0162 20.6933C21.4467 20.6933 22.2999 20.6516 22.2935 20.019C22.2935 19.412 21.2728 19.1329 20.8659 18.9787C20.2761 18.7682 19
.7169 18.4765 19.2036 18.1118C18.4862 17.6001 18.0362 16.7797 18.0484 15.8771C18.0442 13.8297 19.9835 12.9107 21.73 12.9103C22.5464 12.9035 23.4232 12.964 24.1832 13.2956C24.2925 13.3277 24.3151 13.4429 24.3147 13.546V15.4918C24.3216 15.6126 24.1875 15.6537 24.0967 15.6074Z" fill="#31A8FF"/>
</svg>
      </a>
      <div class="card-body">
        <h5 class="card-title"><b>Adobe Photoshop</b></h5>
        <p class="card-text" style="text-align: justify;">Adobe Photoshop is a powerful image editing software that allows users to manipulate, retouch, 
        and enhance digital images. It is widely used by photographers, graphic designers, and artists to edit photos, create digital art, and design visual 
        content for various media platforms. The software offers a variety of tools and features such as layers, filters, and effects that allow users to create stunning
         visuals for both personal and professional use. With its extensive range of capabilities and user-friendly interface, Adobe Photoshop has become 
         a go-to software for image editing and design.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">1 Year Experience</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a class="img-fluid my-3 mx-auto ">
    <svg width="200px" height="200px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25.1872 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#470137"/>
<path d="M16.6465 10.2338L13.1528 16.1482L16.8906 22.4285C16.9683 22.5709 16.8906 22.6024 16.778 22.6024H14.1108C13.9229 22.6024 13.7914 22.5956 13.7163 22.4671C13.4656 21.9662 13.2152 21.4685 12.9649 20.974C12.7143 20.4797 12.4482 19.9756 12.1667 19.4617C11.8849 18.9482 11.6063 18.4281 11.3308 17.9013C11.0802 18.4151 10.8015 18.9288 10.5325 19.4425C10.2631 19.9563 9.997 20.4668 9.73421 20.974C9.47126 21.4815 9.20203 21.9856 8.92655 22.4863C8.87636 22.6019 8.78858 22.6138 8.66353 22.6138H6.09026C5.98915 22.6138 5.97695 22.5378 6.03392 22.4478L9.65907 16.3408L6.1278 10.2145C6.06366 10.1271 6.11886 10.034 6.22174 10.0411H8.87015C8.98483 10.0347 9.08618 10.0779 9.15191 10.176C9.37732 10.6898 9.62776 11.2036 9.90323 11.7172C10.1785 12.231 10.4572 12.7384 10.7391 13.2391C11.0209 13.74 11.2995 14.2473 11.5374 14.7611C11.7877 14.2346 12.0413 13.7209 12.2981 13.2199C12.5547 12.719 12.8176 12.2149 13.087 11.7076C13.3562 11.2004 13.616 10.6963 13.8665 10.1953C13.8998 10.0854 13.9794 10.0297 14.0919 10.0411H16.5525C16.6465 10.0411 16.6853 10.1694 16.6465 10.2338Z" fill="#FF61F6"/>
<path d="M22.0371 22.8525C20.3806 22.8784 18.6455 22.1963 17.7733 20.6852C17.3475 19.9597 17.1346 19.0511 17.1347 17.9592C17.1276 17.075 17.3479 16.2045 17.7733 15.4355C18.871 13.4733 21.0824 12.7381 23.1829 12.9311V9.13586C23.1829 9.04615 23.2205 9.00101 23.2956 9.00101H25.6623C25.727 8.99153 25.7842 9.05023 25.775 9.11658V20.5022C25.775 20.9719 25.8216 21.44 25.8502 21.9085C25.8548 21.9885 25.8085 22.0677 25.7374 22.1012C24.5681 22.6014 23.3028 22.8467 22.0371 22.8525ZM23.1829 20.4636V15.2043C21.4673 14.7277 19.8017 16.0344 19.8019 17.8436C19.7612 19.7141 21.3736 21.0064 23.1829 20.4636Z" fill="#FF61F6"/>
</svg>
      </a>
      <div class="card-body">
        <h5 class="card-title"><b>Figma</b></b5>

        <p class="card-text" style="text-align: justify;">Figma is a web-based interface design tool that allows designers and teams to create, collaborate, and share designs in 
        real-time. It offers a range of features including vector editing tools, prototyping, and design systems that make it easy to create and maintain design consistency. 
        Figma is also cloud-based, allowing for easy access to designs from anywhere with an internet connection. Its collaborative features make it an ideal choice for teams 
        working on design projects, from small startups to large corporations.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">6 Month Experience</small>
      </div>
    </div>
  </div>
</div>
</section>
    <!--4Card-->
 
    <!--Skills-->

    <hr><hr><hr>
  <!--Project-->
  <section id="project">
  <div class="white">
  <div class="container" >
  <div class="row">
    <div class="col-md-4">
      <img src="project.jpg" class="img-fluid" alt="project">
    </div>
    <div class="col-md-8">
      <div style="margin-top: 100px;">
      <h2><B>Design Character Animation 2D "Reiyy"</B></h2>
      <p>The project that was carried out while I was practicing fieldwork at the Maitreyawira Vocational High School Batam in 2022 yesterday.</p>
      </div>
    </div>
  </div>
</div>

</section>
  <!--Project-->

    <!--Footer-->
<footer>
  <div class="white">
  <div class="container">
    <p>&copy; 2023 Rayson wijaya.</p>
  </div>
</div>
</footer>

<style>
.white {
color: white;
}          
</style>
    <!--Footer-->

    </body>
</html>
