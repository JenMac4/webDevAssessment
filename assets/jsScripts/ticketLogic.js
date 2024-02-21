const eventPrice = <?php echo $eventPrice; ?>;
    console.log("hello");

    const totalTicketPrice = () => {

        //ten is for radix
        const numOfTickets = parseInt(document.getElementById("dropdown").value, 10);
        console.log(eventPrice);
        let totalPrice = numOfTickets * eventPrice;
        document.getElementById("fullPrice").value = totalPrice;
    };
