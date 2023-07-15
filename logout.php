<?php
require 'config/constants.php';

// destroying all session and redirect to home page

session_destroy();
header('location: ' . ROOT_URL);
die();