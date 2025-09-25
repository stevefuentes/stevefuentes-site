<!DOCTYPE html>
<html lang="en">
<head>
  <title>Steve Fuentes</title>
  <?php include_once('./head.php'); ?>
  <style>
    body {      
      transition: background-image 0.3s ease;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    p{
      margin-top: -30vh;      
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function(){
    const links = document.querySelectorAll('a[data-bg]');
    links.forEach((link)=>{
      link.addEventListener('mouseover', function(){
        document.body.style.backgroundImage = `url(${link.dataset.bg})`;  
      })
      link.addEventListener('mouseout', () => {
        document.body.style.backgroundImage = '';
      });
      
    })
  });
  </script>
</head>
<body>
  <p>
    <a href="https://www.linkedin.com/in/steve-fuentes-16182b98/">Steve Fuentes</a>  is a <a href="https://flashforward.tech" data-bg="./fft.jpg">software developer</a>, <a href="/art.php">artist</a> and computer nerd.
  </p>    
</body>
</html>