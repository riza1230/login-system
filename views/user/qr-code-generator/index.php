<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>qrcode generator</title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/style.css">
  </head>
  <body>
    <div class="container">
      <div class="container-child">
        <header>
          <h1>QR Code Generator</h1>
        </header>
        <main>
          <form id="generate-form">
            <input type="text" id="input" placeholder="Enter a text" />
            <select name="size" id="size" style="display:none;">
              <option value="200" selected>200x200</option>
            </select>
            <button type="submit" id="generate-btn">Generate</button>
          </form>
        </main>
        <div id="qrcode"></div>
        <div id="generated"></div>
      </div>
    </div>
    <script type="text/javascript" src="js/script.js" ></script>
    <script type="text/javascript" src="js/qrcode.min.js"></script>
  </body>
</html>