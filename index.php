<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

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
      overflow-x: hidden;
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

    img.about {
      width: 100%;
      max-width: 500px;
      aspect-ratio: 1/1;
      object-fit: cover;
      border-radius: 50%;
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

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      row-gap: 30px;
    }

    .cards {
      display: flex;
      flex-direction: row;
      max-width: 49%;
      overflow: hidden;
      border-radius: 25px;
      position: relative;
    }

    .cards div {
      max-width: 48%;
    }

    img.card-image {
      max-width: 100%;
      object-fit: cover;
      height: 100%;
      object-position: top;
      display: block;
    }

    .info {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 20px;
    }

    .card-button {
      background-color: transparent;
      color: white;
      padding: 12px 20px;
      border: 2px solid #4A90E2;
      border-radius: 6px;
      font-size: 16px;
      font-family: Arial, sans-serif;
      cursor: pointer;
      transition: 0.3s;
    }

    .card-button:hover {
      background-color: #4A90E2;
      scale: 1.05;
    }

    .cards {
      display: flex;
      flex-direction: row;
      max-width: 49%;
      overflow: hidden;
      border-radius: 25px;
      position: relative;
    }

    .cards .imagem {
      width: 48%;
      overflow: hidden;
      position: relative;
    }

    .cards .imagem img.card-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .cards .info {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 20px;
      width: 52%;
    }

    @media (max-width: 1024px) {
      .cards {
        flex-direction: column;
        align-items: center;
        max-width: 100%;
        border-radius: 20px;
      }

      .cards .imagem {
        width: 100%;
        height: auto;
      }

      .cards .imagem img.card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
      }

      .cards .info {
        width: 100%;
        padding: 20px;
      }

      .cards .info p {
        margin-bottom: 10px;
      }
    }

    @media (max-width: 768px) {
      .cards {
        flex-direction: column;
      }

      .cards .imagem {
        width: 100%;
        max-height: 500px;
      }
    }
  </style>
</head>

<body>

  <?php include 'config.php' ?>

  <section style="min-height: 80vh">
    <div class="container">

      <div style="display: flex; flex-direction: column; gap: 15px">
        <h1 class="title">
          Olá! Sou Felipe Portari. Transformo <span>ideias</span> em <span>sistemas</span>
        </h1>

        <div class="technologies">
          <?php foreach ($technologies as $technology): ?>
            <div class="technology"
              style="background-color: <?= $technology['color'] ?>50;
                        border: 1.5px solid <?= $technology['color'] ?>70;">
              <?= $technology['name'] ?>
            </div>
          <?php endforeach; ?>

          <p>
            Sou desenvolvedor backend com experiência em PHP, Laravel, WordPress e Filament, criando sistemas,
            sites e painéis administrativos eficientes e bem estruturados. Trabalho com integração de APIs,
            Livewire, bancos de dados MySQL e automações, além de configurar hospedagens, e-mails e infraestrutura
            para garantir que tudo funcione de forma estável. Tenho facilidade em aprender novas tecnologias,
            resolver problemas e transformar necessidades reais em soluções práticas e escaláveis.
          </p>
        </div>
      </div>

      <div style="display: flex; justify-content: center">
        <img class="about" src="src/man-working-night.webp" alt="">
      </div>

    </div>
  </section>

  <section>
    <div class="container card-container">
      <?php foreach ($cards as $card): ?>
        <div class="cards">
          <div class="imagem">
            <img class="card-image" src="<?= $card['image'] ?>" alt="">
          </div>
          <div class="info">
            <p> <?= $card['text'] ?></p>
            <a href="<?= $card['link'] ?>">
              <button class="card-button">Ver Mais</button>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

</body>

</html>