<?php

class Photo{
    private $photoFile = '../public/assets/images/photo.json';  # Declares a private property $photoFile that holds the path to the JSON file


    public function getPhotos(){
        if(file_exists($this->photoFile)){
            $data = file_get_contents($this->photoFile);
            return json_decode($data, true) ?? [];   # Converts the JSON to an associative array and returns it; if empty, returns an empty array
        }
    }

    public function addPhoto($photoName){
        $photos = $this->getPhotos(); # Gets the current list of photos using getPhotos method
        $photos[] = $photoName; # Adds the new photo name to the array of photos
        file_put_contents($this->photoFile, json_encode($photos)); # Converts the array back to JSON and saves it to the file
    }
}
?>