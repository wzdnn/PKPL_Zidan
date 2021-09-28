#include <iostream>
#include <string>

using namespace std;
int main(){
   int jam1,jam2,jam,men1,men,men2;
   for(int i=0;i<2;i++){
   cout<<"Input Untuk Kasus "<<i+1<<endl;
   cout<<"Jam 1 : ";cin >> jam1;
   cout<<"Menit 1 : ";cin >> men1;
   cout<<"Jam 2 : ";cin >> jam2;
   cout<<"Menit 2 : ";cin >> men2;
   jam=jam2-jam1;
   men=men2-men1;
   cout <<"Selisih Waktu 1 : "<< jam<<" jam "<<men<<" menit" << endl<<endl<<endl;}
   return 0;
}
