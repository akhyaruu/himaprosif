@extends('layouts.user')
@section('link-home','active')
@section('main')

<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay" style="background-image: url({{asset('images/baner.jpg')}})">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-6">
                <h1>Himaprosif</h1>
                <p class="mb-5">Himpunan Mahasiswa Program Studi Sistem Informasi atau yang di singkat HIMAPROSIF UIN Sunan Ampel Surabaya merupakan sebuah organisasi mahasiswa internal di Kampus UINSA yang mempunyai tujuan untuk mengembangkan kreativitas mahasiswa pada umumnya dan Mahasiswa Sistem Informasi UINSA khususnya.</p>
                <form action="#">
                <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Cari event">
                    <input type="submit" class="btn btn-success text-white px-4 animated bounce infinite" value="Cari">
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- END .ftco-cover-1 -->
    <div class="ftco-service-image-1 pb-5">
        <div class="container">
            <div class="owl-carousel owl-all">
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <div class="text-center">
                <a href="#"><img src="{{asset('images/visi.png')}}" alt="Image" class="img-fluid" style="height: 200px"></a>
                <div class="px-md-3 mt-3">
                  <h3><a href="#">Visi</a></h3>
                  <p>Menjadikan Himpunan Mahasiswa Program Studi Sistem Informasi (HIMAPROSIF) sebagai wadah perubahan, pemersatu, dan penampung aspirasi demi terwujudnya sinergitas dalam lingkup internal maupun eksternal</p>
                </div>
              </div>
        </div>
        <div class="col-sm">
            <div class="text-center">
                <a href="#"><img src="{{asset('images/misi.png')}}" alt="Image" class="img-fluid" style="height: 200px"></a>
                <div class="px-md-3 mt-3">
                  <h3><a href="#">Misi</a></h3>
                  <p> Menjadi wadah aspirasi, tukar pikiran, dan kegiatan bagi Mahasiswa Program Studi Sistem Informasi UINSA, Membangun hubungan baik dengan organisasi dan lembaga dalam lingkup internal maupun eksternal, dan Mengoptimalkan tugas pokok dan fungsi dari setiap departemen.</p>
                </div>
              </div>
        </div>
        <div class="col-sm">
            <div class="text-center">
                <a href="#"><img src="{{asset('images/tujuan.png')}}" alt="Image" class="img-fluid" style="height: 200px"></a>
                <div class="px-md-3 mt-3">
                  <h3><a href="#">Tujuan</a></h3>
                  <p>Mengembangkan riset integratif di bidang Sistem Informasi yang inovatif, berwawasan hijau, dan peka terhadap perkembangan untuk dukungan sistem informasi pada bidang manajemen, teknologi dan sistem cerdas</p>
                </div>
              </div>
        </div>
    </div>
</div>

