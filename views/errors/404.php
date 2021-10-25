<style>
   @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

   html,
   body {
      width: 100%;
      height: 100%;
      margin: 0;
   }

   * {
      font-family: 'Roboto', sans-serif;
      box-sizing: border-box;
   }

   #app {
      padding: 1rem;
      background: rgb(153, 194, 236);
      background: linear-gradient(180deg, rgba(153, 194, 236, 1) 0%, rgba(51, 133, 217, 1) 50%, rgba(27, 109, 193, 1) 100%);
      display: flex;
      height: 100%;
      justify-content: center;
      align-items: center;
      color: #ffffff;
      text-shadow: 0px 0px 10px;
      font-size: 6rem;
      flex-direction: column;
   }

   #app .txt {
      font-size: 1.8rem;

   }

   @keyframes blink {
      0% {
         opacity: 0;
      }

      49% {
         opacity: 0;
      }

      50% {
         opacity: 1;
      }

      100% {
         opacity: 1;
      }
   }

   .blink {
      animation-name: blink;
      animation-duration: 1s;
      animation-iteration-count: infinite;
   }

   .link {
      margin-top: 30px;
   }

   a {
      text-decoration: none;
      color: #ffffff;
      background-color: #0a161236;
      padding: 10px;
      border-radius: 5px;
   }
</style>
<div id="app">
   <div>404</div>
   <div class="txt">
      Page not found<span class="blink">_</span>
   </div>
   <br>
   <div class="txt">
      This is not the page you are looking for, move along!
   </div>
   <div class="txt link">
      <a href="#">Get me back!</a>
   </div>
</div>
