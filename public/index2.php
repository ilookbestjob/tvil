<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Тестовое задание TVIL</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
	



a, a:visited {
    outline:none;
    color:#389dc1;
}

a:hover{
    text-decoration:none;
}

section, footer, header, aside, nav{
    display: block;
}


/*-------------------------
    input поиска
--------------------------*/

.bar input{
    background:#fff no-repeat 13px 13px;
    background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkU5NEY0RTlFMTA4NzExRTM5RTEzQkFBQzMyRjkyQzVBIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkU5NEY0RTlGMTA4NzExRTM5RTEzQkFBQzMyRjkyQzVBIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RTk0RjRFOUMxMDg3MTFFMzlFMTNCQUFDMzJGOTJDNUEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RTk0RjRFOUQxMDg3MTFFMzlFMTNCQUFDMzJGOTJDNUEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4DjA/RAAABK0lEQVR42pTSQUdEURjG8dOY0TqmPkGmRcqYD9CmzZAWJRHVRIa0iFYtM6uofYaiEW2SRJtEi9YxIklp07ZkWswu0v/wnByve7vm5ee8M+85zz1jbt9Os+WiGkYdYxjCOx5wgFeXUHmtBSzpcCGa+5BJTCjEP+0nKWAT8xqe4ArPGEEVC1hHEbs2oBwdXkM7mj/JLZrad437sCGHOfUtcziutuYu2v8XUFF/4f6vMK/YgAH1HxkBYV60AR31gxkBYd6xAeF3VzMCwvzOBpypX8V4yuFRzX2d2gD/l5yjH4fYQEnzkj4fae5rJulF2sMXVrAsaTWttRFu4Osb+1jEDT71/ZveyhouTch2fINQL9hKefKjuYFfuznXWzXMTabyrvfyIV3M4vhXgAEAUMs7K0J9UJAAAAAASUVORK5CYII=);

    border-style:solid;
	border-color:rgba(0,86,203,1.00);
    width: 200px;
    line-height: 19px;
    padding: 11px 0;

    border-radius: 10px;
  
    text-align: left;
    font-size: 14px;
    font-family: inherit;
    color: #738289;
    font-weight: bold;
    outline: none;
    text-indent: 40px;
}

.orderbtn
	{
		
		width:95px;
		cursor:pointer;
		margin-bottom: 10px;
		margin-top: 20px;
	}
.hotelheader
	{
		color:rgba(0,86,203,1.00);
		font-weight: 800;
		font-family: tahoma;border-right-width: 
		
	}
	
.price
	{
		color:rgba(3,150,51,1.00);
		font-weight: 200;
		font-size: 20px;
		font-family: tahoma;border-right-width: 
		
	}
	
.adressheader
	{
		color:rgba(170,171,173,1.00);
		font-weight: 200;
		font-family: tahoma;border-right-width: 
		
	}
.Bookheader
	{
		color:rgba(77,212,126,1.00);
		font-weight: 200;
		font-family: tahoma;
		font-size: 20px;
		
	}
	
.hotelblockeven
	{
		background-color: rgba(248,248,248,1.00);
		min-height: 80px;
		padding-top: 10px
		
	}		
.hotelblockeven:hover
	{
		background-color: rgba(235,235,235,1.00);
		min-height: 80px;
		padding-top: 10px
	}
.hotelblockodd:hover
	{
		background-color: rgba(235,235,235,1.00);
		min-height: 80px;
		padding-top: 10px
		
	}
	
.hotelblockodd
	{
		background-color: rgba(245,245,245,1.00);
		min-height: 80px;
		padding-top: 10px
		
	}
.hotelblockbooked
	{
	background-color: rgba(255,239,157,1.00);
	min-height: 80px;
	padding-top: 10px;
	box-shadow: 0 0 5px 0px rgba(132,132,132,1.00);
	}
.textbooked
	{
	color:rgba(27,180,83,1.00);
	font-weight: 600;
	font-family: tahoma;
	font-size: 14px;
	margin: 20px;
		
	}
.bookedblock
	{
	background-color: rgba(234,247,232,1.00);
	min-height: 80px;
	padding: 30px;
	padding-top: 60px;
	padding-bottom: 100px;
	border-style: solid;
	border-color: rgba(190,217,175,1.00);
	border-width: 1px;
		
	}
	</style>


</head>

<body><div id="main">
<router-view></router-view>  
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<script language="javascript">
	
