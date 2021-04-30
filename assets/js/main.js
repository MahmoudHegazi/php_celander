const plusbtn = document.querySelector("#plus_btn");
const continer_five = document.querySelector("#five_continerline");
const container_fivel = document.querySelector("#five_continer");

const container_onel = document.querySelector("#container_line1");
const container_one = document.querySelector("#containe1");

const leftarrow = document.querySelector("#left_arrow");
const rightarrow = document.querySelector("#right_arrow");









let hidden_index = 0;
const toggle_container = ()=> {
  if (hidden_index == 0) {
     continer_five.classList.remove("hidden");
     container_fivel.classList.remove("hidden");
     container_onel.classList.add("hidden");
     container_one.classList.add("hidden");
     leftarrow.classList.remove("hidden");
     rightarrow.classList.add("hidden");
     hidden_index = 1;
  } else {
     continer_five.classList.add("hidden");
     container_fivel.classList.add("hidden");
     container_onel.classList.remove("hidden");
     container_one.classList.remove("hidden");
     leftarrow.classList.add("hidden");
     rightarrow.classList.remove("hidden");
     hidden_index = 0;
  }
}

plusbtn.addEventListener("click", toggle_container);



/* Cal.JS */

  /*  MONTH handle */
  const allheaders = document.querySelectorAll(".day_header");
  const month_selector = document.querySelector("#select_month");
  const monthhead = document.querySelector("#monthname");




  const apply_month = ()=> {
    let selected_month = month_selector.value;
    let month_name = month_selector.options[month_selector.selectedIndex].text;
    monthhead.innerText = month_name;
    allheaders.forEach( (mheader)=> {
       mheader.setAttribute("data-month", selected_month);
    });


  };

  apply_month();
  month_selector.addEventListener("change", apply_month);

  /* YEAR handle */
   const year_selector = document.querySelector("#select_year");
   const yearhead = document.querySelector("#yearname");


    const apply_year = ()=> {
    let selected_year = year_selector.value;
    yearhead.innerText = year_selector.options[year_selector.selectedIndex].text;
    allheaders.forEach( (yheader)=> {
       yheader.setAttribute("data-year", selected_year);
    });

    };

    year_selector.addEventListener("change", apply_year);


   const createyears = ()=> {
   const year_fragment = document.createDocumentFragment();

   for (var i=2000; i<=3000; i++) {
      let newyear = document.createElement("option");
      newyear.setAttribute("value", i);
      newyear.text = i;
      year_fragment.appendChild(newyear);
   };
   year_selector.appendChild(year_fragment);
   return true;
   }



createyears();


// update date
const updatedate = ()=> {
let datenow = new Date();
let current_month = datenow.getMonth() + 1;
let current_year = datenow.getYear();
month_selector.selectedIndex = datenow.getMonth();
let firstyear = year_selector.options[0].value;
for (var y=0; y < year_selector.options.length; y++){
  if (year_selector.options[y].value == datenow.getFullYear()) {
     year_selector.selectedIndex = y;
     break;
     return true;
  } else {
    continue;
  };
};

};


updatedate();
apply_year();
