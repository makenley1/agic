@extends('layouts/master')

@section('style')
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <link rel="stylesheet" type="text/css" href="css/contact_responsive.css">
@stop

@section('content')

  <!-- Contact Map -->

  <div class="contact_map">

    <!-- Google Map -->
    
    <div class="map">
      <div id="google_map" class="google_map">
        <div class="map_container">
          <div id="map"></div>
        </div>
      </div>
    </div>

  </div>
  
  <!-- Contact -->

  <div class="contact">
    
    <div class="container">
      <div class="row row-lg-eq-height">

        <!-- Details -->
        <div class="col-lg-6">
          <div class="contact_details">
            <div class="contact_details_title">Contact Details</div>
            <ul>
              <li>
                <svg fill="rgba(0,0,0,0.4)" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                </svg>
                <span>9;00 AM - 18:00 PM</span>
              </li>
              <li>
                <svg fill="rgba(0,0,0,0.4)" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                </svg>
                <span>+509 4374-7773</span>
              </li>
              <li>
                <svg fill="rgba(0,0,0,0.4)" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <span>agic@gmail.com</span>
              </li>
              <li>
                <svg fill="rgba(0,0,0,0.4)" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <span>21 Rue Dumesle, Delmas 43</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Form -->
        <div class="col-lg-6">
          <div class="contact_form_container">
            <div class="form_title">Contactez-nous</div>
            <form action="#" id="contact_form" class="contact_form">
              <div class="row contact_row">
                <div class="col-lg-6 contact_col">
                  <input type="text" class="form_input" placeholder="Votre Nom" required="required">
                </div>
                <div class="col-lg-6 contact_col">
                  <input type="email" class="form_input" placeholder="Votre Mail" required="required">
                </div>
                <div class="col-lg-12">
                  <textarea class="form_input form_text" placeholder="Message..." required="required"></textarea>
                </div>
                <div class="col">
                  <button type="submit" class="form_button trans_200">Envoyer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  
@stop