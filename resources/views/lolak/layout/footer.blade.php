<div class="footer-top">
    @forelse($kontak as $item)
  <div class="container">
      <div class="row">

          <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                  <h3>Pemerintah Kabupaten Bolaang Mongondow</h3>
                  <p>
                    {{$item->alamat}}<br><br>
                      <strong>Phone:</strong> {{$item->no_telp}}<br>
                      <strong>Email:</strong> {{$item->email}}<br>
                  </p>
                  <div class="social-links mt-3">
                      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  </div>
              </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
              <h4>Profil Kecamatan</h4>
              <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{ ('/visi-misi') }}">Visi dan Misi</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{ ('/struktur') }}">Struktur Organisasi</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{ ('/dasar-hukum') }}">Dasar Hukum</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{ ('/potensi') }}">Potensi</a></li>
              </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
              <h4>Informasi</h4>
              <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{ ('/event') }}">Agenda</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{ ('/berita') }}">Berita</a></li>
              </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Cari Berita</h4>
              <p>Cari berita disini</p>
              <form action="{{ ('/berita-cari') }}" method="GET">
                <input style="border: none; width: 86.5%" type="text" name="cari" value="{{ request()->get('cari') }}">
                <input type="submit" value="Cari"><i class="bi bi-search"></i>
              </form>

          </div>

      </div>
  </div>
  @empty

  @endforelse
</div>

<div class="container">
  <div class="copyright">
      &copy; Copyright <strong><span>Diskominfo</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
      Support by <a href="https://diskominfo.bolmongkab.go.id">E-Government</a>
  </div>
</div>