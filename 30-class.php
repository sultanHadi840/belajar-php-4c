<?php

Class Person{
    // property

    public string $name;

    public string $address;

    // method
    public function sayHello(string $name){
        // halo nama kamu adalah: wuhya
        echo "Halo nama kamu adalah: $name alamat di $this->address";
    }
}

// intence sebuah class ke dalam object
$mahasiswa = new Person();
// ubah property
$mahasiswa->address = "Mars";
// memanggil function
$mahasiswa->sayHello("Brock Lesnar");