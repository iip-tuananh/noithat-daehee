<nav class="menu">
    <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
    <label class="menu-open-button" for="menu-open">
    <img  class="ring" src="https://static.mepuzz.com/images/bell-icon.png" class="mp-notification-element-button-img">
    </label> 
    <a href="#" class="menu-item d-none">
        <div class="mp-notification-element-content" style="width: 350px;">
            <ul class="mp-notification-list-group">
               <li class="mp-notification-list-group-item-active">Khuyến mại tuần này !!!</li>
               @foreach ($promotio as $key => $item)
               <li class="mp-notification-list-group-item item{{$key}}">
                <div onclick="location.href='{{$item->link}}';"   class="mp-notification-item-media" >
                   <img loading="lazy" class="mp-notification-item-media-thumb" src="{{$item->image}}" width="78" alt="{{$item->name}}">
                   <div class="mp-notification-item-media-body">
                      <p class="mp-notification-item-title" style="color: #ff0000!important;">{{$item->name}}</p>
                      <p class="mp-notification-item-description" style="color: #000000!important;">{{$item->description}}</p>
                   </div>
                </div>
             </li>
               @endforeach
            </ul>
         </div>
    </a>
    <span class="mp-notification-element-button-count">{{count($promotio)}}</span>
    <!-- filters -->
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="width: 0px;">
       <defs>
          <filter id="shadowed-goo">
             <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
             <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
             <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
             <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
             <feOffset in="shadow" dx="1" dy="1" result="shadow" />
             <feComposite in2="shadow" in="goo" result="goo" />
             <feComposite in2="goo" in="SourceGraphic" result="mix" />
          </filter>
          <filter id="goo">
             <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
             <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
             <feComposite in2="goo" in="SourceGraphic" result="mix" />
          </filter>
       </defs>
    </svg>
 </nav>
 <style>
    .mp-notification-element-button-count {
    width: 20px;
    height: 20px;
    position: absolute;
    left: -2px;
    top: 8px;
    color: #fff;
    font-size: 12px;
    text-align: center;
    line-height: 20px;
    border-radius: 100% !important;
    background-color: #f00;
    }
    .menu {
    filter: url("#goo");
    }
    .menu-item{
    border-radius: 100%;
    margin-left: -40px;
    position: absolute;
    bottom: 28px;
    color: white;
    text-align: center;
    line-height: 80px;
    transform: translate3d(0, 0, 0);
    transition: transform ease-out 200ms;
    }
    .menu-open-button {
    background: #ff0000;
    border-radius: 100%;
    width: 50px;
    height: 50px;
    margin-left: -40px;
    position: absolute;
    top: 20px;
    color: white;
    text-align: center;
    line-height: 80px;
    transform: translate3d(0, 0, 0);
    transition: transform ease-out 200ms;
    }
    .menu-open {
    display: none;
    }
    .hamburger {
    width: 25px;
    height: 3px;
    background: white;
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -12.5px;
    margin-top: -1.5px;
    transition: transform 200ms;
    }
    .hamburger-1 {
    transform: translate3d(0, -8px, 0);
    }
    .hamburger-2 {
    transform: translate3d(0, 0, 0);
    }
    .hamburger-3 {
    transform: translate3d(0, 8px, 0);
    }
    .menu-open:checked + .menu-open-button .hamburger-1 {
    transform: translate3d(0, 0, 0) rotate(45deg);
    }
    .menu-open:checked + .menu-open-button .hamburger-2 {
    transform: translate3d(0, 0, 0) scale(0.1, 1);
    }
    .menu-open:checked + .menu-open-button .hamburger-3 {
    transform: translate3d(0, 0, 0) rotate(-45deg);
    }
    .menu {
    position: fixed;
    left: 51px;
    -webkit-animation: slidelf 0.5s forwards;
    animation: slidelf 0.5s forwards;
    -webkit-animation-delay: 1s;
    bottom: -12px;
    display: block;
    animation-delay: 1s;
    z-index: 99999999;
    }
    .menu-item:hover {
    background: white;
    color: #ff0000;
    }
    .menu-item:nth-child(3) {
    transition-duration: 180ms;
    }
    .menu-item:nth-child(4) {
    transition-duration: 180ms;
    }
    .menu-item:nth-child(5) {
    transition-duration: 180ms;
    }
    .menu-item:nth-child(6) {
    transition-duration: 180ms;
    }
    .menu-item:nth-child(7) {
    transition-duration: 180ms;
    }
    .menu-item:nth-child(8) {
    transition-duration: 180ms;
    }
    .menu-item:nth-child(9) {
    transition-duration: 180ms;
    }
    .menu-open-button {
    z-index: 2;
    transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition-duration: 400ms;
    transform: scale(1.1, 1.1) translate3d(0, 0, 0);
    cursor: pointer;
    }
    .menu-open-button:hover {
    transform: scale(1.2, 1.2) translate3d(0, 0, 0);
    }
    .menu-open:checked + .menu-open-button {
    transition-timing-function: linear;
    transition-duration: 200ms;
    transform: scale(0.8, 0.8) translate3d(0, 0, 0);
    }
    .menu-open:checked ~ .menu-item {
    transition-timing-function: cubic-bezier(0.935, 0, 0.34, 1.33);
    }
    .menu-open:checked ~ .menu-item:nth-child(3) {
    transition-duration: 180ms;
    transform: translate3d(0.08361px, -104.99997px, 0);
    }
    .menu-open:checked ~ .menu-item:nth-child(4) {
    transition-duration: 280ms;
    transform: translate3d(90.9466px, -52.47586px, 0);
    }
    .menu-open:checked ~ .menu-item:nth-child(5) {
    transition-duration: 380ms;
    transform: translate3d(90.9466px, 52.47586px, 0);
    }
    .menu-open:checked ~ .menu-item:nth-child(6) {
    transition-duration: 480ms;
    transform: translate3d(0.08361px, 104.99997px, 0);
    }
    .menu-open:checked ~ .menu-item:nth-child(7) {
    transition-duration: 580ms;
    transform: translate3d(-90.86291px, 52.62064px, 0);
    }
    .menu-open:checked ~ .menu-item:nth-child(8) {
    transition-duration: 680ms;
    transform: translate3d(-91.03006px, -52.33095px, 0);
    }
    .menu-open:checked ~ .menu-item:nth-child(9) {
    transition-duration: 780ms;
    transform: translate3d(-0.25084px, -104.9997px, 0);
    }
    @keyframes animation-layer-2 {
    0% { transform: rotate(0deg); }
    8.0% { transform: rotate(0deg); }
    12.0% { transform: rotate(42deg); }
    16.0% { transform: rotate(-35deg); }
    20.0% { transform: rotate(0deg); }
    23.0% { transform: rotate(28deg); }
    26.0% { transform: rotate(-20deg); }
    29.0% { transform: rotate(0deg); }
    31.0% { transform: rotate(16deg); }
    33.0% { transform: rotate(-12deg); }
    35.0% { transform: rotate(0deg); }	
    37.0% { transform: rotate(-6deg); }
    39.0% { transform: rotate(0deg); }
    40.0% { transform: rotate(6deg); }
    44.0% { transform: rotate(-3deg); }
    49.0% { transform: rotate(2deg);}
    55.0% { transform: rotate(0deg); }
    62.0% { transform: rotate(1deg); }
    70.0% { transform: rotate(0deg); }  
    }
    .ring{
    max-width: 35px;
    max-height: 35px;
    position: absolute;
    left: 12px;
    top: 7px;
    animation: animation-layer-2 2000ms infinite; 
    }
    .mp-notification-list-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-top: 0px;
    margin-bottom: 0;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
    .mp-notification-list-group-item-active {
    margin-bottom: 0px;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    z-index: 2;
    font-weight: bold;
    font-size: 18px;
    text-align: center;
    height: 45px;
    border-radius: 8px 8px 0 0 !important;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ff0000;
    color: #ffffff;
    }
    .mp-notification-list-group-item {
    position: relative;
    display: block;
    padding: 5px 17px;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
    text-align: -webkit-match-parent;
    list-style: none;
    }
    .mp-notification-item-media {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    cursor: pointer;
    }
    .mp-notification-item-media-thumb {
    margin-right: 5px;
    -ms-flex-item-align: center!important;
    align-self: center!important;
    vertical-align: middle;
    border-style: none;
    width: 78px;
    /* height: 80px; */
    }
    .mp-notification-item-media-body {
    -ms-flex: 1;
    flex: 1;
    }
    .mp-notification-item-title {
    font-weight: 700;
    font-size: 13px;
    margin-bottom: 0px;
    margin-top: .5rem!important;
    line-height: 1.2;
    color: #ff0000!important;
    }
    .mp-notification-item-description {
    line-height: 12px;
    padding-top: 5px;
    user-select: none;
    font-size: 12px;
    margin-top: 0;
    color: #000000!important;
    }
    .mp-notification-item-close:before, .mp-notification-item-close:after {
    position: absolute;
    left: 15px;
    content: " ";
    height: 20px;
    width: 2px;
    border-radius: 3px !important;
    background-color: #ffffff;
    }
 </style>