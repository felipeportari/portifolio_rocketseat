<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>PHP</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      background-color: #010510;
      color: #f5f5f5;
      gap: 20px;
    }

    h1.title {
      font-size: 45px;
      font-weight: 600;
    }

    h1.title span {
      font-weight: 800;
      color: aqua;
    }

    section:first-child {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 40px 0;
      min-height: 80vh;
    }

    .container {
      max-width: 1600px;
      width: 100%;
      margin: 0 auto;
      padding: 0 20px;
      display: flex;
      flex-direction: row;
      gap: 20px;
      align-items: center;
    }

    .container div {
      width: 50%;
    }

    .container img {
      width: 100%;
      height: auto;
      border-radius: 40px;
    }

    @media (max-width: 1024px) {
      h1.title {
        font-size: 30px;
      }

      .container {
        max-width: 700px;
        flex-direction: column;
        text-align: center;
      }

      .container div {
        width: 100%;
      }
    }

    @media (max-width: 480px) {
      h1.title {
        font-size: 25px;
      }

      section {
        padding: 20px 10px;
      }
    }

    div.technologies {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      width: 100%;
      justify-content: flex-start;
    }

    div.technologies .technology {
      display: flex;
      align-items: center;
      justify-content: center;
      line-height: normal;
      white-space: nowrap;
      padding: 5px 10px;
      border-radius: 50px;
      width: fit-content;
    }


    @media (max-width: 1024px) {
      div.technologies {
        justify-content: center;
      }

      div.technologies .technology {
        font-size: 15px;
      }
    }

    @media (max-width: 480px) {
      div.technologies {
        gap: 10px;
      }

      div.technologies .technology {
        font-size: 14px;
        padding: 5px 12px;
      }
    }

    :root {
      --neon-a: #00f7ff;
      --neon-b: #8a2be2;
      --card-bg: rgba(255, 255, 255, 0.02);
      --glass-border: rgba(255, 255, 255, 0.06);
    }

    .neon-section {
      padding: 40px 0;
      width: 100%;
      display: flex;
      justify-content: center;
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.01), transparent 20%);
    }

    .card-grid {
      max-width: 1280px;
      width: 100%;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
      padding: 0 20px;
    }

    .neon-card {
      position: relative;
      border-radius: 18px;
      padding: 24px;
      background: var(--card-bg);
      border: 1px solid var(--glass-border);
      overflow: visible;
      min-height: 180px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: transform .18s ease, box-shadow .18s ease;
    }

    .neon-card::before {
      content: "";
      position: absolute;
      inset: -2px;
      z-index: -1;
      border-radius: 20px;
      background: linear-gradient(90deg, var(--neon-a), var(--neon-b));
      filter: blur(10px);
      opacity: 0.55;
      transition: opacity .2s ease, filter .2s ease;
      pointer-events: none;
    }

    .neon-card::after {
      content: "";
      position: absolute;
      inset: 0;
      z-index: 0;
      border-radius: 18px;
      padding: 1px;
      background: linear-gradient(90deg, rgba(0, 247, 255, 0.22), rgba(138, 43, 226, 0.22));
      -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
      pointer-events: none;
    }

    .neon-card>* {
      position: relative;
      z-index: 1;
    }

    .neon-card h3 {
      font-size: 20px;
      margin-bottom: 8px;
      font-weight: 700;
      letter-spacing: -0.2px;
    }

    .neon-card p {
      font-size: 14px;
      line-height: 1.45;
      color: #e9eef8;
      opacity: 0.92;
      margin-bottom: 18px;
    }

    .neon-btn {
      align-self: start;
      background: transparent;
      border: 1.5px solid rgba(255, 255, 255, 0.06);
      padding: 10px 16px;
      border-radius: 999px;
      color: #eafcff;
      text-decoration: none;
      font-weight: 600;
      transition: box-shadow .18s ease, transform .12s ease, border-color .12s ease;
      cursor: pointer;
    }

    .neon-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
    }

    .neon-card:hover::before {
      filter: blur(18px);
      opacity: 0.9;
    }

    .neon-card:hover .neon-btn {
      box-shadow: 0 6px 30px rgba(0, 247, 255, 0.12), 0 2px 10px rgba(138, 43, 226, 0.06);
      border-color: rgba(0, 247, 255, 0.6);
      transform: translateY(-2px);
    }

    .card-accent {
      font-size: 12px;
      padding: 6px 10px;
      border-radius: 999px;
      display: inline-block;
      margin-bottom: 10px;
      background: linear-gradient(90deg, rgba(0, 247, 255, 0.06), rgba(138, 43, 226, 0.06));
      color: #cfefff;
    }

    @media (max-width: 1024px) {
      .card-grid {
        grid-template-columns: repeat(2, 1fr);
        max-width: 900px;
      }
    }

    @media (max-width: 600px) {
      .card-grid {
        grid-template-columns: 1fr;
        max-width: 420px;
        gap: 16px;
      }

      .neon-card {
        padding: 18px;
        border-radius: 14px;
        min-height: 150px;
      }
    }

    .card-image {
      width: 100%;
      height: 140px;
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 12px;
      filter: brightness(0.85) contrast(1.15);
      transition: filter .2s ease, transform .2s ease;
    }

    .neon-card:hover .card-image {
      filter: brightness(1) contrast(1.2);
      transform: scale(1.02);
    }
  </style>
</head>

<body> <?php include 'config.php' ?> <section style="min-height: 80vh">
    <div class="container">
      <div style="display: flex; flex-direction: column; gap: 15px">
        <h1 class="title">Olá! Sou Felipe Portari. Transformo <span>ideias</span> em <span>sistemas</span></h1>
        <div class="technologies">
          <?php foreach ($technologies as $technology): ?>
            <div class="technology"
              style="background-color:<?= $technology['color'] ?>50;
            border:1.5px solid <?= $technology['color'] ?>70">
              <?= $technology['name'] ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div> <img src="src/man-working-night.webp" alt="" style="border-radius: 40px"> </div>
    </div>
  </section>
  <section class="neon-section">
    <div class="card-grid">
      <?php foreach ($cards as $card): ?>
        <article class="neon-card" role="listitem">
          <img class="card-image" src="<?= $card['image'] ?>" alt="Imagem ilustrativa">

          <div>
            <h3><?= $card['title'] ?></h3>
            <p><?= $card['text'] ?></p>
          </div>

          <div>
            <a class="neon-btn" href="<?= $card['link'] ?>">Saiba Mais</a>
          </div>
        </article>

      <?php endforeach; ?>
    </div>
  </section>

</body>

</html>