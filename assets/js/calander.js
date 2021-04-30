const ajax_selectedmonth = document.querySelector("#select_month");
const ajax_selectedyear = document.querySelector("#select_year");
const ajax_headers = document.querySelectorAll(".day_header");
const ajax_checkboxs = document.querySelectorAll(".check_item");





const get_resrved = (month)=>{


}
const ajax_postData = (url = '', data = {}) => {
	   console.log(data);


};


const backdefault = ()=>{

  ajax_headers.forEach( (r_head)=>{
    if (r_head.classList.contains('avail')){
    r_head.classList.remove('avail');
    r_head.removeAttribute('data-date');
    r_head.removeAttribute('title');
    }
  });
  ajax_checkboxs.forEach( (r_check)=>{
    if (r_check.classList.contains('avail_date')){
    r_check.classList.remove('avail_date');
    r_check.removeAttribute('data-date');
    let old_title = r_check.getAttribute('title').split(',')[0];
    r_check.setAttribute('title', old_title);
    r_check.classList.remove('reserved_date');
    }

  });

}

const get_month_array = ()=> {
  let found_resrved = 0;
  fetch('inc/reserve.php?month=' + ajax_selectedmonth.value).then(
    (jdata)=>{
      return jdata.json();
    }
  ).then(
    (data)=> {
     let allreserved= data.data;
     backdefault();
     fetch('inc/calander.php', {
     method: 'POST',
     credentials: 'same-origin',
     headers: {
       'Content-Type': 'application/json',
     },
     // Body data type must match "Content-Type" header
     body: JSON.stringify({month:ajax_selectedmonth.value, year:ajax_selectedyear.value}),
   }).then(
     (tdata)=> { return tdata.json(); }
   ).then(
     (newData)=>{ return  newData;}
   ).then(
       (req)=>{
         if (req.code == 200){
           let res_days = req.data.days;

           for ( let cindex=0; cindex < ajax_headers.length; cindex++){
             res_days.forEach( (day_obj)=>{
               if (ajax_headers[cindex].getAttribute('data-week') == day_obj['dayweek'] && ajax_headers[cindex].getAttribute('data-day') == day_obj['dayname']){
                  ajax_headers[cindex].setAttribute('data-date', day_obj['daydate']);
                  ajax_headers[cindex].setAttribute('title', day_obj['daydate']);
                  let avail_dayclass = ajax_headers[cindex].getAttribute('data-class');
                  let avail_days = document.querySelectorAll(`.${avail_dayclass}`);
                  avail_days.forEach( (d)=>{
                    d.classList.add('avail_date');
                    d.setAttribute('data-date', day_obj['daydate']);
                    let newtitle = d.getAttribute('title') + ',' + day_obj['daydate'];
                    d.setAttribute('title', newtitle);
                    if (allreserved.length >0 && found_resrved <= allreserved.length){

                      allreserved.forEach( (check_reseve)=>{
                        if (check_reseve['day'] == day_obj['daydate'] && check_reseve['time'] == d.getAttribute('data-start')){
                          d.classList.add('reserved_date');
                          found_resrved += 1
                        };
                      });

                    }
                  });
                  ajax_headers[cindex].classList.add('avail');

               };

             })
           }
        } else {
           console.log('error');
        }
       }
     )


    }
  );




}



get_month_array();

ajax_selectedmonth.addEventListener('change', get_month_array);
ajax_selectedyear.addEventListener('change', get_month_array);


let alertcontainer = document.querySelector("#alertnoti");

/* reserve new date  */
const reserveit = (event)=>{
  let isavail = event.target.classList.contains('avail_date') && event.target.classList.contains('reserved_date') == false;
  let reserve_time = event.target.getAttribute('data-start');
  let reserve_day = event.target.getAttribute('data-date');
  if (isavail) {

    fetch('inc/reserve.php', {
    method: 'POST',
    credentials: 'same-origin',
    headers: {
      'Content-Type': 'application/json',
    },
    // Body data type must match "Content-Type" header
    body: JSON.stringify({rtime:reserve_time, rday:reserve_day}),
  }).then(
    (rdata) =>{ return rdata.json(); }
  ).then(
    (req)=> {
      let res = req;
      alertcontainer.innerText = res;
      alertcontainer.classList.add('success');
      alertcontainer.classList.remove('danger');
      get_month_array();
    }
  );
  } else {
    alertcontainer.innerText = 'This Date Note Avail Please Select another one';
    alertcontainer.classList.remove('success');
    alertcontainer.classList.add('danger');

  }
}
ajax_checkboxs.forEach( (check)=>{
  check.addEventListener('click', reserveit)
});
//let req = await ajax_postData('inc/calander.php', {month:ajax_selectedmonth.value, year:ajax_selectedyear.value});
