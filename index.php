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

  section {
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

    .container div:first-child {
      margin-bottom: 20px;
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
</style>

</head>

<body>
  <?php include 'config.php' ?>
  <section style="min-height: 80vh">
    <div class="container">
      <div style="display: flex; align-items: center;">
        <h1 class="title">Oi, eu sou Felipe Portari. Transformo <span>ideias</span> em <span>sistemas</span></h1>
      </div>
      <div>
        <img src="src/man-working-night.webp" alt="" style="border-radius: 40px">
      </div>
    </div>
  </section>
  <?php /* foreach ($technologies as $technology): ?>
  <?php endforeach; */?>
</body>

</html>