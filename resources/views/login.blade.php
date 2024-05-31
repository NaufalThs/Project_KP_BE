<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./login.css" />
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
    <div class="login">
      <div class="rectangle-parent2">
        <div class="frame-child2"></div>
        <img
          class="logo-bkpsdm-1-1-icon3"
          loading="lazy"
          alt=""
          src="./public/logobkpsdm1-11@2x.png"
        />

        <h2 class="badan-kepegawaian-dan-container">
          <p class="badan-kepegawaian-dan">
            Badan Kepegawaian dan Pengembangan
          </p>
          <p class="sumber-daya-manusia">
            Sumber Daya Manusia Kabupaten Tasikmalaya
          </p>
        </h2>
      </div>
      <div class="login-button">
        <div class="frame-parent2">
          <div class="frame-wrapper1">
            <div class="frame-parent3">
              <div class="sistolap-wrapper">
                <h1 class="sistolap">SISTOLAP</h1>
              </div>
              <b class="sistem-otomatisasi-layanan">
                Sistem Otomatisasi Layanan Pegawai
              </b>
            </div>
          </div>
          <div class="group-div">
            <div class="frame-child3"></div>
            <div class="username-label-parent">
              <div class="username-label">
                <h2 class="login1">LOGIN</h2>
              </div>
              <div class="password-label">
                <div class="rectangle-parent3">
                  <div class="frame-child4"></div>
                  <div class="username-input">
                    <input
                      id="username"
                      class="username"
                      placeholder="username"
                      type="text"
                    />
                  </div>
                  <div class="rectangle-parent4">
                    <div class="frame-child5"></div>
                    <img
                      class="vector-icon4"
                      alt=""
                      src="./public/vector1.svg"
                    />
                  </div>
                </div>
                <div class="rectangle-parent5">
                  <div class="frame-child6"></div>
                  <div class="frame-wrapper2">
                    <div class="password-parent">
                      <input
                        id="password"
                        class="password"
                        placeholder="password"
                        type="password"
                      />

                      <div class="key-solid-1"></div>
                    </div>
                  </div>
                  <div class="rectangle-parent6">
                    <div class="frame-child7"></div>
                    <img
                      class="pincode-input-icon"
                      alt=""
                      src="./public/vector-12.svg"
                    />
                  </div>
                </div>
              </div>
            </div>
            <button class="group-button" id="groupButton">
              <div class="frame-child8"></div>
              <div class="login-wrapper">
                <b class="login2">LOGIN</b>
              </div>
              <div class="form"></div>
            </button>
          </div>
        </div>
      </div>
    </div>

    <script>
      var groupButton = document.getElementById("groupButton");
      if (groupButton) {
        groupButton.addEventListener("click", function (e) {
          // Get the entered username and password
          var username = document.getElementById("username").value;
          var password = document.getElementById("password").value;

          // Check if username and password are valid
          // For demonstration, assuming username is "user" and password is "password"
          if (username === "user" && password === "password") {
            // If valid, navigate to the next menu
            window.location.href = "./menu";
          } else {
            // If invalid, display an error message or take appropriate action
            alert("Invalid username or password");
          }
        });
      }


// document.addEventListener('DOMContentLoaded', (event) => {
//             const groupButton = document.getElementById('groupButton');

//             if (groupButton) {
//                 groupButton.addEventListener('click', function (e) {
//                     e.preventDefault();

                
//                     var username = document.getElementById('username').value;
//                     var password = document.getElementById('password').value;

                
//                     fetch('/verify-login', {
//                         method: 'POST',
//                         headers: {
//                             'Content-Type': 'application/json',
//                             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//                         },
//                         body: JSON.stringify({
//                             username: username,
//                             password: password
//                         })
//                     })
//                     .then(response => response.json())
//                     .then(data => {
//                         if (data.status === 'success') {
                        
//                             window.location.href = './menu';
//                         } else {
                       
//                             alert('Invalid username or password');
//                         }
//                     })
//                     .catch(error => console.error('Error:', error));
//                 });
//             }



    </script>
  </body>
