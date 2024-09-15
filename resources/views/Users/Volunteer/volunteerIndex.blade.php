@section('title')
    Welcome
@endsection

@extends('Users.Volunteer.layouts.app')

@section('content')
<div class="container m4" >
  
  <h1><strong>Volunteer Details</strong></h1>
<table class="table table-bordered" >

  <thead>
      <tr>
      <th>No.</th>
      <th>Vaccination Status</th>
      <th>Volunteer Duration</th>
      <th>Available Days</th>
      
      </tr>
  </thead>

  <tbody>
     
          <tr>
              <td>1</td>
              <?php 
                $vacc =  $volunteerData-> volunteer_vaccination;
                if ($vacc == 0 ) {
                  $vacc_status = "yes";
                }else{
                  $vacc_status = "no";
                }
              ?>
              <td><?php echo $vacc_status; ?></td>
              <td>{{ $volunteerData-> volunteer_duration }}</td>
              <td>{{ $volunteerData-> volunteer_available  }}</td>
          </tr>
      
  </tbody>
</table>

</div>
<div id="fh5co-page">
        
  <div class="fh5co-hero">
      <div class="fh5co-overlay"></div>
      <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/Volunteer_home.jpg);">
          <div class="desc animate-box">
          <h2> <strong> GIVE </strong> <strong style="color: #FCC74F;">HELP</strong> <strong> SPREAD</strong> <strong style="color: #FCC74F;">LOVE</strong> </h2>
              {{-- <span>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></span> --}}
              {{-- <span><a class="btn btn-primary btn-lg" href="{{ route('member#viewAllMenu') }}">View Menu</a></span> --}}
          </div>
      </div>

  </div>
</div>

@endsection