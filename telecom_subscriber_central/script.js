//const seeSubscriber = document.querySelector('.see-sub');
//const subListContainer = document.querySelector('.subscriber-list');


//seeSubscriber.addEventListener('click', () =>{

   // if(seeSubscriber.innerHTML === "See subscribers list"){
      //  subListContainer.classList.add('active')
     //   seeSubscriber.innerHTML = "hide subscriber list";
    //}
    // else{
   //     seeSubscriber.innerHTML = "See subscribers list";
   //     subListContainer.classList.remove('active')
   // }

    
//})

const seeSubscriber = document.querySelector('.see-sub');
const subListContainer = document.querySelector('.subscriber-list');

// Set the initial state of the .subscriber-list container
subListContainer.classList.remove('active');

seeSubscriber.addEventListener('click', () => {
    if (seeSubscriber.innerHTML === "See subscribers list") {
        subListContainer.classList.add('active')
        seeSubscriber.innerHTML = "hide subscriber list";
    } else {
        seeSubscriber.innerHTML = "See subscribers list";
        subListContainer.classList.remove('active')
    }
});




