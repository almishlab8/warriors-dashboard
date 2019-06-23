<style>
        body {
            padding:1em;
            background:#E9EAED;
          }
            
          .wrap {
            max-width: 90%;
            margin:auto;
            background:#fff; 
          }
            .media{
              padding:1em;
            }
            .media-img, .media-desc{
              display:inline-block;
              vertical-align:top;
            }
            .media-img {
              margin:0 1em 0 0;
              width:30%;
              height:100px;
              background-color:#f0f0f0;
            }
            .media-desc{
              width:60%;
            }
            .media-desc .bar{
              margin:0 0 1em 0;
              height:20px;
              background-color:#f0f0f0;
            }
          
            .media-img, .media-desc .bar{
              -webkit-animation: gleam 2s ease-in-out infinite;
              background-image:-webkit-linear-gradient(left, #E9EAED, #f8f8f8, #E9EAED);
              background-size:600px auto;
            }
          
          @-webkit-keyframes gleam{
            0% { background-position:0 0 }
            100% { background-position:600px 0 }
          }
</style>

<div class="wrap">
  
        <div class="media">
          <div class="media-img"></div>
          <div class="media-desc">
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
        <div class="media">
          <div class="media-img"></div>
          <div class="media-desc">
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
        <div class="media">
          <div class="media-img"></div>
          <div class="media-desc">
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
        <div class="media">
          <div class="media-img"></div>
          <div class="media-desc">
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
        
        </div>