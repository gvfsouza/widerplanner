<ul class="list-group">
  <li class="list-group-item"><i class="fas fa-cut"></i> An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>

<style>
  :root{
  --primary-color:#0D6FFA;
  --accent-color:#49CE95;
  --danger-color:#EC3582;
  --fore-color:rgba(0,0,0,0.65);
  --main-cast-shadow: 0px 3px 12px rgba(0, 0, 0, 0.08), 0px 3px 6px rgba(0, 0, 0, 0.12);
}
*{
  box-sizing:border-box;
}
body, html{
  margin:0;
  color: var(--fore-color);
}
body{
  font-family: "Roboto";
  font-size:14px;
  background-color: var(--accent-color);
}
button,a{
  cursor: pointer;
}
.sc-box{
  position:relative;
  width:375px;
  margin:36px auto;
  
  background-color: #F6F8FA;
  border-radius:35px;
  box-shadow: 0px 3px 6px rgba(0,0,0,0.08), 
    0px 6px 16px rgba(0,0,0,0.12);
  
  overflow:hidden;
}
.sc-container{
  padding:36px;
}

.sc-main-title{
  --fore-color: #000000;
  
  margin-bottom:42px;
  
  color:var(--fore-color);
  text-align:center;
}
.sc-searchbox{
  position:relative;
}
.sc-searchbox-field{
  height:42px;
  width:100%;
  padding:16px 16px 16px 48px;
  
  background-color:rgba(0,0,0,0.05);
  border-radius:40px;
  border:0;
  outline:none;
}
.sc-searchbox-placeholder{
  position:absolute;
  display:flex;
  
  height:100%;
  width:100%;
  align-items:center;
  justify-content:center;
  top:0;
  left:0;
  
  color:rgba(0,0,0,0.6);
  
  pointer-events:none;
  transition:ease-in-out .2s;
}
.sc-searchbox-placeholder-text{
  margin:0;
  transition:ease-in-out .2s;
}
.sc-searchbox-placeholder-icon{
  margin-right:12px;
}

.sc-searchbox-field:focus ~ .sc-searchbox-placeholder, .sc-searchbox-field:valid ~ .sc-searchbox-placeholder{
  transform: translate3d(-22%, 0px, 0px);
}
.sc-searchbox-field:focus ~ .sc-searchbox-placeholder .sc-searchbox-placeholder-text,
.sc-searchbox-field:valid ~ .sc-searchbox-placeholder .sc-searchbox-placeholder-text{
  opacity:0;
}

.sc-timeline{
  padding-top:0;
  padding-bottom:64px;
}
.sc-timeline-item{
  display:flex;
  
  width:100%;
  align-items:flex-start;
  margin-bottom: 60px;
  
  cursor:pointer;
}
.sc-timeline-item:after{
  content:url("data:image/svg+xml,%3Csvg width='15' height='26' viewBox='0 0 15 26' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath opacity='0.2' d='M1 1L13 13L1 25' stroke='black' stroke-width='2'/%3E%3C/svg%3E%0A");
  align-self:center;
  margin-left:16px;
}
.sc-timeline-item:last-child{
  margin-bottom:0;
}
.sc-timeline-icon{
  display:flex;
  position:relative;
  
  align-items:center;
  justify-content:center;
  width:60px;
  height:60px;
  
  font-size: 24px;
  color:#ffffff;
  background-color:var(--primary-color);
  border-radius:50%;
  box-shadow: var(--main-cast-shadow);
  
  z-index:2;
}
.sc-timeline .sc-timeline-icon{
  margin-right:16px;
  flex:none;
}
.sc-timeline .sc-timeline-icon:after{
  content:'';
  position:absolute;
  
  top:100%;
  height:100%;
  width:2px;
  
  background-color:#DBE0E8;
  
  z-index:-1;
}
.sc-timeline-item:last-child .sc-timeline-icon:after{
  display:none;
}
.sc-timeline-item[event*="launch"] .sc-timeline-icon{
  background-color: var(--accent-color);
}
.sc-timeline-info{
  padding-top:8px;
  flex-grow:1;
}
.sc-timeline-title{
  --fore-color:#000000;
  
  margin:0;
  
  color:var(--fore-color);
  font-weight:600;
}
.sc-timeline-details{
  display:flex;
  
  justify-content:space-between;
}
.sc-timeline-time{
  line-height:1.6;
}

