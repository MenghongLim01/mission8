<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fun Hello World</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #f6d365, #fda085);
      height: 100vh;
      margin: 0;
      overflow: hidden;
    }
    .hello-box {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      color: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
      transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55), box-shadow 0.3s ease;
    }
    .hello-box:hover {
      transform: scale(1.15);
      box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.4);
    }
    .fade-in {
      opacity: 0;
      animation: fadeIn 1.5s ease-in-out forwards;
    }
    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-20px);
      }
      60% {
        transform: translateY(-10px);
      }
    }
    .bounce {
      animation: bounce 2s infinite;
    }
    .btn-fun {
      background: linear-gradient(135deg, #ff512f, #dd2476);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 20px;
      transition: all 0.3s ease;
    }
    .btn-fun:hover {
      background: linear-gradient(135deg, #dd2476, #ff512f);
      transform: scale(1.1);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>
  <div class="container text-center d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="hello-box fade-in">
      <h1 class="display-4 bounce">Hello Cloud Computing Class</h1>
      <p>Welcome to the playful side of Bootstrap!</p>
      <button class="btn btn-fun mt-3" id="animateBtn">Make It Bounce!</button>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('animateBtn').addEventListener('click', function() {
      const box = document.querySelector('.hello-box');
      box.style.animation = 'bounce 1s';
      setTimeout(() => {
        box.style.animation = ''; // Reset animation for re-triggering
      }, 1000);
    });
  </script>
</body>
</html>