//Путь отображения отелей
const Hotels = {  
  data: function() {
    				return{
						searchString: "",
      					info: null,
						  }
					},
  mounted() {
	 		axios
      		.get('hotels.json')
      		.then(response => (this.info = response));//}

  			},
  template: '<div class="container"><div class="row"><div class="col-sm-12">&nbsp</div><div class="col-sm-12"><div class="float-right"><div class="bar"><input type="text"  v-model="searchString" placeholder="Введите  цену" /></div></div></div> <div class="col-sm-12">&nbsp;</div> <div class="col-sm-12">&nbsp;</div></div><div class="container"><div v-for="(value,index) in filteredhotels" ><div class="row " v-bind:class="{ hotelblockeven: (index%2==0&index!=vm.id), hotelblockodd: (index%2==1&index!=vm.id),hotelblockbooked:index==vm.id}"><div class="col-sm-1">{{index+1}}</div><div class="col-sm-7"><span class="hotelheader">{{value.name}}</span><br><span class="adressheader">{{value.adress}}</span></div><div class="col-sm-2 float-right"><span class="price float-right d-block">{{value.price}} руб.</span></div><div class="col-sm-2"><div class="orderbtn textbooked float-right" v-if="index==vm.id">Забронирован!</div><div class="btn-sm btn-primary orderbtn float-right" v-on:click="book" v-bind:id=index v-if="index!=vm.id">бронировать</div></div></div></div>' ,
	
  methods: {
            book: function (event) 
	  			{
                  vm.id=event.target.id;
                  vm.$router.push('book')
	            }
           },
  computed: {
   
    			filteredhotels: function () 
	  				{
		
						if (this.info!=null)
							{
								var hotels_array = this.info.data,
				  				searchString = this.searchString;

								if(!searchString)
									{
										return hotels_array;
            						}

								searchString =  parseInt(searchString.trim().toLowerCase());
            					hotels_array = hotels_array.filter(function(item)
										{
					    					if( parseInt(item.price)<searchString)
												{
                    								return item;
                								}
            							})

								return hotels_array;;
        					}
					}
  		} 
}

//Маршрут заказа
const Book = {  data: function() {
    return{
	
      info: null,
  filteredhotels:null
  }},
   mounted() 
			  {
	  
                w=axios
               .get('http://ilookbestjob.ru/tests/tvil/public/hotels.json')
               .then(response => (this.info = response));//}
			  }, 
	template: '<div class="container"><div class="row"><div class="col-sm-12 text-center Bookheader">&nbsp;</div></div><div class="row"><div class="col-sm-12 text-center Bookheader"><div class="btn-sm btn-success orderbtn float-right" v-on:click="book"> Назад </div></div></div><div class="row"><div class="col-sm-12 text-center Bookheader">&nbsp;</div></div><div class="row"><div class="col-sm-12 text-center Bookheader"></div></div><div class="row bookedblock"><div class="col-sm-12 text-center Bookheader">Поздравляем Вас! Вы только что забронировали:</div><div class="col-sm-12"><div class="float-right"></div></div> <div class="col-sm-12">&nbsp;</div> <div class="col-sm-12">&nbsp;</div><div class="col-sm-10"><span class="hotelheader">{{ filteredhotels?filteredhotels.name:""}}</span><br><span class="adressheader">{{ filteredhotels?filteredhotels.adress:""}}</span></div><div class="col-sm-2"><span class="price">{{ filteredhotels?filteredhotels.price:""}} руб.</span></div></div>',
	methods: 
		{
		    book: function (event) 
				{
					vm.$router.go(-1)	
				}
		},
	computed: 
			  {
        		filteredhotels: function () 
				  {
					if (this.info!=null)
						{
            				var hotels_array = this.info.data[vm.id];
							if (vm.id==-1) {vm.$router.go(-1)}
							return hotels_array;;
						}
				  }
			  }
}

const routes = [
  { path: '/book', component: Book },
  { path: '/', component: Hotels }
]
const router = new VueRouter({
  routes 
})	
	
 vm=new Vue({
	router,
  el: '#main',
  data: function() {
    return{
	  searchString: "",
      info: null,
	  id:-1,
  }},
	 components: {
    'Hotels': Hotels,
		 'Book':Book
  },
  mounted() {

			 
    w=axios
      .get('hotels.json')
      .then(response => (this.info = response));//}

  },
	 computed: {
   
        filteredhotels: function () {
			
		
			if (this.info!=null){
            var hotels_array = this.info.data,
				
                searchString = this.searchString;

            if(!searchString){
                return hotels_array;
            }

            searchString =  parseInt(searchString.trim().toLowerCase());

            hotels_array = hotels_array.filter(function(item){
				
                if( parseInt(item.price)<searchString){
                    return item;
                }
            })

         
            return hotels_array;;
        }}
    }
  
});

	</script>

</body>
</html>