.sc-timeline-duration{
  line-height:1.6;
}

.sc-bottom-bar{
  display:flex;
  
  padding: 16px 36px;
  justify-content:space-between;
  
  font-size:26px;
  background-image:radial-gradient(circle at center 6px,transparent 36px, #ffffff 36px);
  filter: drop-shadow(0px -1px 6px  rgba(0, 0, 0, 0.08)) drop-shadow(0px -2px 12px  rgba(0, 0, 0, 0.12));
}

.sc-fab{
  position:absolute;
  display:flex;
  
  justify-content:center;
  align-items:center;
  width: 56px;
  height: 56px;
  bottom:28px;
  margin:auto;
  left:0;
  right:0;
  
  color:#ffffff;
  background-color: #000000;
  box-shadow: var(--main-cast-shadow);
  border-radius:50%;
}
.sc-menu-item{
  opacity:0.6;
}
.sc-current{
  opacity:1;
}
.sc-actionsheet-container{
  position:absolute;
  
  width:100%;
  height:100%;
  top:0;
  left:0;
  
  z-index:9;
    pointer-events:none;
}
.sc-actionsheet{
  position:absolute;

  width:100%;
  bottom:0;
  
  background: rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(20px);
  border-radius: 40px 40px 0px 0px;
  
  transition:ease-in-out .3s;
  transform:translate3d(0px, 100%, 0px);
  
  z-index:9;

}
.sc-actionsheet-container.sc-show .sc-overlay{
  opacity:1;
  pointer-events: all;
}
.sc-actionsheet-container.sc-show .sc-actionsheet{
  transform:translate3d(0px,0px,0px);
  pointer-events: all;
}
.sc-overlay{
  position:absolute;
  
  width:100%;
  height:100%;
  top:0;
  left:0;
  
  background-color:rgba(0,0,0,0.25);
  opacity:0;
  
  transition:ease-in-out .3s;
  pointer-events:none;
}

.sc-actionsheet-title{
  display:grid;
  
  padding:16px 36px;
  margin-top:24px;
  grid-template-columns: 1fr 2fr 1fr;
  grid-template-areas: '. title close';
  align-items:center;
}
.sc-actionsheet[type*="event"] .sc-actionsheet-title{
  grid-template-areas: 'duration title close';
  
}
.sc-actionsheet-info{
  grid-area:duration;
}
.sc-actionsheet-title-text{
  display:flex;
  
  width:100%;
  justify-content:center;
  grid-area:title;
  margin:0;
}
.sc-actionsheet-close{
  display:inline-flex;
  
  justify-content:center;
  align-items:center;
  grid-area: close;
  width:34px;
  height:34px;
  
  color:var(--fore-color);
  text-decoration:none;
  justify-self:end;
  border-radius:50%;
  background: rgba(0,0,0,0.1);
}
.sc-event-details{
  display:flex;
  
  justify-content:center;
  margin-top:24px;
}
.sc-event-details-items{
  display:inline-flex;
  flex-direction:column;
}
.sc-event-details-items > span{
  margin-bottom:8px;
}


.sc-flex-row{
  display:flex;
  flex-wrap:wrap;
}
.sc-justify-center{
  justify-content:center;
}

button{
  padding:12px 16px;
  
  text-align:center;
  border-radius:40px;
}
button[sc-style*="secondary"]{
  background-color:transparent;
  border: 1px solid var(--primary-color);
  color: var(--primary-color);
}
button[sc-style*="flat"]{
  padding:8px 16px;
  
  background-color:transparent;
  color:var(--fore-color);
  border:none;
}
button[sc-style*="danger"]{
  --fore-color: var(--danger-color);
}
button[sc-style*="block"]{
  width:100%;
}
</style>
<div class="sc-box">
  <div class="sc-container">
    <h1 class="sc-main-title">Today's Events</h1>
    <div class="sc-searchbox">
      <input required type="text" 
             class="sc-searchbox-field"/>
      <div class="sc-searchbox-placeholder">
        
        <i class="sc-searchbox-placeholder-icon fas fa-search"></i>
        <p class="sc-searchbox-placeholder-text">Search an event</p>
      </div>
      
    </div>
  </div>
    <div class="sc-container sc-timeline">
      <div class="sc-timeline-item" event="launch">
        <i class="sc-timeline-icon fas fa-utensils"></i> 
        <div class="sc-timeline-info">
          <div class="sc-timeline-details">
            <span class="sc-timeline-time">12:00 PM</span>
            <span class="sc-timeline-duration">1 hour<span>
          </div>
          <h3 class="sc-timeline-title">Launch</h3>
        </div>
      </div>
      <div class="sc-timeline-item sc-actionsheet-trigger" event="meeting" goto="meeting">
        <i class="sc-timeline-icon fas fa-comments"></i> 
        <div class="sc-timeline-info">
          <div class="sc-timeline-details">
            <span class="sc-timeline-time">13:00 PM</span>
            <span class="sc-timeline-duration">30 minutes<span>
          </div>
          <h3 class="sc-timeline-title">Design Feedback</h3>
        </div>
      </div>
      <div class="sc-timeline-item" event="meeting">
        <i class="sc-timeline-icon fas fa-comments"></i> 
        <div class="sc-timeline-info">
          <div class="sc-timeline-details">
            <span class="sc-timeline-time">14:30 PM</span>
            <span class="sc-timeline-duration">1 hour<span>
          </div>
          
          <h3 class="sc-timeline-title">Front-End 
Implementation Details</h3>
        </div>
      </div>
  </div>
  <div class="sc-bottom-bar">
    <a class="sc-menu-item sc-current">
      <i class="fas fa-list"></i>
      
    </a>
    <a class="sc-fab">
      <i class="fas fa-plus"></i>
    </a>
    <a class="sc-menu-item">
      <i class="fas fa-calendar-alt"></i>
    </a>
  </div>
  <div class="sc-actionsheet-container" id="meeting">
    <div class="sc-overlay"></div>
      <div type="event" class="sc-actionsheet">
        <div class="sc-actionsheet-title">
          <span class="sc-actionsheet-info">30 minutes</span>
   
          <div class="sc-actionsheet-title-text">
            <i class="sc-timeline-icon fas fa-comments"></i>
          </div>
          <a href="#" class="sc-actionsheet-close">
            <i class="fas fa-times"></i>
          </a>
        </div>
        <div class="sc-event-details">
           <div class="sc-event-details-items">
             <span>
               <i class="fas fa-clock"></i> 
               Starts in 1 hour
             </span>
             <span>
               <i class="fas fa-map-marker-alt"></i>                          Meeting Room 13
             </span>
          </div>
        </div>
        <div class="sc-container">
          <h3>Design Feedback</h3>
          <p>We need to gather to talk about the latest iteration
over the main flow for adding users. Still having
            a couple of concerns.</p>
        </div>
        <div class="sc-container sc-flex-row sc-justify-center">
          <button class="sc-actionsheet-trigger" goto="meeting-actions" sc-style="secondary block">
            
            Accepted
          </button>
        </div>
      </div>
   </div>
        <div class="sc-actionsheet-container" id="meeting-actions">
          <div class="sc-overlay"></div>
          <div class="sc-actionsheet">
            <div class="sc-actionsheet-title">
              <h3 class="sc-actionsheet-title-text">
                Meeting Accepted
              </h3>
              <a class="sc-actionsheet-close">
                <i class="fas fa-times"></i>
              </a>
            </div>
            <div class="sc-container">
              <div class="sc-flex-row sc-justify-center">
                <p>Change Response</p>
              </div>
              <div class="sc-flex-row sc-justify-center">
                <button sc-style="flat danger">Decline</button>
              </div>
              <div class="sc-flex-row sc-justify-center">
                <button sc-style="flat">Tentative</button>
              </div>
            </div>
          </div>
        </div>
</div>
          
