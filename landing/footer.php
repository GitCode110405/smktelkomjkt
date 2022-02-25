<script>
    const open = document.querySelector('.open');
    const close = document.querySelector('.close')
    const list = document.querySelector('.list')

    open.addEventListener('click', function (){
      open.classList.toggle('hidden')
      list.classList.toggle('hidden')
    })

    close.addEventListener('click', function (){
      open.classList.toggle('hidden')
      list.classList.toggle('hidden')
    })

    // solved list mobile
    const navList = document.querySelectorAll('.nav-list')
    navList.forEach(nav => {
        nav.addEventListener('click', function (){
          if(!list.classList.contains('hidden')){
            open.classList.toggle('hidden')
            list.classList.toggle('hidden')
          }
        })
    })

  </script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
    <script src="icons/js/all.js"></script>
</body>
</html>