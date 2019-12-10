@echo off
cls
:start
php send.php schedule:run
timeout 80
goto start