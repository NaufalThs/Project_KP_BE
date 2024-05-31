<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./percakapan.css" />
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
    <div class="percakapan">
      <main class="percakapan-menu">
        <div class="container-53021">
          <div class="logo-bkpsdm-1-1-wrapper2">
            <img
              class="logo-bkpsdm-1-1-icon5"
              loading="lazy"
              alt=""
              src="./public/logobkpsdm1-1@2x.png"
            />
          </div>
          <div class="container-5302-inner">
            <div class="frame-parent6">
              <div class="frame-wrapper3">
                <div class="folder-parent1" id="groupContainer">
                  <img
                    class="folder-icon18"
                    loading="lazy"
                    alt=""
                    src="./public/folder-1.svg"
                  />

                  <div class="projects-wrapper6">
                    <div class="projects12">Menu</div>
                  </div>
                </div>
              </div>
              <div class="frame31" id="frameContainer1">
                <img class="folder-icon19" alt="" src="./public/folder.svg" />

                <div class="projects-wrapper7">
                  <div class="projects13">Pesan Diterima</div>
                </div>
              </div>
              <div class="frame32" id="frameContainer2">
                <img class="folder-icon20" alt="" src="./public/folder-2.svg" />

                <div class="projects-wrapper8">
                  <div class="projects14">Pesan Terkirim</div>
                </div>
              </div>
              <div class="frame33" id="frameContainer3">
                <img class="folder-icon21" alt="" src="./public/folder-3.svg" />

                <div class="messages-wrapper5">
                  <div class="messages8">Pesan Penting</div>
                </div>
              </div>
              <button class="frame34">
                <div class="frame35">
                  <div class="messages9">Percakapan</div>
                  <img
                    class="chat-dots-icon4"
                    alt=""
                    src="./public/chat-dots.svg"
                  />

                  <div class="messages10">Percakapan</div>
                  <img
                    class="chat-dots-icon5"
                    alt=""
                    src="./public/chat-dots.svg"
                  />

                  <div class="frame36">
                    <img
                      class="chat-dots-icon6"
                      alt=""
                      src="./public/chat-dots1.svg"
                    />

                    <div class="dashboard-frame">
                      <b class="dashboard4">Percakapan</b>
                    </div>
                  </div>
                </div>
              </button>
              <div class="frame37" id="frameContainer4">
                <img class="users-icon4" alt="" src="./public/users.svg" />

                <div class="teams-wrapper2">
                  <div class="teams4">Kontak</div>
                </div>
              </div>
              <div class="frame38" id="frameContainer5">
                <img
                  class="chart-bar-icon4"
                  alt=""
                  src="./public/chart-bar.svg"
                />

                <input
                  class="projects-chat-dots-child"
                  placeholder="Data Base"
                  type="text"
                />
              </div>
            </div>
          </div>
          <div class="image-23474"></div>
          <div class="rectangle-parent8">
            <div class="frame-child11" id="rectangle"></div>
            <div class="avatar-1674-wrapper1">
              <img
                class="avatar-1674-icon4"
                loading="lazy"
                alt=""
                src="./public/avatar-1674@2x.png"
              />
            </div>
            <div class="text-16979-parent2">
              <div class="text-169794">admin123</div>
              <div class="text-169802">admin123@google.com</div>
            </div>
          </div>
        </div>
        <section class="percakapan-menu-inner">
          <div class="frame-parent7">
            <header class="frame-header">
              <h1 class="text-170114">Percakapan</h1>
              <table id="kontak-table" class="minimalist-table">
                <thead>
                </thead>
                <tbody>
                  @foreach($Messagers as $message)
                  <tr>
                    
                    <td>{{ $message->phone }}</td>
                    <td>{{ $message->message }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </header>
            <div class="frame-wrapper4">
              <div class="button-2450-parent">
                <div class="container-53001">
                  <b class="create-new-project6">Percakapan Terbaru</b>
                  <div class="container-52894">
                    <div class="avatar-1675-wrapper3">
                      <img
                        class="avatar-1675-icon5"
                        alt=""
                        src="./public/avatar-1675@2x.png"
                      />
                    </div>
                    <div class="avatar-container1">
                      <b class="text-169983">Ahmad</b>
                      <div class="chat-message">5</div>
                    </div>
                  </div>
                  <div class="container-52906">
                    <div class="avatar-1676-wrapper2">
                      <img
                        class="avatar-1676-icon4"
                        loading="lazy"
                        alt=""
                        src="./public/avatar-1676@2x.png"
                      />
                    </div>
                    <div class="text-17000-parent2">
                      <b class="text-170004">Ucup</b>
                      <div class="text-170014">4</div>
                    </div>
                  </div>
                  <div class="container-52914">
                    <div class="avatar-1677-wrapper2">
                      <img
                        class="avatar-1677-icon4"
                        loading="lazy"
                        alt=""
                        src="./public/avatar-1677@2x.png"
                      />
                    </div>
                    <div class="text-17002-parent2">
                      <b class="text-170024">Udin</b>
                      <div class="text-170034">4</div>
                    </div>
                  </div>
                  <div class="container-52924">
                    <div class="avatar-1678-wrapper2">
                      <img
                        class="avatar-1678-icon4"
                        loading="lazy"
                        alt=""
                        src="./public/avatar-1678@2x.png"
                      />
                    </div>
                    <div class="text-17004-parent2">
                      <b class="text-170044">Ujang</b>
                      <div class="text-170054">1</div>
                    </div>
                  </div>
                  <div class="container-52934">
                    <div class="avatar-1679-wrapper2">
                      <img
                        class="avatar-1679-icon4"
                        loading="lazy"
                        alt=""
                        src="./public/avatar-1679@2x.png"
                      />
                    </div>
                    <div class="text-17006-parent2">
                      <b class="text-170064">Joe</b>
                      <div class="text-170074">halo</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <script>
      var groupContainer = document.getElementById("groupContainer");
      if (groupContainer) {
        groupContainer.addEventListener("click", function (e) {
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
          window.location.href = "./kontak";
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
      </script>
  </body>
</html>
<style>
  .minimalist-table {
    width: 101%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    color: #565E6C; /* Warna teks abu */
}
.minimalist-table th,
.minimalist-table td {
    border: 1px solid #F3F4F6; /* Garis tepi abu-abu */
    padding: 8px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.minimalist-table th {
    background-color: #F3F4F6; /* Warna latar belakang putih ke abu-abuan */
    text-align: left;
}

/* Menentukan lebar kolom secara manual */
.minimalist-table th:nth-child(1),
.minimalist-table td:nth-child(1) {
    width: 25px; /* Ubah nilai ini sesuai kebutuhan Anda */
}.minimalist-table {
    width: 101%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    color: #565E6C; /* Warna teks abu */
}
.minimalist-table th,
.minimalist-table td {
    border: 1px solid #F3F4F6; /* Garis tepi abu-abu */
    padding: 8px;
    position: relative;
    max-width: 200px; /* Lebar maksimum kolom */
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.minimalist-table th {
    background-color: #F3F4F6; /* Warna latar belakang putih ke abu-abuan */
    text-align: left;
}
/* Menetapkan lebar untuk setiap kolom */
.minimalist-table th:nth-child(1),
.minimalist-table td:nth-child(1) {
    width: 30px; /* Ubah nilai ini sesuai kebutuhan Anda */
}

.minimalist-table th:nth-child(2),
.minimalist-table td:nth-child(2) {
    width: 100px; /* Ubah nilai ini sesuai kebutuhan Anda */
}

/* Menambahkan overlay untuk kolom kedua */
.minimalist-table td:nth-child(2)::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 300px; /* Lebar kolom kedua */
    background-color: #fff; /* Warna latar belakang */
    z-index: 1; /* Jaga agar tetap di atas */
}
.minimalist-table th:nth-child(3),
.minimalist-table td:nth-child(3) {
    width: 200px; /* Ubah nilai ini sesuai kebutuhan Anda */
}
/* Menambahkan overlay untuk kolom ketiga */
.minimalist-table td:nth-child(3)::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 300px; /* Lebar kolom ketiga */
    background-color: #fff; /* Warna latar belakang */
    z-index: 1; /* Jaga agar tetap di atas */
}
.minimalist-table th:nth-child(4),
.minimalist-table td:nth-child(4) {
    width: 100px; /* Ubah nilai ini sesuai kebutuhan Anda */
}
/* Menambahkan overlay untuk kolom ketiga */
.minimalist-table td:nth-child(4)::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 300px; /* Lebar kolom ketiga */
    background-color: #fff; /* Warna latar belakang */
    z-index: 1; /* Jaga agar tetap di atas */
}
.minimalist-table th:nth-child(5),
.minimalist-table td:nth-child(5) {
    width: 150px; /* Ubah nilai ini sesuai kebutuhan Anda */
}

/* Menambahkan overlay untuk kolom ketiga */
.minimalist-table td:nth-child(5)::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 150px; /* Lebar kolom ketiga */
    background-color: #fff; /* Warna latar belakang */
    z-index: 1; /* Jaga agar tetap di atas */
}
.minimalist-table th:nth-child(6),
.minimalist-table td:nth-child(6) {
    width: 200px; /* Ubah nilai ini sesuai kebutuhan Anda */
}
/* Menambahkan overlay untuk kolom ketiga */
.minimalist-table td:nth-child(6)::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 200px; /* Lebar kolom ketiga */
    background-color: #fff; /* Warna latar belakang */
    z-index: 1; /* Jaga agar tetap di atas */
}
.minimalist-table th:nth-child(7),
.minimalist-table td:nth-child(7) {
    width: 200px; /* Ubah nilai ini sesuai kebutuhan Anda */
}

/* Menambahkan overlay untuk kolom ketiga */
.minimalist-table td:nth-child(7)::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 200px; /* Lebar kolom ketiga */
    background-color: #fff; /* Warna latar belakang */
    z-index: 1; /* Jaga agar tetap di atas */
}
.minimalist-table th:nth-child(8),
.minimalist-table td:nth-child(8) {
    width: 200px; /* Ubah nilai ini sesuai kebutuhan Anda */
}

