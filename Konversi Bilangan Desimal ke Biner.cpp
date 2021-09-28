#include <iostream>
using namespace std;

void binary(int desimal)
{ 
     int sisa;
     int hasil;
     
     if ( desimal <=1)
     {
        cout<<desimal;
        return;
     }
     sisa = desimal %2;
     hasil = desimal / 2;
     binary(hasil);
     cout<<sisa;
}

int main()
{
    int a;
    cout << "Masukkan Bilangan yang akan dikonversi : ";
    cin>>a;
    cout << a << " dalam biner adalah " ; 
    binary(a);
    cout<<endl;
    return 0;

}

/*

Analsis :
 Mengubah Bilangan Desimal Menjadi Bilangan Biner, Semisal 1 = 0001, 2 = 0010, 3 = 0011.

ALGORITMA Konversi_bilangan_Desimal_Ke_Biner;
{Program Mengkonversi Bilangan Desimal Ke Biner}


DEKLARASI :
     Int sisa , hasil

DESKRIPSI
     //statement akan mengentikan rekursif
     if ( desimal <=1)     
           WRITE  desimal
           return
     end if 
     //memanggil method binary secara rekursif
     hasil <- desimal / 2
     Binary(hasil)
     sisa <- desimal mod 2
     WRITE sisa
     
*/

