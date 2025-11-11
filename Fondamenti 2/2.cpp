// 2. STAMPARE LA TABELLINA DEL 10 BEN FORMATTATA

#include <iostream>
using namespace std;

const int dim = 11;

int main()
{
    int n[dim];
    
    for (int i=0; i<dim; ++i)
        {
            n[i] = 10*i;
        }
        
    for (int i=0; i<dim; ++i)
        {
            cout<<n[i]<<"\t";
        }
    cout<<endl;
    
    return 0;
}