<div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
<div class="container mt-5">
    <div class="row">
        {{-- <div class="col col-sm-3 border-right">
            <div class="block-heading-1 text-center mb-2" data-aos="fade-right" data-aos-delay="">
                <h2>Berita & Acara</h2>
                <hr>
              </div>
            <div class="mb-5 blog-entry mt-3" data-aos="fade-right" data-aos-delay="">
                <a href="#" class="blog-thumbnail"><img src="images/cargo_sea_small.jpg" alt="Image" class="img-fluid"></a>
                <div class="blog-excerpt">
                    <span class="d-block text-muted">Apr 19, 2019</span>
                    <h2 class="h4  mb-3"><a href="single.html">Knowing the Difference Is Key to Effective Logistics</a></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                    <p><a href="single.html" class="text-primary">Read More</a></p>
                </div>
            </div>
            <div class="mb-5 blog-entry" data-aos="fade-right" data-aos-delay="">
                <a href="#" class="blog-thumbnail"><img src="images/cargo_sea_small.jpg" alt="Image" class="img-fluid"></a>
                <div class="blog-excerpt">
                    <span class="d-block text-muted">Apr 19, 2019</span>
                    <h2 class="h4  mb-3"><a href="single.html">Knowing the Difference Is Key to Effective Logistics</a></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                    <p><a href="single.html" class="text-primary">Read More</a></p>
                </div>
            </div>
        </div> --}}

        <div class="col col-sm-12">
            <div class="block-heading-1 text-center mb-2" data-aos="fade-right" data-aos-delay="">
                <h2>Himaprosif periode 2020-2021</h2>
                <hr>
            </div>
            <div class="row mb-5">
                <div class="col col-sm-6 text-center">
                    <img src="images/adam.jpg" alt="Image" class=" img-profile picture rounded-circle mx-auto mb-2" style="height:200px;cursor:pointer">
                    <h3 class="text-center" style="color: #ff8b00">Mochamad Adam Aliansyah</h3>
                    <p class="text-center">Ketua Himaprosif</p>
                </div>
                <div class="col col-sm-6 text-center">
                    <img src="images/galih.jpg" alt="Image" class=" img-profile picture rounded-circle mx-auto mb-2" style="height:200px;cursor:pointer">
                    <h3 class="text-center" style="color: #ff8b00">Mohamad Galih Alrisandi</h3>
                    <p class="text-center">Wakil Himaprosif</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col col-sm">
                    <div class="row">
                        <div class="col col-sm-6 text-center">
                            <img src="images/wardah.jpg" alt="Image" class=" img-profile picture rounded-circle mx-auto mb-2" style="height:200px;cursor:pointer; width:65%">
                            <h2 class="text-center" style="color: #ff8b00">Luthfiah Wardah</h2>
                            <p class="text-center">Seketaris I Himaprosif</p>
                        </div>
                        <div class="col col-sm-6 text-center">
                            <img src="images/farah.jpg" alt="Image" class=" img-profile picture rounded-circle mx-auto mb-2" style="height:200px;cursor:pointer; width:65%">
                            <h2 class="text-center" style="color: #ff8b00">Farah Dwi W.</h2>
                            <p class="text-center">Seketaris II Himaprosif</p>
                        </div>
                    </div>
                </div>
                <div class="col col-sm">
                    <div class="row">
                        <div class="col col-sm-6 text-center">
                            <img src="images/lim.jpg" alt="Image" class=" img-profile picture rounded-circle mx-auto mb-2" style="height:200px;cursor:pointer; width:65%">
                            <h2 class="text-center" style="color: #ff8b00">Lim'atin Amaliya</h2>
                            <p class="text-center">Bendahara I Himaprosif</p>
                        </div>
                        <div class="col col-sm-6 text-center">
                            <img src="images/nabila.jpg" alt="Image" class=" img-profile picture rounded-circle mx-auto mb-2" style="height:200px;cursor:pointer; width:65%">
                            <h2 class="text-center" style="color: #ff8b00">Nabilatur R.</h2>
                            <p class="text-center">Bendahara II Himaprosif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container mb-5">
    <div class="text-center mt-5 ">
        <div class="block-heading-1">
            <h2>Gallery</h2>
        </div>
    </div>
    <hr>
    <div class="owl-carousel owl-all">
        @foreach ($gallery as $item)
        <div class="block-team-member-1 text-center rounded h-100">
            <img src="{{asset('images/gallery/'.$item->image)}}" class="img-thumbnail picture" style="height:275px; cursor:pointer">
            <h3 class="font-size-20 text-black">{{$item->judul}}</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">{{date('d F Y', strtotime($item->created_at))}}</span>
        </div>
        @endforeach
    </div>
    <div class="text-center">
        <a href="{{url('gallery')}}">Lihat Selengkapnya...</a>
    </div>
    </div>
</div>



  {{-- <div class="site-section bg-light block-13 mt-5" style="color: white" id="testimonials-section" data-aos="fade">
    <div class="container">

      <div class="text-center mb-5">
        <div class="block-heading-1">
          <h2>kata mereka</h2>
        </div>
      </div>

      <div class="owl-carousel nonloop-block-13">
        <div>
          <div class="block-testimony-1 text-center">

            <blockquote class="mb-4">
              <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt
                and made herself on the way.&rdquo;</p>
            </blockquote>

            <figure>
              <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 text-black">Ricky Fisher</h3>
          </div>
        </div>

        <div>
          <div class="block-testimony-1 text-center">
            <blockquote class="mb-4">
              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
            </blockquote>
            <figure>
              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>

          </div>
        </div>

        <div>
          <div class="block-testimony-1 text-center">


            <blockquote class="mb-4">
              <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
            </blockquote>

            <figure>
              <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 text-black">Mellisa Griffin</h3>


          </div>
        </div>

        <div>
          <div class="block-testimony-1 text-center">
            <blockquote class="mb-4">
              <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
            </blockquote>

            <figure>
              <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

    {{-- <!-- Large modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-news">Large modal</button> --}}

    <div class="modal fade bd-example-modal-lg" id="modal-news" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="row">
            <div class="col col-sm-12 text-center">
                <div class="modal-content" style="background: rgb(219,67,50);
                background: linear-gradient(90deg, rgba(219,67,50,1) 0%, rgba(0,232,255,1) 0%, rgba(7,202,230,1) 72%);">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;left:95%;">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    <img src="{{asset('images/pamflet/pamflet.jpg')}}" class="img-thumbnail picture">
                    <div class="modal-footera">
                      <a href="{{url('register-mahasiswa-aktif')}}" class="btn btn-success d-block">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Modal Image --}}
    <div class="modal fade imageModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 id="judulImage"></h1>
                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="itemImage" class="img-thumbnail picture">
                </div>
            </div>
        </form>
        </div>
    </div>

    @section('script')
        <script>
            $(function(){
                $('.picture').click(function () {
                    var src = $(this).attr('src');
                    $('#itemImage').attr('src',src);
                    $('.imageModal').modal('show');
                });
            });
        </script>
    @endsection



@endsection