</html>
<style>
    .frame-child2 {
  position: absolute;
  top: 0;
  left: 0;
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--color-darkturquoise-200);
  width: 100%;
  height: 100%;
  display: none;
}
.logo-bkpsdm-1-1-icon3 {
  position: absolute;
  top: 330px;
  left: 15px;
  width: 617px;
  height: 264px;
  object-fit: cover;
  z-index: 1;
}
.badan-kepegawaian-dan,
.sumber-daya-manusia {
  margin: 0;
}
.badan-kepegawaian-dan-container {
  margin: 0;
  position: absolute;
  top: 584px;
  left: 2px;
  font-size: inherit;
  font-weight: 500;
  font-family: inherit;
  display: inline-block;
  width: 643px;
  height: 58px;
  z-index: 2;
}
.rectangle-parent2 {
  height: 1080px;
  width: 646px;
  position: relative;
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--color-darkturquoise-200);
  min-width: 646px;
  max-width: 100%;
}
.sistolap {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 700;
  font-family: inherit;
}
.sistolap-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: center;
  padding: 0 var(--padding-xl) 0 29px;
}
.sistem-otomatisasi-layanan {
  position: relative;
  font-size: var(--font-size-lgi);
  color: var(--color-darkturquoise-200);
}
.frame-parent3 {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-sm);
  max-width: 100%;
}
.frame-child3,
.frame-wrapper1 {
  box-sizing: border-box;
  max-width: 100%;
}
.frame-wrapper1 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0 var(--padding-22xl) 0 var(--padding-24xl);
  flex-shrink: 0;
}
.frame-child3 {
  width: 462px;
  height: 387px;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  border: 3px solid var(--color-darkturquoise-200);
  display: none;
}
.login1 {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 700;
  font-family: inherit;
  display: inline-block;
  min-width: 78px;
  z-index: 1;
}
.username-label {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: center;
  padding: 0 var(--padding-xl) 0 var(--padding-4xl);
}
.frame-child4 {
  height: 43px;
  width: 419px;
  position: relative;
  background-color: var(--color-white);
  border: 1px solid var(--color-darkturquoise-200);
  box-sizing: border-box;
  display: none;
  max-width: 100%;
}
.username {
  width: calc(100% - 24px);
  border: 0;
  outline: 0;
  font-weight: 500;
  font-family: var(--font-inter);
  font-size: var(--font-size-mini);
  background-color: transparent;
  width: 330px;
  height: 18px;
  flex: 1;
  position: relative;
  color: var(--color-gray-300);
  text-align: left;
  display: inline-block;
  min-width: 42px;
  padding: 0;
  z-index: 2;
}
.username-input {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-2xs) 0 0;
}
.frame-child5 {
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--color-gainsboro);
  width: 100%;
  height: 100%;
  display: none;
}
.vector-icon4 {
  position: absolute;
  top: 7px;
  left: 9px;
  width: 23px;
  height: 26px;
  z-index: 3;
}
.rectangle-parent4 {
  height: 41px;
  width: 41px;
  position: relative;
  background-color: var(--color-gainsboro);
  z-index: 2;
}
.frame-child6,
.rectangle-parent3 {
  background-color: var(--color-white);
  border: 1px solid var(--color-darkturquoise-200);
  box-sizing: border-box;
  max-width: 100%;
}
.rectangle-parent3 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  padding: 0 var(--padding-11xs) 0 var(--padding-3xs);
  gap: var(--gap-xl);
  z-index: 1;
}
.frame-child6 {
  height: 43px;
  width: 419px;
  position: relative;
  display: none;
}
.password {
  width: calc(100% - 24px);
  border: 0;
  outline: 0;
  font-weight: 500;
  font-family: var(--font-inter);
  font-size: var(--font-size-mini);
  background-color: transparent;
  height: 18px;
  flex: 1;
  position: relative;
  color: var(--color-gray-300);
  text-align: left;
  display: inline-block;
  min-width: 42px;
  padding: 0;
  z-index: 2;
}
.key-solid-1 {
  height: 24px;
  width: 24px;
  position: relative;
  background-color: rgba(255, 255, 255, 0.1);
  overflow: hidden;
  flex-shrink: 0;
  display: none;
}
.frame-wrapper2,
.password-parent {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.password-parent {
  width: 330px;
  align-self: stretch;
  flex-direction: row;
}
.frame-wrapper2 {
  width: 70px;
  flex-direction: column;
  padding: var(--padding-2xs) 0 0;
  box-sizing: border-box;
}
.frame-child7 {
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--color-gainsboro);
  width: 100%;
  height: 100%;
  display: none;
}
.pincode-input-icon {
  position: absolute;
  top: 9px;
  left: 8px;
  width: 24px;
  height: 24px;
  z-index: 3;
}
.rectangle-parent6 {
  height: 41px;
  width: 41px;
  position: relative;
  background-color: var(--color-gainsboro);
  z-index: 2;
}
.password-label,
.rectangle-parent5,
.username-label-parent {
  align-self: stretch;
  display: flex;
  align-items: flex-start;
  max-width: 100%;
}
.rectangle-parent5 {
  background-color: var(--color-white);
  border: 1px solid var(--color-darkturquoise-200);
  box-sizing: border-box;
  flex-direction: row;
  justify-content: space-between;
  padding: 0 var(--padding-11xs) 0 var(--padding-3xs);
  gap: var(--gap-xl);
  z-index: 1;
}
.password-label,
.username-label-parent {
  flex-direction: column;
  justify-content: flex-start;
}
.password-label {
  gap: 19px;
  font-size: var(--font-size-mini);
  color: var(--color-gray-300);
}
.username-label-parent {
  gap: var(--gap-14xl);
}
.frame-child8 {
  align-self: stretch;
  height: 41px;
  position: relative;
  background-color: var(--color-darkturquoise-200);
  display: none;
}
.login2 {
  position: relative;
  font-size: var(--font-size-mini);
  display: inline-block;
  font-family: var(--font-inter);
  color: var(--color-white);
  text-align: left;
  min-width: 47px;
  z-index: 1;
}
.login-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: center;
  padding: 0 var(--padding-xl) 0 22px;
}
.form {
  align-self: stretch;
  height: 1px;
  position: relative;
  background-color: rgba(86, 140, 221, 0.5);
}
.group-button,
.group-div {
  align-self: stretch;
  flex-direction: column;
  align-items: flex-start;
}
.group-button {
  cursor: pointer;
  border: 0;
  padding: var(--padding-2xs) 0 0;
  background-color: var(--color-darkturquoise-200);
  display: flex;
  justify-content: flex-start;
  gap: var(--gap-xs);
  z-index: 1;
}
.group-div {
  background-color: var(--color-whitesmoke-100);
  border: 3px solid var(--color-darkturquoise-200);
  box-sizing: border-box;
  padding: var(--padding-8xl) var(--padding-lgi) var(--padding-22xl)
    var(--padding-xl);
  gap: 107px;
  max-width: 100%;
  font-size: 25px;
}
.frame-parent2,
.group-div,
.login,
.login-button {
  display: flex;
  justify-content: flex-start;
}
.frame-parent2 {
  align-self: stretch;
  flex-direction: column;
  align-items: flex-end;
  gap: var(--gap-24xl);
  max-width: 100%;
}
.login,
.login-button {
  align-items: flex-start;
}
.login-button {
  width: 456px;
  flex-direction: column;
  padding: 269px 0 0;
  box-sizing: border-box;
  min-width: 456px;
  max-width: 100%;
  text-align: left;
  font-size: 40px;
  color: var(--color-darkturquoise-100);
}
.login {
  width: 100%;
  position: relative;
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--color-white);
  overflow: hidden;
  flex-direction: row;
  gap: 410px;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  font-size: var(--font-size-5xl);
  color: #373435;
  font-family: var(--font-inter);
}
@media screen and (max-width: 1425px) {
  .login-button,
  .rectangle-parent2 {
    flex: 1;
  }
  .login {
    flex-wrap: wrap;
    gap: 205px;
  }
}
@media screen and (max-width: 825px) {
  .rectangle-parent2 {
    min-width: 100%;
  }
  .sistolap {
    font-size: var(--font-size-13xl);
  }
  .login-button {
    padding-top: 175px;
    box-sizing: border-box;
    min-width: 100%;
  }
  .login {
    gap: 102px;
  }
}
@media screen and (max-width: 450px) {
  .badan-kepegawaian-dan-container {
    font-size: var(--font-size-lgi);
  }
  .sistolap {
    font-size: var(--font-size-5xl);
  }
  .frame-wrapper1 {
    padding-left: var(--padding-2xl);
    box-sizing: border-box;
  }
  .login1 {
    font-size: 20px;
  }
  .rectangle-parent3 {
    flex-wrap: wrap;
    justify-content: center;
  }
  .rectangle-parent5 {
    flex-wrap: wrap;
  }
  .username-label-parent {
    gap: var(--gap-base);
  }
  .group-div {
    gap: 53px;
    padding-top: var(--padding-xl);
    padding-bottom: var(--padding-8xl);
    box-sizing: border-box;
  }
  .frame-parent2 {
    gap: var(--gap-2xl);
  }
  .login-button {
    padding-top: 114px;
    box-sizing: border-box;
  }
  .login {
    gap: 51px;
  }
}

    </style>