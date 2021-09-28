#include <iostream>
#include <cmath>
#include <stdio.h>
 
using namespace std;
int kali (int m,int n)
{
 
	int i,hasil =0;
	for(i=1;i<=abs(n);i++)
		hasil+=m;
		if(n<0)
		{
			return(-hasil);
		}
		else
		{
			return(hasil);
		}
}
int kali2(int a, int b){
 if(b==0)
 return 1;
 else if(b==1)
 return a;
 else
 return a+kali2(a,b-1);
 }
		
int main()
{
	int a,b;
 
	cout <<"Masukkan bilangan : ";
	cin >> a;
	cout <<"Akan dikali dengan : ";
	cin >> b;
	
	cout << "IIteratif ="<<kali(a,b) << endl;
	cout << "Rekursif  ="<<kali2(a,b) << endl;
}
