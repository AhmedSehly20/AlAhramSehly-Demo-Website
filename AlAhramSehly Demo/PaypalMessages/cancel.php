<!DOCTYPE html>
<html lang="en">
<head>
<link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cancel Payment</title>
  <style>
    body {
      background-color: #f2e9ff;
      font-family: "Cormorant Garamond", sans-serif;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 40px;
      text-align: center;
    }

    h1 {
      color:
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    p {
      color: #5c6bc0;
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    .cancel-button {
      background-color: #7e57c2;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .cancel-button:hover {
      background-color: #5c6bc0;
    }

    .go-to-main-button {
      color: #7e57c2;
      text-decoration: none;
      font-size: 1rem;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    .go-to-main-button:hover {
      color: #5c6bc0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Canceled Payment</h1>
    <p>We Are Sorry We didn't Satisfy You Hope To see You Again</p>
    <a href="../public/home.php" class="go-to-main-button">Go to Main Page</a>
  </div>
</body>
</html>