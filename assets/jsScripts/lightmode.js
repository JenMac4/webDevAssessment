document.addEventListener("DOMContentLoaded", () => {

    //BRING VARIABLES INTO JS FOR PROCESSING
    const switchLatch = document.querySelector(".switchLatch");
    const body = document.body;
    const switchBackground = document.querySelector(".switch");
    const menuItems = document.getElementsByClassName("menu-item");
    const subHeading = document.querySelector(".banner-text-sub");
    const subSection1 = document.querySelector(".sub-section-1");
    const subSection2 = document.querySelector(".sub-section-2");

    const cardSubHeading = document.querySelector(".act-bio-data");
    const actPrices = document.getElementsByClassName("act-price")
    const actDates = document.getElementsByClassName("act-date")

    //jan code
    const lightmodeContainer = document.getElementById("lightmode")
    
    
    //LOGIC FOR SWITCHING COLOURS
    const switchMovement = () => {
    
        //HOME PAGE ELEMENTS
        switchLatch.classList.toggle("active");
        switchBackground.classList.toggle("change");
        body.classList.toggle("lightmode");
        
        //loping through menu-items to add classList
        Array.from(menuItems).forEach(element => {
            // console.log("checking")
            element.classList.toggle("menu-item-lightmode");
        });

        //CONDITIONAL CHECKING FOR THINGS JUST ON HOMEPAGE
        if(subHeading && subSection1 && subSection2) {
            subHeading.classList.toggle("darkText");
            //can the below two be combined into one line in our js or css file
            subSection1.classList.toggle("darkLine");
            subSection2.classList.toggle("darkLine");
            // subHeading.classList.toggle("darkText");
        }
        
        //CONDITIONAL CHECKING FOR THINGS JUST ON GIGLISTING PAGE
        if(actDates && actPrices){
            
            const actDateArray = Array.from(actDates)
            actDateArray.forEach(actDate => {
                actDate.style.color = "#212427"

            })
            
            const actPriceArray = Array.from(actPrices)
            actPriceArray.forEach(actPrice => {
                actPrice.style.color = "#212427"

            })
            // console.log("dark text working")
        }
    
    
        
    }
    
    // switchLatch.addEventListener("click", switchMovement);

    // //NEW JS CODE FROM JANUARY BELOW HERE
    // switchBackground.addEventListener("click", switchMovement);

    //only one event listener works at a time, grab parent element to facilitate change
    lightmodeContainer.addEventListener("click", () => {

        //event is deprecated, to be updated
        if( event.target.classList.contains("switchLatch")){
            switchMovement();
        }
    })

})    




