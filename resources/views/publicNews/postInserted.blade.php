<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      
      body {
        background-color: #E9EBEE;
        line-height: 1.34;
        font-family: sans-serif;
      }
      
      a {
        text-decoration: none;
        color: #385A97;
      }
      header {
        padding: 0;
        position: relative;
      }
      .status {
        margin: 11px 0;
      }
      #wrapper {
        background-color: #fff;
        width: 90%;
        margin: 10px auto 0;
        border: 1px solid #D0D1D5;
        border-top: 0;
        border-radius: 2px;
        padding: 12px;
      }
      
      
      
      .arrow {
        position: absolute;
        width: 12px;
        border: none;
        height: auto;
        right: 0px;
      }
      
      .profile-pic {
        width: 40px;
        height: auto;
        float: left;
        margin-right: 8px;
      }
      
      .name,
      .date {
        margin: 0;
      }
      
      .name {
        color: #385A97;
        font-size: 15px;
        margin-bottom: 5px;
      }
      
      .date {
        font-size: 12px;
        color: #90949C;
      }
      
      main {
        font-size: 13px;
      }
      
      main .status {
        margin-bottom: 11px;
      }
      
      .img-content {
        width: 100%;
        margin-bottom: 11px;
        border: 1px solid rgba(0, 0, 0, .1);
      }
      
      .action a {
        color: #7F7F7F;
      }
      
      .action div {
        display: inline-block;
      }
      
      .action div p:hover {
        text-decoration: underline;
      }
      
      .action div:nth-child(n + 2) {
        margin-left: 20px;
      }
      .like , .comment , .share{
        padding-left: 96px;
        margin-right: 120px;
      }
      .like img,
      .comment img,
      .share img {
        display: inline-block;
        width: 18px;
        vertical-align: text-bottom;
   
      }
      
      .like p {
        color: #1787FA;
      }
      
      .like p,
      .comment p,
      .share p {
        display: inline-block;
      }
      
      .share img {
        opacity: .2;
      }
      
      .cf:before,
      .cf:after {
        content: "";
        /* 1 */
        display: table;
        /* 2 */
      }
      
      .cf:after {
        clear: both;
      }
</style>

<div id="wrapper">

    <header class="cf">
      <img src="https://www.tesla.com/sites/default/files/red-tesla-model-s.jpg" style="width: 52px;
      border-radius: 13px;" class="arrow" />
      <h1 class="name" style="display:inline;">
                    <a href="#" style="margin-right: 64px;font-weight: bold;
                    font-size: 13pt;">Tesla</a>
                </h1>
      <p class="date" style="float: left;">2 hr ago</p>
    </header>
<br>
    <p class="status">Tesla drivers just passed 3 billion electric miles, saving the world 120M gallons of gas 👍</p>
    <img class="img-content" src="https://www.tesla.com/sites/default/files/red-tesla-model-s.jpg" />

    <div class="action">
      <div class="like">
        <a href="#">
          <img src="https://1.bp.blogspot.com/-qns_lZPjg0I/VWY2dO1HN-I/AAAAAAAACVA/akLTMY7RJSk/s1600/Thumbs-up-facebook-icon-small.png" alt="thumbs up" />
          <p>Like</p>
        </a>
      </div>

      <div class="comment">
        <a href="#">
          <img src="https://s0.wp.com/wp-content/themes/vip/facebook-groups/img/message_icon.png" />
          <p>Comment</p>
        </a>
      </div>

      <div class="share">
        <a href="#">
          <img src="http://download.seaicons.com/icons/icons8/windows-8/512/Arrows-Redo-icon.png" alt="" />
          <p>
            Share
          </p>
        </a>
      </div>

    </div>

</div>
