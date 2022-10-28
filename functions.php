<?php 
// Include the database config file 
include_once 'dbConfig.php'; 
//Get available dates
$get_availability ="SELECT available from bookings";
$result = mysqli_query($db,$get_availability);
/* 
 * Load function based on the Ajax request 
 */ 
if(isset($_POST['func']) && !empty($_POST['func'])){ 
    switch($_POST['func']){ 
        case 'getCalender': 
            getCalender($_POST['year'],$_POST['month']); 
            break; 
        case 'getEvents': 
            getEvents($_POST['date']); 
            break; 
        default: 
            break; 
    } 
} 
 
/* 
 * Generate event calendar in HTML format 
 */ 
function getCalender($year = '', $month = ''){ 
    $active_week = date('W');
    $active_year = date('Y', strtotime('today'));
    $active_month = date('F', strtotime('1 Jan  '. $active_year .'+' . $active_week . ' weeks'));
    //Days (Mon October 22)
    $sun = date('D F j', strtotime('Jan 2 + '.$active_week.' weeks')); //Sunday
    $sat = date('D F j', strtotime($sun.' -1 day')); //Saturday
    $fri = date('D F j', strtotime($sun.' -2 days')); //Friday
    $thu = date('D F j', strtotime($sun.' -3 days')); //Thursday
    $wed = date('D F j', strtotime($sun.' -4 days')); //Wednessday
    $tue = date('D F j', strtotime($sun.' -5 days')); //Tuesday
    $mon = date('D F j', strtotime($sun.' -6 days')); //Monday
?> 
    <main class="calendar-contain"> 
        <div class="message">

        </div>
        <section class="calendar">
            <h2>Bookings For <?php echo $active_month ?></h2>
            <?php
                for($row = 0; $row <49; $row++) {
                    $time_increase = date('H:i', strtotime('7:45 + '. ($row * 15) .'minutes'));
                    if ($row == 0) {
                        echo '     
                        <div class="headers">
                            <div>Hours</div>
                            <div>'.$mon.'</div>
                            <div>'.$tue.'</div>
                            <div>'.$wed.'</div>
                            <div>'.$thu.'</div>
                            <div>'.$fri.'</div>
                            <div>'.$sat.'</div>
                            <div>'.$sun.'</div>
                        </div>
                    ';
                    }else {
                        echo '
                        <div class="data">
                            <div>'.$time_increase.'</div>
                            <div data-time="'.$time_increase.'" data-date="'.$mon.'" class="'.$time_increase.$mon.'"></div>
                            <div data-time="'.$time_increase.'" data-date="'.$tue.'" class="'.$time_increase.$tue.'"></div>
                            <div data-time="'.$time_increase.'" data-date="'.$wed.'" class="'.$time_increase.$wed.'"></div>
                            <div data-time="'.$time_increase.'" data-date="'.$thu.'" class="'.$time_increase.$thu.'"></div>
                            <div data-time="'.$time_increase.'" data-date="'.$fri.'" class="'.$time_increase.$fri.'"></div>
                            <div data-time="'.$time_increase.'" data-date="'.$sat.'" class="'.$time_increase.$sat.'"></div>
                            <div data-time="'.$time_increase.'" data-date="'.$sun.'" class="'.$time_increase.$sun.'"></div>
                        </div>
                        ';
                    }
                }
            ?>
        </section>
        <form action="" method="post" id="display-bookings">
            <input type="submit" name="submit">
        </form>
    </main> 
    <!-- ADD THE SELECTED CLASS FOR THE BOOKINGS -->
    <?php
        include "./dbConfig.php";
        $get_all = "SELECT available FROM bookings";
        $get_all_result = mysqli_query($db, $get_all);
        $data = array();


        if ($get_all_result->num_rows > 0) {
            // output data of each row
            while($row = $get_all_result->fetch_assoc()) {
                foreach ($row as $date) {
                array_push($data, $date);
                }
            }

            } else {
            echo "0 results";
            }
            $db->close();
        ?>
        <?php
        $count = count($data);
    ?> 
    <script>
        let count = <?php echo $count ?>;
        let data = <?php echo json_encode($data) ?>;
        //iterate through each element in the data array
        for (let i = 0; i <= count; i++) {
        document.getElementsByClassName(data[i])[0].classList.add('selected');
        }
    </script>

    <script>
        let bookings = [];
    jQuery(".calendar").on("click", ".data div", function (e) {
        let booking_details = this.dataset.time + this.dataset.date;
        bookings.push(booking_details);
        console.log(bookings);
        (this).innerHTML = booking_details;
        return bookings;

    });


    //SQL AJAX
    jQuery("#display-bookings").on("submit", function(e) {
				//get all from 
				alert(bookings);
				$.ajax({
					type:"POST",
					url: "send_bookings.php",
					data: {data: bookings},
					success: function(response) {
						$(".message").html(response);
					}
				})
				e.preventDefault();
                
			})
    </script>
<?php 
} 
 
