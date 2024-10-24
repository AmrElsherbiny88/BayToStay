<link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}" />

  <!-- loading page start -->
  <div class="loader">
    <h1 class="word">BayToStay</h1>
    <div>

   
<div class="loading">

  
  

</div>

    </div>

  </div>
  <!-- loading page end -->

<script>
      
// loading page start
window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
  
    loader.classList.add("loader--hidden");
  
    loader.addEventListener("transitionend", () => {
      document.body.removeChild(loader);
    });
  });
//   loading page end

</script>