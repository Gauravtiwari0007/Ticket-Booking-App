<h1 align="center">Ticket Details</h1>
<br>

<style>
.ticket {
    font-family: Montserrat, sans-serif;
    display: flex;
    justify-content: center;
    margin-top: 100px;
}

.ticketdesign {
    background: linear-gradient(to bottom, #FFC107 0%, #FFC107 19%, #d9d9d9 19%, #d9d9d9 100%);
    height: auto;
    padding: 2em;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    border-radius: 8px;
    width: 44em;
}

h1 {
    font-size: 40px;
    margin-top: 0;
    font-family: 'Times New Roman', serif;
}

h2, h3 {
    font-size: 20px;
    margin-top: 0;
    font-family: 'Times New Roman', serif;
    color: black;
}

span {
    color: black;
}

#options {
    text-align: center;
}

.printable {
    padding-left: 10px;
    text-align: left;
}
</style>

<?php
include 'connect.php';
$pid = $_GET['pid'];
$sel = "SELECT * FROM `transactions` WHERE `T_No.` = $pid";
$rs = $connect->query($sel);
while ($row = $rs->fetch_assoc()) {
?>

<div class="ticket" id="printable">
    <div class="ticketdesign">
        <h1 align="left"><b>Smart-TICKET</b> &nbsp;&nbsp;&nbsp;&nbsp; Booking ID: <?php echo $row['T_No.'] ?></h1>
        <div class="title"><br>
            <h1 align="center"><span><?php echo $row['source'] ?> &nbsp; To &nbsp; <?php echo $row['dest'] ?>  </span></h1>
            <h2 align="left"><span>NAME: &nbsp; <?php echo $row['Name'] ?></span></h2>
            <h2 align="left"><span>DATE & TIME: &nbsp; <?php echo $row['Date'] ?></span></h2>
            <h2 align="left"><span>CLASS: &nbsp; <?php echo $row['Class'] ?></span></h2>
            <h2 align="left"><span>TYPE: &nbsp; <?php echo $row['Type'] ?></span></h2>
            <h2 align="left"><span>NO. OF PASSENGERS: &nbsp; <?php echo $row['NoOfpass'] ?> </span></h2>
            <h2 align="left"><span>AMOUNT: &nbsp; ₹<?php echo $row['Amt'] ?> </span></h2>
            <h2 align="left"><span>ROUTE: &nbsp; <?php echo $row['Route'] ?> </span></h2>
            <h2 align="center"><span>WISH YOU A HAPPY & SAFE JOURNEY</span></h2>
        </div>
    </div>
</div>

<?php } ?>
