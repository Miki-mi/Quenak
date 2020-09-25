<?php

try {
	$conn = new mysqli('localhost', 'root', '', 'quenak');
} catch (Exception $e) {
	echo 'Connection failed';
}