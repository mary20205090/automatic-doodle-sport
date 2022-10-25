@extends('pages.app')
@section('sidebar')
@section('sidebar-button')
@section('main-section')

 <!-- section sidebar starts -->
 <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Iguru</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="home" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Home</span>
        </a>
      </li>
      <li>
        <a href="add">
          <i class='bx bx-box'></i>
          <span class="links_name"> Register Adults</span>
        </a>
      </li>
      <li>
        <a href="viewadult">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Adult Points</span>
        </a>
      </li>
      <li>
        <a href="addkid">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Register Kids</span>
        </a>
      </li>
      <li>
        <a href="viewkid">
          <i class='bx bx-coin-stack'></i>
          <span class="links_name">Kids Points</span>
        </a>
      </li>
      
     
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">Setting</span>
        </a>
      </li>
      <li>
        <a href="{{ route('logout') }}">
        <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
      
    </ul>
  </div> <!-- section sidebar ends -->

 <!-- home-section starts -->
 <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search'></i>
      </div>
      
    </nav>

    <div class="home-content">
      <div class="container">

      <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">

                  <a class="btn btn-primary" href="path/to/settings" aria-label="Delete">
                    <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                  </a>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Adults</p>
                      <p class="card-title">1,500<p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                  <a class="btn btn-primary" href="path/to/settings" aria-label="Delete">
                  <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                  </a>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Kids</p>
                      <p class="card-title">1,345<p>
                    </div>
                  </div>
                </div>
              </div>
                         </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                  <a class="btn btn-primary" href="path/to/settings" aria-label="Delete">
                   <i class="fa fa-trophy fa-2x" aria-hidden="true"></i>
                  </a>

                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Games</p>
                      <p class="card-title">20<p>
                    </div>
                  </div>
                </div>
              </div>
                          </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                  <a class="btn btn-primary" href="path/to/settings" aria-label="Delete">
                  <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                  </a>


                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Players</p>
                      <p class="card-title">2,845<p>
                    </div>
                  </div>
                </div>
              </div>
               </div>
          </div>

        </div>

        
       
      </div>
    </div> <br> <br>

    <div class="container">
    <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Players Behavior</h5>
                <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
              <div style="margin-top: 20px;">
        <h4 style="text-align: center;">Adult Bar Chart game Interpretation</h4>
        <div class="container-fluid p-5">
            <div id="barchart_material" style="width: 100%; height: 500px;"></div>
        </div>
    </div>

              </div>
              
            </div>
          </div>
        </div>

    </div>
    </div>
    
  </section>
  


 <!-- home section ends -->
 