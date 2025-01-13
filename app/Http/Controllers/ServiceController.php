<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Oil & Gas Page
    public function oilGas()
    {
        return view('oil-gas'); // Loads the oil-gas.blade.php view
    }

    // Base Oil Page
    public function baseOil()
    {
        return view('base-oil'); // Loads the base-oil.blade.php view
    }

    // Premium Motor Spirit (PMS) Page
    public function premiumMotorSpirit()
    {
        return view('premium-motor-spirit'); // Loads the premium-motor-spirit.blade.php view
    }

    // Automotive Gas Oil (AGO) Page
    public function automotiveGasOil()
    {
        return view('automotive-gas-oil'); // Loads the automotive-gas-oil.blade.php view
    }

    // High-Density Polyethylene (HDPE) Page
    public function highDensityPolyethylene()
    {
        return view('high-density-polyethylene'); // Loads the high-density-polyethylene.blade.php view
    }

    // Low-Density Polyethylene (LDPE) Page
    public function lowDensityPolyethylene()
    {
        return view('low-density-polyethylene'); // Loads the low-density-polyethylene.blade.php view
    }

    // Polypropylene (PP) Page
    public function polypropylene()
    {
        return view('polypropylene'); // Loads the polypropylene.blade.php view
    }

    // Polyethylene Terephthalate (PET) Page
    public function polyethyleneTerephthalate()
    {
        return view('polyethylene-terephthalate'); // Loads the polyethylene-terephthalate.blade.php view
    }

    // Blow Molding Accessories Page
    public function blowMolding()
    {
        return view('blow-molding'); // Loads the blow-molding.blade.php view
    }

    // Low Pour Fuel Oil (LPFO) Page
    public function lowPourFuelOil()
    {
        return view('low-pour-fuel-oil'); // Loads the low-pour-fuel-oil.blade.php view
    }

    // Marine Diesel Oil (MDO) Page
    public function marineDieselOil()
    {
        return view('marine-diesel-oil'); // Loads the marine-diesel-oil.blade.php view
    }

    // Recycling Machines Page
    public function recyclingMachine()
    {
        return view('recycling-machine'); // Loads the recycling-machine.blade.php view
    }

    // Used Lubricants Page
    public function usedLubricants()
    {
        return view('used-lubricants'); // Loads the used-lubricants.blade.php view
    }
}