<?php

function getEvents($date = ''){ 
    $date = $date?$date:date("Y-m-d"); 
     
    $eventListHTML = '<h2 class="sidebar__heading">'.date("l", strtotime($date)).'<br>'.date("F d", strtotime($date)).'</h2>'; 
     
    // Fetch events based on the specific date 
    global $db; 
    $result = $db->query("SELECT title FROM events WHERE date = '".$date."' AND status = 1"); 
    if($result->num_rows > 0){ 
        $eventListHTML .= '<ul class="sidebar__list">'; 
        $eventListHTML .= '<li class="sidebar__list-item sidebar__list-item--complete">Events</li>'; 
        $i=0; 
        while($row = $result->fetch_assoc()){ $i++; 
            $eventListHTML .= '<li class="sidebar__list-item"><span class="list-item__time">'.$i.'.</span>'.$row['title'].'</li>'; 
        } 
        $eventListHTML .= '</ul>'; 
    } 
    echo $eventListHTML; 
}
?>