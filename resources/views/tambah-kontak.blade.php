<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./tambah-kontak.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;600;700&display=swap"
    />
  </head>
  <body>
    <div class="tambah-kontak">
      <div class="container-53022">
        <div class="logo-bkpsdm-1-1-wrapper5">
          <img
            class="logo-bkpsdm-1-1-icon8"
            loading="lazy"
            alt=""
            src="./public/logobkpsdm1-1@2x.png"
          />
        </div>
        <div class="container-5302-child">
          <nav class="frame-parent12">
            <div class="frame-wrapper9">
              <div class="folder-parent4">
                <img
                  class="folder-icon30"
                  loading="lazy"
                  alt=""
                  src="./public/folder-1.svg"
                  id="folderIcon"
                />

                <div class="projects-wrapper14">
                  <div class="projects21" id="projectsText2">Menu</div>
                </div>
              </div>
            </div>
            <div class="frame52" id="frameContainer1">
              <img class="folder-icon31" alt="" src="./public/folder.svg" />

              <div class="projects-wrapper15">
                <div class="projects22">Pesan Diterima</div>
              </div>
            </div>
            <div class="frame53" id="frameContainer2">
              <img class="folder-icon32" alt="" src="./public/folder-2.svg" />

              <div class="projects-wrapper16">
                <div class="projects23">Pesan Terkirim</div>
              </div>
            </div>
            <div class="frame54" id="frameContainer3">
              <img class="folder-icon33" alt="" src="./public/folder-3.svg" />

              <div class="messages-wrapper10">
                <div class="messages21">Pesan Penting</div>
              </div>
            </div>
            <div class="frame55" id="frameContainer4">
              <img
                class="chat-dots-icon15"
                alt=""
                src="./public/chat-dots.svg"
              />

              <div class="messages-wrapper11">
                <div class="messages22">Percakapan</div>
              </div>
            </div>
            <button class="frame56">
              <div class="frame57">
                <div class="frame58">
                  <div class="teams6">Kontak</div>
                  <img class="users-icon9" alt="" src="./public/users.svg" />

                  <div class="messages23">Pesan Langsung</div>
                  <img
                    class="chat-dots-icon16"
                    alt=""
                    src="./public/chat-dots2.svg"
                  />

                  <div class="messages24">Percakapan</div>
                  <img
                    class="chat-dots-icon17"
                    alt=""
                    src="./public/chat-dots.svg"
                  />

                  <div class="frame59">
                    <img
                      class="users-icon10"
                      alt=""
                      src="./public/users1.svg"
                    />

                    <div class="dashboard-wrapper3">
                      <b class="dashboard8">Kontak</b>
                    </div>
                  </div>
                </div>
              </div>
            </button>
            <div class="frame60" id="frameContainer5">
              <img
                class="chart-bar-icon7"
                alt=""
                src="./public/chart-bar.svg"
              />

              <input
                class="projects-chat-dots-child"
                placeholder="Data Base"
                type="text"
              />
            </div>
          </nav>
        </div>
        <div class="image-23477"></div>
        <div class="rectangle-parent11">
          <div class="frame-child17" id="rectangle"></div>
          <div class="avatar-1674-wrapper3">
            <img
              class="avatar-1674-icon7"
              loading="lazy"
              alt=""
              src="./public/avatar-1674@2x.png"
            />
          </div>
          <div class="text-16979-parent5">
            <div class="text-169797">admin123</div>
            <div class="text-169805">admin123@google.com</div>
          </div>
          <form id="tambahKontakForm"action="/tambah-kontak" method="post">
          @csrf
        </div>
      </div>
      <section class="tambah-kontak-inner">
        <div class="frame-parent13">
          <div class="text-17011-parent2">
            <h1 class="text-170116">Tambah Kontak</h1>
            <div class="container-5298-parent">
              <div class="container-5298">
                <div class="create-new-project-wrapper"> <!-- Added class button-24503 -->
                  <div class="create-new-project13">Nama :</div>
                </div>
                <div class="button-24503"> <!-- Changed class to button-24503 -->
                  <div class="create-new-project-container2">
                    <input type="text" id="namaInput" name="nama" class="form-control" placeholder="Nama">
                  </div>
                </div>
              </div>
              <div class="container-53002">
                <div class="create-new-project-frame"> <!-- Added class button-24492 -->
                  <div class="create-new-project14">No Telp :</div>
                </div>
                <div class="button-24492"> <!-- Changed class to button-24492 -->
                  <div class="create-new-project-container3">
                    <input type="text" id="teleponInput" name="telepon" class="form-control" placeholder="Nomor Telepon">
                  </div>
                </div>
              </div>
              <div class="container-53012">
                <div class="create-new-project-wrapper1"> <!-- Added class button-24504 -->
                  <div class="create-new-project15">NIP :</div>
                </div>
                <div class="button-24504"> <!-- Changed class to button-24504 -->
                  <div class="create-new-project-container4">
                    <input type="text" id="kodeDataInput" name="kodeData" class="form-control" placeholder="NIP">
                  </div>
                </div>
              </div>
              <div class="container-53012">
                <div class="create-new-project-wrapper1">
                    <div class="create-new-project15">Unit Kerja :</div>
                </div>
                <div class="button-24504">
                    <div class="create-new-project-container4">
                      <select id="unitkerjaInput" name="unitkerja" class="form-control">
                        <option value="">Unit Kerja</option>
                        <option value="pns">Pegawai Negeri Sipil (PNS)</option>
                        <option value="pppk">Pegawai Pemerintah dengan Perjanjian Kerja (PPPK)</option>
                        <option value="thl">Tenaga Harian Lepas (THL)</option>
                        <option value="tenaga-kontrak">Tenaga Kontrak</option>
                        <option value="pejabat-fungsional">Pejabat Fungsional</option>
                        <option value="pejabat-struktural">Pejabat Struktural</option>
                        <option value="tenaga-ahli">Tenaga Ahli atau Staf Khusus</option>
                        <option value="petugas-lapangan">Petugas Lapangan</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="container-53012">
                <div class="create-new-project-wrapper1"> <!-- Added class button-24504 -->
                  <div class="create-new-project15">Eselon :</div>
                </div>
                <div class="button-24504"> <!-- Changed class to button-24504 -->
                  <div class="create-new-project-container4">
                    <select id="eselonInput" name="eselon" class="form-control">
                      <option value="">Eselon</option>
                      <option value="2a">Eselon 2A</option>
                      <option value="2b">Eselon 2B</option>
                      <option value="3a">Eselon 3A</option>
                      <option value="3b">Eselon 3B</option>
                      <option value="4a">Eselon 4A</option>  
                      <option value="4b">Eselon 4B</option> 
                      <option value="non-eselon">Non Eselon</option> 
                  </select>
                  </div>
                </div>
              </div>
              <div class="container-53012">
                <div class="create-new-project-wrapper1"> <!-- Added class button-24504 -->
                  <div class="create-new-project15">Status :</div>
                </div>
                <div class="button-24504"> <!-- Changed class to button-24504 -->
                  <div class="create-new-project-container4">
                    <select id="statusInput" name="status" class="form-control">
                      <option value="">Status Kepegawaian</option>
                      <option value="pns">Pegawai Negeri Sipil (PNS)</option>
                      <option value="pppk">Pegawai Pemerintah dengan Perjanjian Kerja (PPPK)</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="container-53012">
                <div class="create-new-project-wrapper1"> <!-- Added class button-24504 -->
                  <div class="create-new-project15">Pangkat :</div>
                </div>
                <div class="button-24504"> <!-- Changed class to button-24504 -->
                  <div class="create-new-project-container4">
                    <select id="pangkatInput" name="pangkat" class="form-control">
                      <option value="">Pangkat/Golongan</option>
                      <option value="I/a">Juru Muda,I/a</option>
                      <option value="I/b">Juru Muda Tingkat I,I/b</option>
                      <option value="I/c">Juru,I/c</option>
                      <option value="I/d">Juru Tingkat I,I/d</option>
                      <option value="II/a">Pengatur Muda,II/a</option>
                      <option value="II/b">Pengatur Muda Tingkat I,II/b</option>
                      <option value="II/c">Pengatur,II/c</option>
                      <option value="II/d">Pengatur Tingkat I,II/d</option>
                      <option value="III/a">Penata Muda,III/a</option>
                      <option value="III/b">Penata Muda Tingkat I,III/b</option>
                      <option value="III/c">Penata,III/c</option>
                      <option value="III/d">Penata Tingkat I,II/d</option>
                      <option value="IV/a">Pembina,IV/a</option>
                      <option value="IV/b">Pembina Tingkat I,IV/b</option>
                      <option value="IV/c">Pembina Utama Muda,IV/c</option>
                      <option value="IV/d">Pembina Utama Madya,IV/d</option>
                      <option value="IV/e">Pembina Utama,IV/e</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="button-24505 "> <!-- Added class button-24505 -->
                <div class="e-add-wrapper5">
                </div>
                <button type="submit" class="button-24505">＋ Simpan</button>
                </form>
              </div>
            </div>
          </div>
          <div class="frame-wrapper10">
            <div class="button-2450-group">
              <div class="container-53003">
                <b class="text-169973" id="text16997">Percakapan Terbaru</b>
                <div class="container-52897">
                  <div class="avatar-1675-wrapper8">
                    <img
                      class="avatar-1675-icon10"
                      loading="lazy"
                      alt=""
                      src="./public/avatar-1675@2x.png"
                    />
                  </div>
                  <div class="text-16998-parent4">
                    <b class="text-169988">Ahmad</b>
                    <div class="text-169996">5</div>
                  </div>
                </div>
                <div class="container-52909">
                  <div class="avatar-1676-wrapper5">
                    <img
                      class="avatar-1676-icon7"
                      loading="lazy"
                      alt=""
                      src="./public/avatar-1676@2x.png"
                    />
                  </div>
                  <div class="text-17000-parent5">
                    <b class="text-170007">Ucup</b>
                    <div class="text-170017">4</div>
                  </div>
                </div>
                <div class="container-52917">
                  <div class="avatar-1677-wrapper5">
                    <img
                      class="avatar-1677-icon7"
                      loading="lazy"
                      alt=""
                      src="./public/avatar-1677@2x.png"
                    />
                  </div>
                  <div class="text-17002-parent5">
                    <b class="text-170027">Udin</b>
                    <div class="text-170037">4</div>
                  </div>
                </div>
                <div class="container-52927">
                  <div class="avatar-1678-wrapper5">
                    <img
                      class="avatar-1678-icon7"
                      loading="lazy"
                      alt=""
                      src="./public/avatar-1678@2x.png"
                    />
                  </div>
                  <div class="text-17004-parent5">
                    <b class="text-170047">Ujang</b>
                    <div class="text-170057">1</div>
                  </div>
                </div>
                <div class="container-52937">
                  <div class="avatar-1679-wrapper5">
                    <img
                      class="avatar-1679-icon7"
                      loading="lazy"
                      alt=""
                      src="./public/avatar-1679@2x.png"
                    />
                  </div>
                  <div class="text-17006-parent5">
                    <b class="text-170067">Joe</b>
                    <div class="text-170077">halo</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script>
      var folderIcon = document.getElementById("folderIcon");
      if (folderIcon) {
        folderIcon.addEventListener("click", function (e) {
          window.location.href = "./menu";
        });
      }
      
      var projectsText2 = document.getElementById("projectsText2");
      if (projectsText2) {
        projectsText2.addEventListener("click", function (e) {
          window.location.href = "./menu";
        });
      }
      
      var frameContainer1 = document.getElementById("frameContainer1");
      if (frameContainer1) {
        frameContainer1.addEventListener("click", function (e) {
          window.location.href = "./pesan-diterima";
        });
      }
      
      var frameContainer2 = document.getElementById("frameContainer2");
      if (frameContainer2) {
        frameContainer2.addEventListener("click", function (e) {
          window.location.href = "./pesan-terkirim";
        });
      }
      
      var frameContainer3 = document.getElementById("frameContainer3");
      if (frameContainer3) {
        frameContainer3.addEventListener("click", function (e) {
          window.location.href = "./pesan-penting";
        });
      }
      
      var frameContainer4 = document.getElementById("frameContainer4");
      if (frameContainer4) {
        frameContainer4.addEventListener("click", function (e) {
          window.location.href = "./percakapan";
        });
      }
      
      var frameContainer5 = document.getElementById("frameContainer5");
      if (frameContainer5) {
        frameContainer5.addEventListener("click", function () {
          window.open("http://localhost:8080/phpmyadmin/index.php?route=/sql&pos=0&db=kp_db&table=tabel_kontak");
        });
      }
      
      var rectangle = document.getElementById("rectangle");
      if (rectangle) {
        rectangle.addEventListener("click", function (e) {
          window.location.href = "./admin";
        });
      }
      
      var button2450 = document.getElementById("button2450");
      if (button2450) {
        button2450.addEventListener("click", function () {
          var popup = document.getElementById("tulisPopup");
          if (!popup) return;
          var popupStyle = popup.style;
          if (popupStyle) {
            popupStyle.display = "flex";
            popupStyle.zIndex = 100;
            popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
            popupStyle.alignItems = "center";
            popupStyle.justifyContent = "center";
          }
          popup.setAttribute("closable", "");
      
          var onClick =
            popup.onClick ||
            function (e) {
              if (e.target === popup && popup.hasAttribute("closable")) {
                popupStyle.display = "none";
              }
            };
          popup.addEventListener("click", onClick);
        });
      }
      
      var text16997 = document.getElementById("text16997");
      if (text16997) {
        text16997.addEventListener("click", function (e) {
          window.location.href = "./percakapan";
        });}
        
    document.addEventListener("DOMContentLoaded", function() {
    const tambahKontakForm = document.getElementById('tambahKontakForm');

    // Menambahkan event listener untuk menangani submit form
    tambahKontakForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Mencegah pengiriman form secara default

        // Mendapatkan nilai input
        const namaInput = document.getElementById('namaInput').value;
        const teleponInput = document.getElementById('teleponInput').value;
        const kodeDataInput = document.getElementById('kodeDataInput').value;
        const unitkerjaInput = document.getElementById('unitkerjaInput').value;
        const eselonInput = document.getElementById('eselonInput').value;
        const statusInput = document.getElementById('statusInput').value;
        const pangkatInput = document.getElementById('pangkatInput').value;
    
  // Memeriksa apakah semua input terisi
  if (namaInput.trim() === '' || teleponInput.trim() === '' || kodeDataInput.trim() === '' || unitkerjaInput.trim() === '' || eselonInput.trim() === '' || statusInput.trim() === '' || pangkatInput.trim() === '' ) {
        alert('Mohon Lengkapi Data!');
        return false; // Menghentikan proses submit jika ada input yang kosong
    }

  // Menampilkan alert bahwa data telah tersimpan
  alert("Data Disimpan");

  // Submit form secara manual
  document.getElementById("tambahKontakForm").submit();

  // Mengarahkan ke halaman kontak setelah form disubmit
  setTimeout(function() {
  window.location.href = "/kontak";
  }, 100); // Jeda 100 ms untuk memastikan form submit terlebih dahulu
  });
  });

      </script>
  </body>
