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
  color: #FCC74F;
}

h4 {
  font-size: 18px;
  font-weight: 500;
  color: #9b9b9b;
  margin-bottom: 15px;
  margin-top: 20px;
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
                    <p style="text-align: justify;" >Welcome to MerryMeal's <strong style="color: #0e6655;">Meals on Wheels </strong>, where compassion meets action. We are a charitable organization
                     dedicated to ensuring that qualified adults living at home, unable to cook for themselves due to age, disease, or disability, receive nutritious meals. Our mission is to 
                     provide a hot noon meal Monday through Friday, supplemented by frozen meals over the weekend for those outside a 10-kilometer radius from our outsourced kitchens. Through 
                     partnerships with food service providers nationwide, we strive to deliver meals swiftly, ensuring our members' nutritional needs are met with care and efficiency.

Join us in making a difference in the lives of those in need. Together, we can nourish bodies and uplift spirits one meal at a time.</p>
    </div>
    <div class="grid-item">
      <a href="http://www.freepik.com"><img className='ml-5 img-fluid' src="images/About_Us.jpg" height="500" alt="Designed by stories / Freepik" /></a>
    </div>
  </div>

</body>

@endsection