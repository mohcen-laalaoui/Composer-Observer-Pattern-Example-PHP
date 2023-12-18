<?php

// Define an interface for Observers
interface Observe
{
    public function handl();
}

// Define an interface for Subjects
interface Subject
{
    public function attach($obs);
    public function detach($index);
}

// Implement the Subject interface in the User class
class User implements Subject
{
    public $email;
    public $observer = []; // Array to store attached observers

    // Method to change the email and notify attached observers
    public function changEmail($email)
    {
        $this->email = $email;
        $this->notifyObservers(); // Notify attached observers when the email changes
    }

    // Method to attach an observer
    public function attach($obs)
    {
        array_push($this->observer, $obs);
    }

    // Method to detach an observer by index
    public function detach($index)
    {
        unset($this->observer[$index]);
    }

    // Method to notify all attached observers
    public function notifyObservers()
    {
        foreach ($this->observer as $obs) {
            $obs->handl();
        }
    }
}

// Implement the Observer interface in the Notifier class
class Notifier implements Observe
{
    // Method to handle the notification when the email changes
    public function handl()
    {
        var_dump("Email has been changed successfully");
    }
}

// Implement the Observer interface in the Logger class
class Logger implements Observe
{
    // Method to handle the notification when the email changes
    public function handl()
    {
        echo "Email changed";
    }
}

// Create a User object
$user = new User();

// Attach a Notifier and a Logger as observers to the User
$user->attach(new Notifier());
$user->attach(new Logger());

// Change the email, triggering the notification to attached observers
$user->changEmail("name@gmail.com");
