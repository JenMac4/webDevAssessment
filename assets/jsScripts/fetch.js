

            //BRING ELEMENTS INTO JS

            const janButton = document.getElementById("janButton");
            const febButton = document.getElementById("febButton");
            const marButton = document.getElementById("marButton");
            const allButton = document.getElementById("selectAll");
            
            //event listeners for buttons

            allButton.addEventListener("click", () => {
                console.log("all button")
                const gigListingCards = document.querySelectorAll(".gig-listing-card")
                gigListingCards.forEach(gigListingCard => {
                    
                    gigListingCard.style.display= "flex"
                }
              );
            })


            //LOGIC FOR SELECTING EACH MONTH
            janButton.addEventListener("click", () => {

                const gigListingCards = document.querySelectorAll(".gig-listing-card");


                gigListingCards.forEach(gigListingCard => {

                    const performanceMonth = gigListingCard.getAttribute("event_month")
                    if(performanceMonth !== "January"){
                        console.log(performanceMonth)
                        gigListingCard.style.display = "none";
                    }
                    if(performanceMonth == "January"){
                        console.log(performanceMonth)
                        gigListingCard.style.display = "flex";
                    }

                })
                
            })

            febButton.addEventListener("click", () => {

                const gigListingCards = document.querySelectorAll(".gig-listing-card");


                gigListingCards.forEach(gigListingCard => {

                    const performanceMonth = gigListingCard.getAttribute("event_month")
                    if(performanceMonth !== "February"){
                        console.log(performanceMonth)
                        gigListingCard.style.display = "none";
                    }
                    if(performanceMonth == "February"){
                        console.log(performanceMonth)
                        gigListingCard.style.display = "flex";
                    }


                })
                
            })

            marButton.addEventListener("click", () => {

                const gigListingCards = document.querySelectorAll(".gig-listing-card");


                gigListingCards.forEach(gigListingCard => {

                    const performanceMonth = gigListingCard.getAttribute("event_month")
                    if(performanceMonth !== "March"){
                        console.log(performanceMonth)
                        gigListingCard.style.display = "none";
                    }
                    if(performanceMonth == "March"){
                        console.log(performanceMonth)
                        gigListingCard.style.display = "flex";
                    }

                })
                
            })
