function hitung(pilih)
{
    let bil1 = document.getElementById('x').value;
    let bil2 = document.getElementById('y').value;
    bil1= parseInt(bil1);
    bil2 = parseInt(bil2);
    if (pilih == 'Penjumlahan'){
        document.getElementById('hasil').value = bil1 + bil2;
    }
    else if(pilih == 'Pengurangan'){
        document.getElementById('hasil').value = bil1 - bil2;
    }
    else if(pilih == 'Perkalian'){
        document.getElementById('hasil').value = bil1 * bil2;
    }
    else {
        document.getElementById('hasil').value = bil1 / bil2;
    }
    document.getElementById('hasil');
}


