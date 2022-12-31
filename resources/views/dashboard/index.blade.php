@extends('dashboard.layout.main')

@section('container')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 display-4" id="title">Dashboards</h1>
                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                    <ul class="breadcrumb pt-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboards</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Content Start -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Welcome Back, Asril Permana!</h1>
    </div>

    <!-- Cards Start -->
    <div class="row">
      <h5>Latest Couse</h5>
      <br><br>
 
 <div class="col-md-2 col-sm-12 mb-3">
   <div class="card">
     <img src="img/thumbnail/html.jpg" class="card-img-top" alt="...">
     <div class="card-body">
       <div class="card-title"><h4>Belajar HTML</h4></div>
       Hypertext Markup Language adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet.
     </div>
     <div class="card-footer">
       <a href="https://www.youtube.com/@sandhikagalihWPU" class="card-link">Pelajari</a>
     </div>
   </div>
 </div>

 <div class="col-md-2 col-sm-6 mb-3">
   <div class="card">
     <img src="img/thumbnail/laravel.jpg" class="card-img-top" alt="...">
     <div class="card-body">
       <div class="card-title"><h4>Belajar Laravel</h4></div>
       Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, serta menggunakan konsep Model-View-Controller.
     </div>
     <div class="card-footer">
       <a href="https://www.youtube.com/@sandhikagalihWPU" class="card-link">Pelajari</a>
     </div>
   </div>
 </div>

 <div class="col-md-2 col-sm-12 mb-3">
   <div class="card">
     <img src="img/thumbnail/css.png" class="card-img-top" alt="...">
     <div class="card-body">
       <div class="card-title"><h4>Belajar CSS</h4></div>
       Cascading Style Sheet merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam.
     </div>
     <div class="card-footer">
       <a href="https://www.youtube.com/@sandhikagalihWPU" class="card-link">Pelajari</a>
     </div>
   </div>
 </div>

 <div class="col-md-2 col-sm-6 mb-3">
   <div class="card">
     <img src="img/thumbnail/java.png" class="card-img-top" alt="...">
     <div class="card-body">
       <div class="card-title"><h4>Belajar Javascript</h4></div>
       JavaScript adalah suatu bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar web.
     </div>
     <div class="card-footer">
       <a href="https://www.youtube.com/@sandhikagalihWPU" class="card-link">Pelajari</a>
     </div>
   </div>
 </div>

 <div class="col-md-2 col-sm-12 mb-3">
   <div class="card">
     <img src="img/thumbnail/boot.png" class="card-img-top" alt="...">
     <div class="card-body">
       <div class="card-title"><h4>Belajar Bootstrap</h4></div>
       Bootstrap adalah kerangka kerja CSS yang sumber terbuka dan bebas untuk merancang situs web dan aplikasi web yang berisi berbagai templat desain.
     </div>
     <div class="card-footer">
       <a href="https://www.youtube.com/@sandhikagalihWPU" class="card-link">Pelajari</a>
     </div>
   </div>
 </div>
    <!-- Cards End -->

  <!-- Quiz Start -->
  <div class="row">
      <h5>Latest Quiz</h5>
      <br><br>
 
 <div class="col-md-2 col-sm-12 mb-3">
   <div class="card">
     <img src="img/thumbnail/quiz1.jfif" class="card-img-top" alt="...">
     <div class="card-body">
       <div class="card-title"><h4>Quiz HTML</h4></div>
       Setelah mempelajari HTML silahkan mencoba quiz untuk mengetahui serta meningkatkan skill kalian.
     </div>
     <div class="card-footer">
       <a href="https://www.youtube.com/@sandhikagalihWPU" class="card-link">Mulai</a>
     </div>
   </div>
 </div>
  <!-- Quiz End -->

@endsection
