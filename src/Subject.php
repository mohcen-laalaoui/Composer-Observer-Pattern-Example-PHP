<?php
namespace app;
interface Subject
{
    public function attach($obs);
    public function detach($index);
}