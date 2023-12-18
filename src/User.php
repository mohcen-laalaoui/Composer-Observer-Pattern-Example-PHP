<?php

namespace app;

// Define a class User in the 'app' namespace
class User implements Subject
{
    public $email;       // Store the email information in the User object
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

// In this code:
// - The User class is part of the 'app' namespace.
// - It implements the Subject interface, which means it provides implementations for the attach(), detach(), and notifyObservers() methods declared in the interface.
// - The User class represents a subject that observers can watch. It has an email property that can be changed using the changEmail() method.
// - When the email is changed, the notifyObservers() method is called, which, in turn, calls the handl() method on each attached observer.
// - The attach() method adds an observer to the list of observers, and detach() removes an observer by index.
// - This class is designed to be a subject, and observers (e.g., Notifier, Logger) can be attached to it to receive notifications when the email changes.
// - Ensure that the Subject interface is correctly defined and that the class file is located according to your PSR-4 autoloading configuration if you are using Composer.
