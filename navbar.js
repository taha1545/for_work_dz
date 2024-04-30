const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      searchToggle = document.querySelector(".searchToggle"),
      siderbarOpen = document.querySelector(".siderbarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");


      //js code to toggle search box

      searchToggle.addEventListener("click",() => {
      searchToggle.classList.toggle("active");
      });

      //js code to toggle sidebar

      siderbarOpen.addEventListener("click",()=>{
        nav.classList.add("active");
      });

      body.addEventListener("click",e =>{
        let clickedElm = e.target;
        if(!clickedElm.classList.contains("siderbarOpen") && !clickedElm.classList.contains("nav_menu")){
            nav.classList.remove("active");
        }
      });


      document.querySelector('.nav_lists').addEventListener('click', function(event) {
        event.preventDefault();
    });


    //js code to profile
       let subMenu = document.getElementById("subMenu");

       function toggleMenu(){
        subMenu.classList.toggle("open-menu");
       }


       ///////////////////////////
      
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
          e.preventDefault();

          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
          });
      });
  });


