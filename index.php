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

      <?php endforeach; ?>
    </div>
  </section>

</body>

</html>