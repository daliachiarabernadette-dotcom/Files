// 1. LEGGERE 10 NUMERI E DETERMINARE IL MASSIMO E IL SUBMASSIMO

#include <iostream>

using namespace std;

const int dim = 10;

int cerca (int n[], int dim);

int main ()
{
    int n[dim];
    
    for (int i=0; i<dim; ++i)
        {
            cout<<"Inserisci un numero: ";
                cin>>n[i];
        }
    
    cerca(n, dim);
    
    
    return 0;
}

int cerca (int n[], int dim)
{
    int max = 0;
    int submax = 0;
    
    for (int i = 0; i < dim; ++i)
        {
             if (n[i] > max)
                {
                      max = n[i];
                }
        }
    cout<<"Il massimo è: "<<max<<endl;
    
    for (int i = 0; i < dim; ++i)
        {
             if (n[i] > submax && n[i] < max)
                {
                      submax = n[i];
                }
        }
    cout<<"Il submassimo è: "<<submax<<endl;
    
}