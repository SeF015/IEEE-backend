<?php
echo round((disk_total_space("C:")+disk_total_space("D:"))/pow(1024,4), 2) . " Terabytes<br>";