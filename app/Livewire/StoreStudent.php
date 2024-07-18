<?php

namespace App\Livewire;
use App\Models\student;
use Livewire\Component;
use Livewire\WithFileUploads;


class StoreStudent extends Component
{
   use WithFileUploads;
    public $name;
    public $email;
    public $image;
    public $fetcheddata;
    public function savedate()
    {
        $studentdata=new student;
        $studentdata->name=$this->name;
        $studentdata->email=$this->email;
        $imagename=$this->image->store('photos','public');  //photos is folder name public is default folder inside storage/app/public
        $studentdata->image=$imagename;
        $studentdata->save();
        $this->resetdata();
    }
    public function resetdata()
    {
        $this->reset(['name','email','image']);
    }
    public function render()
    {
        return view('livewire.store-student');
    }
    public function mount()
    {
        $this->fetcheddata=student::all();
    }
}
