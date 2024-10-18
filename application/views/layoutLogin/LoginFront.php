<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

  <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js">
    /*!
    * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
    * Copyright 2011-2024 The Bootstrap Authors
    * Licensed under the Creative Commons Attribution 3.0 Unported License.
    */

    // (() => {
    //   'use strict'

    //   const getStoredTheme = () => localStorage.getItem('theme')
    //   const setStoredTheme = theme => localStorage.setItem('theme', theme)

    //   const getPreferredTheme = () => {
    //     const storedTheme = getStoredTheme()
    //     if (storedTheme) {
    //       return storedTheme
    //     }

    //     return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    //   }

    //   const setTheme = theme => {
    //     if (theme === 'auto') {
    //       document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
    //     } else {
    //       document.documentElement.setAttribute('data-bs-theme', theme)
    //     }
    //   }

    //   setTheme(getPreferredTheme())

    //   const showActiveTheme = (theme, focus = false) => {
    //     const themeSwitcher = document.querySelector('#bd-theme')

    //     if (!themeSwitcher) {
    //       return
    //     }

    //     const themeSwitcherText = document.querySelector('#bd-theme-text')
    //     const activeThemeIcon = document.querySelector('.theme-icon-active use')
    //     const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    //     const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

    //     document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
    //       element.classList.remove('active')
    //       element.setAttribute('aria-pressed', 'false')
    //     })

    //     btnToActive.classList.add('active')
    //     btnToActive.setAttribute('aria-pressed', 'true')
    //     activeThemeIcon.setAttribute('href', svgOfActiveBtn)
    //     const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
    //     themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

    //     if (focus) {
    //       themeSwitcher.focus()
    //     }
    //   }

    //   window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    //     const storedTheme = getStoredTheme()
    //     if (storedTheme !== 'light' && storedTheme !== 'dark') {
    //       setTheme(getPreferredTheme())
    //     }
    //   })

    //   window.addEventListener('DOMContentLoaded', () => {
    //     showActiveTheme(getPreferredTheme())

    //     document.querySelectorAll('[data-bs-theme-value]')
    //       .forEach(toggle => {
    //         toggle.addEventListener('click', () => {
    //           const theme = toggle.getAttribute('data-bs-theme-value')
    //           setStoredTheme(theme)
    //           setTheme(theme)
    //           showActiveTheme(theme, true)
    //         })
    //       })
    //   })
    // })()
  </script>

  <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css">

  <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="St. Dominic College of Asia DLRC ">

  <title>DLRC Administrator</title>


  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://stdominiccollege.edu.ph/WEBDOSE/plugins/login_asset/img/sdcalogo.png"
    sizes="180x180">
  <link rel="icon" href="hhttps://stdominiccollege.edu.ph/WEBDOSE/plugins/login_asset/img/sdcalogo.png" sizes="32x32"
    type="image/png">
  <link rel="icon" href="https://stdominiccollege.edu.ph/WEBDOSE/plugins/login_asset/img/sdcalogo.png" sizes="16x16"
    type="image/png">
  <link rel="mask-icon" href="https://stdominiccollege.edu.ph/WEBDOSE/plugins/login_asset/img/sdcalogo.png"
    color="#712cf9">
  <link rel="icon" href="https://stdominiccollege.edu.ph/WEBDOSE/plugins/login_asset/img/sdcalogo.png">

  <style>
    html,
    body {
      height: 100%;
    }

    .form-signin {
      max-width: 330px;
      padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }

    /* From Uiverse.io by TreepDeep */

    .button.google {
      /* display: flex; */
      padding: 0.5rem 1.4rem;
      font-size: 0.875rem;
      line-height: 1.25rem;
      font-weight: 700;
      text-align: center;
      text-transform: uppercase;
      vertical-align: middle;
      align-items: center;
      border-radius: 0.5rem;
      border: 1px solid rgba(50, 50, 80, 0.25);
      gap: 0.75rem;
      color: #ffffff;
      background-color: rgb(50, 50, 80);
      cursor: pointer;
      transition: all 0.6s ease;
      text-decoration: none;
    }

    .button.google svg {
      height: 24px;
      width: 24px;
      fill: #fff;
      margin-right: 0.5rem;
    }

    .button.google:hover {
      transform: scale(1.02);
      background-color: rgb(90, 90, 120);
      box-shadow: 0 2px 4px rgba(90, 90, 120, 0.1);
    }

    .button.google:focus {
      outline: none;
      box-shadow: 0 0 0 3px rgba(0, 0, 40, 0.3);
    }

    .button.google:active {
      transform: scale(0.98);
      opacity: 0.8;
    }

    /* @media (max-width: 480px) {
      .button.google {
        max-width: 100%;
      }
    } */
  </style>

</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">


  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
      aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
          aria-pressed="true">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  </div>


  <main class="form-signin w-100 m-auto">
    <form>
      <img class="mb-4" src="https://stdominiccollege.edu.ph/WEBDOSE/plugins/login_asset/img/sdcalogo.png" alt=""
        width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Administrator</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div>

      <div class="form-floating">
        
        <button class="btn btn-primary w-100 py-2" type="submit">
          LOG IN
        </button>
        <hr>
      </div>

      <div class="form-floating">
        <button class="button google btn btn-primary w-100 py-2">
          <svg viewBox="0 0 256 262" preserveAspectRatio="xMidYMid" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"
              fill="#4285F4"></path>
            <path
              d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"
              fill="#34A853"></path>
            <path
              d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"
              fill="#FBBC05"></path>
            <path
              d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"
              fill="#EB4335"></path>
          </svg>
          Continue with Google
        </button>
      </div>

      

      <p class="mt-5 mb-3 text-body-secondary">ICT - DLRC &copy; 2024–2024</p>
    </form>
  </main>
  <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>