@section('title')
    About Us
@endsection

@extends('layouts.app')

@section('content')
</head>
<style>
h1 {
  font-size: 40px;
  font-weight: 800;
  line-height: 40px;
  margin-bottom: 2px;
}

h1 span {
  color: #F65005;
}

h4 {
  font-size: 18px;
  font-weight: 500;
  color: #9b9b9b;
  margin-bottom: 23px;
}


.grid-container {
  display: grid;
  grid-template-columns: auto auto ;
 
  padding: 10px;
}
.grid-item {
 
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>
</head>
<body class="antialiased">
  <div class="grid-container">
    <div class="grid-item" style="margin:40px; " >
      <h1>About Us 
        <span>MerryMeal</span></h1>
                    <h4>What We Do</h4>
                    <p style="text-align: justify;" >MerryMeal <strong>Meals on Wheels </strong> is a charitable organization which deliver meals to those in need. Here we will provide you only interesting content,
                        which you will like very much. We're dedicated to providing you the best of meals for adults who struggle to cook due to disease, disability or old age, with a focus on dependability
                        and list of menus to choose from made by our partners. 
                        We hope you enjoy our service as much as we enjoy offering them to you.</p>
    </div>
    <div class="grid-item">
      <a href="http://www.freepik.com"><img className='ml-5 img-fluid' src="images/aboutUs.jpg" height="500" alt="Designed by stories / Freepik" /></a>
    </div>
  </div>

</body>

@endsection