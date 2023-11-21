<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
    <link rel="stylesheet" href="{{ asset('front/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('front/wisata.css') }}">

    <style>
        .nav ul li .populer{
            border-bottom: 3px solid white;
        }
    </style>
</head>
<body>
    <div class="container">
        @section('header')
            @include('layout/header')
        @show

        <div class="main">
            {{-- Wisata Deskripsi --}}
            <div class="deskripsi">
                <div class="hero">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">BROMO</h2>
                    <p class="desc">Ratione? Natus aspernatur totam atque rerum ut? Numquam, fuga ducimus accusamus fugiat sunt accusantium, eaque minima ex deserunt ad ut quas? Error, modi ut repellendus corrupti optio aut facilis enim quis, fuga magni, aliquid magnam minima? Earum recusandae alias reprehenderit officia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, fugiat est fuga accusantium ea culpa perferendis esse veritatis voluptas quidem, excepturi et autem, nihil quod beatae eligendi commodi provident. Vel reprehenderit, natus perferendis nemo placeat obcaecati! Autem, fuga culpa? Repudiandae perspiciatis, impedit deleniti at eligendi assumenda beatae vitae odio. Error nihil in quia nulla quos fugiat repudiandae laborum consequuntur optio impedit debitis repellat, perferendis iure, eius commodi. Maiores tempore eveniet veritatis, molestiae earum minima enim optio repellat ab ipsam excepturi. Exercitationem deleniti dolorem iure possimus. Doloribus at ipsam odit blanditiis, aspernatur mollitia expedita laborum animi quasi numquam. Assumenda veniam vitae nemo aperiam quos provident consectetur? Quas fuga quia obcaecati fugit, dolorem magni sed suscipit, illum error saepe, iusto doloremque voluptatum. Dolor hic nihil, necessitatibus, natus cupiditate doloribus consectetur est dolore quos fugit facere ratione distinctio debitis. Quo, quia! Incidunt velit, harum possimus aliquam quasi cupiditate impedit at, inventore non nostrum ipsa autem ducimus animi repellendus architecto nihil vitae itaque consectetur reprehenderit! Nemo minima quos distinctio necessitatibus. Obcaecati tempora in laboriosam cumque incidunt. Voluptates, ipsa recusandae minima repudiandae, eos deleniti culpa magnam quam voluptatibus veritatis quos reiciendis optio adipisci dolores? Assumenda harum similique, maiores porro ex labore expedita atque modi sunt?</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Mikey</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>085156093201</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Lokasi --}}
            <div class="lokasi">
                <h2 class="title">Lokasi</h2>
                <div class="bar"></div>
                <div class="alamat">
                    <div class="jarak">
                        <h1>65.7 km</h1>
                        <p>Area Gn. Bromo, Podokoyo, Kec. Tosari, Pasuruan, Jawa Timur</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.18086528585!2d112.9427124340608!3d-7.942472071298274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd637aaab794a41%3A0xada40d36ecd2a5dd!2sGn.%20Bromo!5e0!3m2!1sid!2sid!4v1698833034296!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            {{-- Penginapan --}}
            <div class="penginapan">
                <h2 class="title">Penginapan Terdekat</h2>
                <div class="bar"></div>
                <div class="listPenginapan">

                    <div class="penginapanBox">
                        <p class="jarak">300 m</p>
                        <div class="descPenginapan">
                            <p class="nama">Penginapan 1</p>
                            <p class="deskripsiPenginpan">Lorem ipsum dolor sit. sit amet consectetur adipisicing elit. Maiores ut molestiae doloremque enim?</p>
                            <p>Kontak : 085156798021</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">300 m</p>
                        <div class="descPenginapan">
                            <p class="nama">Penginapan 1</p>
                            <p class="deskripsiPenginpan">Lorem ipsum dolor sit. sit amet consectetur adipisicing elit. Maiores ut molestiae doloremque enim?</p>
                            <p>Kontak : 085156798021</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">300 m</p>
                        <div class="descPenginapan">
                            <p class="nama">Penginapan 1</p>
                            <p class="deskripsiPenginpan">Lorem ipsum dolor sit. sit amet consectetur adipisicing elit. Maiores ut molestiae doloremque enim?</p>
                            <p>Kontak : 085156798021</p>
                        </div>
                    </div>

                    <a class="next" href=""><img src="{{ asset('logo/next.png') }}" alt=""></a>
                </div>
            </div>

            {{-- Kuliner --}}
            <div class="kuliner">
                <h2 class="title">Kuliner</h2>
                <div class="bar"></div>
                <div class="daftarKuliner">

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Kuliner 1</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, explicabo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi?</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Kuliner 1</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, explicabo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi?</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Kuliner 1</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, explicabo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi?</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Kuliner 1</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, explicabo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi?</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Event --}}
            <div class="event">
                <h2 class="title">Event</h2>
                <div class="bar"></div>
                <div class="daftarEvent">

                    <div class="deskripsiEvent">
                        <div class="imgEvent"></div>
                        <div class="namaEvent">
                            <p class="nama">Jazz Gunung</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur veniam quibusdam neque placeat veritatis dicta cumque, harum, ratione quidem, sed delectus optio autem nam similique eos! Ratione enim cum perferendis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis autem libero modi, quaerat labore nihil explicabo ipsum? Perferendis enim eaque consequatur adipisci omnis, labore officia dolor architecto cumque ab quasi!</p>
                        </div>
                    </div>

                    <div class="deskripsiEvent">
                        <div class="imgEvent"></div>
                        <div class="namaEvent">
                            <p class="nama">Jazz Gunung</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur veniam quibusdam neque placeat veritatis dicta cumque, harum, ratione quidem, sed delectus optio autem nam similique eos! Ratione enim cum perferendis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis autem libero modi, quaerat labore nihil explicabo ipsum? Perferendis enim eaque consequatur adipisci omnis, labore officia dolor architecto cumque ab quasi!</p>
                        </div>
                    </div>

                    <div class="deskripsiEvent">
                        <div class="imgEvent"></div>
                        <div class="namaEvent">
                            <p class="nama">Jazz Gunung</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur veniam quibusdam neque placeat veritatis dicta cumque, harum, ratione quidem, sed delectus optio autem nam similique eos! Ratione enim cum perferendis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis autem libero modi, quaerat labore nihil explicabo ipsum? Perferendis enim eaque consequatur adipisci omnis, labore officia dolor architecto cumque ab quasi!</p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Ulasan --}}
            <div class="ulasan">
                <h2 class="title">Ulasan</h2>
                <div class="bar"></div>
                <div class="pengisianUlasan">
                    <div class="inputUlasan">
                        <input placeholder="Nama ...." type="text" class="in">
                        <textarea placeholder="Masukkan Ulasan Disini ...." cols="30" rows="10"></textarea>
                        <input class="submit" type="submit">
                    </div>
                    <div class="listKomentar">
                        <div class="komentar">
                            <p class="komentator">Fathurrahman</p>
                            <p class="isiKomentar">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat et odit provident delectus tempora tenetur fuga harum cupiditate veritatis quisquam.</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Fathurrahman</p>
                            <p class="isiKomentar">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat et odit provident delectus tempora tenetur fuga harum cupiditate veritatis quisquam.</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Fathurrahman</p>
                            <p class="isiKomentar">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat et odit provident delectus tempora tenetur fuga harum cupiditate veritatis quisquam.</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Fathurrahman</p>
                            <p class="isiKomentar">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat et odit provident delectus tempora tenetur fuga harum cupiditate veritatis quisquam.</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Fathurrahman</p>
                            <p class="isiKomentar">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat et odit provident delectus tempora tenetur fuga harum cupiditate veritatis quisquam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @section('footer')
            @include('layout/footer')
        @show
    </div>
</body>
</html>