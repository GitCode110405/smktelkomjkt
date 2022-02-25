<?php

include_once "./landing/header.php"

?>

<nav class="bg-white shadow-xl fixed z-10 w-full">
    <div class="container px-5 md:px-10 mx-auto">
        <div class="flex justify-between md:items-center">
            <div class="brand">
                <a href="/">
                    <img src="./img/smktelkomjkt.jpg" class="w-28 h-auto" alt="">
                </a>
            </div>
            <button class="open md:hidden text-sky-600"><i class="fas fa-bars"></i></button>
            <ul class="text-right hidden list space-y-5 md:space-y-0 md:flex gap-x-5 font-bold text-gray-400 py-5 md:py-0">
                <button class="md:hidden close text-sky-600 cursor-pointer"><i class="far fa-times-circle"></i></button>
                <li><a href="#home" class="hover:text-gray-800 hover:transition-all hover:duration-200 nav-list">Home</a></li>
                <li><a href="#about" class="hover:text-gray-800 hover:transition-all hover:duration-200 nav-list">About</a></li>
                <li><a href="#jurusan" class="hover:text-gray-800 hover:transition-all hover:duration-200 nav-list">Jurusan</a></li>
                <li><a href="#contact" class="hover:text-gray-800 hover:transition-all hover:duration-200 nav-list">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="home">
    <div class="bg-gradient-to-r from-indigo-700 to-blue-900 w-full h-80 py-28 h-full">
        <div class="container mx-auto px-5 md:px-10">
            <div class="brand">
                <h3 class="font-shp text-4xl sm:text-5xl lg:text-6xl text-white text-center">SMK Telkom Jakarta</h3>
                <div class="mt-3 text-center text-white flex justify-center items-center">
                    <h3 class="text-sm sm:text-base lg:text-lg sm:w-w-4/6 lg:w-3/6">Sekolah Menengah Kejuruan Telkom Jakarta adalah salah satu sekolah yang berada dalam naungan Yayasan Sandhykara Putra Telkom. Pada tahun 2000, lokasi sekolah dipindahkan dari Divisi Pelatihan PT Telekomunikasi Indonesia di Tomang ke gedung baru di Jalan Daan Mogot KM 11 Jakarta Barat.</h3>
                </div>
                <ul class="flex justify-center items-center gap-x-5 text-lg mt-3">
                  <li><a href="https://instagram.com/smktelkomjakarta?utm_medium=copy_link" class="text-gray-400 hover:text-gray-200 hover:duration-200 hover:transition-all"><i class="fab fa-instagram text-base sm:text-lg lg:text-xl"></i></a></li> 
                  <li><a href="https://facebook.com/smktelkomjkt" class="text-gray-400 hover:text-gray-200 hover:duration-200 hover:transition-all"><i class="fab fa-facebook text-base sm:text-lg lg:text-xl"></i></a></li> 
                  <li><a href="https://www.tiktok.com/@smktelkomjakarta" class="text-gray-400 hover:text-gray-200 hover:duration-200 hover:transition-all"><i class="fab fa-tiktok text-base sm:text-lg lg:text-xl"></i></a></li> 
                  <li><a href="https://twitter.com/telkomschool" class="text-gray-400 hover:text-gray-200 hover:duration-200 hover:transition-all"><i class="fab fa-twitter text-base sm:text-lg lg:text-xl"></i></a></li> 
                </ul>
                <div class="flex justify-center mt-5">
                    <div class="w-3/6 md:w-2/6 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 h-2 rounded-full"></div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute top-16">
                    <div class="px-5 py-5 rounded-xl shadow bg-white shadow-xl">
                        <img src="img/kepsek.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-32 sm:pt-40 md:pt-52 lg:pt-80">
        <div class="container mx-auto px-5 md:px-10">
            <div class="flex justify-center">
                <div class="sm:grid sm:grid-cols-2 sm:space-x-5 space-y-5 sm:space-y-0">
                    <div class="px-3 py-2.5 rounded-md bg-white shadow-lg">
                        <img src="img/industrial.png" class="mx-auto w-16 md:w-20 mb-3" alt="">
                        <h3 class="text-center text-lg sm:text-xl lg:text-2xl font-bold font-shp">Fasilitas</h3>
                        <p class="text-center mt-3 text-sm sm:text-base lg:text-lg">
                        Sarana dan prasarana yang terdapat di Telkom Jakarta ini pun cukup lengkap, seperti total 13 kelas per angkatan, memiliki laboratorium, perpustakaan, kantin, kantor administrasi, dan student center
                        </p>
                        <div class="flex justify-center mt-5">
                            <div class="w-3/6 md:w-2/6 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 h-2 rounded-full"></div>
                        </div>
                    </div>
                    <div class="px-3 py-2.5 rounded-md bg-white shadow-lg">
                        <img src="img/stars.png" class="mx-auto w-16 md:w-20 mb-3" alt="">
                        <h3 class="text-center text-lg sm:text-xl lg:text-2xl font-bold font-shp">Jurusan</h3>
                        <p class="text-center mt-3 text-sm sm:text-base lg:text-lg">
                        SMK Telkom Jakarta yang terletak di Jl.Daan Mogot KM.11 memiliki empat jurusan yaitu Teknik Jaringan Transmisi, Teknik Jaringan Akses, Teknik Komputer Jaringan dan Rekayasa Perangkat Lunak.
                        </p>
                        <div class="flex justify-center mt-5">
                            <div class="w-3/6 md:w-2/6 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 h-2 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container mx-auto px-5 md:px-10 py-28">
        <div class="contentabout">
            <div class="text-center">
                <h3 class="text-xl sm:text-2xl lg:text-4xl font-bold font-shp">About <i class="fas fa-question-circle text-sky-500"></i></h3>
                <div class="flex justify-center mt-5">
                    <div class="w-3/6 md:w-2/6 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 h-2 rounded-full"></div>
                </div>
            </div>
            <div class="mt-28">
                <div class="md:flex md:justify-between md:items-center md:space-x-10">
                    <div class="md:w-4/6 mx-auto">
                        <h3 class="font-bold text-lg sm:text-xl lg:text-2xl"><i class="fas fa-history text-sky-500"></i> Sejarah Singkat</h3>
                        <p class="text-sm sm:text-base lg:text-lg"> Pada tahun 2000, lokasi sekolah dipindahkan dari Divisi Pelatihan PT Telekomunikasi Indonesia di Tomang ke gedung baru di Jalan Daan Mogot KM 11 Jakarta Barat. SMK Telkom Sandhy Putra Jakarta merupakan salah satu sekolah kejuruan telekomunikasi yang didirikan berdasarkan gagasan Menteri Pariwisata, Pos, dan Telekomunikasi yang ketika itu dijabat oleh Soesilo Sudarman sebagai upaya memberikan sumbangsih kepada negara dalam rangka mencerdaskan kehidupan bangsa. SMK Telkom Sandhy Putra Jakarta yang pada saat berdirinya tahun 1992 bernama STM Telkom Sandhy Putra Jakarta bersama empat sekolah serupa di Malang, Medan, Ujung Pandang, dan Purwokerto (dengan program studi berlainan) didirikan untuk menjawab tantangan teknologi telekomunikasi yang sangat pesat perkembangannya dalam mengisi pembangunan nasional. Secara operasional sekolah ini dikelola oleh Yayasan Sandhykara Putra Telkom (YSPT) yang dibina Kementerian Pendidikan dan Kebudayaan (Kemendikbud) beserta PT Telekomunikasi Indonesia (PT Telkom).</p>
                        <div class="flex justify-left mt-5">
                            <div class="w-3/6 md:w-2/6 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 h-2 rounded-full"></div>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0">
                        <img src="img/clock.png" class="w-60 sm:w-68 md:w-72 lg:w-80 h-auto mx-auto" alt="">
                    </div>
                </div>
                <div class="flex justify-center items-center mt-24 space-x-3">
                    <div class="py-0.5 rounded-full bg-gray-200 w-full"></div>
                    <div class="w-8 h-4 bg-red-700"></div>
                    <div class="font-bold text-lg sm:text-xl lg:text-2xl">Prestasi</div>
                    <div class="w-8 h-4 bg-red-700"></div>
                    <div class="py-0.5 rounded-full bg-gray-200 w-full"></div>
                </div>
                <div class="w-full overflow-x-auto mt-10">
                <table>
                    <thead class="bg-blue-700 text-white font-bold border-b-2 border-gray-200">
                        <tr>
                            <th class="p-3">No.</th>
                            <th class="p-3">Tahun</th>
                            <th class="p-3">Sekolah</th>
                            <th class="p-3">Perlombaan</th>
                            <th class="p-3">Tanggal Pelaksanaan</th>
                            <th class="p-3">Juara</th>
                            <th class="p-3">Tingkat</th>
                            <th class="p-3">Level</th>
                            <th class="p-3">Penyelenggara</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-100">
                        <tr class="border-b-2 border-gray-200">
                            <td class="p-3">1.</td>
                            <td class="p-3">2019</td>
                            <td class="p-3">SMK Telkom Jakarta</td>
                            <td class="p-3">Lomba Floorball</td>
                            <td class="p-3">2-3 Feb 2019</td>
                            <td class="p-3">2</td>
                            <td class="p-3">Nasional</td>
                            <td class="p-3">Provinsi</td>
                            <td class="p-3">Indonesia FloorBall Open 2019</td>
                        </tr>
                        <tr class="border-b-2 border-gray-200">
                            <td class="p-3">2.</td>
                            <td class="p-3">2019</td>
                            <td class="p-3">SMK Telkom Jakarta</td>
                            <td class="p-3">Lomba Futsal</td>
                            <td class="p-3">15-22 Feb 2019</td>
                            <td class="p-3">3</td>
                            <td class="p-3">DKI Jakarta</td>
                            <td class="p-3">Provinsi</td>
                            <td class="p-3">SMPK/SMAK 8 BPK Penabur</td>
                        </tr>
                        <tr class="border-b-2 border-gray-200">
                            <td class="p-3">3.</td>
                            <td class="p-3">2019</td>
                            <td class="p-3">SMK Telkom Jakarta</td>
                            <td class="p-3">Lomba Kompetensi Siswa (IT Software)</td>
                            <td class="p-3">27-28 Feb 2019</td>
                            <td class="p-3">3</td>
                            <td class="p-3">DKI Jakarta</td>
                            <td class="p-3">Provinsi</td>
                            <td class="p-3">Panitia Tim LKS SMK Tingkat Provinsi (SMKN 24 Jakarta)</td>
                        </tr>
                        <tr class="border-b-2 border-gray-200">
                            <td class="p-3">4.</td>
                            <td class="p-3">2019</td>
                            <td class="p-3">SMK Telkom Jakarta</td>
                            <td class="p-3">Lomba Palang Merah Remaja (Poster)</td>
                            <td class="p-3">05-Mar-19</td>
                            <td class="p-3">1</td>
                            <td class="p-3">DKI Jakarta</td>
                            <td class="p-3">Provinsi</td>
                            <td class="p-3">SMPN 207 Jakarta</td>
                        </tr>
                        <tr class="border-b-2 border-gray-200">
                            <td class="p-3">5.</td>
                            <td class="p-3">2019</td>
                            <td class="p-3">SMK Telkom Jakarta</td>
                            <td class="p-3">Lomba Basket</td>
                            <td class="p-3">22-Mar-19</td>
                            <td class="p-3">2</td>
                            <td class="p-3">DKI Jakarta</td>
                            <td class="p-3">Provinsi</td>
                            <td class="p-3">SMK Telkom Jakarta (SATELITE XX)</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div class="mt-10">
                    <h3 class="font-bold text-lg sm:text-xl md:text-2xl lg:text-4xl font-shp text-center">Dan masih banyak prestasi lain nya, tunggu apa lagi teman - teman, yuk sekolah di SMK Telkom Jakarta !!!</h3>
                </div>
                <div class="flex justify-center mt-5">
                    <div class="w-3/6 md:w-2/6 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 h-2 rounded-full"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="jurusan">
    <div class="bg-gradient-to-r from-indigo-700 to-blue-900 w-full h-80 pt-28 h-full">
        <div class="container mx-auto px-5 md:px-10">
            <div class="content">
                <div class="title">
                    <h3 class="text-xl sm:text-2xl lg:text-4xl font-bold font-shp text-center text-white">Jurusan yang ada di Telkom Jakarta</h3>
                </div>
                <div class="flex justify-center mt-5">
                    <div class="w-3/6 md:w-2/6 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 h-2 rounded-full"></div>
                </div>
                <div class="gap-y-7 space-y-7 sm:space-y-0 sm:grid sm:grid-cols-2 lg:grid-cols-4 lg:space-x-5 mt-28">
                    <div class="hover:transition-all hover:-translate-y-5">
                        <a href="">
                            <img src="img/transmisi.png" class="w-64 rounded-md mx-auto my-auto" alt="">
                        </a>
                    </div>
                    <div class="hover:transition-all hover:-translate-y-5">
                        <a href="">
                            <img src="img/tja.png" class="w-64 rounded-md mx-auto my-auto" alt="">
                        </a>
                    </div>
                    <div class="hover:transition-all hover:-translate-y-5">
                        <a href="tkj">
                            <img src="img/tkj.png" class="w-64 rounded-md mx-auto my-auto" alt="">
                        </a>
                    </div>
                    <div class="hover:transition-all hover:-translate-y-5">
                        <a href="rpl">
                            <img src="img/rpl.png" class="w-64 rounded-md mx-auto my-auto" alt="">
                        </a>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="text-center mt-3 text-sm sm:text-base lg:text-lg text-white">( Click foto pada di atas jika ingin mengetahui lebih lanjut jurusan tersebut )</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#312d81" fill-opacity="1" d="M0,160L34.3,144C68.6,128,137,96,206,101.3C274.3,107,343,149,411,160C480,171,549,149,617,133.3C685.7,117,754,107,823,128C891.4,149,960,203,1029,186.7C1097.1,171,1166,85,1234,48C1302.9,11,1371,21,1406,26.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </div>
    <div class="bg-blue-900-2 pb-20">
        <div class="container mx-auto px-5 md:px-10 text-white">
            <div class="content">
                <div class="title mb-28 py-5">
                    <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-center"><i class="far fa-comment-dots"></i> Testimony Alumni</h3>
                    <div class="flex justify-center mt-5">
                        <div class="w-3/6 md:w-2/6 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 h-2 rounded-full"></div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="md:grid md:grid-cols-2 md:gap-20 space-y-16 md:space-y-0">
                        <div>
                            <p class="block mb-5">Mamberikan dasar ilmu telekomunikasi sangat baik, untuk memulai karir didalam dunia kerja, serta siap lanjut kejenjang perkuliahan.</p>
                            <div class="flex items-center gap-x-5">
                            <img src="img/testi1.jpg" class="rounded-full" alt="">
                            <div>
                                <h3 class="text-xl font-bold">DJOKO MARYANTO</h3>
                                <p class="text-sm">Manajer Incident Management
                                di PT Mora Telematika Indonesia</p>
                            </div>
                            </div>
                        </div>
                        <div>
                            <p class="block mb-5">SMK Telkom Jakarta adalah sekolah pilihan, memberi bekal pendidikan dan bimbingan untuk siap bekerja bekerja, atau meneruskan ke jenjang berikutnya.</p>
                            <div class="flex items-center gap-x-5">
                            <img src="img/testi2.jpg" class="rounded-full" alt="">
                            <div>
                                <h3 class="text-xl font-bold">WAHYUNING WIDOWATI</h3>
                                <p class="text-sm">Former Manager Sevice Support and Opperation Enablement
                                di PT. Telkomsel</p>
                            </div>
                            </div>
                        </div>
                        <div>
                            <p class="block mb-5">Banyak Kesan yang tak terlupakan selama di SMK Telkom Jakarta, bersama teman-teman yang membantu saya dalam bekerjasama dengan tim dan mampu beradaptasi dengan perkembangan teknologi yang baru.</p>
                            <div class="flex items-center gap-x-5">
                            <img src="img/testi3.jpg" class="rounded-full" alt="">
                            <div>
                                <h3 class="text-xl font-bold">ISUMI KARINANINGSIH</h3>
                                <p class="text-sm">Instructur(Mentor Quality) di Binar</p>
                            </div>
                            </div>
                        </div>
                        <div>
                            <p class="block mb-5">SMK Telkom Jakarta kurikulum IT terdepan dan selalu mendukung atau mendorong siswa dan siswi berperan aktif dalam dunia kerja. Terima Kasih SMK Telkom Jakarta.</p>
                            <div class="flex items-center gap-x-5">
                                <img src="img/testi4.jpg" class="rounded-full" alt="">
                                <div>
                                    <h3 class="text-xl font-bold">DOMI HADI WIJAYA</h3>
                                    <p class="text-sm">Senior PHP Developer
                                    di Sistem Integrasi Medika.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="bg-gray-900 py-20 text-gray-200">
      <div class="container px-5 md:px-10 mx-auto">
        <div class="text-center text-lg sm:text-xl lg:text-2xl font-bold"><i class="fas fa-phone-alt"></i> Contact</div>
        <div class="mt-24">
          <div class="sm:flex sm:justify-between space-y-16 sm:space-y-0">
            <div class="sm:w-3/6">
              <ul class="space-y-2">
                <li><i class="fas fa-map-marker-alt"></i> Alamat : Jl. Daan Mogot KM. 11, RT.1/RW.4, Kedaung Kali Angke, Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibu Kota Jakarta 11710.</li>
                <li><i class="fas fa-phone-square-alt"></i> +62 8111 44 2600</li>
                <li><i class="fas fa-link"></i> <a href="https://smktelkom-jkt.sch.id/" class="text-blue-300">smktelkom-jkt.sch.id</a></li>
              </ul>
            </div>
            <div class="flex items-end">
              <div>
                <h3 class="font-bold text-center w-full">Sosial Media</h3>
                <ul class="flex justify-center items-center gap-x-5 text-lg">
                  <li><a href="https://instagram.com/smktelkomjakarta?utm_medium=copy_link" class="text-gray-400 hover:text-gray-200 hover:duration-200 hover:transition-all"><i class="fab fa-instagram"></i></a></li> 
                  <li><a href="https://facebook.com/smktelkomjkt" class="text-gray-400 hover:text-gray-200 hover:duration-200 hover:transition-all"><i class="fab fa-facebook"></i></a></li> 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php

require_once "./layouts/copyright.php"

?>

<?php

include_once "./landing/footer.php"

?>