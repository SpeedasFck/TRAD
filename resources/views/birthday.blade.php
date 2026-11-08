<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#fff8f1" />
    <title>Happy Birthday, Traditionally!</title>
    <style>
      :root {
        color-scheme: light;
        --ink: #29233d;
        --muted: #716b7d;
        --coral: #ff6d68;
        --purple: #7657d7;
        --cream: #fff8f1;
        --mint: #ccebdc;
        --yellow: #ffd66e;
      }

      * {
        box-sizing: border-box;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        min-width: 320px;
        margin: 0;
        color: var(--ink);
        background:
          radial-gradient(ellipse at 86% 13%, rgb(255 214 110 / 24%), transparent 25rem),
          radial-gradient(ellipse at 6% 52%, rgb(204 235 220 / 35%), transparent 28rem),
          var(--cream);
        font-family: "Avenir Next", Avenir, "Segoe UI", sans-serif;
        -webkit-font-smoothing: antialiased;
      }

      a {
        color: inherit;
      }

      button {
        font: inherit;
      }

      .page-shell {
        width: min(1120px, calc(100% - 48px));
        margin: 0 auto;
      }

      .topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-height: 92px;
      }

      .brand {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: var(--ink);
        font-size: 15px;
        font-weight: 800;
        letter-spacing: -0.04em;
        text-decoration: none;
      }

      .brand-mark {
        display: grid;
        width: 34px;
        height: 34px;
        place-items: center;
        border-radius: 12px;
        background: var(--coral);
        color: white;
        font-size: 18px;
        transform: rotate(-8deg);
      }

      .top-note {
        color: var(--muted);
        font-size: 13px;
        font-weight: 600;
      }

      .hero {
        display: grid;
        min-height: 645px;
        grid-template-columns: 1fr 1.03fr;
        align-items: center;
        gap: 36px;
        padding: 18px 0 64px;
      }

      .hero-copy {
        position: relative;
        z-index: 1;
        padding: 22px 0;
      }

      .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        margin: 0 0 22px;
        color: var(--purple);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.13em;
        text-transform: uppercase;
      }

      .eyebrow::before {
        width: 25px;
        height: 2px;
        background: var(--coral);
        content: "";
      }

      h1 {
        max-width: 560px;
        margin: 0;
        font-family: Georgia, "Times New Roman", serif;
        font-size: clamp(62px, 8vw, 100px);
        font-weight: 500;
        letter-spacing: -0.075em;
        line-height: 0.94;
      }

      h1 span {
        display: block;
        margin-top: 12px;
        color: var(--coral);
        font-size: clamp(51px, 6.2vw, 78px);
        font-style: italic;
        letter-spacing: -0.075em;
        overflow-wrap: anywhere;
      }

      .intro {
        max-width: 410px;
        margin: 26px 0 30px;
        color: var(--muted);
        font-size: 16px;
        line-height: 1.75;
      }

      .actions {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 12px;
      }

      .button {
        display: inline-flex;
        min-height: 52px;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 0 21px;
        border: 0;
        border-radius: 15px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 800;
        text-decoration: none;
        transition: transform 160ms ease, box-shadow 160ms ease, background 160ms ease;
      }

      .button:hover {
        transform: translateY(-2px);
      }

      .button:focus-visible,
      .brand:focus-visible,
      .text-link:focus-visible {
        outline: 3px solid var(--purple);
        outline-offset: 4px;
      }

      .button-primary {
        background: var(--purple);
        box-shadow: 0 9px 20px rgb(118 87 215 / 22%);
        color: white;
      }

      .button-primary:hover {
        background: #6545c8;
        box-shadow: 0 12px 24px rgb(118 87 215 / 28%);
      }

      .button-secondary {
        background: white;
        color: var(--ink);
        box-shadow: 0 5px 16px rgb(41 35 61 / 7%);
      }

      .button-secondary:hover {
        background: #fff0e8;
      }

      .button-icon {
        font-size: 18px;
        line-height: 1;
      }

      .signoff {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 44px;
        color: var(--muted);
        font-size: 13px;
      }

      .signoff-heart {
        color: var(--coral);
        font-size: 17px;
      }

      .art-wrap {
        position: relative;
        display: grid;
        min-height: 500px;
        place-items: center;
      }

      .art-backdrop {
        position: absolute;
        width: min(100%, 495px);
        aspect-ratio: 1;
        border-radius: 49% 51% 43% 57% / 49% 43% 57% 51%;
        background: linear-gradient(145deg, #f8d7ce, #fce7bc 55%, #ccebdc);
        transform: rotate(-5deg);
      }

      .art-card {
        position: relative;
        display: grid;
        width: min(100%, 450px);
        min-height: 435px;
        place-items: center;
        overflow: hidden;
        border: 1px solid rgb(255 255 255 / 70%);
        border-radius: 34px;
        background: rgb(255 255 255 / 60%);
        box-shadow: 0 26px 70px rgb(66 52 75 / 12%);
        backdrop-filter: blur(7px);
      }

      .art-card::before,
      .art-card::after {
        position: absolute;
        width: 140px;
        height: 140px;
        border: 1px solid rgb(118 87 215 / 13%);
        border-radius: 50%;
        content: "";
      }

      .art-card::before {
        top: -63px;
        left: -52px;
      }

      .art-card::after {
        right: -78px;
        bottom: -62px;
        width: 200px;
        height: 200px;
      }

      .cake {
        position: relative;
        z-index: 1;
        width: min(340px, 82%);
        overflow: visible;
        animation: cake-float 4s ease-in-out infinite;
      }

      .flame {
        transform-box: fill-box;
        transform-origin: center bottom;
        animation: flicker 750ms ease-in-out infinite alternate;
      }

      .wished .flame {
        opacity: 0;
        transition: opacity 250ms ease;
      }

      .sparkle {
        position: absolute;
        z-index: 2;
        color: var(--purple);
        font-size: 26px;
        animation: twinkle 2.4s ease-in-out infinite;
      }

      .sparkle-one {
        top: 78px;
        left: 67px;
        color: var(--coral);
      }

      .sparkle-two {
        top: 124px;
        right: 59px;
        animation-delay: 600ms;
      }

      .sparkle-three {
        right: 82px;
        bottom: 76px;
        color: #e8ad29;
        animation-delay: 1.2s;
      }

      .mini-note {
        position: absolute;
        right: 11px;
        bottom: 34px;
        z-index: 3;
        padding: 12px 17px;
        border-radius: 14px;
        background: white;
        box-shadow: 0 10px 24px rgb(41 35 61 / 11%);
        color: var(--muted);
        font-size: 12px;
        font-weight: 700;
        transform: rotate(4deg);
      }

      .mini-note strong {
        display: block;
        margin-bottom: 3px;
        color: var(--ink);
        font-family: Georgia, "Times New Roman", serif;
        font-size: 17px;
        font-weight: 500;
      }

      .birthday-note {
        max-width: 760px;
        margin: 0 auto;
        padding: 78px 24px 96px;
        border-top: 1px solid rgb(41 35 61 / 10%);
        text-align: center;
        scroll-margin-top: 28px;
      }

      .birthday-note .eyebrow {
        justify-content: center;
      }

      h2 {
        margin: 0;
        font-family: Georgia, "Times New Roman", serif;
        font-size: clamp(36px, 5vw, 52px);
        font-weight: 500;
        letter-spacing: -0.05em;
      }

      .birthday-note p:not(.eyebrow) {
        max-width: 560px;
        margin: 18px auto 24px;
        color: var(--muted);
        font-size: 16px;
        line-height: 1.8;
      }

      .wishes {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 9px;
      }

      .wish-tag {
        padding: 9px 13px;
        border: 1px solid rgb(118 87 215 / 14%);
        border-radius: 999px;
        background: white;
        color: var(--purple);
        font-size: 12px;
        font-weight: 700;
      }

      footer {
        padding: 0 0 26px;
        color: #918a99;
        font-size: 12px;
        text-align: center;
      }

      .confetti-piece {
        position: fixed;
        z-index: 10;
        top: -16px;
        width: 9px;
        height: 14px;
        pointer-events: none;
        animation: confetti-fall 2.4s cubic-bezier(0.2, 0.75, 0.4, 1) forwards;
      }

      .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
      }

      @keyframes cake-float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-9px); }
      }

      @keyframes flicker {
        from { transform: rotate(-5deg) scale(0.96, 1.03); }
        to { transform: rotate(5deg) scale(1.05, 0.96); }
      }

      @keyframes twinkle {
        0%, 100% { opacity: 0.55; transform: scale(0.86) rotate(-8deg); }
        50% { opacity: 1; transform: scale(1.12) rotate(8deg); }
      }

      @keyframes confetti-fall {
        to { transform: translate3d(var(--drift), 105vh, 0) rotate(var(--spin)); opacity: 0.85; }
      }

      @media (max-width: 760px) {
        .page-shell {
          width: min(100% - 36px, 560px);
        }

        .topbar {
          min-height: 76px;
        }

        .top-note {
          font-size: 11px;
        }

        .hero {
          min-height: 0;
          grid-template-columns: 1fr;
          gap: 10px;
          padding: 35px 0 52px;
        }

        .hero-copy {
          padding: 0;
        }

        .eyebrow {
          margin-bottom: 18px;
        }

        h1 {
          font-size: clamp(60px, 15vw, 84px);
        }

        h1 span {
          font-size: clamp(48px, 12vw, 68px);
        }

        .intro {
          margin: 22px 0 24px;
          font-size: 15px;
        }

        .signoff {
          margin-top: 27px;
        }

        .art-wrap {
          min-height: 385px;
          margin-top: 10px;
        }

        .art-card {
          width: min(100%, 420px);
          min-height: 360px;
          border-radius: 28px;
        }

        .art-backdrop {
          width: min(100%, 410px);
        }

        .sparkle-one {
          top: 52px;
          left: 36px;
        }

        .sparkle-two {
          top: 78px;
          right: 34px;
        }

        .sparkle-three {
          right: 50px;
          bottom: 56px;
        }

        .mini-note {
          right: 0;
          bottom: 18px;
        }

        .birthday-note {
          padding: 61px 8px 76px;
        }
      }

      @media (max-width: 390px) {
        .page-shell {
          width: calc(100% - 28px);
        }

        .top-note {
          max-width: 110px;
          text-align: right;
        }

        .actions {
          align-items: stretch;
          flex-direction: column;
        }

        .button {
          width: 100%;
        }
      }

      @media (prefers-reduced-motion: reduce) {
        *,
        *::before,
        *::after {
          scroll-behavior: auto !important;
          animation-duration: 0.01ms !important;
          animation-iteration-count: 1 !important;
          transition-duration: 0.01ms !important;
        }
      }
    </style>
  </head>
  <body>
    <div class="page-shell">
      <header class="topbar">
        <a class="brand" href="#" aria-label="Birthday wishes home">
          <span class="brand-mark" aria-hidden="true">✦</span>
          <span>a little birthday magic</span>
        </a>
        <span class="top-note">Made with lots of love, just for you</span>
      </header>

      <main>
        <section class="hero" aria-labelledby="birthday-title">
          <div class="hero-copy">
            <p class="eyebrow">Today is all about you</p>
            <h1 id="birthday-title">Happy<br />Birthday,<span>Traditionally!</span></h1>
            <p class="intro">
              Another trip around the sun, and somehow you keep making the world
              brighter. Hope today brings your favorite people, your favorite
              treats, and a hundred little reasons to smile.
            </p>
            <div class="actions">
              <button class="button button-primary" id="wish-button" type="button">
                <span class="button-icon" aria-hidden="true">✧</span>
                Make a wish
              </button>
              <a class="button button-secondary" href="#birthday-note">
                A little birthday note
                <span class="button-icon" aria-hidden="true">↓</span>
              </a>
            </div>
            <div class="signoff">
              <span class="signoff-heart" aria-hidden="true">♥</span>
              <span>Here's to your happiest year yet.</span>
            </div>
          </div>

          <div class="art-wrap" id="cake-art" aria-label="A birthday cake with lit candles">
            <div class="art-backdrop" aria-hidden="true"></div>
            <div class="art-card">
              <span class="sparkle sparkle-one" aria-hidden="true">✦</span>
              <span class="sparkle sparkle-two" aria-hidden="true">✧</span>
              <span class="sparkle sparkle-three" aria-hidden="true">✦</span>
              <svg class="cake" viewBox="0 0 360 330" role="img" aria-labelledby="cake-title">
                <title id="cake-title">A cheerful pink birthday cake with candles</title>
                <ellipse cx="180" cy="287" rx="137" ry="17" fill="#d9c9e8" />
                <path d="M56 263h248l-14 28H70z" fill="#8d70d5" />
                <path d="M72 196h216v67H72z" fill="#f98f91" />
                <path d="M72 211c15 13 25-11 39 0s25 12 39 0 25-11 39 0 25 12 39 0 25-11 39 0 16 11 30 0v17c-14 12-24-11-38 0s-25 12-39 0-25-11-39 0-25 12-39 0-25-11-39 0-25 12-39 0z" fill="#fff5ec" />
                <path d="M91 166h178v41H91z" fill="#ffd66e" />
                <path d="M91 179c12 10 21-9 33 0s21 10 33 0 21-9 33 0 21 10 33 0 21-9 33 0 11 9 23 0v14c-12 10-21-9-33 0s-21 10-33 0-21-9-33 0-21 10-33 0-21-9-33 0-21 10-33 0z" fill="#fff5ec" />
                <path d="M107 154v-43M145 154v-50M183 154v-43M221 154v-50M259 154v-43" stroke="#fff5ec" stroke-linecap="round" stroke-width="9" />
                <path class="flame" d="M107 99c-13-15 4-28 2-38 18 15 15 29 5 38z" fill="#ffad38" />
                <path class="flame" d="M145 87c-13-15 4-28 2-38 18 15 15 29 5 38z" fill="#ffad38" />
                <path class="flame" d="M183 99c-13-15 4-28 2-38 18 15 15 29 5 38z" fill="#ffad38" />
                <path class="flame" d="M221 87c-13-15 4-28 2-38 18 15 15 29 5 38z" fill="#ffad38" />
                <path class="flame" d="M259 99c-13-15 4-28 2-38 18 15 15 29 5 38z" fill="#ffad38" />
                <circle cx="126" cy="235" r="5" fill="#fff5ec" />
                <circle cx="180" cy="245" r="5" fill="#fff5ec" />
                <circle cx="234" cy="235" r="5" fill="#fff5ec" />
                <path d="M171 222c0-7 9-7 9-14 0 7 9 7 9 14 0 5-4 9-9 9s-9-4-9-9z" fill="#fff5ec" />
              </svg>
            </div>
            <div class="mini-note" aria-hidden="true">
              <strong>Make it a good one!</strong>
              Extra sprinkles encouraged
            </div>
          </div>
        </section>

        <section class="birthday-note" id="birthday-note" aria-labelledby="note-title">
          <p class="eyebrow">A note for your new year</p>
          <h2 id="note-title">You deserve all the good things.</h2>
          <p>
            May this next chapter be full of belly laughs, unexpected adventures,
            delicious cake, and the kind of moments you wish you could bottle up.
            So glad the world has you in it. Happy birthday!
          </p>
          <div class="wishes" aria-label="Birthday wishes">
            <span class="wish-tag">More joy</span>
            <span class="wish-tag">Big adventures</span>
            <span class="wish-tag">Your favorite cake</span>
            <span class="wish-tag">All the love</span>
          </div>
        </section>
      </main>

      <footer>Celebrating you today and every day ✦</footer>
    </div>
    <p class="sr-only" id="wish-status" aria-live="polite"></p>

    <script>
      const wishButton = document.querySelector("#wish-button");
      const cakeArt = document.querySelector("#cake-art");
      const wishStatus = document.querySelector("#wish-status");
      const confettiColors = ["#ff6d68", "#7657d7", "#ffd66e", "#69b89a", "#f7a7c0"];

      wishButton.addEventListener("click", () => {
        cakeArt.classList.add("wished");
        wishButton.innerHTML = '<span class="button-icon" aria-hidden="true">♥</span>Wish sent skyward!';
        wishStatus.textContent = "Your wish is on its way. Happy birthday!";

        for (let index = 0; index < 48; index += 1) {
          const piece = document.createElement("span");
          piece.className = "confetti-piece";
          piece.setAttribute("aria-hidden", "true");
          piece.style.left = `${Math.random() * 100}vw`;
          piece.style.backgroundColor = confettiColors[index % confettiColors.length];
          piece.style.borderRadius = index % 2 === 0 ? "50%" : "2px";
          piece.style.animationDelay = `${Math.random() * 450}ms`;
          piece.style.setProperty("--drift", `${Math.random() * 180 - 90}px`);
          piece.style.setProperty("--spin", `${Math.random() * 720 - 360}deg`);
          document.body.append(piece);
          window.setTimeout(() => piece.remove(), 3000);
        }
      });
    </script>
  </body>
</html>
