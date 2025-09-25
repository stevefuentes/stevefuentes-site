<?php $images = glob("./images/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once('./head.php'); ?>
  <title>Steve Fuentes | Art</title>
  <script>    
    document.addEventListener("DOMContentLoaded", function(){
      const images = document.getElementById('images');
      document.addEventListener('wheel', (e) => {        
        images.scrollLeft += e.deltaY;
      }, { passive: false }); 
    });
  </script>
  <style>
     #images{       
        width: 100%;       
        margin-top:10px;           
        img{
          margin: 0 auto;                
          height: auto;
          width:100%;
          display: block;
        }
      }
    @media (min-width: 1024px){
      #images{
        display:flex;
        height: 95%;
        width: 100%;
        overflow:scroll;
        margin-top:10px;    
        -ms-overflow-style: none;
        scrollbar-width: none;
        img{
          margin: 0 auto;                
          height: 100%;
          width:auto;
          display: block;
        }
      }
    }
  </style>
</head>
<body>
  <p>
    <a href="/">Steve Fuentes</a>  is an artist. He's also a <a href="https://flashforward.tech" data-bg="./fft.jpg">software developer</a> and computer nerd.
  </p>     
  <div id="images">    
    <?php foreach ($images as $img): ?>
      <img src="<?= htmlspecialchars($img) ?>" alt="">
    <?php endforeach; ?>  
  </div>
</body>
</html>