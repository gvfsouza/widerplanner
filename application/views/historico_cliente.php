<ul class="list-group">
  <li class="list-group-item"><i class="fas fa-cut"></i> An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
<style>
  @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700");
 @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
 body {
	 font-family: "Open Sans", sans-serif;
	 background: #eee;
}
 .container {
	 margin: 0 auto;
	 margin-top: 50px;
	 width: 980px;
}
 header {
	 display: flex;
	 align-items: center;
	 font-size: 1em;
	 font-weight: 600;
	 color: #bdbdbd;
	 padding: 20px;
	 box-sizing: border-box;
	 user-select: none;
	 text-align: center;
}
 header .button-col {
	 width: 240px;
	 text-align: left;
}
 header .status-col {
	 width: 145px;
}
 header .progress-col {
	 width: 190px;
}
 header .dates-col {
	 width: 150px;
}
 header .priority-col {
	 width: 170px;
}
 header .icon-col {
	 width: 30px;
	 text-align: right;
}
 header button {
	 color: #bdbdbd;
	 outline: none;
	 border: none;
	 background: #d5d5d5;
	 padding: 10px 20px;
	 border-radius: 2.5px;
	 margin-right: 20px;
	 font-size: 1em;
	 font-weight: 600;
}
 header button:hover {
	 cursor: pointer;
	 background: #3d3d44;
}
 header label {
	 display: inline-block;
	 margin: 0 20px;
	 text-align: center;
}
 header .icon-col {
	 padding-right: 20px;
}
 ul.task-items li.item {
	 display: flex;
	 align-items: center;
	 margin: 20px 0;
	 padding: 20px;
	 background: #fff;
	 border-radius: 5px;
	 box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.1);
}
 ul.task-items li.item.type1 .task .icon {
	 background: #9575cd;
}
 ul.task-items li.item.type2 .task .icon {
	 background: #f48fb1;
}
 ul.task-items li.item.type3 .task .icon {
	 background: #9575cd;
}
 ul.task-items li.item.type4 .task .icon {
	 background: #4fc3f7;
}
 ul.task-items li.item .task {
	 display: flex;
	 align-items: center;
	 width: 240px;
}
 ul.task-items li.item .task .icon {
	 background: #bdbdbd;
	 width: 50px;
	 height: 50px;
	 border-radius: 5px;
}
 ul.task-items li.item .task .name {
	 background: #eee;
	 margin-left: 20px;
	 width: 180px;
	 height: 25px;
	 border-radius: 15px;
}
 ul.task-items li.item .status {
	 display: flex;
	 align-items: center;
	 font-size: 1em;
	 color: #2e7d32;
	 width: 145px;
	 margin-left: 30px;
}
 ul.task-items li.item .status .icon {
	 background: #2e7d32;
	 margin-right: 10px;
	 width: 14px;
	 height: 14px;
	 border-radius: 50%;
}
 ul.task-items li.item .status .icon.risk {
	 background: red;
}
 ul.task-items li.item .status .icon.warning {
	 background: #ffa000;
}
 ul.task-items li.item .status .icon.off {
	 background: #bf360c;
}
 ul.task-items li.item .progress {
	 width: 190px;
}
 ul.task-items li.item .progress progress {
	 display: block;
	 margin-left: 0;
	 -webkit-appearance: none;
	 height: 12.5px;
	 width: 142.5px;
}
 ul.task-items li.item .progress progress::-webkit-progress-bar {
	 background-color: #eee;
	 border-radius: 5px;
}
 ul.task-items li.item .progress ::-webkit-progress-value {
	 background-color: #4dd0e1;
	 border-radius: 5px;
}
 ul.task-items li.item .dates {
	 width: 150px;
}
 ul.task-items li.item .dates .bar, ul.task-items li.item .priority .bar {
	 background: #eee;
	 width: 100px;
	 height: 25px;
	 border-radius: 15px;
}
 ul.task-items li.item .priority {
	 width: 144.5px;
}
 ul.task-items li.item .priority .bar {
	 background: #ffcdd2;
}
 ul.task-items li.item .user {
	 width: 30px;
}
 ul.task-items li.item .user img {
	 border-radius: 50%;
}
 
</style>
<section class="container">

	<!-- Header Bar -->
	<header>
		<div class="button-col">
			<button class="btn" name="Add Task"> Add Task </button>
		</div>

		<div class="status-col">
			<label> Status </label>
		</div>

		<div class="progress-col">
			<label> Progress </label>
		</div>
		
		<div class="dates-col">
			<label> Dates </label>
		</div>

		<div class="priority-col">
			<label> Priority </label>
		</div>
		
		<div class="icon-col">
			<i class="icon fa fa-user-o"> </i>
		</div>

	</header>

	<!-- List Items -->
	<ul class="task-items">
		
		<!-- List Item -->
		<li class="item type1">
			<div class="task">
				<div class="icon"> </div>
				<div class="name" style="width:150px"> </div>
			</div>

			<div class="status">
				<div class="icon off"> </div>
				<div class="text"> Off Track </div>
			</div>

			<div class="progress">
				<progress value="15" max="100" />
			</div>

			<div class="dates">
				<div class="bar"> </div>
			</div>

			<div class="priority">
				<div class="bar"> </div>
			</div>

			<div class="user">
				<img src="https://source.unsplash.com/40x40/?indian" alt="Image 001" class="owner-img" />
			</div>
		</li>
		
		
	</ul>

</section>