<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<title>on time calendar</title>
</head>
<!-- new git comment -->
<body>

  <div  class="control_container">

   <div class="selectors">
    <label>Month: </label>
    <select id="select_month" name="monthselect">
      <option name="monthselect" value="1">January</option>
      <option name="monthselect" value="2">February</option>
      <option name="monthselect" value="3">March</option>
      <option name="monthselect" value="4">April</option>
      <option name="monthselect" value="5">May</option>
      <option name="monthselect" value="6">June</option>
      <option name="monthselect" value="7">July</option>
      <option name="monthselect" value="8">August</option>
      <option name="monthselect" value="9">September</option>
      <option name="monthselect" value="10">October</option>
      <option name="monthselect" value="11">November</option>
      <option name="monthselect" value="12">December</option>

    </select>


    <label>Year: </label>

    <select id='select_year' style="">
    </select>
   </div>
     <div class="date_title">
        <span id="monthname">January</span>
        <span id="yearname">2000</span>
     </div>

     <div class="alert_cont">
     <span class="alert" id="alertnoti"></span>
     </div>
  </div>
  <div class="flex_main" >
    <!-- timeframe -->
    <div class="timeframeline firstcolor">
       <p class="start_end"><span>Start</span><br /><span>Time</span></p><hr class="timeframehr"/>

       <div class="dates">
          <div class="date_item" title="6:00am">6:00am</div>
          <div class="date_item" title="6:30am">6:30am</div>
          <div class="date_item" title="7:00am">7:00am</div>
          <div class="date_item" title="7:30am">7:30am</div>
          <div class="date_item" title="8:30am">8:30am</div>
          <div class="date_item" title="9:00am">9:00am</div>
          <div class="date_item" title="9:30am">9:30am</div>
          <div class="date_item" title="10:30am">10:30am</div>
          <div class="date_item" title="11:00am">11:00am</div>
          <div class="date_item" title="11:30am">11:30am</div>
          <div class="date_item" title="12:00pm">12:00pm</div>
          <div class="date_item" title="12:30pm">12:30pm</div>
          <div class="date_item" title="1:00pm">1:00pm</div>
          <div class="date_item" title="1:30pm">1:30pm</div>
          <div class="date_item" title="2:00pm">2:00pm</div>
          <div class="date_item" title="2:30pm">2:30pm</div>
          <div class="date_item" title="3:00pm">3:00pm</div>
          <div class="date_item" title="3:30pm">3:30pm</div>
          <div class="date_item" title="4:00pm">4:00pm</div>
          <div class="date_item" title="4:30pm">4:30pm</div>
          <div class="date_item" title="5:00pm">5:00pm</div>
          <div class="date_item" title="5:30pm">5:30pm</div>
          <div class="date_item" title="6:00pm">6:00pm</div>
          <div class="date_item" title="6:30pm">6:30pm</div>
          <div class="date_item" title="7:00pm">7:00pm</div>
          <div class="date_item" title="7:30pm">7:30pm</div>
          <div class="date_item" title="8:00pm">8:00pm</div>
          <div class="date_item" title="8:30pm">8:30pm</div>
          <div class="date_item" title="9:00pm">9:00pm</div>
          <div class="date_item" title="9:30pm">9:30pm</div>
          <div class="date_item" title="10:00pm">10:00pm</div>
          <div class="date_item" title="10:30pm">10:30pm</div>
          <div class="date_item" title="11:00pm">11:00pm</div>
          <div class="date_item midnight_time" title="11:30pm">11:30pm</div>
       </div>
    </div>
    <div class="timeframeline firstcolor">
        <p class="start_end"><span>End</span><br /><span>Time</span></p><hr class="timeframehr" />
       <div class="dates">
          <div class="date_item" title="6:30am">6:30am</div>
          <div class="date_item" title="7:00am">7:00am</div>
          <div class="date_item" title="7:30am">7:30am</div>
          <div class="date_item" title="8:00am">8:00am</div>
          <div class="date_item" title="9:00am">9:00am</div>
          <div class="date_item" title="9:30am">9:30am</div>
          <div class="date_item" title="10:00am">10:00am</div>
          <div class="date_item" title="11:00am">11:00am</div>
          <div class="date_item" title="11:30am">11:30am</div>
          <div class="date_item" title="12:00pm">12:00pm</div>
          <div class="date_item" title="12:30pm">12:30pm</div>
          <div class="date_item" title="1:00pm">1:00pm</div>
          <div class="date_item" title="1:30pm">1:30pm</div>
          <div class="date_item" title="2:00pm">2:00pm</div>
          <div class="date_item" title="2:30pm">2:30pm</div>
          <div class="date_item" title="3:00pm">3:00pm</div>
          <div class="date_item" title="3:30pm">3:30pm</div>
          <div class="date_item" title="4:00pm">4:00pm</div>
          <div class="date_item" title="4:30pm">4:30pm</div>
          <div class="date_item" title="5:00pm">5:00pm</div>
          <div class="date_item" title="5:30pm">5:30pm</div>
          <div class="date_item" title="6:00pm">6:00pm</div>
          <div class="date_item" title="6:30pm">6:30pm</div>
          <div class="date_item" title="7:00pm">7:00pm</div>
          <div class="date_item" title="7:30pm">7:30pm</div>
          <div class="date_item" title="8:00pm">8:00pm</div>
          <div class="date_item" title="8:30pm">8:30pm</div>
          <div class="date_item" title="9:00pm">9:00pm</div>
          <div class="date_item" title="9:30pm">9:30pm</div>
          <div class="date_item" title="10:00pm">10:00pm</div>
          <div class="date_item" title="10:30pm">10:30pm</div>
          <div class="date_item" title="11:00pm">11:00pm</div>
          <div class="date_item" title="11:30pm">11:30pm</div>
          <div class="date_item midnight_time" title="12:00am">12:00am</div>
       </div>
    </div>
    <!-- end of timeframe -->
    <div class="line pink" id="container_line1">
      <div class="horizontal main_font">
      <p class="h_mini">W</p><p class="h_mini">E</p><p class="h_mini">E</p><p class="h_mini">K</p><br /><p class="h_mini">O</p><p class="h_mini">N</p><p class="h_mini">E</p>
      </div>
      <div class="vertical main_font">WEEK ONE</div>
    </div>
    <div class="week_container" id="containe1">

          <!-- week days start -->

          <!-- day row -->
          <div class="day_container" data-day="monday" data-week="1">
            <div class="day_header" data-class="monday1" data-day="monday" data-week="1"><p>Monday</p></div>

              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check monday1" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item monday1" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item monday1" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item monday1" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item monday1" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item monday1" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item monday1" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item monday1" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item monday1" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item monday1" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item monday1" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item monday1" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item monday1" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item monday1" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item monday1" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item monday1" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item monday1" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item monday1" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item monday1" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item monday1" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item monday1" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item monday1" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item monday1" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item monday1" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item monday1" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item monday1" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item monday1" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item monday1" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item monday1" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item monday1" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item monday1" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item monday1" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item monday1" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->

                <div class="check_item monday1 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>

              </div>

              <!-- end check -->

          </div>
          <!-- day row end -->
          <div class="day_container" data-day="tuesday" data-week="1">
            <div class="day_header" data-class="tuesday1" data-day="tuesday" data-week="1"><p>Tuesday</p></div>

              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check tuesday1" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item tuesday1" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item tuesday1" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item tuesday1" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item tuesday1" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item tuesday1" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item tuesday1" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item tuesday1" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item tuesday1" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item tuesday1" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item tuesday1" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item tuesday1" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item tuesday1" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item tuesday1" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item tuesday1" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item tuesday1" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item tuesday1" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item tuesday1" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item tuesday1" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item tuesday1 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="wednesday" data-week="1">
            <div class="day_header" data-class="wednesday1" data-day="wednesday" data-week="1" ><p>Wednesday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check wednesday1" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item wednesday1" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item wednesday1" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item wednesday1" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item wednesday1" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item wednesday1" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item wednesday1" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item wednesday1" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item wednesday1" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item wednesday1" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item wednesday1" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item wednesday1" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item wednesday1" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item wednesday1" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item wednesday1" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item wednesday1" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item wednesday1" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item wednesday1" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item wednesday1" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item wednesday1 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="thursday"  data-week="1">
            <div class="day_header" data-class="thursday1" data-day="thursday"  data-week="1"><p>Thursday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check thursday1" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item thursday1" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item thursday1" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item thursday1" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item thursday1" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item thursday1" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item thursday1" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item thursday1" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item thursday1" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item thursday1" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item thursday1" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item thursday1" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item thursday1" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item thursday1" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item thursday1" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item thursday1" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item thursday1" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item thursday1" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item thursday1" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item thursday1 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="friday" data-week="1">
            <div class="day_header" data-class="friday1" data-day="friday" data-week="1"><p>Friday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check friday1" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item friday1" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item friday1" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item friday1" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item friday1" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item friday1" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item friday1" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item friday1" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item friday1" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item friday1" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item friday1" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item friday1" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item friday1" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item friday1" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item friday1" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item friday1" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item friday1" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item friday1" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item friday1" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item friday1" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item friday1" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item friday1" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item friday1" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item friday1" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item friday1" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item friday1" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item friday1" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item friday1" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item friday1" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item friday1" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item friday1" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item friday1" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item friday1" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item friday1 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="saturday" data-week="1">
            <div class="day_header" data-class="saturday1" data-day="saturday" data-week="1"><p>Saturday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check saturday1" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item saturday1" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item saturday1" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item saturday1" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item saturday1" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item saturday1" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item saturday1" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item saturday1" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item saturday1" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item saturday1" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item saturday1" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item saturday1" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item saturday1" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item saturday1" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item saturday1" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item saturday1" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item saturday1" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item saturday1" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item saturday1" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item saturday1 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="sunday" data-week="1" >
            <div class="day_header" data-class="sunday1" data-day="sunday" data-week="1"><p>Sunday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check sunday1" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item sunday1" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item sunday1" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item sunday1" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item sunday1" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item sunday1" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item sunday1" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item sunday1" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item sunday1" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item sunday1" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item sunday1" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item sunday1" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item sunday1" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item sunday1" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item sunday1" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item sunday1" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item sunday1" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item sunday1" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item sunday1" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item sunday1 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <!-- week days end -->
    </div>
      <div class="line lightgray">
        <div class="horizontal main_font"><p class="h_mini">W</p><p class="h_mini">E</p><p class="h_mini">E</p><p class="h_mini">K</p><br /><p class="h_mini">T</p><p class="h_mini">W</p><p class="h_mini">O</p></div>
        <div class="vertical main_font">WEEK TWO</div>
      </div>
    <div class="week_container">
                  <!-- week days start -->

          <!-- day row -->
          <div class="day_container" data-day="monday" data-week="2">
            <div class="day_header" data-class="monday2" data-day="monday" data-week="2"><p>Monday</p></div>

              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check monday2" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item monday2" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item monday2" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item monday2" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item monday2" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item monday2" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item monday2" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item monday2" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item monday2" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item monday2" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item monday2" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item monday2" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item monday2" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item monday2" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item monday2" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item monday2" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item monday2" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item monday2" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item monday2" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item monday2" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item monday2" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item monday2" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item monday2" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item monday2" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item monday2" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item monday2" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item monday2" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item monday2" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item monday2" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item monday2" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item monday2" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item monday2" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item monday2" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item monday2 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->

          </div>
          <!-- day row end -->
          <div class="day_container" data-day="tuesday" data-week="2">
            <div class="day_header" data-class="tuesday2" data-day="tuesday" data-week="2"><p>Tuesday</p></div>

              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check tuesday2" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item tuesday2" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item tuesday2" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item tuesday2" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item tuesday2" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item tuesday2" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item tuesday2" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item tuesday2" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item tuesday2" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item tuesday2" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item tuesday2" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item tuesday2" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item tuesday2" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item tuesday2" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item tuesday2" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item tuesday2" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item tuesday2" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                 <!-- new -->

  <div class="check_item tuesday2" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item tuesday2" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item tuesday2 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="wednesday" data-week="2">
            <div class="day_header" data-class="wednesday2" data-day="wednesday" data-week="2"><p>Wednesday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check wednesday2" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item wednesday2" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item wednesday2" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item wednesday2" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item wednesday2" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item wednesday2" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item wednesday2" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item wednesday2" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item wednesday2" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item wednesday2" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item wednesday2" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item wednesday2" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item wednesday2" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item wednesday2" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item wednesday2" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item wednesday2" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item wednesday2" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item wednesday2" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item wednesday2" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item wednesday2 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="thursday" data-week="2">
            <div class="day_header" data-class="thursday2" data-day="thursday" data-week="2"><p>Thursday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check thursday2" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item thursday2" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item thursday2" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item thursday2" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item thursday2" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item thursday2" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item thursday2" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item thursday2" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item thursday2" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item thursday2" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item thursday2" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item thursday2" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item thursday2" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item thursday2" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item thursday2" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item thursday2" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item thursday2" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item thursday2" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item thursday2" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item thursday2 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="friday" data-week="2">
            <div class="day_header" data-class="friday2" data-day="friday" data-week="2"><p>Friday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check friday2" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item friday2" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item friday2" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item friday2" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item friday2" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item friday2" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item friday2" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item friday2" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item friday2" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item friday2" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item friday2" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item friday2" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item friday2" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item friday2" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item friday2" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item friday2" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item friday2" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item friday2" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item friday2" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item friday2" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item friday2" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item friday2" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item friday2" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item friday2" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item friday2" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item friday2" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item friday2" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item friday2" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item friday2" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item friday2" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item friday2" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item friday2" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item friday2" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item friday2 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="saturday" data-week="2">
            <div class="day_header" data-class="saturday2" data-day="saturday" data-week="2"><p>Saturday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check saturday2" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item saturday2" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item saturday2" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item saturday2" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item saturday2" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item saturday2" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item saturday2" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item saturday2" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item saturday2" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item saturday2" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item saturday2" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item saturday2" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item saturday2" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item saturday2" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item saturday2" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item saturday2" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item saturday2" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item saturday2" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item saturday2" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item saturday2 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="sunday" data-week="2">
            <div class="day_header" data-class="sunday2" data-day="sunday" data-week="2"><p>Sunday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check sunday2" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item sunday2" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item sunday2" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item sunday2" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item sunday2" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item sunday2" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item sunday2" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item sunday2" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item sunday2" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item sunday2" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item sunday2" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item sunday2" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item sunday2" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item sunday2" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item sunday2" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item sunday2" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item sunday2" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item sunday2" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item sunday2" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item sunday2 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <!-- week days end -->
    </div>
      <div class="line green">
        <div class="horizontal main_font">
        <p class="h_mini unique_case">W</p><p class="h_mini">E</p><p class="h_mini">E</p><p class="h_mini">K</p><br /><p class="h_mini">T</p><p class="h_mini">H</p><p class="h_mini">R</p><p class="h_mini">E</p><p class="h_mini">E</p>
        </div>
        <div class="vertical main_font">WEEK THREE</div>
      </div>
    <div class="week_container">
                  <!-- week days start -->

          <!-- day row -->
          <div class="day_container" data-day="monday" data-week="3">
            <div class="day_header" data-class="monday3" data-day="monday" data-week="3"><p>Monday</p></div>

              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check monday3" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item monday3" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item monday3" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item monday3" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item monday3" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item monday3" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item monday3" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item monday3" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item monday3" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item monday3" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item monday3" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item monday3" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item monday3" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item monday3" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item monday3" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item monday3" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item monday3" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item monday3" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item monday3" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item monday3" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item monday3" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item monday3" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item monday3" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item monday3" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item monday3" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item monday3" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item monday3" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item monday3" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item monday3" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item monday3" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item monday3" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item monday3" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item monday3" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item monday3 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->

          </div>
          <!-- day row end -->
          <div class="day_container" data-day="tuesday" data-week="3">
            <div class="day_header" data-class="tuesday3" data-day="tuesday" data-week="3"><p>Tuesday</p></div>

              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check tuesday3" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item tuesday3" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item tuesday3" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item tuesday3" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item tuesday3" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item tuesday3" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item tuesday3" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item tuesday3" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item tuesday3" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item tuesday3" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item tuesday3" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item tuesday3" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item tuesday3" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item tuesday3" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item tuesday3" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item tuesday3" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item tuesday3" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>


                <!-- new -->

  <div class="check_item tuesday3" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item tuesday3" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item tuesday3 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="wednesday" data-week="3">
            <div class="day_header" data-class="wednesday3" data-day="wednesday" data-week="3"><p>Wednesday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check wednesday3" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item wednesday3" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item wednesday3" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item wednesday3" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item wednesday3" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item wednesday3" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item wednesday3" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item wednesday3" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item wednesday3" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item wednesday3" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item wednesday3" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item wednesday3" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item wednesday3" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item wednesday3" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item wednesday3" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item wednesday3" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item wednesday3" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item wednesday3" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item wednesday3" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item wednesday3 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="thursday" data-week="3">
            <div class="day_header" data-class="thursday3" data-day="thursday" data-week="3"><p>Thursday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check thursday3" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item thursday3" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item thursday3" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item thursday3" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item thursday3" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item thursday3" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item thursday3" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item thursday3" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item thursday3" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item thursday3" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item thursday3" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item thursday3" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item thursday3" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item thursday3" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item thursday3" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item thursday3" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item thursday3" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item thursday3" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item thursday3" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item thursday3 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="friday" data-week="3">
            <div class="day_header" data-class="friday3" data-day="friday" data-week="3"><p>Friday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check friday3" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item friday3" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item friday3" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item friday3" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item friday3" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item friday3" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item friday3" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item friday3" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item friday3" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item friday3" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item friday3" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item friday3" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item friday3" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item friday3" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item friday3" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item friday3" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item friday3" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item friday3" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item friday3" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item friday3" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item friday3" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item friday3" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item friday3" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item friday3" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item friday3" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item friday3" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item friday3" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item friday3" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item friday3" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item friday3" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item friday3" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item friday3" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item friday3" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item friday3 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="saturday" data-week="3">
            <div class="day_header" data-class="saturday3" data-day="saturday" data-week="3"><p>Saturday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check saturday3" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item saturday3" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item saturday3" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item saturday3" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item saturday3" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item saturday3" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item saturday3" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item saturday3" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item saturday3" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item saturday3" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item saturday3" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item saturday3" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item saturday3" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item saturday3" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item saturday3" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item saturday3" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item saturday3" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>


                <!-- new -->

  <div class="check_item saturday3" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item saturday3" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item saturday3 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="sunday" data-week="3">
            <div class="day_header" data-class="sunday3" data-day="sunday" data-week="3"><p>Sunday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check sunday3" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item sunday3" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item sunday3" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item sunday3" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item sunday3" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item sunday3" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item sunday3" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item sunday3" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item sunday3" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item sunday3" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item sunday3" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item sunday3" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item sunday3" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item sunday3" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item sunday3" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item sunday3" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item sunday3" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item sunday3" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item sunday3" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item sunday3 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <!-- week days end -->
    </div>
      <div class="line darkgray">
        <div class="horizontal main_font"><p class="h_mini ">W</p><p class="h_mini">E</p><p class="h_mini">E</p><p class="h_mini">K</p><br /><p class="h_mini">F</p><p class="h_mini">O</p><p class="h_mini">U</p><p class="h_mini">R</p></div>
        <div class="vertical main_font">WEEK FOUR</div>
      </div>
    <div class="week_container">
          <!-- week days start -->

          <!-- day row -->
          <div class="day_container" data-day="monday" data-week="4">
            <div class="day_header" data-class="monday4" data-day="monday" data-week="4"><p>Monday</p></div>

              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check monday4" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item monday4" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item monday4" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item monday4" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item monday4" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item monday4" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item monday4" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item monday4" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item monday4" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item monday4" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item monday4" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item monday4" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item monday4" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item monday4" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item monday4" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item monday4" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item monday4" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item monday4" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item monday4" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item monday4" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item monday4" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item monday4" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item monday4" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item monday4" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item monday4" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item monday4" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item monday4" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item monday4" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item monday4" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item monday4" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item monday4" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item monday4" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item monday4" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item monday4 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->

          </div>
          <!-- day row end -->
          <div class="day_container" data-day="tuesday" data-week="4">
            <div class="day_header" data-class="tuesday4" data-day="tuesday" data-week="4"><p>Tuesday</p></div>

              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check tuesday4" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item tuesday4" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item tuesday4" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item tuesday4" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item tuesday4" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item tuesday4" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item tuesday4" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item tuesday4" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item tuesday4" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item tuesday4" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item tuesday4" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item tuesday4" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item tuesday4" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item tuesday4" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item tuesday4" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item tuesday4" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item tuesday4" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item tuesday4" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item tuesday4" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item tuesday4 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="wednesday" data-week="4">
            <div class="day_header" data-class="wednesday4" data-day="wednesday" data-week="4"><p>Wednesday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check wednesday4" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item wednesday4" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item wednesday4" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item wednesday4" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item wednesday4" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item wednesday4" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item wednesday4" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item wednesday4" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item wednesday4" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item wednesday4" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item wednesday4" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item wednesday4" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item wednesday4" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item wednesday4" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item wednesday4" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item wednesday4" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item wednesday4" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>


                <!-- new -->

  <div class="check_item wednesday4" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item wednesday4" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item wednesday4 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="thursday" data-week="4">
            <div class="day_header" data-class="thursday4" data-day="thursday" data-week="4"><p>Thursday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check thursday4" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item thursday4" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item thursday4" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item thursday4" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item thursday4" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item thursday4" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item thursday4" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item thursday4" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item thursday4" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item thursday4" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item thursday4" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item thursday4" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item thursday4" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item thursday4" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item thursday4" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item thursday4" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item thursday4" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item thursday4" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item thursday4" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item thursday4 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="friday" data-week="4">
            <div class="day_header" data-class="friday4" data-day="friday" data-week="4"><p>Friday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check friday4" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item friday4" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item friday4" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item friday4" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item friday4" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item friday4" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item friday4" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item friday4" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item friday4" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item friday4" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item friday4" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item friday4" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item friday4" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item friday4" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item friday4" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item friday4" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item friday4" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item friday4" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item friday4" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item friday4" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item friday4" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item friday4" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item friday4" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item friday4" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item friday4" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item friday4" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item friday4" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item friday4" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item friday4" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item friday4" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item friday4" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item friday4" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item friday4" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item friday4 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="saturday" data-week="4">
            <div class="day_header" data-class="saturday4" data-day="saturday" data-week="4"><p>Saturday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check saturday4" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item saturday4" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item saturday4" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item saturday4" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item saturday4" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item saturday4" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item saturday4" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item saturday4" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item saturday4" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item saturday4" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item saturday4" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item saturday4" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item saturday4" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item saturday4" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item saturday4" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item saturday4" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item saturday4" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item saturday4" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item saturday4" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item saturday4 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="sunday" data-week="4">
            <div class="day_header" data-class="sunday4" data-day="sunday" data-week="4"><p>Sunday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check sunday4" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item sunday4" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item sunday4" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item sunday4" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item sunday4" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item sunday4" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item sunday4" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item sunday4" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item sunday4" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item sunday4" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item sunday4" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item sunday4" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item sunday4" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item sunday4" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item sunday4" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item sunday4" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item sunday4" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item sunday4" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item sunday4" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item sunday4 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <!-- week days end -->

    </div>




    <!-- the hidden week -->




        <div class="line darkgray hidden" id="five_continerline">
        <div class="horizontal main_font"><p class="h_mini ">W</p><p class="h_mini">E</p><p class="h_mini">E</p><p class="h_mini">K</p><br /><p class="h_mini">F</p><p class="h_mini">I</p><p class="h_mini">V</p><p class="h_mini">E</p></div>
        <div class="vertical main_font">WEEK FIVE</div>
      </div>
    <div class="week_container hidden" id="five_continer">
          <!-- week days start -->

          <!-- day row -->
          <div class="day_container" data-day="monday" data-week="5">
            <div class="day_header" data-class="monday5" data-day="monday" data-week="5"><p>Monday</p></div>

              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check monday5" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item monday5" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item monday5" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item monday5" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item monday5" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item monday5" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item monday5" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item monday5" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item monday5" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item monday5" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item monday5" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item monday5" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item monday5" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item monday5" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item monday5" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item monday5" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item monday5" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                <!-- new -->

  <div class="check_item monday5" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item monday5" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item monday5" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item monday5" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item monday5" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item monday5" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item monday5" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item monday5" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item monday5" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item monday5" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item monday5" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item monday5" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item monday5" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item monday5" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item monday5" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item monday5" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item monday5 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->

          </div>
          <!-- day row end -->
          <div class="day_container" data-day="tuesday" data-week="5">
            <div class="day_header" data-class="tuesday5" data-day="tuesday" data-week="5"><p>Tuesday</p></div>

              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check tuesday5" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item tuesday5" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item tuesday5" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item tuesday5" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item tuesday5" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item tuesday5" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item tuesday5" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item tuesday5" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item tuesday5" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item tuesday5" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item tuesday5" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item tuesday5" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item tuesday5" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item tuesday5" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item tuesday5" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item tuesday5" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item tuesday5" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                 <!-- new -->

  <div class="check_item tuesday5" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item tuesday5" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item tuesday5 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="wednesday" data-week="5">
            <div class="day_header" data-class="wednesday5" data-day="wednesday" data-week="5"><p>Wednesday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check wednesday5" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item wednesday5" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item wednesday5" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item wednesday5" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item wednesday5" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item wednesday5" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item wednesday5" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item wednesday5" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item wednesday5" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item wednesday5" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item wednesday5" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item wednesday5" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item wednesday5" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item wednesday5" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item wednesday5" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item wednesday5" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item wednesday5" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                   <!-- new -->

  <div class="check_item wednesday5" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item wednesday5" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item wednesday5 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="thursday" data-week="5">
            <div class="day_header" data-class="thursday5" data-day="thursday" data-week="5"><p>Thursday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check thursday5" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item thursday5" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item thursday5" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item thursday5" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item thursday5" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item thursday5" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item thursday5" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item thursday5" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item thursday5" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item thursday5" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item thursday5" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item thursday5" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item thursday5" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item thursday5" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item thursday5" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item thursday5" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item thursday5" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>
                  <!-- new -->

  <div class="check_item thursday5" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item thursday5" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item thursday5 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="friday" data-week="5">
            <div class="day_header" data-class="friday5" data-day="friday" data-week="5"><p>friday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check friday5" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item friday5" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item friday5" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item friday5" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item friday5" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item friday5" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item friday5" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item friday5" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item friday5" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item friday5" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item friday5" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item friday5" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item friday5" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item friday5" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item friday5" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item friday5" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item friday5" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                   <!-- new -->

  <div class="check_item friday5" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item friday5" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item friday5" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item friday5" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item friday5" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item friday5" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item friday5" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item friday5" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item friday5" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item friday5" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item friday5" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item friday5" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item friday5" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item friday5" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item friday5" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item friday5" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item friday5 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="saturday" data-week="5">
            <div class="day_header" data-class="saturday5" data-day="saturday" data-week="5"><p>Saturday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check saturday5" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item saturday5" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item saturday5" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item saturday5" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item saturday5" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item saturday5" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item saturday5" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item saturday5" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item saturday5" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item saturday5" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item saturday5" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item saturday5" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item saturday5" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item saturday5" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item saturday5" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item saturday5" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item saturday5" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                 <!-- new -->

  <div class="check_item saturday5" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item saturday5" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item saturday5 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <div class="day_container" data-day="sunday" data-week="5">
            <div class="day_header" data-class="sunday5" data-day="sunday" data-week="5"><p>Sunday</p></div>
              <!-- check item -->
               <div class="check_container">

                <div class="check_item st1_check sunday5" data-day="" data-start="6:00am" title="6:00am 6:30am"></div>
                <div class="check_item sunday5" data-day=""  data-start="6:30am" title="6:30am 7:00am"></div>
                <div class="check_item sunday5" data-day=""  data-start="7:00am" title="7:00am 7:30am"></div>
                <div class="check_item sunday5" data-day=""  data-start="7:30am" title="7:30am 8:00am"></div>
                <div class="check_item sunday5" data-day=""  data-start="8:30am" title="8:30am 9:00am"></div>
                <div class="check_item sunday5" data-day=""  data-start="9:00am" title="9:00am 9:30am"></div>
                <div class="check_item sunday5" data-day=""  data-start="9:30am" title="9:30am 10:00am"></div>
                <div class="check_item sunday5" data-day=""  data-start="10:30am" title="10:30am 11:00am"></div>
                <div class="check_item sunday5" data-day=""  data-start="11:00am" title="11:00am 11:30am"></div>
                <div class="check_item sunday5" data-day=""  data-start="11:30am" title="11:30am 12:00pm"></div>
                <div class="check_item sunday5" data-day=""  data-start="12:00pm" title="12:00pm 12:30pm"></div>
                <div class="check_item sunday5" data-day=""  data-start="12:30pm" title="12:30pm 1:00pm"></div>
                <div class="check_item sunday5" data-day=""  data-start="1:00pm" title="1:00pm 1:30pm"></div>
                <div class="check_item sunday5" data-day=""  data-start="1:30pm" title="1:30pm 2:pm"></div>
                <div class="check_item sunday5" data-day=""  data-start="2:00pm" title="2:00pm 2:30pm"></div>
                <div class="check_item sunday5" data-day=""  data-start="2:30pm" title="2:30pm 3:00pm"></div>
                <div class="check_item sunday5" data-day=""  data-start="3:00pm" title="3:00pm 3:30pm"></div>

                    <!-- new -->

  <div class="check_item sunday5" data-day=""  data-start="3:30pm" title="3:30pm 4:00pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="4:00pm" title="4:00pm 4:30pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="4:30pm" title="4:30pm 5:00pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="5:00pm" title="5:00pm 5:30pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="5:30pm" title="5:30pm 6:00pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="6:00pm" title="6:00pm 6:30pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="6:30pm" title="6:30pm 7:00pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="7:00pm" title="7:00pm 7:30pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="7:30pm" title="7:30pm 8:00pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="8:00pm" title="8:00pm 8:30pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="8:30pm" title="8:30pm 9:00pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="9:00pm" title="9:00pm 9:30pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="9:30pm" title="9:00pm 10:00pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="10:00pm" title="10:00pm 10:30pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="10:30pm" title="10:30pm 11:00pm"></div>
  <div class="check_item sunday5" data-day=""  data-start="11:00pm" title="11:00pm 11:30pm"></div>
              <!-- new -->
                <div class="check_item sunday5 midnight" data-day=""  data-start="11:30pm" title="11:30pm 12:00am"></div>
              </div>

              <!-- end check -->
          </div>
          <!-- week days end -->

    </div>

      <!-- show more btn -->
    <div class="line arrowbtn" id="plus_btn">
      <i id="right_arrow" class="fa fa-arrow-circle-right" style="font-size:24px"></i>
      <i id="left_arrow" class="fa fa-arrow-circle-left hidden" style="font-size:24px"></i>
      </div>
    <!-- btn -->
    <!-- the hidden week -->




  </div>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/calander.js"></script>


</body>
</html>
