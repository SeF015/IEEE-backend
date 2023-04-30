<?php

session_start();
session_unset();
session_destroy();

//going back to the front page
header("location: ../login.php?error=none");