</html>
<style>.logo-bkpsdm-1-1-icon8 {
    height: 92px;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    z-index: 2;
  }
  .logo-bkpsdm-1-1-wrapper5 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0 var(--padding-8xs);
  }
  .folder-icon30,
  .projects21 {
    position: relative;
    cursor: pointer;
  }
  .folder-icon30 {
    height: 24px;
    width: 24px;
    overflow: hidden;
    flex-shrink: 0;
    min-height: 24px;
  }
  #createNewContactForm.button-24503,
  #createNewContactForm.button-24492,
  #createNewContactForm.button-24504 {
    background-color: #00BDD6;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
    margin-top: 10px;
  }
  .button-24503,
  .button-24492,
  .button-24504 {
    display: flex;
    align-items: center;
    background-color: #f0f0f0;
    padding: 8px 12px;
    border-radius: 4px;
    margin-bottom: 16px;
  }
  
  .button-24503 input,
  .button-24492 input,
  .button-24504 input {
    border: none;
    background: none;
    flex: 1;
    margin-left: 8px;
    font-size: 16px;
    outline: none;
  }
  .button-24505 {
    height: 22px;
    display: flex;
    align-items: center;
  }
  
  .button-24505 button {
    height: 26px;
    width: 1000px ;
    background-color: #F3F4F6;
    color: #565E6C;
    border: none;
    border-radius: 0px;
    padding: 0px 0px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-family: Arial, sans-serif; /* font */
    font-size: 16px; /* ukuran teks */
    text-align: center; /* lokasi teks */
  }
  
  .button-24503 input::placeholder,
  .button-24492 input::placeholder,
  .button-24504 input::placeholder {
    color: #999;
  }
  #createNewContactForm.button-24503:hover,
  #createNewContactForm.button-24492:hover,
  #createNewContactForm.button-24504:hover {
    background-color: #00a2bb;
  }
  .projects21 {
    align-self: stretch;
    line-height: 22px;
  }
  .folder-parent4,
  .frame-wrapper9,
  .projects-wrapper14 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .projects-wrapper14 {
    flex: 1;
    flex-direction: column;
    padding: var(--padding-12xs) 0 0;
  }
  .folder-parent4,
  .frame-wrapper9 {
    flex-direction: row;
  }
  .folder-parent4 {
    flex: 1;
    gap: var(--gap-5xs);
  }
  .frame-wrapper9 {
    align-self: stretch;
    padding: 0 var(--padding-mid) 0 var(--padding-mini);
  }
  .folder-icon31 {
    height: 24px;
    width: 24px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
  }
  .projects22 {
    align-self: stretch;
    position: relative;
    line-height: 22px;
  }
  .frame52,
  .projects-wrapper15 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .projects-wrapper15 {
    flex: 1;
    flex-direction: column;
    padding: var(--padding-10xs) 0 0;
  }
  .frame52 {
    align-self: stretch;
    border-radius: var(--br-9xs);
    background-color: var(--color-gray-400);
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-5xs) var(--padding-mini) var(--padding-6xs);
    gap: var(--gap-4xs);
    cursor: pointer;
  }
  .folder-icon32 {
    height: 24px;
    width: 24px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
  }
  .projects23 {
    align-self: stretch;
    position: relative;
    line-height: 22px;
  }
  .frame53,
  .projects-wrapper16 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .projects-wrapper16 {
    flex: 1;
    flex-direction: column;
    padding: var(--padding-10xs) 0 0;
  }
  .frame53 {
    align-self: stretch;
    border-radius: var(--br-9xs);
    background-color: var(--color-gray-400);
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-5xs) var(--padding-mini) var(--padding-6xs);
    gap: var(--gap-4xs);
    cursor: pointer;
  }
  .folder-icon33 {
    height: 24px;
    width: 24px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    min-height: 24px;
  }
  .messages21 {
    align-self: stretch;
    position: relative;
    line-height: 22px;
  }
  .frame54,
  .messages-wrapper10 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .messages-wrapper10 {
    flex: 1;
    flex-direction: column;
    padding: var(--padding-12xs) 0 0;
  }
  .frame54 {
    align-self: stretch;
    border-radius: var(--br-9xs);
    background-color: var(--color-gray-400);
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-5xs) var(--padding-mini);
    gap: var(--gap-4xs);
    cursor: pointer;
  }
  .chat-dots-icon15 {
    height: 24px;
    width: 24px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    min-height: 24px;
  }
  .messages22 {
    align-self: stretch;
    position: relative;
    line-height: 22px;
  }
  .frame55,
  .messages-wrapper11 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .messages-wrapper11 {
    flex: 1;
    flex-direction: column;
    padding: var(--padding-12xs) 0 0;
  }
  .frame55 {
    align-self: stretch;
    border-radius: var(--br-9xs);
    background-color: var(--color-gray-400);
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-5xs) var(--padding-base);
    gap: var(--gap-5xs);
    cursor: pointer;
  }
  .teams6,
  .users-icon9 {
    position: relative;
    flex-shrink: 0;
    display: none;
  }
  .teams6 {
    width: 156px;
    font-size: var(--font-size-sm);
    line-height: 22px;
    font-family: var(--font-inter);
    color: var(--color-dimgray);
    text-align: left;
  }
  .users-icon9 {
    height: 24px;
    width: 24px;
    overflow: hidden;
  }
  .messages23 {
    width: 156px;
    font-size: var(--font-size-sm);
    line-height: 22px;
    font-family: var(--font-inter);
    color: var(--color-dimgray);
    text-align: left;
  }
  .chat-dots-icon16,
  .messages23,
  .messages24 {
    position: relative;
    display: none;
    flex-shrink: 0;
  }
  .chat-dots-icon16 {
    height: 24px;
    width: 24px;
    overflow: hidden;
  }
  .messages24 {
    width: 156px;
    font-size: var(--font-size-sm);
    line-height: 22px;
    font-family: var(--font-inter);
    color: var(--color-dimgray);
    text-align: left;
  }
  .chat-dots-icon17,
  .users-icon10 {
    height: 24px;
    width: 24px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
  }
  .chat-dots-icon17 {
    display: none;
  }
  .users-icon10 {
    min-height: 24px;
  }
  .dashboard8 {
    align-self: stretch;
    position: relative;
    font-size: var(--font-size-sm);
    line-height: 22px;
    font-family: var(--font-inter);
    color: var(--color-white);
    text-align: left;
  }
  .dashboard-wrapper3,
  .frame57,
  .frame58,
  .frame59 {
    flex: 1;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .dashboard-wrapper3 {
    flex-direction: column;
    padding: var(--padding-11xs) 0 0;
  }
  .frame57,
  .frame58,
  .frame59 {
    border-radius: var(--br-9xs);
    overflow: hidden;
    flex-direction: row;
    z-index: 1;
  }
  .frame59 {
    background-color: var(--color-darkturquoise-200);
    padding: var(--padding-6xs) var(--padding-base) var(--padding-4xs);
    gap: var(--gap-5xs);
  }
  .frame57,
  .frame58 {
    background-color: var(--color-gray-400);
  }
  .chart-bar-icon7,
  .frame56 {
    overflow: hidden;
    flex-shrink: 0;
  }
  .frame56 {
    cursor: pointer;
    border: 0;
    padding: var(--padding-12xs) 0 0;
    background-color: var(--color-gray-400);
    align-self: stretch;
    height: 40px;
    border-radius: var(--br-9xs);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    box-sizing: border-box;
  }
  .chart-bar-icon7 {
    height: 24px;
    width: 24px;
    position: relative;
  }
  .frame-child16 {
    width: calc(100% - 56px);
    border: 0;
    outline: 0;
    background-color: transparent;
    height: 27px;
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-8xs) 0 0;
    box-sizing: border-box;
    font-family: var(--font-inter);
    font-size: var(--font-size-sm);
    color: var(--color-dimgray);
    min-width: 94px;
  }
  .frame60 {
    align-self: stretch;
    border-radius: var(--br-9xs);
    background-color: var(--color-gray-400);
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-9xs) var(--padding-base) var(--padding-4xs);
    gap: var(--gap-6xs);
    cursor: pointer;
  }
  .container-5302-child,
  .frame-parent12,
  .frame60 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .frame-parent12 {
    margin: 0;
    flex: 1;
    flex-direction: column;
    gap: var(--gap-3xs);
    text-align: left;
    font-size: var(--font-size-sm);
    color: var(--color-dimgray);
    font-family: var(--font-inter);
  }
  .container-5302-child {
    align-self: stretch;
    flex-direction: row;
    padding: 0 var(--padding-10xs) var(--padding-513xl) var(--padding-11xs);
  }
  .image-23477 {
    width: 48px;
    height: 48px;
    position: relative;
    border-radius: var(--br-9xs);
    overflow: hidden;
    flex-shrink: 0;
    display: none;
  }
  .frame-child17 {
    height: 100%;
    width: 100%;
    position: absolute;
    margin: 0 !important;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: var(--br-5xs);
    background-color: var(--color-gray-100);
    cursor: pointer;
  }
  .avatar-1674-icon7 {
    width: 36px;
    height: 36px;
    position: relative;
    border-radius: var(--br-lg);
    overflow: hidden;
    flex-shrink: 0;
    object-fit: cover;
    z-index: 1;
  }
  .avatar-1674-wrapper3 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-10xs) 0 0;
  }
  .text-169797,
  .text-169805 {
    position: relative;
    z-index: 1;
  }
  .text-169797 {
    line-height: 22px;
    font-weight: 500;
    display: inline-block;
    min-width: 65px;
  }
  .text-169805 {
    font-size: var(--font-size-xs);
    line-height: 20px;
    color: var(--color-lightslategray);
    white-space: nowrap;
  }
  .text-16979-parent5 {
    flex-direction: column;
  }
  .container-53022,
  .rectangle-parent11,
  .text-16979-parent5 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .rectangle-parent11 {
    align-self: stretch;
    flex-direction: row;
    padding: var(--padding-xs) var(--padding-11xs) var(--padding-smi);
    position: relative;
    gap: var(--gap-xs);
  }
  .container-53022 {
    width: 252px;
    box-shadow: 0 0 2px rgba(23, 26, 31, 0.12), 0 0 1px rgba(23, 26, 31, 0.07);
    background-color: var(--color-white);
    overflow: hidden;
    flex-shrink: 0;
    flex-direction: column;
    padding: var(--padding-8xs) var(--padding-smi) var(--padding-lg)
      var(--padding-sm);
    box-sizing: border-box;
    gap: var(--gap-2xl);
  }
  .text-170116 {
    margin: 0;
    position: relative;
    font-size: inherit;
    line-height: 48px;
    font-weight: 400;
    font-family: inherit;
  }
  .create-new-project13 {
    position: relative;
    line-height: 18px;
    display: inline-block;
    min-width: 47px;
  }
  .create-new-project-wrapper {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-11xs) 0 0;
  }
  .span2 {
    color: var(--color-dimgray);
  }
  .create-new-project-container2 {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 100px;
  }
  .button-24503,
  .container-5298 {
    height: 36px;
    border-radius: var(--br-9xs);
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    box-sizing: border-box;
    max-width: 100%;
  }
  .button-24503 {
    height: 26px;
    flex: 1;
    background-color: var(--color-whitesmoke-200);
    padding: var(--padding-11xs) var(--padding-base);
    min-width: 48px;
    color: var(--color-gainsboro);
  }
  .container-5298 {
    align-self: stretch;
    background-color: var(--color-gainsboro);
    padding: var(--padding-8xs) var(--padding-6xs) var(--padding-8xs)
      var(--padding-mid);
    gap: var(--gap-21xl);
  }
  .create-new-project14 {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 59px;
  }
  .create-new-project-frame {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-11xs) 0 0;
  }
  .span3 {
    color: var(--color-dimgray);
  }
  .create-new-project-container3 {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 60px;
  }
  .button-24492,
  .container-53002 {
    height: 36px;
    border-radius: var(--br-9xs);
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    box-sizing: border-box;
    max-width: 100%;
  }
  .form-control {
    width: 1090px; /* Sesuaikan lebar input sesuai kebutuhan */
    min-width: 1090px; /* Atur lebar minimum input */
}
  .button-24492 {
    height: 26px;
    flex: 1;
    background-color: var(--color-whitesmoke-200);
    padding: var(--padding-11xs) var(--padding-mini);
    min-width: 60px;
    z-index: 1;
    color: var(--color-gainsboro);
  }
  .container-53002 {
    align-self: stretch;
    background-color: var(--color-gainsboro);
    padding: var(--padding-8xs) var(--padding-6xs) var(--padding-8xs)
      var(--padding-mid);
    gap: var(--gap-9xl);
  }
  .projects-chat-dots-child {
  width: calc(100% - 56px);
  border: 0;
  outline: 0;
  background-color: transparent;
  height: 27px;
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xs) 0 0;
  box-sizing: border-box;
  font-family: var(--font-inter);
  font-size: var(--font-size-sm);
  color: var(--color-dimgray);
  min-width: 94px;
}
  .create-new-project15 {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 77px;
  }
  .create-new-project-wrapper1 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-11xs) 0 0;
  }
  .span4 {
    color: var(--color-dimgray);
  }
  .create-new-project-container4 {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 78px;
  }
  .button-24504,
  .container-53012 {
    height: 36px;
    border-radius: var(--br-9xs);
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    box-sizing: border-box;
    max-width: 100%;
  }
  .form-control {
    width: 103%;
    padding: 0px 0px;
    font-size: 14px;
    color: #333;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #f5f5f5;
    background-image: none;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.form-control:focus {
    border-color: #66afe9;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 8px rgba(102,175,233,0.6);
}
  .button-24504 {
    height: 26px;
    flex: 1;
    background-color: var(--color-whitesmoke-200);
    padding: var(--padding-11xs) var(--padding-mini);
    min-width: 78px;
    z-index: 1;
    color: var(--color-gainsboro);
  }
  .container-53012 {
    align-self: stretch;
    background-color: var(--color-gainsboro);
    padding: var(--padding-8xs) var(--padding-6xs) var(--padding-8xs)
      var(--padding-mid);
    gap: var(--gap-3xs);
  }
  .e-add-icon9 {
    width: 16px;
    height: 16px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
  }

  .create-new-project16 {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 103px;
  }
  .button-24482,
  .container-5298-parent,
  .text-17011-parent2 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .button-24482 {
    align-self: stretch;
    border-radius: var(--br-5xs);
    background-color: var(--color-whitesmoke-200);
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-6xs) var(--padding-540xl);
    gap: var(--gap-7xs);
  }
  .container-5298-parent,
  .text-17011-parent2 {
    flex-direction: column;
    max-width: 100%;
  }
  .container-5298-parent {
    align-self: stretch;
    gap: var(--gap-2xs);
    font-size: var(--font-size-sm);
    color: var(--color-dimgray);
    font-family: var(--font-inter);
  }
  .text-17011-parent2 {
    flex: 1;
    gap: var(--gap-9xl);
  }
  .e-add-icon10 {
    width: 16px;
    height: 16px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
  }
  .e-add-wrapper6 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-10xs) 0 0;
  }
  .create-new-project17 {
    position: relative;
    font-size: var(--font-size-sm);
    line-height: 22px;
    font-family: var(--font-inter);
    color: var(--color-dimgray);
    text-align: left;
    display: inline-block;
    min-width: 109px;
  }
  .button-24505 {
    cursor: pointer;
    border: 0;
    padding: var(--padding-6xs) var(--padding-66xl);
    background-color: var(--color-whitesmoke-200);
    align-self: stretch;
    border-radius: var(--br-10xs);
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    gap: var(--gap-7xs);
  }
  .text-169973 {
    position: relative;
    font-size: var(--font-size-lg);
    line-height: 28px;
    font-family: var(--font-epilogue);
    cursor: pointer;
  }
  .avatar-1675-icon10 {
    width: 44px;
    height: 44px;
    position: relative;
    border-radius: var(--br-3xl);
    overflow: hidden;
    flex-shrink: 0;
    object-fit: cover;
  }
  .avatar-1675-wrapper8 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-4xs) 0 0;
  }
  .text-169988 {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 50px;
  }
  .text-169996 {
    align-self: stretch;
    position: relative;
    font-size: var(--font-size-xs);
    line-height: 20px;
    color: var(--color-dimgray);
  }
  .container-52897,
  .text-16998-parent4 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .text-16998-parent4 {
    flex: 1;
    flex-direction: column;
  }
  .container-52897 {
    align-self: stretch;
    border-radius: var(--br-5xs);
    background-color: var(--color-gray-100);
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-xs) var(--padding-base) var(--padding-2xl);
    gap: var(--gap-base);
  }
  .avatar-1676-icon7 {
    width: 44px;
    height: 44px;
    position: relative;
    border-radius: var(--br-3xl);
    overflow: hidden;
    flex-shrink: 0;
    object-fit: cover;
  }
  .avatar-1676-wrapper5 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-4xs) 0 0;
  }
  .text-170007 {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 36px;
  }
  .text-170017 {
    align-self: stretch;
    position: relative;
    font-size: var(--font-size-xs);
    line-height: 20px;
    color: var(--color-dimgray);
  }
  .container-52909,
  .text-17000-parent5 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .text-17000-parent5 {
    flex: 1;
    flex-direction: column;
  }
  .container-52909 {
    align-self: stretch;
    border-radius: var(--br-5xs);
    background-color: var(--color-gray-100);
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-xs) var(--padding-base) var(--padding-2xl);
    gap: var(--gap-base);
  }
  .avatar-1677-icon7 {
    width: 44px;
    height: 44px;
    position: relative;
    border-radius: var(--br-3xl);
    overflow: hidden;
    flex-shrink: 0;
    object-fit: cover;
  }
  .avatar-1677-wrapper5 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-4xs) 0 0;
  }
  .text-170027 {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 32px;
  }
  .text-170037 {
    align-self: stretch;
    position: relative;
    font-size: var(--font-size-xs);
    line-height: 20px;
    color: var(--color-dimgray);
  }
  .container-52917,
  .text-17002-parent5 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .text-17002-parent5 {
    flex: 1;
    flex-direction: column;
  }
  .container-52917 {
    align-self: stretch;
    border-radius: var(--br-5xs);
    background-color: var(--color-gray-100);
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-xs) var(--padding-base) var(--padding-2xl);
    gap: var(--gap-base);
  }
  .avatar-1678-icon7 {
    width: 44px;
    height: 44px;
    position: relative;
    border-radius: var(--br-3xl);
    overflow: hidden;
    flex-shrink: 0;
    object-fit: cover;
  }
  .avatar-1678-wrapper5 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-4xs) 0 0;
  }
  .text-170047 {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 40px;
  }
  .text-170057 {
    align-self: stretch;
    position: relative;
    font-size: var(--font-size-xs);
    line-height: 20px;
    color: var(--color-dimgray);
  }
  .container-52927,
  .text-17004-parent5 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .text-17004-parent5 {
    flex: 1;
    flex-direction: column;
  }
  .container-52927 {
    align-self: stretch;
    border-radius: var(--br-5xs);
    background-color: var(--color-gray-100);
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-xs) var(--padding-base) var(--padding-2xl);
    gap: var(--gap-base);
  }
  .avatar-1679-icon7 {
    width: 44px;
    height: 44px;
    position: relative;
    border-radius: var(--br-3xl);
    overflow: hidden;
    flex-shrink: 0;
    object-fit: cover;
  }
  .avatar-1679-wrapper5 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-4xs) 0 0;
  }
  .text-170067 {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 25px;
  }
  .text-170077 {
    align-self: stretch;
    position: relative;
    font-size: var(--font-size-xs);
    line-height: 20px;
    color: var(--color-dimgray);
  }
  .text-17006-parent5 {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .button-2450-group,
  .container-52937,
  .container-53003 {
    align-self: stretch;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .container-52937 {
    border-radius: var(--br-5xs);
    background-color: var(--color-gray-100);
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-xs) var(--padding-base) var(--padding-2xl);
    gap: var(--gap-base);
  }
  .button-2450-group,
  .container-53003 {
    flex-direction: column;
  }
  .container-53003 {
    border-radius: var(--br-9xs);
    background-color: var(--color-white);
    border: 1px solid var(--color-whitesmoke-200);
    overflow: hidden;
    padding: var(--padding-xl) var(--padding-lgi) var(--padding-lg);
    gap: var(--gap-smi-4);
  }
  .button-2450-group {
    gap: var(--gap-10xl);
  }
  .frame-wrapper10 {
    width: 324px;
    flex-direction: column;
    padding: var(--padding-7xs) 0 0;
    box-sizing: border-box;
    max-width: 100%;
    font-size: var(--font-size-sm);
    font-family: var(--font-inter);
  }
  .frame-parent13,
  .frame-wrapper10,
  .tambah-kontak,
  .tambah-kontak-inner {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .frame-parent13 {
    align-self: stretch;
    flex-direction: row;
    flex-wrap: wrap;
    gap: var(--gap-sm);
    max-width: 100%;
  }
  .tambah-kontak,
  .tambah-kontak-inner {
    box-sizing: border-box;
    text-align: left;
    color: var(--color-gray-200);
  }
  .tambah-kontak-inner {
    flex: 1;
    flex-direction: column;
    padding: var(--padding-5xl) 0 0;
    max-width: calc(100% - 284px);
    font-size: var(--font-size-13xl);
    font-family: var(--font-epilogue);
  }
  .tambah-kontak {
    width: 100%;
    position: relative;
    box-shadow: 0 3px 6px rgba(18, 15, 40, 0.12);
    background-color: var(--color-white);
    overflow: hidden;
    flex-direction: row;
    padding: 0 var(--padding-8xl) 0 0;
    gap: var(--gap-13xl);
    line-height: normal;
    letter-spacing: normal;
    font-size: var(--font-size-sm);
    font-family: var(--font-inter);
  }
  @media screen and (max-width: 1200px) {
    .container-53022 {
      display: none;
    }
    .button-24482 {
      padding-left: var(--padding-260xl);
      padding-right: var(--padding-260xl);
      box-sizing: border-box;
    }
    .tambah-kontak-inner {
      max-width: 100%;
    }
    .tambah-kontak {
      padding-left: var(--padding-8xl);
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 1050px) {
    .container-5302-child {
      padding-bottom: var(--padding-327xl);
      box-sizing: border-box;
    }
    .text-170116 {
      font-size: var(--font-size-7xl);
      line-height: 38px;
    }
    .container-5298,
    .container-53002,
    .container-53012 {
      flex-wrap: wrap;
    }
    .text-17011-parent2 {
      min-width: 100%;
    }
  }
  @media screen and (max-width: 750px) {
    .container-5298 {
      gap: var(--gap-xl);
    }
    .button-24482 {
      padding-left: var(--padding-120xl);
      padding-right: var(--padding-120xl);
      box-sizing: border-box;
    }
    .tambah-kontak {
      gap: var(--gap-base);
    }
  }
  @media screen and (max-width: 450px) {
    .container-5302-child {
      padding-bottom: var(--padding-206xl);
      box-sizing: border-box;
    }
    .text-170116 {
      font-size: var(--font-size-lgi);
      line-height: 29px;
    }
    .button-24482,
    .button-24505 {
      padding-left: var(--padding-xl);
      padding-right: var(--padding-xl);
      box-sizing: border-box;
    }
  }
  .tulis-child {
    align-self: stretch;
    height: 737px;
    position: relative;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: var(--br-5xs);
    background-color: var(--color-whitesmoke-200);
    display: none;
  }
  .pesan-baru {
    margin: 0;
    position: relative;
    font-size: inherit;
    line-height: 22px;
    font-weight: 400;
    font-family: inherit;
    z-index: 1;
  }
  .pesan-baru-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0 var(--padding-6xs) var(--padding-8xs);
  }
  .kepada {
    position: relative;
    line-height: 22px;
    display: inline-block;
    min-width: 58px;
    white-space: nowrap;
  }
  .button-2450,
  .kepada-wrapper {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-11xs) 0 0;
  }
  .button-2450 {
    width: 100%;
    border: 0;
    outline: 0;
    background-color: var(--color-whitesmoke-200);
    height: 26px;
    flex: 1;
    overflow: hidden;
    flex-direction: row;
    padding: var(--padding-11xs) var(--padding-5xs);
    box-sizing: border-box;
    font-family: var(--font-inter);
    font-size: var(--font-size-sm);
    min-width: 250px;
  }
  .button-2450,
  .button-2455,
  .frame-child1 {
    border-radius: var(--br-9xs);
    max-width: 100%;
  }
  .button-2455 {
    align-self: stretch;
    background-color: var(--color-gainsboro);
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-8xs) var(--padding-6xs);
    box-sizing: border-box;
    gap: var(--gap-45xl);
    top: 0;
    z-index: 99;
    position: sticky;
    text-align: left;
    font-size: var(--font-size-sm);
    color: var(--color-black);
    font-family: var(--font-inter);
  }
  .frame-child1 {
    height: 576px;
    width: 764px;
    position: relative;
    background-color: var(--color-white);
    display: none;
  }
  .span {
    color: var(--color-dimgray);
  }
  .create-new-project-container {
    flex: 1;
    position: relative;
    line-height: 22px;
    display: inline-block;
    max-width: 100%;
    z-index: 2;
  }
  .rectangle-parent1 {
    align-self: stretch;
    border-radius: var(--br-9xs);
    background-color: var(--color-white);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-6xs) var(--padding-2xs) 547px var(--padding-xs);
    box-sizing: border-box;
    max-width: 100%;
    z-index: 1;
    font-size: var(--font-size-sm);
    color: var(--color-gainsboro);
    font-family: var(--font-inter);
  }
  .button-2457-child {
    height: 26px;
    width: 27px;
    position: relative;
    min-height: 26px;
  }
  .batal {
    position: relative;
    font-size: var(--font-size-sm);
    line-height: 22px;
    font-family: var(--font-inter);
    color: var(--color-dimgray);
    text-align: left;
    display: inline-block;
    min-width: 34px;
  }
  .batal-wrapper {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-10xs) 0 0;
  }
  .button-2457,
  .e-add-icon3 {
    overflow: hidden;
    flex-shrink: 0;
  }
  .button-2457 {
    cursor: pointer;
    border: 0;
    padding: var(--padding-8xs) var(--padding-sm);
    background-color: var(--color-gainsboro);
    width: 121px;
    border-radius: var(--br-5xs);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    box-sizing: border-box;
    gap: var(--gap-xl);
    z-index: 1;
  }
  .e-add-icon3 {
    width: 16px;
    height: 16px;
    position: relative;
  }
  .e-add-frame {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: var(--padding-10xs) 0 0;
  }
  .create-new-project3 {
    position: relative;
    font-size: var(--font-size-sm);
    line-height: 22px;
    font-family: var(--font-inter);
    color: var(--color-dimgray);
    text-align: left;
    display: inline-block;
    min-width: 34px;
  }
  .button-2456 {
    cursor: pointer;
    border: 0;
    padding: var(--padding-6xs) 286px;
    background-color: var(--color-gainsboro);
    align-self: stretch;
    border-radius: var(--br-5xs);
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    gap: var(--gap-7xs);
    z-index: 1;
  }
  .button-2456-wrapper,
  .button-2457-parent {
    flex: 1;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .button-2456-wrapper {
    flex-direction: column;
    padding: var(--padding-12xs) 0 0;
    box-sizing: border-box;
    min-width: 417px;
  }
  .button-2457-parent {
    flex-direction: row;
    flex-wrap: wrap;
    gap: var(--gap-7xs);
  }
  .tulis-inner {
    align-self: stretch;
    flex-direction: row;
    padding: 0 0 0 var(--padding-12xs);
    box-sizing: border-box;
    max-width: 100%;
  }
  .tulis,
  .tulis-inner,
  .tulis1 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .tulis1 {
    flex: 1;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: var(--br-5xs);
    background-color: var(--color-whitesmoke-200);
    flex-direction: column;
    padding: var(--padding-base) var(--padding-6xs) var(--padding-5xs);
    box-sizing: border-box;
    gap: var(--gap-xs);
    max-width: 100%;
    text-align: left;
    font-size: var(--font-size-13xl);
    color: var(--color-black);
    font-family: var(--font-epilogue);
  }
  .tulis {
    width: 783px;
    position: relative;
    flex-direction: row;
    line-height: normal;
    letter-spacing: normal;
    max-width: 90%;
    max-height: 90%;
    overflow: auto;
  }
  @media screen and (max-width: 750px) {
    .pesan-baru {
      font-size: var(--font-size-7xl);
      line-height: 18px;
    }
    .button-2455 {
      display: none;
    }
  }
  @media screen and (max-width: 675px) {
    .rectangle-parent1 {
      padding-top: var(--padding-xl);
      padding-bottom: 356px;
      box-sizing: border-box;
    }
    .button-2456-wrapper {
      min-width: 100%;
    }
  }
  @media screen and (max-width: 450px) {
    .pesan-baru {
      font-size: var(--font-size-lgi);
      line-height: 13px;
    }
    .button-2455 {
      gap: var(--gap-13xl);
    }
    .button-2456 {
      padding-left: var(--padding-xl);
      padding-right: var(--padding-xl);
      box-sizing: border-box;
    }
  }
  
    </style>