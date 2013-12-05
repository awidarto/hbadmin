<?php
use Jenssegers\Mongodb\Model as Eloquent;

class Patient extends Eloquent {

    protected $collection = 'patients';

}