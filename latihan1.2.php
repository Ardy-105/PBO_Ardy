class Mobil
{
    //ini adalah atribut
    <var> $jumlahroba =4</var>
    <var> $warna = "merah"</var>
    <var> $bahanbakar = "pertamax"</var>
    <var> $harga = 120000000</var>
    <var> $merek = 'A'</var>

        //deklarasi method
        public function statusharga()
        {
            if ($this->harga > 50000000) $status = 'Mahal';
            else $status = 'Murah';
            return $status;
        }
}