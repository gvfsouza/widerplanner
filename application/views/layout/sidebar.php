<style>
    @import url("https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Poppins:ital,wght@0,100;
0,200;
0,300;
0,400;
0,500;
0,600;
0,700;
0,800;
0,900;
1,100;
1,200;
1,300;
1,400;
1,500;
1,600;
1,700;
1,800;
1,900&family=Quicksand:wght@300;
400;
500;
600;
700&display=swap");
 * {
	 padding: 0;
	 margin: 0;
	 box-sizing: border-box;
	 font-family: "Dancing Script", cursive;
	 font-family: "Poppins", sans-serif;
	 font-family: "Quicksand", sans-serif;
}
 body {
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 background-color: #334756;
	 min-height: 100vh;
}
 .navigation {
	 position: relative;
	 height: 500px;
	 width: 300px;
	 background-color: #082032;
	 overflow-x: hidden;
	 transition: width 0.5s;
	 border-radius: 20px;
	 box-shadow: inset 5px 5px 10px rgba(0, 0, 0, 0.1), inset 5px 5px 20px rgba(255, 255, 255, 0.1), inset -5px -5px 15px rgba(0, 0, 0, 0.2);
}
 .navigation ul {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 padding-left: 5px;
	 padding-top: 40px;
}
 .navigation ul li {
	 position: relative;
	 list-style: none;
	 width: 90%;
	 border-radius: 50px 0 0 50px;
	 margin-left: 10%;
}
 .navigation ul li::before {
	 content: "";
	 position: absolute;
	 top: 50%;
	 left: 11%;
	 width: 17%;
	 height: 80%;
	 background: #082032;
	 border-radius: 50px;
	 transform: translate(-50%, -50%);
	 transform-origin: left;
	 z-index: 0;
	 opacity: 0;
	 transition: all 0.3s;
	 box-shadow: 0px 0px 5px rgba(0, 0, 0, .1), inset 2px 2px 3px rgba(255, 255, 255, 0.1), inset -3px -3px 3px rgba(0, 0, 0, .1);
}
 .navigation ul li.active::before {
	 opacity: 1;
	 transform: translate(-50%, -50%);
	 width: 95%;
	 left: 50%;
}
 .navigation ul li.active {
	 background: #334756;
}
 .navigation ul li.active a::before {
	 content: "";
	 position: absolute;
	 top: -30px;
	 right: 0;
	 width: 30px;
	 height: 30px;
	 border-radius: 50%;
	 box-shadow: 15px 15px 0px #334756;
}
 .navigation ul li.active a::after {
	 content: "";
	 position: absolute;
	 bottom: -30px;
	 right: 0;
	 width: 30px;
	 height: 30px;
	 border-radius: 50%;
	 box-shadow: 15px -15px 0px #334756;
}
 .navigation ul li a {
	 position: relative;
	 display: flex;
	 text-decoration: none;
	 width: 100%;
	 color: #e9d5da;
}
 .navigation ul li a .icon {
	 margin-left: 40px;
	 position: relative;
	 display: block;
	 height: 60px;
	 line-height: 65px;
	 text-align: center;
}
 .navigation ul li a .icon ion-icon {
	 position: relative;
	 font-size: 1.2em;
	 z-index: 1;
	 font-weight: 500;
}
 .navigation ul li a .title {
	 position: relative;
	 display: block;
	 padding-left: 20px;
	 height: 60px;
	 line-height: 60px;
	 font-size: 18px;
	 font-weight: 500;
	 white-space: nowrap;
}
 
</style>
<div class="navigation">
  <ul>
    <li class="list active">
      <a href="#">
        <span class="icon">
          <ion-icon name="home-outline"></ion-icon>
        </span>
        <span class="title">Home</span>  
      </a>
    </li>
    <li class="list">
      <a href="#">
        <span class="icon">
          <ion-icon name="lock-closed-outline"></ion-icon>
        </span>
        <span class="title">Password</span>  
      </a>
    </li>
    <li class="list">
      <a href="#">
        <span class="icon">
          <ion-icon name="call-outline"></ion-icon>
        </span>
        <span class="title">Contact</span>  
      </a>
    </li>
    <li class="list">
      <a href="#">
        <span class="icon">
          <ion-icon name="person-outline"></ion-icon>
        </span>
        <span class="title">Profile</span>  
      </a>
    </li>
    <li class="list">
      <a href="#">
        <span class="icon">
          <ion-icon name="paper-plane-outline"></ion-icon>
        </span>
        <span class="title">Messages</span>  
      </a>
    </li><li class="list">
      <a href="#">
        <span class="icon">
          <ion-icon name="log-out-outline"></ion-icon>
        </span>
        <span class="title">Sign Out</span>  
      </a>
    </li>
  </ul> 
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    


const list = document.querySelectorAll('.list')
function activeLink(){
  list.forEach((item)=>item.classList.remove('active'))
  this.classList.add('active')
}

list.forEach((item)=> item.addEventListener('click',activeLink))
</script>