/* Menambahkan overlay untuk kolom ketiga */
.minimalist-table td:nth-child(8)::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 200px; /* Lebar kolom ketiga */
    background-color: #fff; /* Warna latar belakang */
    z-index: 1; /* Jaga agar tetap di atas */
}

/* Dan seterusnya untuk kolom berikutnya... */

.minimalist-table tbody tr:nth-child(even) {
    background-color: #F3F4F6; /* Warna latar belakang baris ganjil ke abu-abuan */
}

.minimalist-table tbody tr:hover {
    background-color: #00BDD6; /* Warna latar belakang saat dihover ke abu-abuan */
}

    .logo-bkpsdm-1-1-icon5 {
  height: 92px;
  flex: 1;
  position: relative;
  max-width: 100%;
  overflow: hidden;
  object-fit: cover;
  z-index: 1;
}
.logo-bkpsdm-1-1-wrapper2 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0 var(--padding-8xs);
}
.folder-icon18 {
  height: 24px;
  width: 24px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  min-height: 24px;
}
.projects12 {
  align-self: stretch;
  position: relative;
  line-height: 22px;
}
.folder-parent1,
.frame-wrapper3,
.projects-wrapper6 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.projects-wrapper6 {
  flex: 1;
  flex-direction: column;
  padding: var(--padding-12xs) 0 0;
}
.folder-parent1,
.frame-wrapper3 {
  flex-direction: row;
}
.folder-parent1 {
  flex: 1;
  gap: var(--gap-5xs);
  cursor: pointer;
}
.frame-wrapper3 {
  align-self: stretch;
  padding: 0 var(--padding-mid) 0 var(--padding-mini);
}
.folder-icon19 {
  height: 24px;
  width: 24px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.projects13 {
  align-self: stretch;
  position: relative;
  line-height: 22px;
}
.frame31,
.projects-wrapper7 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.projects-wrapper7 {
  flex: 1;
  flex-direction: column;
  padding: var(--padding-10xs) 0 0;
}
.frame31 {
  align-self: stretch;
  border-radius: var(--br-9xs);
  background-color: var(--color-gray-400);
  overflow: hidden;
  flex-direction: row;
  padding: var(--padding-5xs) var(--padding-mini) var(--padding-6xs);
  gap: var(--gap-4xs);
  cursor: pointer;
}
.folder-icon20 {
  height: 24px;
  width: 24px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.projects14 {
  align-self: stretch;
  position: relative;
  line-height: 22px;
}
.frame32,
.projects-wrapper8 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.projects-wrapper8 {
  flex: 1;
  flex-direction: column;
  padding: var(--padding-10xs) 0 0;
}
.frame32 {
  align-self: stretch;
  border-radius: var(--br-9xs);
  background-color: var(--color-gray-400);
  overflow: hidden;
  flex-direction: row;
  padding: var(--padding-5xs) var(--padding-mini) var(--padding-6xs);
  gap: var(--gap-4xs);
  cursor: pointer;
}
.folder-icon21 {
  height: 24px;
  width: 24px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  min-height: 24px;
}
.messages8 {
  align-self: stretch;
  position: relative;
  line-height: 22px;
}
.frame33,
.messages-wrapper5 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.messages-wrapper5 {
  flex: 1;
  flex-direction: column;
  padding: var(--padding-12xs) 0 0;
}
.frame33 {
  align-self: stretch;
  border-radius: var(--br-9xs);
  background-color: var(--color-gray-400);
  overflow: hidden;
  flex-direction: row;
  padding: var(--padding-5xs) var(--padding-mini);
  gap: var(--gap-4xs);
  cursor: pointer;
}
.messages9 {
  width: 156px;
  font-size: var(--font-size-sm);
  line-height: 22px;
  font-family: var(--font-inter);
  color: var(--color-dimgray);
  text-align: left;
}
.chat-dots-icon4,
.messages10,
.messages9 {
  position: relative;
  display: none;
  flex-shrink: 0;
}
.chat-dots-icon4 {
  height: 24px;
  width: 24px;
  overflow: hidden;
}
.messages10 {
  width: 156px;
  font-size: var(--font-size-sm);
  line-height: 22px;
  font-family: var(--font-inter);
  color: var(--color-dimgray);
  text-align: left;
}
.chat-dots-icon5,
.chat-dots-icon6 {
  height: 24px;
  width: 24px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.chat-dots-icon5 {
  display: none;
}
.chat-dots-icon6 {
  min-height: 24px;
}
.dashboard4 {
  align-self: stretch;
  position: relative;
  font-size: var(--font-size-sm);
  line-height: 22px;
  font-family: var(--font-inter);
  color: var(--color-white);
  text-align: left;
}
.dashboard-frame,
.frame34,
.frame35,
.frame36 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.dashboard-frame {
  flex: 1;
  flex-direction: column;
  padding: var(--padding-12xs) 0 0;
}
.frame34,
.frame35,
.frame36 {
  border-radius: var(--br-9xs);
  overflow: hidden;
  flex-direction: row;
}
.frame36 {
  flex: 1;
  background-color: var(--color-darkturquoise-200);
  padding: var(--padding-5xs) var(--padding-base);
  gap: var(--gap-5xs);
  z-index: 1;
}
.frame34,
.frame35 {
  background-color: var(--color-gray-400);
}
.frame35 {
  flex: 1;
  z-index: 1;
}
.frame34 {
  cursor: pointer;
  border: 0;
  padding: 0;
  align-self: stretch;
}
.users-icon4 {
  height: 24px;
  width: 24px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  min-height: 24px;
}
.teams4 {
  align-self: stretch;
  position: relative;
  line-height: 22px;
}
.frame37,
.teams-wrapper2 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.teams-wrapper2 {
  flex: 1;
  flex-direction: column;
  padding: var(--padding-12xs) 0 0;
}
.frame37 {
  align-self: stretch;
  border-radius: var(--br-9xs);
  background-color: var(--color-gray-400);
  overflow: hidden;
  flex-direction: row;
  padding: var(--padding-5xs) var(--padding-base);
  gap: var(--gap-5xs);
  cursor: pointer;
}
.chart-bar-icon4 {
  height: 24px;
  width: 24px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.frame-child10 {
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
.frame38 {
  align-self: stretch;
  border-radius: var(--br-9xs);
  background-color: var(--color-gray-400);
  overflow: hidden;
  flex-direction: row;
  padding: var(--padding-9xs) var(--padding-base) var(--padding-4xs);
  gap: var(--gap-6xs);
  cursor: pointer;
}
.container-5302-inner,
.frame-parent6,
.frame38 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.frame-parent6 {
  flex: 1;
  flex-direction: column;
  gap: var(--gap-3xs);
}
.container-5302-inner {
  align-self: stretch;
  flex-direction: row;
  padding: 0 var(--padding-10xs) var(--padding-513xl) var(--padding-11xs);
}
.image-23474 {
  width: 48px;
  height: 48px;
  position: relative;
  border-radius: var(--br-9xs);
  overflow: hidden;
  flex-shrink: 0;
  display: none;
}
.frame-child11 {
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
.avatar-1674-icon4 {
  width: 36px;
  height: 36px;
  position: relative;
  border-radius: var(--br-lg);
  overflow: hidden;
  flex-shrink: 0;
  object-fit: cover;
  z-index: 1;
}
.avatar-1674-wrapper1 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-10xs) 0 0;
}
.text-169794,
.text-169802 {
  position: relative;
  z-index: 1;
}
.text-169794 {
  line-height: 22px;
  font-weight: 500;
  display: inline-block;
  min-width: 65px;
}
.text-169802 {
  font-size: var(--font-size-xs);
  line-height: 20px;
  color: var(--color-lightslategray);
  white-space: nowrap;
}
.text-16979-parent2 {
  flex-direction: column;
}
.container-53021,
.rectangle-parent8,
.text-16979-parent2 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.rectangle-parent8 {
  align-self: stretch;
  flex-direction: row;
  padding: var(--padding-xs) var(--padding-11xs) var(--padding-smi);
  position: relative;
  gap: var(--gap-xs);
  color: var(--color-gray-200);
}
.container-53021 {
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
.text-170114 {
  margin: 0;
  position: relative;
  font-size: inherit;
  line-height: 48px;
  font-weight: 400;
  font-family: inherit;
}
.avatar-1675-icon4 {
  width: 44px;
  height: 44px;
  position: relative;
  border-radius: var(--br-3xl);
  overflow: hidden;
  flex-shrink: 0;
  object-fit: cover;
}
.avatar-1675-wrapper2 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-4xs) 0 0;
}
.text-169982 {
  position: relative;
  line-height: 22px;
  display: inline-block;
  min-width: 50px;
}
.text-169991 {
  align-self: stretch;
  position: relative;
  font-size: var(--font-size-xs);
  line-height: 20px;
  color: var(--color-dimgray);
}
.text-16998-container {
  flex: 1;
  flex-direction: column;
}
.container-5294-inner,
.frame-parent8,
.text-16998-container {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.frame-parent8 {
  align-self: stretch;
  flex-direction: row;
  gap: var(--gap-base);
}
.container-5294-inner {
  width: 252px;
  flex-direction: column;
  padding: var(--padding-11xs) 0 0;
  box-sizing: border-box;
}
.div {
  width: 464px;
  position: relative;
  line-height: 22px;
  display: inline-block;
  flex-shrink: 0;
  white-space: nowrap;
  max-width: 100%;
}
.frame39 {
  width: 765.8px;
  border-radius: var(--br-5xs);
  background-color: var(--color-white);
  overflow: hidden;
  flex-shrink: 0;
  flex-direction: row;
  justify-content: center;
  padding: 21.5px var(--padding-xl) 22.5px var(--padding-4xl);
  box-sizing: border-box;
  text-align: center;
}
.container-5294,
.frame-header,
.frame39 {
  display: flex;
  align-items: flex-start;
  max-width: 100%;
}
.container-5294 {
  align-self: stretch;
  border-radius: var(--br-5xs);
  background-color: var(--color-gray-100);
  overflow: hidden;
  flex-direction: row;
  justify-content: space-between;
  padding: var(--padding-3xs) 11.4px var(--padding-3xs) var(--padding-base);
  box-sizing: border-box;
  gap: var(--gap-xl);
  font-size: var(--font-size-sm);
  font-family: var(--font-inter);
}
.frame-header {
  flex: 1;
  flex-direction: column;
  justify-content: flex-start;
  gap: var(--gap-4xl);
  text-align: left;
  font-size: var(--font-size-13xl);
  color: var(--color-gray-200);
  font-family: var(--font-epilogue);
}
.e-add-icon5 {
  width: 16px;
  height: 16px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.e-add-wrapper2 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-10xs) 0 0;
}
.create-new-project5 {
  position: relative;
  font-size: var(--font-size-sm);
  line-height: 22px;
  font-family: var(--font-inter);
  color: var(--color-dimgray);
  text-align: left;
  display: inline-block;
  min-width: 109px;
}
.button-24501 {
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
.create-new-project6 {
  position: relative;
  font-size: var(--font-size-lg);
  line-height: 28px;
  font-family: var(--font-epilogue);
}
.avatar-1675-icon5 {
  width: 44px;
  height: 44px;
  position: relative;
  border-radius: var(--br-3xl);
  overflow: hidden;
  flex-shrink: 0;
  object-fit: cover;
}
.avatar-1675-wrapper3 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-4xs) 0 0;
}
.text-169983 {
  position: relative;
  line-height: 22px;
  display: inline-block;
  min-width: 50px;
}
.chat-message {
  align-self: stretch;
  position: relative;
  font-size: var(--font-size-xs);
  line-height: 20px;
  color: var(--color-dimgray);
}
.avatar-container1,
.container-52894 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.avatar-container1 {
  flex: 1;
  flex-direction: column;
}
.container-52894 {
  align-self: stretch;
  border-radius: var(--br-5xs);
  background-color: var(--color-gray-100);
  overflow: hidden;
  flex-direction: row;
  padding: var(--padding-xs) var(--padding-base) var(--padding-2xl);
  gap: var(--gap-base);
}
.avatar-1676-icon4 {
  width: 44px;
  height: 44px;
  position: relative;
  border-radius: var(--br-3xl);
  overflow: hidden;
  flex-shrink: 0;
  object-fit: cover;
}
.avatar-1676-wrapper2 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-4xs) 0 0;
}
.text-170004 {
  position: relative;
  line-height: 22px;
  display: inline-block;
  min-width: 36px;
}
.text-170014 {
  align-self: stretch;
  position: relative;
  font-size: var(--font-size-xs);
  line-height: 20px;
  color: var(--color-dimgray);
}
.container-52906,
.text-17000-parent2 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.text-17000-parent2 {
  flex: 1;
  flex-direction: column;
}
.container-52906 {
  align-self: stretch;
  border-radius: var(--br-5xs);
  background-color: var(--color-gray-100);
  overflow: hidden;
  flex-direction: row;
  padding: var(--padding-xs) var(--padding-base) var(--padding-2xl);
  gap: var(--gap-base);
}
.avatar-1677-icon4 {
  width: 44px;
  height: 44px;
  position: relative;
  border-radius: var(--br-3xl);
  overflow: hidden;
  flex-shrink: 0;
  object-fit: cover;
}
.avatar-1677-wrapper2 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-4xs) 0 0;
}
.text-170024 {
  position: relative;
  line-height: 22px;
  display: inline-block;
  min-width: 32px;
}
.text-170034 {
  align-self: stretch;
  position: relative;
  font-size: var(--font-size-xs);
  line-height: 20px;
  color: var(--color-dimgray);
}
.container-52914,
.text-17002-parent2 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.text-17002-parent2 {
  flex: 1;
  flex-direction: column;
}
.container-52914 {
  align-self: stretch;
  border-radius: var(--br-5xs);
  background-color: var(--color-gray-100);
  overflow: hidden;
  flex-direction: row;
  padding: var(--padding-xs) var(--padding-base) var(--padding-2xl);
  gap: var(--gap-base);
}
.avatar-1678-icon4 {
  width: 44px;
  height: 44px;
  position: relative;
  border-radius: var(--br-3xl);
  overflow: hidden;
  flex-shrink: 0;
  object-fit: cover;
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
.avatar-1678-wrapper2 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-4xs) 0 0;
}
.text-170044 {
  position: relative;
  line-height: 22px;
  display: inline-block;
  min-width: 40px;
}
.text-170054 {
  align-self: stretch;
  position: relative;
  font-size: var(--font-size-xs);
  line-height: 20px;
  color: var(--color-dimgray);
}
.container-52924,
.text-17004-parent2 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.text-17004-parent2 {
  flex: 1;
  flex-direction: column;
}
.container-52924 {
  align-self: stretch;
  border-radius: var(--br-5xs);
  background-color: var(--color-gray-100);
  overflow: hidden;
  flex-direction: row;
  padding: var(--padding-xs) var(--padding-base) var(--padding-2xl);
  gap: var(--gap-base);
}
.avatar-1679-icon4 {
  width: 44px;
  height: 44px;
  position: relative;
  border-radius: var(--br-3xl);
  overflow: hidden;
  flex-shrink: 0;
  object-fit: cover;
}
.avatar-1679-wrapper2 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-4xs) 0 0;
}
.text-170064 {
  position: relative;
  line-height: 22px;
  display: inline-block;
  min-width: 25px;
}
.text-170074 {
  align-self: stretch;
  position: relative;
  font-size: var(--font-size-xs);
  line-height: 20px;
  color: var(--color-dimgray);
}
.container-52934,
.text-17006-parent2 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.text-17006-parent2 {
  flex: 1;
  flex-direction: column;
}
.container-52934 {
  align-self: stretch;
  border-radius: var(--br-5xs);
  background-color: var(--color-gray-100);
  overflow: hidden;
  flex-direction: row;
  padding: var(--padding-xs) var(--padding-base) var(--padding-2xl);
  gap: var(--gap-base);
}
.container-53001 {
  align-self: stretch;
  border-radius: var(--br-9xs);
  background-color: var(--color-white);
  border: 1px solid var(--color-whitesmoke-200);
  overflow: hidden;
  padding: var(--padding-xl) var(--padding-lgi) var(--padding-lg);
  gap: var(--gap-smi-4);
}
.button-2450-parent,
.container-53001,
.frame-wrapper4 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
}
.button-2450-parent {
  align-self: stretch;
  gap: var(--gap-10xl);
}
.frame-wrapper4 {
  width: 324px;
  padding: var(--padding-7xs) 0 0;
  box-sizing: border-box;
  max-width: 100%;
}
.frame-parent7 {
  align-self: stretch;
  flex-direction: row;
  flex-wrap: wrap;
  gap: var(--gap-14xl);
  max-width: 100%;
}
.frame-parent7,
.percakapan,
.percakapan-menu,
.percakapan-menu-inner {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.percakapan-menu-inner {
  flex: 1;
  flex-direction: column;
  padding: var(--padding-5xl) 0 0;
  box-sizing: border-box;
  max-width: calc(100% - 284px);
  text-align: left;
  font-size: var(--font-size-sm);
  color: var(--color-gray-200);
  font-family: var(--font-inter);
}
.percakapan,
.percakapan-menu {
  overflow: hidden;
  flex-direction: row;
}
.percakapan-menu {
  flex: 1;
  box-shadow: 0 3px 6px rgba(18, 15, 40, 0.12);
  background-color: var(--color-white);
  padding: 0 var(--padding-8xl) 0 0;
  box-sizing: border-box;
  gap: var(--gap-13xl);
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-sm);
  color: var(--color-dimgray);
  font-family: var(--font-inter);
}
.percakapan {
  width: 100%;
  position: relative;
  line-height: normal;
  letter-spacing: normal;
}
@media screen and (max-width: 1050px) {
  .container-53021 {
    display: none;
  }
  .percakapan-menu-inner {
    max-width: 100%;
  }
  .percakapan-menu {
    padding-left: var(--padding-8xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 1000px) {
  .container-5302-inner {
    padding-bottom: var(--padding-327xl);
    box-sizing: border-box;
  }
  .frame-header {
    min-width: 100%;
  }
}
@media screen and (max-width: 750px) {
  .frame-parent7,
  .percakapan-menu {
    gap: var(--gap-base);
  }
}
@media screen and (max-width: 450px) {
  .container-5302-inner {
    padding-bottom: var(--padding-206xl);
    box-sizing: border-box;
  }
  .button-24501 {
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