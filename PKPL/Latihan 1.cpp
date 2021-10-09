#include <iostream>
#include <stdlib.h>
using namespace std;

int main (){
	int angkagenap[20];
	
	cout << "Menampilkan Bilangan Genap \n";
	
	for(int i = 0; i< 20; i++){
		angkagenap[i] = rand();
		if(angkagenap[i] %2 == 0){
			cout << angkagenap[i] << ", ";
		}
	}
	
}
